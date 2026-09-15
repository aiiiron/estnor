// assets/js/references.js — the reference "album" lightbox shared by the
// homepage teaser and the References page. Loaded only on pages that
// include partials/reference-lightbox.php (see partials/footer.php).
document.addEventListener('DOMContentLoaded', () => {
  const lightbox = document.getElementById('ref-lightbox');
  if (!lightbox) return;

  const frame   = document.getElementById('ref-lightbox-frame');
  const count   = document.getElementById('ref-lightbox-count');
  const thumbs  = document.getElementById('ref-lightbox-thumbs');
  const prevBtn = document.getElementById('ref-lightbox-prev');
  const nextBtn = document.getElementById('ref-lightbox-next');
  const closeBtn = document.getElementById('ref-lightbox-close');
  const category = document.getElementById('ref-lightbox-category');
  const title    = document.getElementById('ref-lightbox-title');
  const locationText = document.getElementById('ref-lightbox-location-text');
  const desc     = document.getElementById('ref-lightbox-desc');

  let photos = [];
  let index = 0;
  let openerEl = null; // the card that opened the lightbox — focus returns here on close

  function renderSlide() {
    frame.innerHTML = '';
    if (photos.length === 0) {
      const ph = document.createElement('div');
      ph.className = 'ref-photo-placeholder';
      ph.setAttribute('aria-hidden', 'true');
      frame.appendChild(ph);
    } else {
      const img = document.createElement('img');
      img.src = photos[index];
      img.alt = '';
      frame.appendChild(img);
    }

    const multi = photos.length > 1;
    prevBtn.hidden = !multi;
    nextBtn.hidden = !multi;
    count.hidden = !multi;
    if (multi) count.textContent = (index + 1) + ' / ' + photos.length;

    thumbs.hidden = !multi;
    if (multi) {
      thumbs.querySelectorAll('button').forEach((btn, i) => {
        btn.classList.toggle('is-active', i === index);
      });
    }
  }

  function buildThumbs() {
    thumbs.innerHTML = '';
    if (photos.length <= 1) return;
    photos.forEach((src, i) => {
      const btn = document.createElement('button');
      btn.type = 'button';
      const img = document.createElement('img');
      img.src = src;
      img.alt = '';
      btn.appendChild(img);
      btn.addEventListener('click', () => { index = i; renderSlide(); });
      thumbs.appendChild(btn);
    });
  }

  function open(card) {
    openerEl = card;
    photos = JSON.parse(card.dataset.photos || '[]');
    index = 0;

    category.textContent = card.dataset.category || '';
    title.textContent = card.dataset.title || '';
    locationText.textContent = card.dataset.location || '';
    desc.textContent = card.dataset.description || '';

    buildThumbs();
    renderSlide();

    lightbox.hidden = false;
    document.body.classList.add('ref-lightbox-open');
    closeBtn.focus();
    document.addEventListener('keydown', onKeydown);
  }

  function close() {
    lightbox.hidden = true;
    document.body.classList.remove('ref-lightbox-open');
    document.removeEventListener('keydown', onKeydown);
    if (openerEl) openerEl.focus();
  }

  function onKeydown(e) {
    if (e.key === 'Escape') close();
    if (e.key === 'ArrowLeft') step(-1);
    if (e.key === 'ArrowRight') step(1);
  }

  function step(dir) {
    if (photos.length < 2) return;
    index = (index + dir + photos.length) % photos.length;
    renderSlide();
  }

  document.querySelectorAll('[data-ref-trigger]').forEach((card) => {
    card.addEventListener('click', () => open(card));
  });

  closeBtn.addEventListener('click', close);
  prevBtn.addEventListener('click', () => step(-1));
  nextBtn.addEventListener('click', () => step(1));

  // Click on the dimmed backdrop (not the panel itself) closes too.
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) close();
  });

  // Swipe left/right on the image to move between photos on touch devices.
  let touchStartX = null;
  frame.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].clientX;
  }, { passive: true });
  frame.addEventListener('touchend', (e) => {
    if (touchStartX === null) return;
    const dx = e.changedTouches[0].clientX - touchStartX;
    touchStartX = null;
    if (Math.abs(dx) > 40) step(dx < 0 ? 1 : -1);
  }, { passive: true });
});
