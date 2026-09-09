// EstNor — shared site behaviour
document.addEventListener('DOMContentLoaded', () => {

  // Mobile nav
  const burger = document.querySelector('.hamburger');
  const drawer = document.querySelector('.mobile-nav');
  const closeBtn = document.querySelector('.mobile-close');
  if (burger && drawer) {
    burger.addEventListener('click', () => drawer.classList.add('open'));
    closeBtn && closeBtn.addEventListener('click', () => drawer.classList.remove('open'));
    drawer.querySelectorAll('a').forEach(a => a.addEventListener('click', () => drawer.classList.remove('open')));
  }

  // Scroll reveal
  const revealEls = document.querySelectorAll('[data-reveal]');
  if ('IntersectionObserver' in window && revealEls.length) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(el => io.observe(el));
  } else {
    revealEls.forEach(el => el.classList.add('is-visible'));
  }

  // Header shadow on scroll
  const header = document.querySelector('.site-header');
  if (header) {
    const onScroll = () => header.classList.toggle('scrolled', window.scrollY > 8);
    document.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // Contact form (static demo — no backend wired up)
  const form = document.querySelector('#contact-form');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const note = document.querySelector('#form-note');
      if (note) {
        note.textContent = 'Thanks — this is a demo form and isn’t connected to a mail server. Please email info@estnor.ee directly.';
        note.hidden = false;
      }
    });
  }
});
