import khmerTranslations from './translations-km';
import chineseTranslations from './translations-zh';

const translations = { km: khmerTranslations, zh: chineseTranslations };

const menuButton = document.querySelector('#menu-toggle');
const navigation = document.querySelector('#main-nav');
menuButton?.addEventListener('click', () => {
    const isOpen = navigation.classList.toggle('open');
    menuButton.setAttribute('aria-expanded', String(isOpen));
    menuButton.setAttribute('aria-label', isOpen ? 'Close navigation' : 'Open navigation');
});
document.querySelectorAll('#main-nav a').forEach((link) => link.addEventListener('click', () => navigation?.classList.remove('open')));
document.querySelectorAll('[data-current-year]').forEach((node) => { node.textContent = new Date().getFullYear(); });
const scrollTopButton = document.querySelector('#scroll-top');
window.addEventListener('scroll', () => scrollTopButton?.classList.toggle('visible', window.scrollY > 500), { passive: true });
scrollTopButton?.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

const languageSelect = document.querySelector('#language-select');
const savedLanguage = localStorage.getItem('smart-start-language') || 'en';
if (languageSelect) languageSelect.value = savedLanguage;
function applyLanguage(language) {
    document.documentElement.lang = language;
    document.querySelectorAll('[data-i18n]').forEach((node) => {
        const original = node.dataset.original || node.textContent.trim();
        node.dataset.original = original;
        node.textContent = language === 'en' ? original : (translations[language]?.[node.dataset.i18n] || original);
    });
    localStorage.setItem('smart-start-language', language);
}
applyLanguage(savedLanguage);
languageSelect?.addEventListener('change', (event) => applyLanguage(event.target.value));

const observer = new IntersectionObserver((entries) => entries.forEach((entry) => {
    if (entry.isIntersecting) entry.target.classList.add('visible');
}), { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach((element) => observer.observe(element));

const moreGallery = document.querySelector('#show-more-gallery');
moreGallery?.addEventListener('click', () => {
    document.querySelectorAll('.gallery-item[hidden]').forEach((item) => { item.hidden = false; });
    moreGallery.hidden = true;
});

const lightbox = document.querySelector('#lightbox');
const lightboxImage = document.querySelector('#lightbox-image');
let lastFocusedGalleryItem;
function closeLightbox() {
    if (!lightbox) return;
    lightbox.close();
    lastFocusedGalleryItem?.focus();
}
document.querySelectorAll('.gallery-item button').forEach((button) => button.addEventListener('click', () => {
    lastFocusedGalleryItem = button;
    lightboxImage.src = button.querySelector('img').src;
    lightboxImage.alt = button.querySelector('img').alt;
    lightbox?.showModal();
}));
lightbox?.addEventListener('click', (event) => { if (event.target === lightbox) closeLightbox(); });
document.querySelector('#lightbox-close')?.addEventListener('click', closeLightbox);
document.addEventListener('keydown', (event) => { if (event.key === 'Escape' && lightbox?.open) closeLightbox(); });

const contactForm = document.querySelector('#contact-form');
contactForm?.addEventListener('submit', (event) => {
    if (!contactForm.checkValidity()) {
        event.preventDefault();
        const invalid = contactForm.querySelector(':invalid');
        invalid?.setAttribute('aria-invalid', 'true');
        invalid?.focus();
    }
});
