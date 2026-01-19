<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta name="facebook-domain-verification" content="ji77fhm8me50pm6jw08ks2dw8yi1kl" />
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= isset($pageTitle) ? $pageTitle : 'Agoo Technologies' ?></title>
    <meta name="author" content="Agoo Technologies">
    <meta name="description"
        content="<?= isset($pageDescription) ? $pageDescription : 'Agoo Technologies - IT Solutions' ?>">
    <meta name="keywords"
        content="Agoo Technologies, IT Solutions, Web Development, Mobile Apps, Salesforce, Digital Marketing">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= isset($currentUrl) ? $currentUrl : '' ?>">
    <meta property="og:title" content="<?= isset($pageTitle) ? $pageTitle : 'Agoo Technologies' ?>">
    <meta property="og:description"
        content="<?= isset($pageDescription) ? $pageDescription : 'Agoo Technologies - IT Solutions' ?>">
    <meta property="og:image" content="<?= isset($pageImage) ? $pageImage : 'assets/img/header/agoo_meta_logo.png' ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= isset($currentUrl) ? $currentUrl : '' ?>">
    <meta property="twitter:title" content="<?= isset($pageTitle) ? $pageTitle : 'Agoo Technologies' ?>">
    <meta property="twitter:description"
        content="<?= isset($pageDescription) ? $pageDescription : 'Agoo Technologies - IT Solutions' ?>">
    <meta property="twitter:image"
        content="<?= isset($pageImage) ? $pageImage : 'assets/img/header/agoo_meta_logo.png' ?>">

    <link href="assets/img/header/agoo_meta_logo.png" rel="icon">
    <link href="assets/img/header/agoo_meta_logo.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&amp;family=Jost:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700&amp;display=swap"
        rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="assets/css/aos-custom.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="dist/output.css">

    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <link rel="manifest" href="assets/img/favicons/manifest">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/header/agoo_meta_logo.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="font-body text-body overflow-x-hidden bg-smoke">

    <!-- Mobile Menu Wrapper -->
    <div
        class="th-menu-wrapper fixed inset-0 z-[99999] opacity-0 invisible transition-all duration-400 [&.th-body-visible]:opacity-100 [&.th-body-visible]:visible">
        <!-- Backdrop -->
        <div class="th-menu-backdrop absolute inset-0 bg-black/60 transition-opacity duration-400"
            onclick="document.querySelector('.th-menu-wrapper').classList.remove('th-body-visible')"></div>

        <!-- Menu Content -->
        <div
            class="th-menu-area absolute left-0 top-0 bottom-0 w-[300px] bg-white shadow-2xl transform -translate-x-full transition-transform duration-400 [&.th-body-visible]:translate-x-0 overflow-y-auto">
            <div class="p-6 relative">
                <button
                    class="th-menu-toggle absolute top-4 right-4 text-2xl text-title hover:text-theme transition-colors">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="mobile-logo py-6 mb-6 border-b border-border">
                    <a href="home"><img src="assets/img/sticky/agoo_logo.png" alt="Agoo"
                            class="mx-auto h-16 w-auto"></a>
                </div>
                <div class="th-mobile-menu">
                    <ul class="space-y-4">
                        <li><a href="home"
                                class="block text-lg font-medium text-title hover:text-theme transition-colors">Home</a>
                        </li>
                        <li><a href="about"
                                class="block text-lg font-medium text-title hover:text-theme transition-colors">About
                                Us</a></li>
                        <li><a href="service"
                                class="block text-lg font-medium text-title hover:text-theme transition-colors">Services</a>
                        </li>
                        <li><a href="career"
                                class="block text-lg font-medium text-title hover:text-theme transition-colors">Career</a>
                        </li>
                        <li><a href="contact"
                                class="block text-lg font-medium text-title hover:text-theme transition-colors">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <?php
    $page = basename($_SERVER['PHP_SELF'], '.php');
    ?>
    <header class="fixed inset-x-0 top-0 z-[100] transition-all duration-300 w-full" id="mainHeader">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-24 items-center justify-between border-b border-white/10 transition-colors duration-300"
                id="headerBorder">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="home" class="block">
                        <img src="assets/img/header/agoo_logo.png" alt="Agoo Technologies"
                            class="h-10 lg:h-12 w-auto object-contain transition-all duration-300" id="headerLogo">
                    </a>
                </div>

                <!-- Main Navigation (Desktop) -->
                <nav class="hidden lg:flex items-center gap-8 xl:gap-10">
                    <a href="home"
                        class="nav-link font-bold font-title uppercase tracking-wide hover:text-theme transition-all duration-300 relative group py-2 <?= ($page == 'home' || $page == 'index') ? 'text-theme active-nav-link' : 'text-white' ?>">
                        Home
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-theme transition-all duration-300 group-hover:w-full <?= ($page == 'home' || $page == 'index') ? 'w-full' : '' ?>"></span>
                    </a>
                    <a href="about"
                        class="nav-link font-bold font-title uppercase tracking-wide hover:text-theme transition-all duration-300 relative group py-2 <?= ($page == 'about') ? 'text-theme active-nav-link' : 'text-white' ?>">
                        About Us
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-theme transition-all duration-300 group-hover:w-full <?= ($page == 'about') ? 'w-full' : '' ?>"></span>
                    </a>
                    <a href="service"
                        class="nav-link font-bold font-title uppercase tracking-wide hover:text-theme transition-all duration-300 relative group py-2 <?= ($page == 'service' || $page == 'mobile_app_development' || $page == 'web_development' || $page == 'salesforce' || $page == 'cloud_services' || $page == 'it_consulting' || $page == 'digital_marketing' || $page == 'software_solution') ? 'text-theme active-nav-link' : 'text-white' ?>">
                        Services
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-theme transition-all duration-300 group-hover:w-full <?= ($page == 'service' || $page == 'mobile_app_development' || $page == 'web_development' || $page == 'salesforce' || $page == 'cloud_services' || $page == 'it_consulting' || $page == 'digital_marketing' || $page == 'software_solution') ? 'w-full' : '' ?>"></span>
                    </a>
                    <a href="career"
                        class="nav-link font-bold font-title uppercase tracking-wide hover:text-theme transition-all duration-300 relative group py-2 <?= ($page == 'career') ? 'text-theme active-nav-link' : 'text-white' ?>">
                        Career
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-theme transition-all duration-300 group-hover:w-full <?= ($page == 'career') ? 'w-full' : '' ?>"></span>
                    </a>
                </nav>

                <!-- Header Actions -->
                <div class="flex items-center gap-4">
                    <a href="contact"
                        class="hidden lg:inline-flex items-center justify-center px-8 py-3 bg-theme text-white text-sm font-bold uppercase tracking-wider rounded-full hover:bg-white hover:text-theme hover:-translate-y-0.5 transition-all duration-300">
                        Contact Us
                    </a>

                    <!-- Mobile Toggle -->
                    <button type="button"
                        class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-white hover:text-theme transition-colors th-menu-toggle"
                        id="mobileToggle">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <script>
        // Use document.addEventListener to ensure DOM is ready
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('mainHeader');
            const headerBorder = document.getElementById('headerBorder');
            const navLinks = document.querySelectorAll('.nav-link');
            const logo = document.getElementById('headerLogo');
            const mobileToggle = document.getElementById('mobileToggle');
            const menuWrapper = document.querySelector('.th-menu-wrapper');
            const menuBackdrop = document.querySelector('.th-menu-backdrop');
            const menuCloseBtn = document.querySelector('.th-menu-wrapper .th-menu-toggle');

            // Mobile Menu Logic
            if (mobileToggle && menuWrapper) {
                console.log('Mobile toggle and menu wrapper found');
                mobileToggle.addEventListener('click', (e) => {
                    e.preventDefault(); // Prevent any default action
                    console.log('Mobile toggle clicked');
                    menuWrapper.classList.add('th-body-visible');
                    document.body.style.overflow = 'hidden'; // Prevent background scrolling
                });
            } else {
                console.error('Mobile toggle or menu wrapper NOT found');
            }

            function closeMenu() {
                if (menuWrapper) {
                    menuWrapper.classList.remove('th-body-visible');
                    document.body.style.overflow = '';
                }
            }

            if (menuBackdrop) menuBackdrop.addEventListener('click', closeMenu);
            if (menuCloseBtn) menuCloseBtn.addEventListener('click', closeMenu);

            // Scroll Logic
            function handleScroll() {
                if (window.scrollY > 50) {
                    // Scrolled State
                    header.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-md');
                    headerBorder.classList.remove('border-white/10');
                    headerBorder.classList.add('border-transparent');

                    navLinks.forEach(link => {
                        if (!link.classList.contains('active-nav-link')) {
                            link.classList.remove('text-white');
                            link.classList.add('text-title');
                        }
                    });

                    if (mobileToggle) {
                        mobileToggle.classList.remove('text-white');
                        mobileToggle.classList.add('text-title');
                    }

                    // CHANGE LOGO WHEN STICKY
                    logo.src = "assets/img/sticky/agoo_logo.png";

                } else {
                    // Top State
                    header.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-md');
                    headerBorder.classList.add('border-white/10');
                    headerBorder.classList.remove('border-transparent');

                    navLinks.forEach(link => {
                        if (!link.classList.contains('active-nav-link')) {
                            link.classList.add('text-white');
                            link.classList.remove('text-title');
                        }
                    });

                    if (mobileToggle) {
                        mobileToggle.classList.add('text-white');
                        mobileToggle.classList.remove('text-title');
                    }

                    // DEFAULT LOGO ON TOP
                    logo.src = "assets/img/header/agoo_logo.png";
                }
            }

            window.addEventListener('scroll', handleScroll);
            handleScroll(); // Init
        });
    </script>