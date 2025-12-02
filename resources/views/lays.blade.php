<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lays Potato - The Best Snack For You</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
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
                <h2>Not just any chips.</h2>
                <p>Potato Chips are the most eaten and populer crispy snack items. Demand for potato chips is increasing
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

    <section class="categories" id="category">
        <div class="section-header reveal">
            <h2>Taste the good stuff.</h2>
            <a href="#" class="shop-all">
                Shop all
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="categories-grid">
            <div class="category-card reveal">
                <img src="{{ asset('images/category-1.jpg') }}" alt="Lays GG" class="category-image">
                <div class="category-overlay"></div>
                <div class="category-content">
                    <h3>Snacking</h3>
                    <button class="btn-primary">
                        Shop now
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="category-card reveal">
                <img src="{{ asset('images/category-2.jpg') }}" alt="Messi Lays" class="category-image">
                <div class="category-overlay"></div>
                <div class="category-content">
                    <h3>Snacking</h3>
                    <button class="btn-primary">
                        Shop now
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="category-card reveal">
                <img src="{{ asset('images/category-3.jpg') }}" alt="Wanita Lays" class="category-image">
                <div class="category-overlay"></div>
                <div class="category-content">
                    <h3>Snacking</h3>
                    <button class="btn-primary">
                        Shop now
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter" id="explore">
        <div class="newsletter-container">
            <div class="newsletter-icon">
                <img src="{{ asset('images/chip_numpuk.png') }}" alt="Chip Numpuk" class="newsletter-image">
            </div>
            <div class="newsletter-content reveal">
                <h2>Sign up to receive exclusive offers and discounts.</h2>
                <form class="newsletter-form">
                    <input type="email" placeholder="Enter email address" required>
                    <button type="submit">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-brand">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <span>Lay's</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur. Augue placerat congue nibh fermentum eleifend in mauris
                    consequat.</p>
            </div>
            <div class="footer-links">
                <h4>Company</h4>
                <ul>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> About</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Careers</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Press</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Help</h4>
                <ul>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Contact Support</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> FAQs</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Terms & Conditions</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Free eBooks</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> How-To Guides</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Rewards Points</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Install App</h4>
                <div class="app-buttons">
                    <div class="app-btn">
                        <i class="fab fa-apple"></i> App Store
                    </div>
                    <div class="app-btn">
                        <i class="fab fa-google-play"></i> Google Play
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© Copyright 2025, All Rights Reserved by RihanGG</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
