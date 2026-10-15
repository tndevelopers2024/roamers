(() => {
  const explorer = document.querySelector('[data-festive-explorer]');
  if (explorer) {
    const tabs = [...explorer.querySelectorAll('[data-destination]')].filter(el => el.tagName === 'BUTTON');
    const cards = [...explorer.querySelectorAll('.home-festive-marquee__group:not([aria-hidden]) .home-festive-card')];
    tabs.forEach(tab => tab.addEventListener('click', () => {
      let count = 0;
      cards.forEach(card => {
        const show = tab.dataset.destination === 'all' || tab.dataset.destination === card.dataset.destination;
        card.hidden = !show;
        if (show) count++;
      });
      explorer.querySelector('.home-festive-marquee__track').dispatchEvent(new Event('festive:filter'));
      tabs.forEach(button => button.setAttribute('aria-pressed', String(button === tab)));
      explorer.querySelector('[data-festive-count]').textContent = `${count} ${count === 1 ? 'package' : 'packages'} to explore`;
    }));
  }
  document.querySelectorAll('.festive-package-shelf').forEach(section => {
    const row = section.querySelector('.festive-shelf');
    const move = direction => row.scrollBy({left: direction * (row.clientWidth + 22), behavior: matchMedia('(prefers-reduced-motion: reduce)').matches ? 'instant' : 'smooth'});
    section.querySelector('[data-shelf-prev]').addEventListener('click', () => move(-1));
    section.querySelector('[data-shelf-next]').addEventListener('click', () => move(1));
  });
})();
