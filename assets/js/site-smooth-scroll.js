/* Smooth page scrolling; native touch and horizontal card gestures remain intact. */
(() => {
  if (window.roamersLenis || typeof window.Lenis !== 'function') return;
  const motion = matchMedia('(prefers-reduced-motion: reduce)');
  let instance = null;
  const setup = () => {
    if (motion.matches) {
      instance?.destroy();
      instance = null;
      window.roamersLenis = null;
      return;
    }
    if (instance) return;
    instance = new Lenis({
      autoRaf: true,
      smoothWheel: true,
      syncTouch: false,
      lerp: 0.1,
      allowNestedScroll: false,
      anchors: {offset: -90},
      prevent: node => node instanceof Element && node.matches('[data-lenis-prevent], .modal, .offcanvas, textarea, select, .festive-destination-tabs'),
      // Keep every vertical event in the same scrolling pipeline.
      virtualScroll: ({event}) => !event.ctrlKey && !event.shiftKey && Math.abs(event.deltaX || 0) <= Math.abs(event.deltaY || 0),
    });
    window.roamersLenis = instance;
  };
  setup();
  motion.addEventListener('change', setup);
})();
