// Hamburger Menu Toggle
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

// Tambahkan null check untuk keamanan
if (hamburger && navMenu) {
    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        hamburger.classList.toggle('active'); // Untuk animasi hamburger icon
    });
}

// Close menu when clicking on a link
const navLinks = document.querySelectorAll('.nav-menu a');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        // Hanya menutup menu jika hamburger aktif (di mobile)
        if (navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
            hamburger.classList.remove('active'); // Tutup hamburger icon juga
        }
    });
});

// Navbar Scroll Effect
const navbar = document.querySelector('.navbar');
if (navbar) {
    window.addEventListener('scroll', () => {
        // Menambahkan class 'scrolled' setelah 10px scroll
        if (window.scrollY > 10) { 
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
}

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
            // Hitung offset navbar untuk smooth scroll yang akurat
            const navbarHeight = navbar ? navbar.offsetHeight : 0;
            const targetPosition = target.offsetTop - navbarHeight;
            
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Newsletter Form Validation and Submission
const newsletterForm = document.querySelector('.newsletter-form');
if (newsletterForm) {
    newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const emailInput = e.target.querySelector('input[type="email"]');
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
}

// Scroll Indicator Click Handler
const scrollIndicator = document.querySelector('.scroll-indicator');
if (scrollIndicator) {
    scrollIndicator.addEventListener('click', () => {
        // Scroll ke awal section Best Sellers (ID: #shop)
        const target = document.querySelector('#shop');
        if (target) {
            const navbarHeight = navbar ? navbar.offsetHeight : 0;
            window.scrollTo({
                top: target.offsetTop - navbarHeight,
                behavior: 'smooth'
            });
        }
    });
}

// Add animation to product cards on hover
const productCards = document.querySelectorAll('.product-card');
productCards.forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-10px) scale(1.02)'; 
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
    });
});

// Lazy loading for images
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

// Add active state to navigation based on scroll position
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section[id]');
    const scrollY = window.pageYOffset;
    const navbarHeight = navbar ? navbar.offsetHeight : 0;
    
    // Iterasi terbalik agar penandaan di section atas lebih akurat
    let activeFound = false;
    
    for (let i = sections.length - 1; i >= 0; i--) {
        const section = sections[i];
        // Offset disesuaikan dengan tinggi navbar + buffer
        const sectionTop = section.offsetTop - navbarHeight - 150; 
        const sectionId = section.getAttribute('id');
        const navLink = document.querySelector(`.nav-menu a[href="#${sectionId}"]`);

        if (scrollY >= sectionTop && !activeFound) {
            // Hapus 'active' dari semua link
            navLinks.forEach(link => link.classList.remove('active'));
            // Tambahkan 'active' ke link yang sesuai
            if (navLink) {
                navLink.classList.add('active');
                activeFound = true;
            }
        }
    }
    
    // Jika masih di top, hapus semua active
    if (!activeFound) {
        navLinks.forEach(link => link.classList.remove('active'));
    }
});

// Console log to confirm script is loaded
console.log('Lays Landing Page - JavaScript Loaded Successfully! 🥔');