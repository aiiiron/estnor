// estnor.ee (concept) — shared site behaviour, ported from seriell-sanierung.de
document.addEventListener('DOMContentLoaded', () => {
  // Close the mobile nav after a link is tapped (nav is a CSS-only checkbox toggle)
  document.querySelectorAll('.nav a').forEach((a) => {
    a.addEventListener('click', () => {
      const toggle = document.getElementById('nav-toggle');
      if (toggle) toggle.checked = false;
    });
  });

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
