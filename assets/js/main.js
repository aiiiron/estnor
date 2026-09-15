// estnor.ee (concept) — shared site behaviour, ported from seriell-sanierung.de
document.addEventListener('DOMContentLoaded', () => {
  // Close the mobile nav after a link is tapped (nav is a CSS-only checkbox toggle)
  document.querySelectorAll('.nav a').forEach((a) => {
    a.addEventListener('click', () => {
      const toggle = document.getElementById('nav-toggle');
      if (toggle) toggle.checked = false;
    });
  });

  // Language switcher: an explicit tap-to-toggle. The CSS opens it on hover
  // (mouse) and :focus-within (keyboard), but a tapped <button> gets no
  // focus in iOS/iPadOS Safari and touch has no hover — so on a tablet wide
  // enough for the desktop header (>1120px, e.g. an iPad in landscape) the
  // dropdown never opened. Click toggles .is-open; outside tap / Escape closes.
  const switchers = document.querySelectorAll('.lang-switch');
  const closeAll = () => switchers.forEach((s) => {
    s.classList.remove('is-open');
    const t = s.querySelector('.lang-switch-trigger');
    if (t) t.setAttribute('aria-expanded', 'false');
  });
  switchers.forEach((s) => {
    const trigger = s.querySelector('.lang-switch-trigger');
    if (!trigger) return;
    trigger.setAttribute('aria-expanded', 'false');
    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      const open = !s.classList.contains('is-open');
      closeAll();
      if (open) { s.classList.add('is-open'); trigger.setAttribute('aria-expanded', 'true'); }
    });
  });
  document.addEventListener('click', (e) => { if (!e.target.closest('.lang-switch')) closeAll(); });
  document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeAll(); });

  // Contact form is a static demo on this site (no PHP backend) — show a note instead of submitting
  const form = document.querySelector('#contact-form');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const note = document.querySelector('#form-result');
      if (note) {
        note.textContent = 'Thanks — this is a demo form and isn’t connected to a mail server. Please email info@estnor.ee directly.';
        note.hidden = false;
        note.className = 'form-ok';
      }
    });
  }
});
