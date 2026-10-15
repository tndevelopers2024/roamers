(() => {
  const track = document.querySelector('.home-festive-marquee__track');
  if (!track) return;
  const viewport = track.parentElement;
  const group = track.querySelector('.home-festive-marquee__group');
  if (!group) return;
  const duplicate = group.cloneNode(true);
  duplicate.setAttribute('aria-hidden', 'true');
  duplicate.querySelectorAll('a').forEach(link => link.tabIndex = -1);
  track.append(duplicate);
  track.querySelectorAll('a, img').forEach(el => el.draggable = false);
  const reduced = matchMedia('(prefers-reduced-motion: reduce)');
  const button = document.querySelector('.home-festive-pause');
  let looping = true;
  let paused = false, width = group.getBoundingClientRect().width;
  let offset = 0, previousTime = 0, pointer = null, moved = false, suppressClick = false;
  let wheelActiveUntil = 0, wheelPending = 0, autoplaySpeed = 0;
  let inertia = 0;
  track.classList.add('is-draggable');
  const render = () => {
    if (width <= 0) return;
    offset = looping ? ((offset % width) + width) % width : 0;
    track.style.transform = `translate3d(${-offset}px,0,0)`;
  };
  const animate = time => {
    const elapsed = previousTime ? Math.min(time - previousTime, 64) : 0;
    previousTime = time;
    if (pointer && moved) render();
    if (!pointer && Math.abs(inertia) > 0.015) {
      const decay = Math.exp(-elapsed / 260);
      offset += inertia * 260 * (1 - decay);
      inertia *= decay;
      render();
    } else if (!pointer) { inertia = 0; }
    if (!pointer && Math.abs(wheelPending) > 0.05) {
      const blend = reduced.matches ? 1 : 1 - Math.exp(-elapsed / 48);
      const movement = wheelPending * blend;
      wheelPending -= movement;
      offset += movement;
      render();
    }
    const running = viewport.dataset.autoscroll !== 'false' && looping && !paused && !pointer && !inertia && time >= wheelActiveUntil && !reduced.matches && !document.hidden;
    const targetSpeed = running ? width / 38000 : 0;
    autoplaySpeed += (targetSpeed - autoplaySpeed) * (1 - Math.exp(-elapsed / 180));
    if (running) {
      offset += elapsed * autoplaySpeed;
      render();
    }
    requestAnimationFrame(animate);
  };
  new ResizeObserver(() => {width = group.getBoundingClientRect().width; render();}).observe(group);
  // The package explorer filters the original group, then refreshes its loop.
  track.addEventListener('festive:filter', () => {
    duplicate.replaceChildren(...[...group.children].map(card => card.cloneNode(true)));
    duplicate.querySelectorAll('a').forEach(link => {link.tabIndex = -1; link.draggable = false;});
    duplicate.querySelectorAll('img').forEach(img => img.draggable = false);
    width = group.getBoundingClientRect().width;
    looping = width > viewport.clientWidth;
    duplicate.hidden = !looping;
    offset = 0;
    wheelPending = 0;
    inertia = 0;
    autoplaySpeed = 0;
    render();
  });
  viewport.addEventListener('keydown', event => {
    if (event.target !== viewport || !['ArrowLeft', 'ArrowRight'].includes(event.key)) return;
    event.preventDefault();
    offset += (event.key === 'ArrowRight' ? 1 : -1) * 320;
    wheelActiveUntil = performance.now() + 1400;
    render();
  });
  // Trackpad momentum supplies its own smooth deltas; do not add snapping.
  viewport.addEventListener('wheel', event => {
    if (event.ctrlKey || pointer) return;
    const horizontal = Math.abs(event.deltaX) > Math.abs(event.deltaY);
    if (!horizontal && !event.shiftKey) return;
    const delta = horizontal ? event.deltaX : event.deltaY;
    if (!delta) return;
    event.preventDefault();
    const unit = event.deltaMode === 1 ? 16 : event.deltaMode === 2 ? viewport.clientWidth : 1;
    inertia = 0;
    wheelPending += delta * unit * 0.85;
    wheelActiveUntil = performance.now() + 1400;
    autoplaySpeed = 0;
  }, {passive: false});
  viewport.addEventListener('pointerdown', event => {
    if (!event.isPrimary || event.button !== 0) return;
    wheelPending = 0;
    inertia = 0;
    autoplaySpeed = 0;
    pointer = {id: event.pointerId, x: event.clientX, y: event.clientY, offset, lastX: event.clientX, lastTime: performance.now(), velocity: 0, touch: event.pointerType === 'touch', started: performance.now()};
    moved = false; suppressClick = false;
  });
  viewport.addEventListener('pointermove', event => {
    if (!pointer || event.pointerId !== pointer.id) return;
    const dx = event.clientX - pointer.x;
    const dy = event.clientY - pointer.y;
    if (!moved && Math.abs(dy) > Math.abs(dx) && Math.abs(dy) > 7) {suppressClick = true; pointer = null; return;}
    if (!moved && Math.abs(dx) > 7) {
      moved = true;
      viewport.setPointerCapture(event.pointerId);
      viewport.classList.add('is-dragging');
    }
    if (moved) {
      const now = performance.now();
      const dt = now - pointer.lastTime;
      if (dt > 0) pointer.velocity = .65 * pointer.velocity + .35 * (pointer.lastX - event.clientX) / dt;
      pointer.lastX = event.clientX;
      pointer.lastTime = now;
      offset = pointer.offset - dx;
    }
  });
  const release = event => {
    if (!pointer || event.pointerId !== pointer.id) return;
    suppressClick = moved || event.type === 'pointercancel' || performance.now() - pointer.started > 250;
    if (moved && pointer.touch && event.type === 'pointerup' && !reduced.matches && performance.now() - pointer.lastTime < 100) {
      inertia = Math.max(-2.5, Math.min(2.5, pointer.velocity));
    }
    if (moved) render();
    wheelActiveUntil = performance.now() + 1800;
    pointer = null;
    viewport.classList.remove('is-dragging');
    if (viewport.hasPointerCapture(event.pointerId)) viewport.releasePointerCapture(event.pointerId);
  };
  window.addEventListener('pointerup', release);
  viewport.addEventListener('pointercancel', release);
  // Touch initially captures on the pressed link. Its capture loss bubbles when
  // we transfer capture to the viewport; that must not end the drag.
  viewport.addEventListener('lostpointercapture', event => {
    if (event.target === viewport) release(event);
  });
  viewport.addEventListener('pointerleave', event => {if (event.pointerType === 'mouse' && !moved) release(event);});
  viewport.addEventListener('contextmenu', event => {
    if (pointer) {event.preventDefault(); suppressClick = true;}
  });
  viewport.addEventListener('click', event => {
    if (suppressClick) {event.preventDefault(); event.stopPropagation(); suppressClick = false;}
  }, true);
  button?.addEventListener('click', () => {
    paused = !paused;
    button.setAttribute('aria-pressed', String(paused));
    button.setAttribute('aria-label', paused ? 'Resume card scrolling' : 'Pause card scrolling');
    button.firstElementChild.textContent = paused ? '▷' : 'Ⅱ';
  });
  render();
  requestAnimationFrame(animate);
})();
