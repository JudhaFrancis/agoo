<?php
$REQUEST_URI_PATH = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', rtrim($REQUEST_URI_PATH, '/'));
$page_det = end($segments);
$page_det = $segments[array_key_last($segments)] ?: 'home';

// Default Metadata
$siteName = "Agoo Technologies";
$pageTitle = "Agoo Technologies - IT Solutions & Consultancy";
$pageDescription = "Agoo Technologies provides cutting-edge IT solutions, including web development, mobile apps, Salesforce consulting, and digital marketing.";
$pageImage = "assets/img/header/agoo_meta_logo.png"; // Default social share image
$currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $REQUEST_URI_PATH;

// Routing & Metadata Logic
switch ($page_det) {
    case "about":
        $pageTitle = "About Us - Agoo Technologies";
        $pageDescription = "Learn about Agoo Technologies, our mission, vision, and the expert team driving digital transformation for businesses worldwide.";
        $pageContent = 'pages/about.php';
        break;

    case "service":
        $pageTitle = "Our Services - Agoo Technologies";
        $pageDescription = "Explore our wide range of IT services including Web Development, Mobile Apps, Cloud Services, IT Consulting, and more.";
        $pageContent = 'pages/service.php';
        break;

    case "career":
        $pageTitle = "Careers - Join Agoo Technologies";
        $pageDescription = "Join our team of innovators. Check out current job openings/positions at agoot echologies and build your career with us.";
        $pageContent = 'pages/career.php';
        break;

    case "contact":
        $pageTitle = "Contact Us - Agoo Technologies";
        $pageDescription = "Get in touch with Agoo Technologies. We are here to help you with your IT needs. Visit us in Nagercoil or contact us online.";
        $pageContent = 'pages/contact.php';
        break;

    case "web-development":
        $pageTitle = "Web Development Services - Agoo Technologies";
        $pageDescription = "Custom web development services including responsive websites, e-commerce platforms, and web applications usually React, PHP, Node.js.";
        $pageContent = 'pages/web_development.php';
        break;

    case "mobile-app-development":
        $pageTitle = "Mobile App Development - Agoo Technologies";
        $pageDescription = "Native and cross-platform mobile app development for iOS and Android using Flutter and React Native.";
        $pageContent = 'pages/mobile_app_development.php';
        break;

    case "software-solution":
        $pageTitle = "Custom Software Solutions - Agoo Technologies";
        $pageDescription = "Tailored software solutions to streamline your business operations and improve efficiency.";
        $pageContent = 'pages/software_solution.php';
        break;

    case "cloud-services":
        $pageTitle = "Cloud Services & Solutions - Agoo Technologies";
        $pageDescription = "Scalable cloud solutions, migration, and management services on AWS, Azure, and Google Cloud.";
        $pageContent = 'pages/cloud_services.php';
        break;

    case "it-consulting":
        $pageTitle = "IT Consulting Services - Agoo Technologies";
        $pageDescription = "Expert IT consulting to align your technology strategy with your business goals.";
        $pageContent = 'pages/it_consulting.php';
        break;

    case "digital-marketing":
        $pageTitle = "Digital Marketing Services - Agoo Technologies";
        $pageDescription = "Data-driven digital marketing strategies including SEO, PPC, and Social Media Marketing to grow your business.";
        $pageContent = 'pages/digital_marketing.php';
        break;

    case "salesforce":
        $pageTitle = "Salesforce Consulting & Implementation - Agoo Technologies";
        $pageDescription = "Certified Salesforce consultants offering implementation, customization, and support for Sales, Service, and Marketing Clouds.";
        $pageContent = 'pages/salesforce.php';
        break;

    case "mail":
        // Mail likely doesn't need a full page render or is an API endpoint, but maintaining structure
        $pageContent = 'pages/mail.php';
        break;

    case "home":
    case "":
    default:
        $pageContent = 'pages/home.php';
        break;
}

include("include/header.php");
include($pageContent);
include("include/footer.php");
