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

  // Element cross-section diagram (Serial Renovation > Process): legend chip
  // <-> marker highlighting, and a name tooltip on the marker itself.
  document.querySelectorAll('.diagram').forEach((dia) => {
    const markers = dia.querySelectorAll('.diagram-marker');
    const chips   = dia.querySelectorAll('.diagram-legend button');
    const tip     = dia.querySelector('.diagram-tip');
    const fig     = dia.querySelector('.diagram-annotated');
    const label   = (n) => { const c = dia.querySelector(`.diagram-legend button[data-layer="${n}"] span`); return c ? c.textContent : ''; };
    const setActive = (n) => {
      markers.forEach((m) => m.classList.toggle('is-active', m.dataset.layer === n));
      chips.forEach((c) => c.classList.toggle('is-active', c.dataset.layer === n));
    };
    const showTip = (m) => {
      if (!tip || !fig) return;
      const r = m.getBoundingClientRect(), f = fig.getBoundingClientRect();
      tip.textContent = label(m.dataset.layer);
      tip.style.left = (r.left + r.width / 2 - f.left) + 'px';
      tip.style.top  = (r.top - f.top) + 'px';
      tip.hidden = false;
    };
    const hideTip = () => { if (tip) tip.hidden = true; };
    chips.forEach((c) => {
      const on = () => { setActive(c.dataset.layer); const m = dia.querySelector(`.diagram-marker[data-layer="${c.dataset.layer}"]`); if (m) showTip(m); };
      const off = () => { setActive(null); hideTip(); };
      c.addEventListener('mouseenter', on); c.addEventListener('focus', on);
      c.addEventListener('mouseleave', off); c.addEventListener('blur', off);
      c.addEventListener('click', () => { const m = dia.querySelector(`.diagram-marker[data-layer="${c.dataset.layer}"]`); if (m) { setActive(c.dataset.layer); showTip(m); m.scrollIntoView({ block: 'nearest', behavior: 'smooth' }); } });
    });
    markers.forEach((m) => {
      m.addEventListener('mouseenter', () => { setActive(m.dataset.layer); showTip(m); });
      m.addEventListener('mouseleave', () => { setActive(null); hideTip(); });
      m.addEventListener('click', () => { setActive(m.dataset.layer); showTip(m); });
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
