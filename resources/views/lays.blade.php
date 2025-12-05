<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lays Potato - The Best Snack For You</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Inter:wght@300;400;500;600;700;800&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="layout-wrapper">
        <nav class="navbar">
            <div class="nav-container">
                <div class="logo">
                    <img src="{{ asset('images/logo_lays.png') }}" alt="Lays Logo" class="logo-image">
                    <span>Potato</span>
                </div>
                <ul class="nav-menu">
                    <li><a href="#create">Create Your Own</a></li>
                    <li><a href="#shop">Shop Chips</a></li>
                    <li><a href="#category">Shop by Category</a></li>
                    <li><a href="#explore">Explore</a></li>
                </ul>
                <div class="nav-icons">
                    <button><i class="fas fa-search"></i></button>
                    <button><i class="far fa-user"></i></button>
                </div>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>

        <section class="hero">

            <!-- BAGIAN MERAH (HERO) -->
            <div class="hero-top">
                <div class="hero-container">
                    <div class="hero-content reveal">
                        <h1>The Best Snack For You</h1>
                        <p>Potato Chips are the most eaten and popular crispy snack items. Demand for
                            potato chips.</p>
                        <button class="btn-primary">
                            Shop Now
                            <i class="fas fa-arrow-right-long"></i>
                        </button>
                    </div>
                    <div class="hero-image">
                        <img src="{{ asset('images/gambar_utama_3.png') }}" alt="Gambar Utama Lays"
                            class="main-chips-image">
                    </div>
                </div>
            </div>
            <!-- CURVE PUTIH -->
            <div class="hero-curve">
                <div class="scroll-indicator">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round">
                        <line x1="5" y1="19" x2="19" y2="5"></line>
                        <polyline points="11 5 19 5 19 13"></polyline>
                    </svg>
                </div>
            </div>

        </section>


        <section class="best-sellers" id="shop">
            <div class="section-header reveal">
                <h2>Best sellers.</h2>
                <a href="#" class="shop-all">
                    <span class="text-link">Shop all</span>
                    <span class="shop-icon"><i class="fas fa-chevron-right"></i></span>
                </a>
            </div>
            <div class="products-grid">
                <!-- PRODUCT 1 -->
                <div class="product-card reveal">
                    <div class="image-wrapper">
                        <img src="{{ asset('images/lays_ijo.png') }}" alt="Lays Green">
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-row">
                        <span class="product-name">Lays Yogurt & Herb</span>
                        <span class="small-red-icon">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                    <p class="pack-info">Pack of 6</p>
                    <div class="product-price">$44.99</div>
                </div>
                <!-- PRODUCT 2 -->
                <div class="product-card reveal">
                    <div class="image-wrapper">
                        <img src="{{ asset('images/lays_kuning.png') }}" alt="Lays Yellow">
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-row">
                        <span class="product-name">Lays Classic</span>
                        <span class="small-red-icon">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                    <p class="pack-info">Pack of 6</p>
                    <div class="product-price">$53.99</div>
                </div>
                <!-- PRODUCT 3 -->
                <div class="product-card reveal">
                    <div class="image-wrapper">
                        <img src="{{ asset('images/lays_biru.png') }}" alt="Lays Blue">
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-row">
                        <span class="product-name">Lays Salt & Vinegar</span>
                        <span class="small-red-icon">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                    <p class="pack-info">Pack of 6</p>
                    <div class="product-price">$24.99</div>
                </div>
                <!-- CREATE CARD -->
                <div class="create-card reveal" id="create">
                    <div class="create-image-wrapper">
                        <img src="{{ asset('images/lays_merah.png') }}" class="create-img" alt="Lays Red">
                    </div>
                    <h3>Create Your Own.</h3>
                    <div class="title-strip"></div>
                    <p>Explore all our bold flavors and create a wild mix.</p>
                    <button class="btn-secondary">
                        Get Started
                        <i class="fas fa-arrow-right-long"></i>
                    </button>
                </div>
            </div>
        </section>

        <section class="showcase">
            <div class="showcase-container">
                <div class="showcase-icon">
                    <img src="{{ asset('images/kumpulan_lays.webp') }}" alt="Kumpulan Lays" class="showcase-image">
                </div>
                <div class="showcase-content reveal">
                    <h2>Not just any chips</h2>
                    <p>Potato Chips are the most eaten and populer crispy snack items. Demand for potato chips is
                        increasing
                        day by day as more and more people love to eat potato chips and of course,
                        the item is easily available everywhere at many shops in a very short period.
                    </p>
                    <button class="btn-primary">
                        Shop now
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <section class="categories" id="categories">
            <div class="section-header reveal">
                <h2>Taste the good stuff.</h2>
                <a href="#" class="shop-all">
                    <span class="text-link">Shop all</span>
                    <span class="shop-icon"><i class="fas fa-chevron-right"></i></span>
                </a>
            </div>

            <div class="categories-grid">

                <!-- CARD 1 -->
                <div class="category-card">
                    <img src="{{ asset('images/category-1.jpg') }}" class="category-img-new" alt="Snacking">
                    <div class="category-bottom-card">
                        <h3>Snacking</h3>
                        <button class="btn-primary category-btn">Shop now <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="category-card">
                    <img src="{{ asset('images/category-2.jpg') }}" class="category-img-new" alt="Snacking">
                    <div class="category-bottom-card red">
                        <h3>Snacking</h3>
                        <button class="btn-primary category-btn">Shop now <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="category-card">
                    <img src="{{ asset('images/category-3.jpg') }}" class="category-img-new" alt="Snacking">
                    <div class="category-bottom-card orange">
                        <h3>Snacking</h3>
                        <button class="btn-primary category-btn">Shop now <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>

            </div>
        </section>

        <section class="newsletter" id="explore">

            <div class="newsletter-top"></div>

            <div class="newsletter-bottom">

                <div class="newsletter-container">

                    <!-- PINDAHIN CHIP KE DALAM CONTAINER -->
                    <div class="newsletter-chip">
                        <img src="{{ asset('images/chip_numpuk.png') }}" alt="Chip">
                    </div>

                    <div class="newsletter-text">
                        <h2>Sign up for exclusive offers and discounts</h2>
                    </div>

                    <form class="newsletter-form">
                        <input type="email" placeholder="Your e-mail address">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>

                </div>
            </div>

        </section>

        <footer class="footer">
            <div class="footer-container">
                <div class="footer-brand">
                    <div class="logo">
                        <img src="{{ asset('images/logo_lays.png') }}" alt="Lays Logo" class="logo-image">
                        <span>Potato</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur. Augue placerat congue nibh fermentum eleifend in mauris
                        consequat.</p>
                </div>
                <div class="footer-links">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Works</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="#">Customer Support</a></li>
                        <li><a href="#">Delivery Details</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Free eBooks</a></li>
                        <li><a href="#">Development Tutorial</a></li>
                        <li><a href="#">How to-Blog</a></li>
                        <li><a href="#">Youtube Playlist</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Install App</h4>
                    <div class="app-buttons">
                        <a href="#" class="app-btn">
                            <img src="{{ asset('images/app-store-badge.svg') }}" alt="Download on the App Store">
                        </a>
                        <a href="#" class="app-btn">
                            <img src="{{ asset('images/google-play-badge.png') }}" alt="Get it on Google Play">
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© Copyright 2025, All Rights Reserved by RihanGG</p>
                <div class="social-icons">
                    <a href="#">
                        <!-- Twitter -->
                        <svg viewBox="0 0 24 24" class="icon">
                            <path
                                d="M23.643 4.937c-.835.37-1.732.62-2.675.733a4.67 4.67 0 0 0 2.048-2.57 9.42 9.42 0 0 1-2.97 1.13 4.66 4.66 0 0 0-7.93 4.25A13.21 13.21 0 0 1 3.15 3.16a4.66 4.66 0 0 0 1.44 6.21 4.6 4.6 0 0 1-2.1-.58v.06a4.66 4.66 0 0 0 3.74 4.57 4.7 4.7 0 0 1-2.09.08 4.67 4.67 0 0 0 4.36 3.24A9.34 9.34 0 0 1 1.11 18.1 13.17 13.17 0 0 0 8.28 20c8.45 0 13.07-7.23 13.07-13.5v-.62a9.5 9.5 0 0 0 2.29-2.94z" />
                        </svg>
                    </a>
                    <a href="#">
                        <!-- Facebook -->
                        <svg viewBox="0 0 24 24" class="icon">
                            <path
                                d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1 .9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.7-1.3 1.4V12h2.3l-.4 3h-2v7A10 10 0 0 0 22 12" />
                        </svg>
                    </a>
                    <a href="#">
                        <!-- Instagram -->
                        <svg viewBox="0 0 24 24" class="icon">
                            <path
                                d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.66 0 3 1.34 3 3v10c0 1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3h10zm-5 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm4.5-.1a1.1 1.1 0 1 0 0-2.2 1.1 1.1 0 0 0 0 2.2z" />
                        </svg>
                    </a>
                    <a href="#">
                        <!-- GitHub -->
                        <svg viewBox="0 0 24 24" class="icon">
                            <path
                                d="M12 .5A11.5 11.5 0 0 0 .5 12.2a11.7 11.7 0 0 0 7.8 11c.6.1.8-.3.8-.6v-2c-3.2.7-3.8-1.6-3.8-1.6a3.2 3.2 0 0 0-1.3-1.8c-1-.7.1-.7.1-.7a2.5 2.5 0 0 1 1.9 1.3 2.5 2.5 0 0 0 3.4 1 2.6 2.6 0 0 1 .8-1.6c-2.6-.3-5.4-1.4-5.4-6.1a4.8 4.8 0 0 1 1.2-3.3 4.3 4.3 0 0 1 .1-3.2s1-.3 3.3 1.3a11.4 11.4 0 0 1 6 0C17.5 5 18.5 5.3 18.5 5.3a4.3 4.3 0 0 1 .1 3.2 4.8 4.8 0 0 1 1.2 3.3c0 4.7-2.8 5.7-5.5 6a2.9 2.9 0 0 1 .9 2.3v3.3c0 .3.2.7.8.6A11.7 11.7 0 0 0 23.5 12 11.5 11.5 0 0 0 12 .5Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
