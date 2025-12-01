// Hamburger Menu Toggle
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
});

// Close menu when clicking on a link
const navLinks = document.querySelectorAll('.nav-menu a');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        // Hanya menutup menu jika hamburger aktif (di mobile)
        if (navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
        }
    });
});

// Navbar Scroll Effect
const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    // Menambahkan class 'scrolled' setelah 10px scroll
    if (window.scrollY > 10) { 
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Scroll Reveal Animation
const reveals = document.querySelectorAll('.reveal');

const revealOnScroll = () => {
    reveals.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        
        // Memunculkan elemen 100px sebelum mencapai bagian bawah viewport
        if (elementTop < windowHeight - 100) { 
            element.classList.add('active');
        } 
        // Opsional: Hilangkan saat sudah di atas viewport (untuk animasi berulang)
        // else { 
        //     element.classList.remove('active');
        // }
    });
};

window.addEventListener('scroll', revealOnScroll);
revealOnScroll(); // Initial check on page load

// Smooth Scroll for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Newsletter Form Validation and Submission
const newsletterForm = document.querySelector('.newsletter-form');
newsletterForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const emailInput = e.target.querySelector('input');
    const email = emailInput.value;
    
    // Basic email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (emailRegex.test(email)) {
        alert(`Thank you for subscribing! We'll send updates to: ${email}`);
        emailInput.value = '';
    } else {
        alert('Please enter a valid email address.');
    }
});

// Scroll Indicator Click Handler
const scrollIndicator = document.querySelector('.scroll-indicator');
scrollIndicator.addEventListener('click', () => {
    // Scroll ke awal section Best Sellers (ID: #shop)
    const target = document.querySelector('#shop');
    if (target) {
        target.scrollIntoView({
            top: window.innerHeight,
            behavior: 'smooth'
        });
    }
});

// Add animation to product cards on hover (TETAP SAMA, karena sudah bagus)
const productCards = document.querySelectorAll('.product-card');
productCards.forEach(card => {
    card.addEventListener('mouseenter', function() {
        // Menggunakan transform penuh untuk mengatasi masalah transisi
        this.style.transform = 'translateY(-10px) scale(1.02)'; 
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
    });
});

// Lazy loading for images (TETAP SAMA)
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            }
        });
    });

    const images = document.querySelectorAll('img[data-src]');
    images.forEach(img => imageObserver.observe(img));
}

// Add active state to navigation based on scroll position (DITINGKATKAN)
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section[id]');
    const scrollY = window.pageYOffset;
    
    // Iterasi terbalik agar penandaan di section atas lebih akurat
    for (let i = sections.length - 1; i >= 0; i--) {
        const section = sections[i];
        const sectionHeight = section.offsetHeight;
        // Mengurangi offset 100px untuk mengimbangi tinggi navbar dan visual
        const sectionTop = section.offsetTop - 100; 
        const sectionId = section.getAttribute('id');
        const navLink = document.querySelector(`.nav-menu a[href="#${sectionId}"]`);

        if (scrollY >= sectionTop) {
            // Hapus 'active' dari semua link
            navLinks.forEach(link => link.classList.remove('active'));
            // Tambahkan 'active' ke link yang sesuai
            if (navLink) {
                navLink.classList.add('active');
            }
            break; // Keluar dari loop setelah menemukan section yang benar
        } else {
            // Jika sudah di Hero, pastikan semua link dihapus, kecuali jika Hero adalah section pertama
            if (i === 0) {
                 navLinks.forEach(link => link.classList.remove('active'));
            }
        }
    }
});

// Console log to confirm script is loaded
console.log('Lays Landing Page - JavaScript Loaded Successfully! 🥔');