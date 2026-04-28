<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Roamers - Explore the World with Our Social Travel Agency</title>
    <meta name="description"
        content="Join Roamers, a social travel agency offering exciting solo trip packages, weekend getaways, and group travel experiences. Explore, connect, and create unforgettable memories with like-minded travelers!">
    <meta name="keywords"
        content="travel, travel destinations, travel tips, travel guides, vacation, explore, adventure, travel experiences, travel inspiration, Roamers">
    <meta name="author" content="Themeland">
    <meta name="title" content="Roamers - Explore the World with Our Social Travel Agency">
    <meta property="og:title" content="Roamers | Your Gateway to Social Travel Adventures">
    <meta property="og:description"
        content="Discover the world with Roamers! From solo adventures to group travel, we create experiences that bring travelers together. Explore destinations, meet people, and make memories!">
    <meta property="og:image" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png">
    <meta property="og:image:secure_url" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png">
    <meta property="og:image:width" content="700">
    <meta property="og:image:height" content="500">
    <link rel="canonical" href="https://www.roamers.in/">
    <link rel="shortcut icon" href="assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/color.css">


    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Product",
            "name": "Example Product",
            "image": "https://www.roamers.in/path-to-product-image.jpg",
            "description": "Example product description.",
            "sku": "EX12345",
            "brand": {
                "@type": "Brand",
                "name": "Example Brand"
            },
            "offers": {
                "@type": "Offer",
                "url": "https://www.roamers.in/product-page",
                "priceCurrency": "USD",
                "price": "99.99",
                "itemCondition": "http://schema.org/NewCondition",
                "availability": "http://schema.org/InStock"
            },

        ]
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "What is the return policy?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "You can return the product within 30 days of purchase."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Does this product come with a warranty?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, it comes with a 1-year warranty."
                    }
                }
            ]
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "mainEntity": {
                "@type": "Article",
                "headline": "How to Use the Example Product",
                "description": "A comprehensive guide on how to use the Example Product.",
                "author": {
                    "@type": "Person",
                    "name": "Alex Johnson"
                },
                "datePublished": "2024-07-09",
                "mainEntityOfPage": "https://www.roamers.in/how-to-use-example-product"
            }
        }
    </script>

    <!-- WhatsApp Button Handler -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const whatsappButton = document.querySelector('.what-sum');
            if (whatsappButton) {
                whatsappButton.addEventListener("click", function (event) {
                    event.preventDefault();
                    var name1 = document.getElementById("name1") ? document.getElementById("name1").value
                        .trim() : "";
                    var phone1 = document.getElementById("phone1") ? document.getElementById("phone1").value
                        .trim() : "";
                    var des = document.getElementById("des") ? document.getElementById("des").value.trim() :
                        "";
                    var mess = document.getElementById("mess") ? document.getElementById("mess").value
                        .trim() : "";
                    var email1 = document.getElementById("email1") ? document.getElementById("email1").value
                        .trim() : "";

                    if (name1 && phone1 && email1) {
                        var params = [
                            "Client Requesting About Enquiry",
                            "Name: " + name1,
                            "E-mail: " + email1,
                            "Phone No: " + phone1,
                            "Desigination: " + des,
                            "Message: " + mess
                        ].join("%0a");
                        var url = "https://wa.me/+918122121066?text=" + encodeURIComponent(params);
                        var win = window.open(url);
                        if (win) {
                            win.focus();
                        }
                    } else {
                        alert("Please fill in all required fields (Name, Email, and Phone Number).");
                    }
                });
            }
        });
    </script>

    <!-- Image Slider -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var index = 0;
            var timer;
            var images = document.getElementsByClassName("slide-box");
            if (!images.length) return;

            function displayImages() {
                for (var i = 0; i < images.length; i++) {
                    images[i].style.display = "none";
                }
                index = (index + 1 > images.length) ? 1 : index + 1;
                images[index - 1].style.display = "block";
                timer = setTimeout(displayImages, 5000);
            }

            displayImages();

            for (var j = 0; j < images.length; j++) {
                images[j].addEventListener("mouseenter", function () {
                    clearTimeout(timer);
                });
                images[j].addEventListener("mouseleave", function () {
                    timer = setTimeout(displayImages, 5000);
                });
            }
        });
    </script>

    <!-- Main JS -->


    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0MSFD4117B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-0MSFD4117B');
    </script>

    <link rel="stylesheet" href="assets/css/expert-section.css">
</head>

<style>
    /* Keep existing styles */
    .gotoinsta:hover {
        background-color: #fff;
        color: #4ec0db;
        border: 2px solid #4ec0db;
        font-weight: 500;
    }

    .short-break-trips-img {
        height: 300px;
        width: 410px;
        object-fit: cover;
        border-radius: 25px 25px 0px 0px;
    }

    .silder-inner {
        border-radius: 0px 0px 25px 25px;
        box-shadow: #000;
    }

    .gotoinsta {
        z-index: 99 !important;
    }


    .new-year {
        position: absolute;
        height: 28px !important;
        width: 160px;
        transition: all 0.7s;
        border-radius: 0px !important;
    }

    .christmas {
        position: absolute;
        height: 28px !important;
        width: 160px;
        transition: all 0.7s;
        border-radius: 0px !important;
    }

    .slide-box {
        width: 100% !important;
        max-height: 600px;
    }

    .py-60 {
        padding: 60px 0px 50px 0;
    }

    .elfsight-app-d8fb604c-d55a-470d-bf66-89a000cb227d {
        display: none;
    }

    .quotes-img {
        display: grid !important;
        place-content: center !important;
    }

    .quotes-img-img1 {
        display: none !important;
    }

    .travelgram {
        background: url(assets/img/images/instaFinal-1.avif) !important;
        background-size: 100% 100% !important;
        object-fit: cover !important;
        background-repeat: no-repeat !important;
        padding: 60px 0px !important;
    }



    .inner2 {
        padding-bottom: 5px !important;
    }



    .head {
        position: relative !important;
        font-weight: 700 !important;
        font-size: 32px !important;
        text-transform: capitalize !important;
        margin: 0 0 2rem !important;
        color: #1f2327 !important;
        line-height: 1.4 !important;
        text-align: center !important;
    }

    /* dates update */
    .kodai-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .andaman-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .kerala-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .ooty-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .valley-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .view-more-btn {
        padding-top: 40px
    }

    .view-more-btn button {
        background-color: #4ec0db;
        color: #fff;
        font-weight: 600;
        padding: 10px 30px;
        border: none;
        border-radius: 3px;
    }

    .view-more-btn i {
        transition: 0.3s all;
        font-size: 17px;
        margin-left: 3px;
    }

    .view-more-btn button:hover i {
        transform: rotate(45deg);
    }

    .kedar-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .allappey-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .upcoming-mob {
        display: none;
    }

    .munnar-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .kodai1-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .pondi-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .wayanad-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .isha-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .chik-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .goa-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .ladakh-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    /*  */
    /* new */
    .result-item a {
        color: #000;
        font-size: 15px;
        padding: 10px;
        text-shadow: none;
    }

    .result-item a:hover {
        color: #000;
    }

    #search-results {
        color: red;
        text-shadow: 1px 2px 2px red;
        font-size: 15px;
        text-align: left;
        padding: 10px;
        border-radius: 5px;
        margin-top: 20px !important;
        padding-left: 0px;
        position: absolute;
        z-index: 99;
        gap: 20px;
        height: 400px;
        overflow: auto;
    }

    .result {
        display: flex;
        justify-content: center;
    }

    #search-container {
        max-width: 400px;
        margin: 0 auto;
    }

    .search {
        position: relative;
        top: 30%;
    }

    #search-results {
        list-style: none;
        padding: 0;
        margin: 10px 0;
        text-align: center;
    }

    .result-item {
        background-color: #fff;
        cursor: pointer;
        padding: 10px;
        transition: 0.5s all;
        border-bottom: 1px solid #000;
    }

    .result-item:hover {
        background-color: #4ec0db;
        color: #fff;
    }

    .result-item:hover .result-item a {
        color: #fff !important;
    }

    .result-item:hover a {
        color: #fff;
    }

    .search-bar-container {
        display: flex;
        align-items: center;
        background-color: transparent;
        padding: 5px;
        width: 250px;
        border: 1px solid #fff;
        height: 43px;
        border-radius: 50px;
        box-shadow: inset 2px 2px 8px #4ec0db, -2px -2px 10px #4ec0db;
        z-index: 99;
        transition: width 1.5s;
        transition: 0.5s all;
    }

    #search-input::placeholder {
        color: #fff;
        /* Set the desired color for the placeholder text */
    }

    .magnifier {
        width: 25px;
        cursor: pointer;
        filter: brightness(8.5);
    }

    .search-con {
        display: grid;
        place-content: center;
    }

    .mic-icon {
        width: 30px;
        position: absolute;
        right: 10px;
        transition: width 0.4s;
        transition-delay: 1s;
    }

    .input {
        background-color: transparent;
        border: none;
        margin: 0px -11px;
        width: 100%;
        outline: none;
        color: #fff;
        transition: width 1s;
        transition-delay: 0.5s;
    }

    .active.search-bar-container {
        width: 43px;
        left: 48%;
        transition: 0.5s all;
    }

    .social-menu ul {
        position: absolute;
        top: 90%;
        left: 50%;
        padding: 0;
        margin: 0;
        transform: translate(-50%, -50%);
        display: flex;
    }

    .before-overlay::before {
        position: absolute;
        content: '';
        background-color: #00000070;
        z-index: 99;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
    }

    .close-mark {
        text-align: center;
        display: none;
    }

    .fa-xmark {
        font-size: 30px;
        color: #fff;
        z-index: 999;
        position: relative;
        transition: 0.6s all;
        cursor: pointer;
    }

    .fa-xmark:hover {
        transform: rotate(80deg);
        color: #4ec0db;
    }

    .before-overlay {
        display: none;
        /* Initially hide the overlay */
    }

    .silder-inner h2,
    h3,
    h4 {
        text-shadow: none;
    }

    .search-box-con {
        border-radius: 10px;
        /* border: 2px solid #fff; */
        padding: 8px;
        -webkit-backdrop-filter: blur(9.8px);
        backdrop-filter: blur(9.8px);
        box-shadow: inset 2px 2px 8px #4ec0db, -2px -2px 4px #4ec0db;
    }

    .search-box-con img {
        height: 170px;
        object-fit: cover;
    }

    .trip-card {
        flex: 1 0 calc(25% - 20px);
    }

    .backpacking-img {
        height: 300px !important;
    }

    #search-results {
        display: none;
        gap: 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: start;
    }

    .trip-card {
        flex: 1 1 calc(50% - 20px);
        /* 2 columns with gap */
        max-width: calc(50% - 20px);
        box-sizing: border-box;
    }

    @media (max-width: 768px) {
        .trip-card {
            flex: 1 1 100%;
            max-width: 100%;
        }
    }
</style>
<!-- Banner Below Section -->
<style>
    * {
        box-sizing: border-box;
    }

    html,
    body {
        overflow-x: hidden;
        max-width: 100%;
        margin: 0;
    }

    .upcoming-container {
        position: relative;
        max-width: 1600px !important;
        margin: 0 auto;
        padding: 0 15px;
    }

    .upcoming-tabs {
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }

    @media (max-width: 600px) {
        .upcoming-tabs {
            gap: 6px;
            margin-bottom: 18px;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding: 0 10px;
            justify-content: flex-start;
            scrollbar-width: none;
            -ms-overflow-style: none;
            -webkit-overflow-scrolling: touch;
        }

        .upcoming-tabs::-webkit-scrollbar {
            display: none;
        }
    }

    .upcoming-tab-btn {
        background: #fff;
        color: #4CB9D3;
        border: 2px solid #4CB9D3;
        border-radius: 20px;
        padding: 8px 24px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: background 0.2s, color 0.2s;
        margin-bottom: 8px;
    }

    @media (max-width: 600px) {
        .upcoming-tab-btn {
            padding: 5px 20px;
            font-size: 12px;
            border-radius: 14px;
            margin-bottom: 4px;
        }
    }

    .upcoming-tab-btn.active,
    .upcoming-tab-btn:hover {
        background: #4CB9D3;
        color: #fff;
    }

    .upcoming-tab-content {
        display: none;
        margin-bottom: 0px;
        opacity: 0;
        transform: translateY(15px);
        backface-visibility: hidden;
        will-change: transform, opacity;
    }

    .upcoming-tab-content.active {
        display: block;
        animation: fadeInSlide 0.5s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
    }

    @keyframes fadeInSlide {
        0% {
            opacity: 0;
            transform: translateY(15px) scale(0.99);
        }

        100% {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

    }

    @media (max-width: 600px) {
        .upcoming-image {
            height: 500px !important;
            max-height: 70vw;
        }
    }

    @media (max-width: 400px) {
        .upcoming-image {
            height: 320px !important;
            max-height: 80vw;
        }
    }

    .upcoming-content {
        background: linear-gradient(180deg, rgba(86, 195, 221, 0) 0%, #56C3DD 100%);
        padding: 1px 1px 1px 1px;
        margin: 1px 1px 25px 1px;
        color: white;
        position: relative;
        z-index: 1;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        border-radius: 24px;
        height: 100%;
        display: flex;
        flex-direction: column;
        overflow: visible !important;
        /* Fix for button clipping */
    }

    @media (max-width: 600px) {
        .upcoming-content {
            padding: 0px;
        }
    }

    @media (max-width: 400px) {
        .upcoming-content {
            padding: 0px;
        }
    }

    .upcoming-card-flex {
        display: flex;
        justify-content: space-between;
        margin: 5px 15px 3px 10px;
        flex-wrap: wrap;
    }

    .upcoming-duration {
        display: flex;
        align-items: center;
        background-color: #FFFFFF;
        color: #292929;
        padding: 2px 6px;
        border-radius: 30px;
        font-size: 10px;
        font-weight: bold;
    }

    .upcoming-duration .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
        color: #7dd3e7;
    }

    .upcoming-duration .icon img {
        width: 12px !important;
    }

    .upcoming-from {
        display: flex;
        align-items: center;
        background-color: #4CB9D3;
        border-radius: 30px;
        padding: 3px 7px;
        font-size: 11px;
        color: #FFFFFF;
    }

    .upcoming-from .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
    }

    .upcoming-from .icon img {
        width: 6px !important;
    }

    .upcoming-title {
        font-size: 17px;
        text-transform: uppercase;
        color: white;
        text-align: start;
        margin: 5px 0px 0px 12px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .upcoming-locations {
        font-size: 12px;
        color: white;
        margin: 1px 12px;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .upcoming-price-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 0px 35px 1px 12px !important;
        flex-grow: 1;
    }

    .upcoming-dates {
        display: flex;
        align-items: center;
        background-color: #fff;
        color: #000000ff;
        padding: 5px 8px;
        border-radius: 19px;
        font-size: 8px;
        box-shadow: 0px 2px 4px 0px #00000040, 1px -1px 6px 0px #00000047 inset;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-weight: bold
    }

    .upcoming-dates .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
    }

    .upcoming-dates .icon img {
        width: 16px !important;
    }

    .upcoming-starts {
        font-size: 12px;
        font-weight: 800;
    }

    .upcoming-price {
        font-weight: bold;
        text-align: right;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .upcoming-view {
        position: absolute;
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #fff;
        color: #333 !important;
        /* Force dark text */
        border-radius: 18px;
        text-decoration: none;
        font-weight: bold;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1) !important;
        /* Force shadow visibility */
        font-size: 15px;
        z-index: 999;
        /* Max Z-index */
        transition: all 0.3s ease;
        padding: 8px 18px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .upcoming-header {
        margin: 50px 0 60px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
    }

    .upcoming-header-icon {
        color: #4CB9D3;
        font-size: 36px;
    }

    .upcoming-card {
        flex: 0 0 auto;
        width: 380px;
        min-width: 380px;
        max-width: 380px;
        height: 390px;
        position: relative;
        border: 2px solid;
        border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
        border-radius: 30px;
        background: transparent;
        scroll-snap-align: start;
        margin: 0 10px;
        transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1), transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .upcoming-image {
        width: 100%;
        height: 450px;
        border-radius: 24px;
        overflow: hidden;
    }

    .upcoming-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 24px;
        padding: 2px;
    }

    .upcoming-slider-wrapper {
        position: relative;
        width: 100%;
        padding: 0 0px !important;
        overflow: visible;
        /* contain: content; Removed to fix button clipping */
    }

    .upcoming-slider {
        display: flex;
        gap: 0px !important;
        padding: 0px 0px 50px 0px;
        /* Increased padding to prevent clipping */
        overflow-x: auto;
        overflow-y: visible;
        /* Try to allow hanging content */
        scroll-snap-type: x mandatory;
        scroll-padding: 15px;
        scrollbar-width: none;
        -ms-overflow-style: none;
        -webkit-overflow-scrolling: touch;
        will-change: scroll-position;
    }

    .upcoming-slider::-webkit-scrollbar {
        display: none;
    }


    .upcoming-slider-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: #fff;
        border: none;
        color: #4CB9D3;
        font-size: 1.5rem;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        cursor: pointer;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s;
    }

    .upcoming-slider-arrow.left {
        left: 0;
    }

    .upcoming-slider-arrow.right {
        right: 0;
    }

    .upcoming-slider-arrow:disabled {
        opacity: 0.4;
        cursor: not-allowed;
    }

    @media (max-width: 900px) {
        .upcoming-container {
            padding: 0 10px;
        }

        .upcoming-card {
            width: 320px;
            min-width: 320px;
            max-width: 320px;
            height: 330px;
        }

        .upcoming-image {
            height: 180px;
        }

        .upcoming-title {
            font-size: 16px;
        }

        .upcoming-locations {
            font-size: 11px;
        }

        .upcoming-price-section {
            flex-direction: row;
            gap: 10px;
        }

        .upcoming-slider-wrapper {
            padding: 0 32px;
        }

        .upcoming-view {
            bottom: -18px;
        }
    }

    @media (max-width: 600px) {
        .upcoming-container {
            padding: 0 5px;
        }

        .upcoming-tab-content {
            margin-bottom: 0px;
        }

        .upcoming-slider-wrapper {
            padding: 0;
        }

        .upcoming-slider {
            -webkit-overflow-scrolling: touch;
        }

        .upcoming-card {
            width: 350px;
            min-width: 320px !important;
            max-width: 150px;
            height: 325px !important;
            margin: 0;
            scroll-snap-align: center;
        }

        .upcoming-title {
            font-size: 14px;
        }

        .upcoming-locations {
            font-size: 10px;
        }

        .upcoming-price-section {
            margin: 0px 18px 10px 12px;
            gap: 8px;
            padding: auto;
        }

        .upcoming-dates {
            font-size: 7px;
            padding: 4px 6px;
            max-width: 60%;
        }

        .upcoming-starts {
            font-size: 10px;
        }

        .upcoming-price {
            font-size: 16px;
        }

        .upcoming-view {
            width: 110px;
            height: 36px;
            font-size: 13px;
            padding: 6px 12px;
            bottom: -18px;
        }

        .upcoming-header {
            font-size: 1.1rem;
            margin: 25px 0 35px;
        }

        .upcoming-header-icon {
            font-size: 22px;
        }

        .upcoming-slider-arrow {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }

        .upcoming-slider-arrow.left {
            left: 5px;
        }

        .upcoming-slider-arrow.right {
            right: 5px;
        }
    }

    @media (max-width: 400px) {

        .upcoming-card {
            width: calc(92vw - 16px);
            min-width: calc(92vw - 16px);
            max-width: calc(92vw - 16px);
            height: 280px;
        }

        .upcoming-title {
            font-size: 13px;
            margin: 10px 12px 0px 12px;
        }

        .upcoming-locations {
            font-size: 9px;
            margin: 0px 12px 0px 12px;
        }

        .upcoming-dates {
            font-size: 6px;
            padding: 3px 5px;
            max-width: 65%;
        }

        .upcoming-starts {
            font-size: 9px;
        }

        .upcoming-price {
            font-size: 14px;
        }

        .upcoming-view {
            width: 100px;
            height: 32px;
            font-size: 12px;
            padding: 5px 10px;
            bottom: -16px;
        }

        .upcoming-slider-wrapper {
            padding: 0;
        }
    }


    body {
        --liquid-glass-bg: linear-gradient(135deg, #e0e7ef 0%, #f5f7fa 100%);
        --liquid-glass-blur: 38px;
        --liquid-glass-radius: 26px;
        --liquid-glass-border: 1.5px solid rgba(255, 255, 255, 0.55);
        --liquid-glass-shadow: 0 6px 24px 0 rgba(31, 38, 135, 0.13), 0 2px 8px 0 rgba(255, 255, 255, 0.13);
        --liquid-glass-inner-glow: 0 0 0 2px rgba(255, 255, 255, 0.18) inset;
        --liquid-glass-icon-bg: white;
        --liquid-glass-icon-shadow: 0 2px 8px 0 rgba(78, 192, 219, 0.10);
        --liquid-glass-title: #1a1a1a;
        --liquid-glass-text: #2d4a5a;
    }

    .categories-section-bg {
        position: relative;
        background: #ddac81;
        background-size: cover;
        background-position: center center;
        min-height: 260px;
        width: 100%;
        padding: 8px 0 30px 0 !important;
        z-index: 1;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    @media (max-width: 900px) {
        .categories-section-bg {
            min-height: 200px;
            padding: 6px 0 6px 0 !important;
        }
    }

    @media (max-width: 600px) {
        .categories-section-bg {
            min-height: 80px;
            padding: 1px 0 1px 0 !important;
            flex-direction: column;
        }
    }

    /* iPhone specific tweaks using device-width and device-pixel-ratio */
    @media only screen and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {
        .categories-section-bg {
            min-height: 60px;
            padding: 0 !important;
        }

        .categories-row-single {
            gap: 0.4rem;
        }

        .liquid-glass-card {
            min-height: 28px;
            padding: 7px;
            gap: 0.05rem;
            max-width: 180px;
            width: 92vw;
        }

        .liquid-glass-title {
            font-size: 0.54rem;
            line-height: 1.01;
        }

        .liquid-glass-text {
            font-size: 0.41rem;
            line-height: 1.01;
            padding-left: 1px !important;
            padding-right: 1px !important;
        }

        .liquid-glass-icon {
            width: 18px;
            height: 18px;
            font-size: 0.6rem;
            margin-bottom: 0.03rem;
        }

        .liquid-glass-icon img {
            width: 12px !important;
            height: 12px !important;
        }
    }

    .categories-section-bg::before,
    .categories-section-bg::after {
        content: "";
        position: absolute;
        z-index: 0;
        pointer-events: none;
        border-radius: 50%;
        filter: blur(32px);
        opacity: 0.22;
    }

    .categories-section-bg::before {
        width: 180px;
        height: 16px;
        left: -40px;
        top: -40px;
        background: radial-gradient(circle at 30% 30%, #b6e0fe 0%, #f5f7fa 100%);
    }

    .categories-section-bg::after {
        width: 120px;
        height: 120px;
        right: -20px;
        bottom: -20px;
        background: radial-gradient(circle at 70% 70%, #fbc2eb 0%, #f5f7fa 100%);
    }

    .categories-container {
        position: relative;
        z-index: 2;
        width: 100%;
        text-align: center;
    }

    .categories-row-single {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: stretch;
        gap: 1rem;
        text-align: center;
    }

    .categories-col {
        flex: 1 1 0;
        max-width: 25%;
        min-width: 0;
        display: flex;
        align-items: stretch;
        margin-bottom: 0 !important;
        text-align: center;
        box-sizing: border-box;
    }

    @media (max-width: 991.98px) {
        .categories-row-single {
            gap: 0.7rem;
        }

        .categories-col {
            max-width: 44%;
            min-width: 120px;
        }
    }

    @media (max-width: 767.98px) {
        .categories-row-single {
            flex-direction: row;
            gap: 0.7rem;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            flex-wrap: nowrap;
            padding-bottom: 4px;
            text-align: center;
        }

        .categories-col {
            min-width: 54vw;
            max-width: 54vw;
            flex: 0 0 80vw;
        }

        .categories-section-bg {
            padding: 0px 0 0px 0;
        }

        .categories-col.center-on-mobile {
            margin-left: auto !important;
            margin-right: auto !important;
        }
    }

    /* Hide scrollbar on mobile for .categories-row-single */
    @media (max-width: 767.98px) {
        .categories-row-single {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .categories-row-single::-webkit-scrollbar {
            display: none;
        }
    }

    .liquid-glass-card {
        border-radius: var(--liquid-glass-radius);
        border: var(--liquid-glass-border);
        -webkit-backdrop-filter: blur(var(--liquid-glass-blur));
        backdrop-filter: blur(var(--liquid-glass-blur));
        transition: box-shadow 0.35s cubic-bezier(.4, 0, .2, 1), transform 0.35s cubic-bezier(.4, 0, .2, 1);
        position: relative;
        overflow: hidden;
        width: 100%;
        min-height: 110px;
        padding: 0.7rem;
        margin-left: auto;
        margin-right: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        gap: 0.5rem;
        box-sizing: border-box;
        isolation: isolate;
        text-align: center;
        height: 100%;
    }

    .liquid-glass-card::before {
        content: "";
        position: absolute;
        top: -30%;
        left: -30%;
        width: 120%;
        height: 120%;
        z-index: 0;
        pointer-events: none;
        border-radius: 50%;
        filter: blur(18px);
        opacity: 0.38;
    }

    .liquid-glass-card::after {
        content: "";
        position: absolute;
        top: 8px;
        left: 18px;
        width: 60%;
        height: 18px;
        border-radius: 12px;
        opacity: 0.55;
        pointer-events: none;
        z-index: 1;
        filter: blur(2px);
    }



    .liquid-glass-card>* {
        position: relative;
        z-index: 2;
    }

    @media (max-width: 991.98px) {
        .liquid-glass-card {
            min-height: 90px;
            padding: 0.6rem;
            gap: 0.4rem;
        }
    }

    @media (max-width: 767.98px) {
        .liquid-glass-card {
            min-height: 70px;
            padding: 0.5rem;
            gap: 0.3rem;
        }

        .liquid-glass-card::after {
            top: 4px;
            left: 10px;
            width: 70%;
            height: 12px;
        }
    }

    @media (max-width: 480px) {
        .liquid-glass-card {
            min-height: 36px;
            padding: 11px;
            gap: 0.1rem;
            max-width: 220px;
            width: 90vw;
        }

        .liquid-glass-card::after {
            top: 1px;
            left: 3px;
            width: 80%;
            height: 4px;
        }
    }

    .liquid-glass-icon {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: var(--liquid-glass-icon-bg);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        color: #4ec0db;
        box-shadow: var(--liquid-glass-icon-shadow);
        margin-bottom: 0.2rem;
        border: 1.2px solid rgba(255, 255, 255, 0.55);
        backdrop-filter: blur(8px) saturate(180%);
        -webkit-backdrop-filter: blur(8px) saturate(180%);
        transition: box-shadow 0.3s;
        text-align: center;
    }

    @media (max-width: 480px) {
        .liquid-glass-icon {
            width: 22px;
            height: 22px;
            font-size: 0.7rem;
            margin-bottom: 0.05rem;
        }

        .liquid-glass-icon img {
            width: 14px !important;
            height: 14px !important;
        }
    }

    .liquid-glass-inner {
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        gap: 0.1rem;
        text-align: center;
    }

    .liquid-glass-title {
        color: #FFFFFF !important;
        font-weight: 700;
        letter-spacing: 0.1px;
        margin-bottom: 0.05rem;
        text-shadow: 0 1px 4px rgba(255, 255, 255, 0.13);
        font-size: 1.01rem;
        line-height: 1.15;
        text-align: center;
        width: 100%;
        background: none !important;
        -webkit-background-clip: unset !important;
        -webkit-text-fill-color: unset !important;
        background-clip: unset !important;
    }

    @media (max-width: 480px) {
        .liquid-glass-title {
            font-size: 0.62rem;
            line-height: 1.05;
        }
    }

    .liquid-glass-text {
        color: #000 !important;
        font-size: 0.87rem;
        font-weight: 400;
        text-shadow: 0 1px 4px rgba(255, 255, 255, 0.10);
        line-height: 1.22;
        margin-bottom: 0;
        text-align: center;
        width: 100%;
    }

    @media (max-width: 480px) {
        .liquid-glass-text {
            font-size: 0.48rem;
            line-height: 1.05;
            padding-left: 2px !important;
            padding-right: 2px !important;
        }
    }
</style>
<!-- Events Section -->
<style>
    html,


    .event-card {
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        /* Smoother easing curve (ease-out-back like) */
        will-change: transform, box-shadow;
        /* Prepares for smooth GPU rendering */
        backface-visibility: hidden;
        /* Prevents flickering on some browsers */
    }

    .event-card-content {
        position: absolute;
        bottom: 20px;
        left: 0;
        width: 100%;
        z-index: 2;
        margin-top: 0 !important;
        padding: 0 20px;
        left: 0;
        width: 100%;
        z-index: 2;
        margin-top: 0 !important;
    }

    @media (max-width: 768px) {
        .event-card-content {
            margin-top: 0 !important;
            bottom: 20px;
            /* Adjusted for tablet */
        }
    }

    @media (max-width: 480px) {
        .event-card-content {
            margin-top: 0 !important;
            bottom: 20px;
            /* Percentage based for fluid height */
        }
    }

    /* Optional: Reduce motion for users who prefer it */
    @media (prefers-reduced-motion: reduce) {
        .event-card {
            transition: none;
        }

        .event-card:hover {
            transform: none;
            box-shadow: none;
        }
    }

    .event-container {
        position: relative;
        /* max-width: 1500px; */
        margin: 0 auto;
        padding: 0 15px;
        overflow: visible !important;
    }

    .event-card {
        flex: 0 0 auto;
        width: 350px;
        min-width: 300px;
        max-width: 378px;
        height: 350px;
        position: relative;
        border: 2px solid;
        border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
        border-radius: 30px;
        background: transparent;
        scroll-snap-align: start;
        margin: 0 10px;
        overflow: visible !important;
    }

    .event-image {
        width: 100%;
        height: 450px;
        border-radius: 24px;
        overflow: visible !important;
    }

    .event-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 24px;
        padding: 2px;
    }

    @media (max-width: 600px) {
        .event-image {
            height: 100% !important;
            max-height: none !important;
        }
    }

    @media (max-width: 400px) {
        .event-image {
            height: 100% !important;
            max-height: none !important;
        }
    }

    .event-content {
        background: white;
        padding: 1px 1px 1px 1px;
        margin: 1px 1px 25px 1px;
        color: white;
        position: relative;
        z-index: 1;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        border-radius: 24px;
        height: 100%;
        display: flex;
        flex-direction: column;
        overflow: visible;
    }

    @media (max-width: 600px) {
        .event-content {
            padding: 0px;
        }
    }

    @media (max-width: 400px) {
        .event-content {
            padding: 0px;
        }
    }

    .event-card-flex {
        display: flex;
        justify-content: space-between;
        /* margin: 5px 15px 3px 10px; */
        flex-wrap: wrap;
    }

    .event-duration {
        display: flex;
        align-items: center;
        background-color: #FFFFFF;
        color: #292929;
        padding: 2px 6px;
        border-radius: 30px;
        font-size: 10px;
        font-weight: bold;
    }

    .event-duration .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
        color: #7dd3e7;
    }

    .event-duration .icon img {
        width: 12px !important;
    }

    .event-from {
        display: flex;
        align-items: center;
        background-color: #4CB9D3;
        border-radius: 30px;
        padding: 3px 7px;
        font-size: 11px;
        color: #FFFFFF;
    }

    .event-from .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
    }

    .event-from .icon img {
        width: 6px !important;
    }

    .event-title {
        font-size: 15px;
        text-transform: uppercase;
        color: white;
        text-align: start;
        margin: 5px 0px 0px 12px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    .event-locations {
        font-size: 12px;
        color: black;
        margin: 1px 12px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    .event-price-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        justify-content: space-between;
        margin: 0;
        margin-top: 10px;
        width: 100%;
        flex-grow: 1;
        color: black;
    }

    .event-dates {
        display: flex;
        align-items: center;
        /* background-color: #fff; */
        color: white;
        padding: 5px 8px;
        border: 1px solid white;
        border-radius: 19px;
        font-size: 8px;
        box-shadow: 0px 2px 4px 0px #00000040, 1px -1px 6px 0px #00000047 inset;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .event-dates .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
    }

    .event-dates .icon img {
        width: 16px !important;
    }

    .event-starts {
        font-size: 12px;
        font-weight: 800;
    }

    .event-price {
        font-weight: bold;
        text-align: right;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .event-view {
        position: absolute;
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #fff;
        color: #333 !important;
        /* Force dark text */
        border-radius: 18px;
        text-decoration: none;
        font-weight: bold;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1) !important;
        /* Force shadow visibility */
        font-size: 15px;
        z-index: 10;
        transition: all 0.3s ease;
        padding: 8px 18px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .event-slider-wrapper {
        position: relative;
        width: 100%;
        /* padding: 0 40px; */
        overflow: visible;
        /* contain: content; Removed to fix button clipping */
    }

    .event-slider {
        display: flex;
        justify-content: space-evenly;
        gap: 0px;
        padding: 0px 0px 80px 0px;
        overflow-x: hidden;
        overflow-y: visible;
        scroll-snap-type: x mandatory;
        scroll-padding: 15px;
        scrollbar-width: none;
        -ms-overflow-style: none;
        -webkit-overflow-scrolling: touch;
        will-change: scroll-position;
        flex-wrap: nowrap;
    }

    .event-slider::-webkit-scrollbar {
        display: none;
    }

    /* Drag cursor feedback */
    /* .event-slider {
        cursor: grab;
    }

    .event-slider.dragging {
        cursor: grabbing;
    } */

    .event-slider-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: #ffffff46;
        border: none;
        color: #4ec0db;
        font-size: 1.5rem;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        cursor: pointer;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s;
    }

    .event-slider-arrow.left {
        left: 0;
    }

    .event-slider-arrow.right {
        right: 0;
    }

    .event-slider-arrow:disabled {
        /* opacity: 0.4; */
        /* cursor: not-allowed; */
        z-index: 999;
    }

    @media (max-width: 900px) {
        .event-container {
            padding: 0 10px;
        }

        .event-card {
            width: 320px;
            min-width: 320px;
            max-width: 320px;
            height: 330px;
        }

        .event-image {
            height: 300px;
        }

        .event-title {
            font-size: 16px;
        }

        .event-locations {
            font-size: 11px;
        }

        .event-price-section {
            flex-direction: row;
            gap: 10px;
        }

        .event-slider-wrapper {
            padding: 0 32px;
        }

        .event-view {
            bottom: -18px;
        }
    }

    @media (max-width: 600px) {
        .event-container {
            padding: 0 5px;
        }

        .event-slider-wrapper {
            padding: 0;
        }

        .event-slider {
            -webkit-overflow-scrolling: touch;
        }

        .event-card {
            width: 85vw;
            min-width: 85vw;
            max-width: 85vw;
            height: 85vw !important;
            margin: 0 15px 0 0;
            scroll-snap-align: center;
        }

        .event-title {
            font-size: 14px;
            margin: 10px 12px 0px 12px;
            /* Standardized margin */
        }

        .event-locations {
            font-size: 10px;
            margin: 0px 12px 0px 12px;
            /* Standardized margin */
        }

        .event-price-section {
            margin: 0px 18px 10px 12px;
            gap: 8px;
            padding: 0;
            /* Removed auto padding */
        }

        .event-dates {
            font-size: 7px;
            padding: 4px 6px;
            max-width: 60%;
        }

        .event-starts {
            font-size: 10px;
        }

        .event-price {
            font-size: 16px;
        }

        .event-view {
            width: 110px;
            height: 36px;
            font-size: 9px !important;
            /* padding: 6px 12px; */
            bottom: -18px;
            left: 0;
            right: 0;
            margin: 0 auto;
            transform: none;
            width: fit-content;
        }

        .event-slider-arrow {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }

        .event-slider-arrow.left {
            left: 5px;
        }

        .event-slider-arrow.right {
            right: 5px;
        }
    }

    @media (max-width: 400px) {
        .event-card {
            width: 85vw;
            min-width: 85vw;
            max-width: 85vw;
            height: 85vw;
            margin-right: 15px;
        }

        .event-title {
            font-size: 13px;
            margin: 10px 12px 0px 12px;
        }

        .event-locations {
            font-size: 9px;
            margin: 0px 12px 0px 12px;
        }

        .event-dates {
            font-size: 6px;
            padding: 3px 5px;
            max-width: 65%;
        }

        .event-starts {
            font-size: 9px;
        }

        .event-price {
            font-size: 14px;
        }

        .event-view {
            width: 100px;
            height: 32px;
            font-size: 12px;
            padding: 5px 10px;
            bottom: -16px;
            left: 0;
            right: 0;
            margin: 0 auto;
            transform: none;
            width: fit-content;
        }

        .event-slider-wrapper {
            padding: 0;
        }
    }
</style>
<style>
    /* Responsive slot badge for event cards */
    .event-slot-badge {
        position: absolute;
        top: 15px;
        right: 18px;
        z-index: 3;
        background-color: white;
        border: none;
        border-radius: 20px;
        padding: 4px 8px;
        display: flex;
        align-items: center;
        /* box-shadow: 0 1px 4px rgba(0, 0, 0, 0.07); */
        min-width: 70px;
    }

    .event-slot-badge .event-dates-text {
        font-weight: 700;
        font-size: 10px;
        color: #4ec0db;
        display: flex;
        align-items: center;
    }

    @media (max-width: 768px) {
        .event-slot-badge {
            top: 10px;
            right: 10px;
            padding: 3px 7px;
            min-width: 60px;
        }

        .event-slot-badge .event-dates-text {
            font-size: 9px;
        }
    }

    @media (max-width: 480px) {
        .event-slot-badge {
            top: 15px;
            bottom: unset;
            right: 15px;
            left: unset;
            padding: 2px 6px;
            min-width: 54px;
        }

        .event-slot-badge .event-dates-text {
            font-size: 8px;
        }
    }
</style>

<body>

    <!-- Header Section -->
    <header>
        <?php include('includes/header.php'); ?>
    </header>

    <main>

        <!-- Preloader Section -->
        <?php include('includes/loader.php'); ?>

        <!-- Banner Section-->
        <div id="staticBanner" class="banner-bg-static">

            <style>
                .home {
                    padding: 160px 0px 220px 0px;
                    background-repeat: no-repeat !important;
                    background-size: cover !important;
                    background-position: top !important;
                    height: 120vh;
                }

                .home {
                    background: url('assets/img/banner/desktop-banner-avif.avif');
                    object-fit: cover !important;
                }

                @media (max-width: 600px) {

                    .home {
                        padding: 100px 0px 0px 0px;
                        background: url('assets/img/banner/mobile-banner.avif');
                        background-size: 100% 100% !important;
                        background-repeat: no-repeat !important;
                        background-position: top !important;
                        background-position-y: 5px !important;
                        width: 100vw;
                        height: 100vw;
                        /* background-position-x: 5px !important; */
                    }

                    .categories-container {
                        padding-bottom: 30px !important;
                    }

                    .py-60 {
                        padding: 55px 0px 60px 0px !important;
                    }

                    .form {
                        padding: 32px 20px 20px 20px !important;
                    }

                    .search-bar-container {
                        width: 200px !important;
                        height: 33px !important;
                    }

                    .categories1 {
                        padding: 30px 10px !important;
                    }

                    .home-row {
                        position: absolute;
                        margin: auto;
                        bottom: 19px !important;
                        left: 8.5%;
                    }

                    .testimonials {
                        padding: 2rem 0rem !important;
                        margin: -75px 0px 20px 0px !important;
                        width: 100% !important;
                        background: none !important;
                        box-shadow: none !important;
                    }

                    .roamers-head {
                        display: none !important;
                    }

                    .inner-home h4 {
                        font-size: 11px !important;
                    }

                    .travelgram {
                        background: url(assets/img/bg/Vertical-film-roll.jpg) !important;
                        background-size: cover !important;
                        background-position: center !important;
                        object-fit: cover !important;
                        background-repeat: no-repeat !important;
                        padding: 153px 0px !important;
                    }

                    .quotes-img-img {
                        display: none !important;
                    }

                    .quotes-img {
                        margin-bottom: 0px !important;
                    }

                    .silder-inner h4 {
                        font-size: 12px !important;

                    }

                    .inner {
                        padding-top: 5px !important;
                        padding-bottom: 5px !important;
                    }

                    .quotes-img-img1 {
                        display: block !important;
                    }

                    .bbb {
                        margin-top: -72px !important;
                    }

                    .search-con {
                        margin-bottom: 0px !important;
                        margin-top: -20px !important;
                    }

                    .gotoinsta {
                        margin-bottom: 30px;
                        padding: 7px 20px !important;
                        font-size: 16px;
                        width: 156px !important;
                    }

                    .search {
                        top: 6% !important;
                    }

                    .ml11 {
                        margin-top: 320px !important;
                    }

                    .letters {
                        font-size: calc(1em + 4vmin) !important;
                    }

                    .home {
                        height: 600px !important;
                    }

                    .navbar-nav {
                        padding-top: 20px !important;
                        padding-bottom: 10px !important;
                    }

                    .upcoming-mob {
                        display: block !important;
                    }

                    .view-more-btn {
                        padding-bottom: 30px !important;
                    }

                    #search-results {
                        display: block !important;
                    }

                    .trip-card {
                        margin-bottom: 20px !important;
                    }

                    .search-box-con img {
                        height: 170px !important;
                    }
                }

                .home-behind-content {
                    text-align: center;
                    letter-spacing: 5px;
                    position: relative;
                    display: grid;
                    place-items: center;
                    color: #ffffff38;
                    font-size: 200px;
                    font-weight: 600;
                    text-transform: uppercase;
                    line-height: 1.3em;
                    letter-spacing: 2px;
                }


                .home-icon-content img {
                    width: 60px;
                    height: 60px;
                    filter: invert(1);
                    margin: 0px 0px 10px;
                }

                .home-icon-content h3 {
                    font-size: 20px;
                    font-weight: 200;
                    color: white;
                    text-align: center;
                    margin: 10px 0px;
                }

                .home-icon-content h4 {
                    font-size: 22px;
                    font-weight: 400;
                    color: white;
                    text-align: center;
                }

                .home-icon-content {
                    margin-top: 30px;
                }


                .home-row {
                    position: absolute;
                    width: 86%;
                    margin: auto;
                    bottom: 50px;
                    left: 7%;
                    right: 7%;
                }

                .margin {
                    margin-top: 100px;
                }

                @media (max-width: 768px) {
                    .margin {
                        margin-top: 60px;
                    }
                }

                @media (max-width: 480px) {
                    .margin {
                        margin-top: 40px;
                    }
                }
            </style>

            <section class="home">
                <div class=" home1 before-overlay">
                </div>
                <div class="close-mark">
                    <i onclick="closebefore()" class="fa-solid fa-xmark"></i>
                </div>
                <div class="search">
                    <div class="search-con">
                        <div id="maxsearch" onclick="maxsearch()" class="search-bar-container">
                            <img src="https://cdn4.iconfinder.com/data/icons/evil-icons-user-interface/64/magnifier-512.png"
                                alt="magnifier" class="magnifier" />
                            <input type="text" class="input" id="search-input" placeholder="Search..."
                                autocomplete="off">
                        </div>
                    </div>
                    <div class="result">
                        <div class="container" id="search-results">
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function maxsearch() {
                        var maxsearch = document.getElementById("maxsearch");
                        maxsearch.style.width = "350px";
                        var before = document.querySelector('.before-overlay');
                        before.style.display = "block";
                        var close = document.querySelector(".close-mark");
                        close.style.display = "block";
                        document.querySelector(".search").style.top = "11%";
                    }

                    function closebefore() {
                        var before = document.querySelector('.before-overlay');
                        before.style.display = "none";
                        var close = document.querySelector(".close-mark");
                        close.style.display = "none";
                        var maxsearch = document.getElementById("maxsearch");
                        maxsearch.style.width = "250px";
                        document.getElementById("search-results").style.display = "none";
                        document.querySelector(".search").style.top = "28%";

                        // Clear the input field
                        document.getElementById("search-input").value = "";
                    }
                </script>

                <div class="margin">
                    <div class="row home-row">
                        <div class="col-3">
                            <div class="home-icon-content text-center" style="margin-bottom: 52px;">
                                <picture>
                                    <source srcset="assets/img/icon/solo.png" media="(max-width: 800px)">
                                    <img src="assets/img/icon/solo.png" alt="home icon image">
                                </picture>
                                <h4>Solo friendly</h4>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="home-icon-content text-center">
                                <picture>
                                    <source srcset="assets/img/icon/roadshow.png" media="(max-width: 800px)">
                                    <img src="assets/img/icon/roadshow.png" alt="home icon image">
                                </picture>
                                <h4>
                                    Group Trips</h4>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="home-icon-content text-center">
                                <picture>
                                    <source srcset="assets/img/icon/trekcamp.png" media="(max-width: 800px)">
                                    <img src="assets/img/icon/trekcamp.png" alt="home icon image">
                                </picture>
                                <h4>
                                    Treks, Camps</h4>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="home-icon-content text-center">
                                <picture>
                                    <source srcset="assets/img/icon/Meetups.png" media="(max-width: 800px)">
                                    <img src="assets/img/icon/Meetups.png" alt="home icon image">
                                </picture>
                                <h4>
                                    Roamers <br class="d-block d-sm-none"> Meetups</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="categories-section-bg">
            <section class="categories-container">
                <div class="container" style="max-width: 900px; text-align: center;">
                    <div class="categories-row-single">
                        <div class="categories-col center-on-mobile">
                            <div class="liquid-glass-card  pt-3">
                                <span class="liquid-glass-icon"><img src="assets/img/icon/travelbuddies-01.png" alt=""
                                        style="width:100%;height:auto;max-width:32px;max-height:32px;"></span>
                                <div class="liquid-glass-inner">
                                    <h2 class="liquid-glass-title">Travel Buddies United</h2>
                                    <p class="liquid-glass-text px-2 py-1 px-md-4 py-md-2 text-white">
                                        Say Hi to your new travel squad – your undiscovered Besties!
                                        Whether you join solo or in a group, you’re all set for an epic adventure!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="categories-col">
                            <div class="liquid-glass-card  pt-3">
                                <span class="liquid-glass-icon"><img src="assets/img/icon/Inclusions-01.png" alt=""
                                        style="width:100%;height:auto;max-width:32px;max-height:32px;"></span>
                                <div class="liquid-glass-inner">
                                    <h2 class="liquid-glass-title">Everything Included, No Fuss</h2>
                                    <p class="liquid-glass-text  px-2 py-1 px-md-4 py-md-2 text-white">
                                        Forget about transport, hotels, and planning. Just one booking, and we've got
                                        everything
                                        taken care of for you.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="categories-col">
                            <div class="liquid-glass-card  pt-3">
                                <span class="liquid-glass-icon"><img src="assets/img/icon/Expertguide-01.png" alt=""
                                        style="width:100%;height:auto;max-width:32px;max-height:32px;"></span>
                                <div class="liquid-glass-inner">
                                    <h2 class="liquid-glass-title">Led by the Pros</h2>
                                    <p class="liquid-glass-text   px-2 py-1 px-md-4 py-md-2 text-white">
                                        Cool trip leaders and local guides who know their stuff, and they're fun too!
                                        They've
                                        got the best insights and will help you out whenever you need it.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="categories-col">
                            <div class="liquid-glass-card pt-3">
                                <span class="liquid-glass-icon"><img src="assets/img/icon/transportation.png" alt=""
                                        style="width:100%;height:auto;max-width:20px;max-height:20px;"></span>
                                <div class="liquid-glass-inner">
                                    <h2 class="liquid-glass-title">One-of-a-kind adventure</h2>
                                    <p class="liquid-glass-text  px-2 py-1 px-md-4 py-md-2 text-white">
                                        Unique experiences selected by those in the know. Whether local grub, must-see
                                        spots,
                                        and totally cool one-of-a-kind stuff, we've handpicked it all for you.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- Upcoming Trips Section -->
        <div style="margin-top: 50px; ">
            <?php
            /**
             * ==========================================
             *          DEVELOPER GUIDE: UPCOMING TRIPS
             * ==========================================
             * 
             * This component uses a dynamic PHP structure to render trips. 
             * You do NOT need to edit the HTML directly for standard updates.
             * 
             * ------------------------------------------
             * 1. HOW TO ADD A NEW TRIP TYPE
             * ------------------------------------------
             * Add a new entry to the $trips_db array.
             * Key: A unique identifier (e.g., 'new_trip_name')
             * Value: An array with the following fields:
             *   - title: Name of the trip
             *   - image: Path to the image
             *   - duration: e.g., '3D/2N'
             *   - location: e.g., 'Ex: Chennai'
             *   - places: List of places covered
             *   - price: Display price (e.g., '₹9,999'). Leave empty if using class.
             *   - price_class: (Optional) CSS class for custom price styling (e.g., 'munnar-price')
             *   - link: URL to the trip page
             * 
             * Example:
             * 'my_new_trip' => [
             *     'title' => 'My New Trip',
             *     'image' => 'assets/img/my-trip.jpg',
             *     ...
             * ],
             * 
             * ------------------------------------------
             * 2. HOW TO SCHEDULE A TRIP
             * ------------------------------------------
             * Add the trip's unique key to the $month_schedules array under the desired month.
             * 
             * Example (Adding 'my_new_trip' to March):
             * 'mar' => [
             *     ['trip_id' => 'my_new_trip', 'dates' => 'Mar 15, 22'],
             * ],
             * 
             * ==========================================
             */

            //  Trip Database we have to add the trips here for the upcoming trips in the database
            $trips_db = [

                'tawang' => [
                    'title' => 'THE TAWANG ESCAPE',
                    'image' => 'assets/img/tawang/cards/up-comming-card.avif',
                    'duration' => '7D/6N',
                    'location' => 'Ex: Guwahati',
                    'places' => 'Guwahati',
                    'price' => '',
                    'price_class' => 'tawang-price',
                    'original_price' => '',
                    'link' => 'tawang'
                ],
                'leh-ladakh' => [
                    'title' => 'LEH LADAKH GRAND CIRCUIT',
                    'image' => 'assets/img/ladakh/card-image/ladakh-card-image.avif',
                    'duration' => '8D/7N',
                    'location' => 'Ex: Leh',
                    'places' => 'Leh-Ladakh',
                    'price' => '',
                    'price_class' => 'ladakh-umlingla-price',
                    'original_price' => '',
                    'link' => 'ladakh-circuit'
                ],
                'meghalaya' => [
                    'title' => 'MAJESTIC MEGHALAYA',
                    'image' => 'assets/img/meghalaya/meghalaya-gallery-03.avif',
                    'duration' => '6D/5N',
                    'location' => 'Ex: Guwahati',
                    'places' => 'Guwahati, Shillong, Cherrapunjee',
                    'price' => '',
                    'price_class' => 'meghalaya-price',
                    'original_price' => '',
                    'link' => 'meghalaya'
                ],
                'varkala' => [
                    'title' => 'Varkala',
                    'image' => 'assets/img/valley-of-flowers/avif/img-4.avif',
                    'duration' => '3D/2N',
                    'location' => 'EX: Chennai/Trivandrum',
                    'places' => 'Chennai - Trivandrum',
                    'price' => '',
                    'price_class' => 'varkala-price',
                    'link' => 'varkala-grouptrip'
                ],
                'chikmagalur' => [
                    'title' => 'CHIKKAMAGALURU BACKPACKING',
                    'image' => 'assets/img/testimonials/chikmagalur.avif',
                    'duration' => '3D/2N',
                    'location' => 'EX: Chennai - Bangalore',
                    'places' => 'Chikkamagaluru, Z point, Hebbe Falls',
                    'price' => '',
                    'price_class' => 'chik-price',
                    'link' => 'chikmagalur'
                ],
                // munnar with kolukkumalai
                'munnar' => [
                    'title' => 'Munnar with Kolukkumalai',
                    'image' => 'assets/img/kolukkumalai-img/2.jpg',
                    'duration' => '3D/2N',
                    'location' => 'EX: Chennai',
                    'places' => 'Munnar',
                    'price' => '',
                    'price_class' => 'munnar-price',
                    'link' => 'kolukkumalai-trek'
                ],
                'srilanka' => [
                    'title' => 'Sri Lanka',
                    'image' => 'assets/img/valley-of-flowers/avif/img-2.avif',
                    'duration' => '7D/6N',
                    'location' => 'EX: Colombo',
                    'places' => 'Sigiriya, Kandy, Ella, Galle, Bentota',
                    'price' => '',
                    'price_class' => 'srilanka-price',
                    'link' => 'srilanka'
                ],
                'pondi' => [
                    'title' => 'Pondi Dive-in',
                    'image' => 'assets/img/valley-of-flowers/avif/img-3.avif',
                    'duration' => '2D/1N',
                    'location' => 'EX: Direct, Chennai',
                    'places' => 'Pondicherry',
                    'price' => '',
                    'price_class' => 'pondi-price',
                    'link' => 'pondicherry'
                ],
                'valley' => [
                    'title' => 'Valley of Flowers Trek',
                    'image' => 'assets/img/valley-of-flowers/avif/img-1.avif',
                    'duration' => '5D/6N',
                    'location' => 'Ex: Rishikesh',
                    'places' => 'Rishikesh, Joshimath, Pulna',
                    'price' => '',
                    'price_class' => 'valley-price',
                    'link' => 'valley-of-flowers'
                ],
                'andaman' => [
                    'title' => 'Andaman Island Hopping',
                    'image' => 'https://roamers.in/assets/img/backpacking/Andaman%20hoppers.jpg',
                    'duration' => '7D/6N',
                    'location' => 'EX: Port Blair',
                    'places' => 'Port Blair, Ross Island, Havelock, Neil',
                    'price' => '',
                    'price_class' => 'andaman-price',
                    'link' => 'andaman'
                ],
                'kodaikanal' => [
                    'title' => 'KODAIKANAL BACKPACKING',
                    'image' => 'assets/img/kodaikanal/Kodai.jpg',
                    'duration' => '3D/2N',
                    'location' => 'EX: Chennai',
                    'places' => 'Kodaikanal , Vattakanal , Poombarai',
                    'price' => '',
                    'price_class' => 'kodaikanal-price',
                    'link' => 'kodaikanal1'
                ],
                'wayanad' => [
                    'title' => 'Wonders of Wayanad',
                    'image' => 'assets/optimized-images/wayand-trip/upcoming-group-trips-cover.avif',
                    'duration' => '3D/2N',
                    'location' => 'EX: Chennai',
                    'places' => 'Wayanad',
                    'price' => '',
                    'price_class' => 'wayanad-price',
                    'link' => 'wayanad'
                ],
                'kerala_onam' => [
                    'title' => 'Onam Special – Kerala Getaway',
                    'image' => 'assets/img/kerala-onam/kerala-onam (11).avif',
                    'duration' => '3D/2N',
                    'location' => 'EX: Chennai',
                    'places' => 'Munnar , Alappuzha',
                    'price' => '',
                    'price_class' => 'kerala-onam-price',
                    'link' => 'kerala-onam'
                ],
                'ooty' => [
                    'title' => 'Ooty The Queen of Hills',
                    'image' => 'assets/img/Ooty/Ooty%20pic%201.jpg',
                    'duration' => '3D/2N',
                    'location' => 'EX: Chennai, Coimbatore',
                    'places' => 'Ooty, Pykara, Coonoor, Isha',
                    'price' => '',
                    'price_class' => 'ooty-price',
                    'link' => 'ooty'
                ],
                'spiti' => [
                    'title' => 'SPITI (WITH CHANDRATAL)',
                    'image' => 'assets/img/spiti-valley/cover/spiti-chandratal-trek.avif',
                    'duration' => '7D/6N',
                    'location' => 'Ex: Delhi',
                    'places' => 'Kalpa, Kaza, Chandratal',
                    'price' => '',
                    'price_class' => 'spiti-price',
                    'link' => '#'
                ],
                'thailand' => [
                    'title' => 'THAILAND BACKPACKING',
                    'image' => 'https://www.noblehouseindia.org/wp-content/uploads/2025/04/thailand-tour-package-from-kolkata.png',
                    'duration' => '6D/5N',
                    'location' => 'Ex: Bangkok',
                    'places' => 'Bangkok, Pattaya, Coral Island',
                    'price' => '',
                    'price_class' => 'thailand-price',
                    'link' => '#'
                ],
                'kerala' => [
                    'title' => 'KERALA BACKPACKING',
                    'image' => 'assets/img/backpacking/Kerala centre.jpg',
                    'duration' => '5D/4N',
                    'location' => 'Ex: Kochi',
                    'places' => 'Munnar, Alleppey, Varkala',
                    'price' => '',
                    'price_class' => 'kerala-price',
                    'link' => 'kerala'
                ],
                'kedarkantha' => [
                    'title' => 'KEDARKANTHA TREK',
                    'image' => 'assets/img/kedarkantha/main-sub.avif',
                    'duration' => '6D/5N',
                    'location' => 'Ex: Dehradun',
                    'places' => 'Sankri, Juda Ka Talab, Kedarkantha Peak',
                    'price' => '',
                    'price_class' => 'kedarkantha-price',
                    'link' => 'kedarkantha-old'
                ],
                // Yelagiri
                'yelagiri' => [
                    'title' => 'YELAGIRI ALL-IN-ONE',
                    'image' => 'assets/img/yelagiri/yelagiri-014.jpg',
                    'duration' => '2D/1N',
                    'location' => 'Ex: Chennai',
                    'places' => 'Yelagiri',
                    'price' => '',
                    'price_class' => 'yelagiri-price',
                    'link' => 'yelagiri'
                ],
            ];
            // Month schedules we have to add the trips here based on the month for the upcoming trips
            $month_schedules = [
                'jan' => [
                    ['trip_id' => 'srilanka', 'dates' => 'Jan 14, 28'],
                    ['trip_id' => 'andaman', 'dates' => 'Jan 14, 21'],
                    ['trip_id' => 'thailand', 'dates' => 'Jan 10, 24'],
                    ['trip_id' => 'kerala', 'dates' => 'Jan 14, 27'],
                    ['trip_id' => 'kedarkantha-old', 'dates' => 'Jan 15, 29'],
                    ['trip_id' => 'chikmagalur', 'dates' => 'Jan 14, 28'],
                ],
                'feb' => [
                    ['trip_id' => 'srilanka', 'dates' => 'Feb 14, 28'],
                    ['trip_id' => 'andaman', 'dates' => 'Feb 14, 21'],
                    ['trip_id' => 'thailand', 'dates' => 'Feb 10, 24'],
                    ['trip_id' => 'kerala', 'dates' => 'Feb 07, 21'],
                    ['trip_id' => 'kedarkantha-old', 'dates' => 'Feb 07, 21'],
                    ['trip_id' => 'chikmagalur', 'dates' => 'Feb 14, 28'],
                ],
                'mar' => [
                    ['trip_id' => 'tawang', 'dates' => 'Mar 14, 20'],
                    ['trip_id' => 'meghalaya', 'dates' => 'Mar 21'],
                    ['trip_id' => 'varkala', 'dates' => 'Mar 13,27'],
                    ['trip_id' => 'andaman', 'dates' => 'Mar 21,28'],
                    ['trip_id' => 'munnar', 'dates' => 'Mar 20'],
                    ['trip_id' => 'ooty', 'dates' => 'Mar 6'],
                    ['trip_id' => 'kerala', 'dates' => 'Mar 07, 21'],
                ],
                'apr' => [
                    ['trip_id' => 'tawang', 'dates' => 'Apr 03, 25'],
                    ['trip_id' => 'andaman', 'dates' => 'Apr 03,18'],
                    ['trip_id' => 'munnar', 'dates' => 'Apr 14'],
                    ['trip_id' => 'ooty', 'dates' => 'Apr 25'],
                    ['trip_id' => 'kodaikanal', 'dates' => 'Apr 11, 25'],
                ],
                'may' => [
                    ['trip_id' => 'leh-ladakh', 'dates' => 'May 09, 16, 23, 30'],
                    ['trip_id' => 'tawang', 'dates' => 'May 01, 06'],
                    ['trip_id' => 'ooty', 'dates' => 'May 01, 15, 29'],
                    ['trip_id' => 'kodaikanal', 'dates' => 'May 15, 30'],
                    ['trip_id' => 'yelagiri', 'dates' => 'May 02, 27'],
                ],
                'jun' => [
                    ['trip_id' => 'leh-ladakh', 'dates' => 'Jun 06, 13, 20, 27'],
                    ['trip_id' => 'tawang', 'dates' => 'Jun 20, 26'],
                    ['trip_id' => 'valley', 'dates' => 'Jun 27'],
                    ['trip_id' => 'ooty', 'dates' => 'Jun 12, 26'],
                    ['trip_id' => 'spiti', 'dates' => 'Jun 20, 27'],
                    ['trip_id' => 'kodaikanal', 'dates' => 'Jun 13, 27'],
                    ['trip_id' => 'yelagiri', 'dates' => 'Jun 02, 27'],
                ],
                'jul' => [
                    ['trip_id' => 'leh-ladakh', 'dates' => 'Jul 04, 11, 18, 25'],
                    ['trip_id' => 'valley', 'dates' => 'Jul 04, 11, 18, 25'],
                    ['trip_id' => 'ooty', 'dates' => 'Jul 11, 25'],
                    ['trip_id' => 'spiti', 'dates' => 'Jul 04, 18'],
                    ['trip_id' => 'kodaikanal', 'dates' => 'Jul 12, 26'],
                    ['trip_id' => 'yelagiri', 'dates' => 'Jul 02, 27'],
                ],
                'august' => [
                    ['trip_id' => 'leh-ladakh', 'dates' => 'Aug 01, 08, 15, 22, 29'],
                    ['trip_id' => 'valley', 'dates' => 'Aug 01, 08, 15, 22, 29'],
                    ['trip_id' => 'ooty', 'dates' => 'Aug 15, 29'],
                    ['trip_id' => 'spiti', 'dates' => 'Aug 01, 15, 29'],
                    ['trip_id' => 'kodaikanal', 'dates' => 'Aug 08, 22'],
                    ['trip_id' => 'srilanka', 'dates' => 'Aug 17'],
                    ['trip_id' => 'andaman', 'dates' => 'Aug 15, 22'],
                ],
                'sep' => [
                    ['trip_id' => 'leh-ladakh', 'dates' => 'Sep 05, 12, 19, 26'],
                    ['trip_id' => 'valley', 'dates' => 'Sep 05'],
                    ['trip_id' => 'ooty', 'dates' => 'Sep 05, 19'],
                    ['trip_id' => 'spiti', 'dates' => 'Sep 05, 19'],
                    ['trip_id' => 'kodaikanal', 'dates' => 'Sep 12, 26'],
                    ['trip_id' => 'srilanka', 'dates' => 'Sep 06'],
                    ['trip_id' => 'andaman', 'dates' => 'Sep 12, 26'],
                    ['trip_id' => 'kerala', 'dates' => 'Sep 06, 20'],
                    ['trip_id' => 'chikmagalur', 'dates' => 'Sep 06, 20'],
                ],
                'oct' => [
                    ['trip_id' => 'ooty', 'dates' => 'Oct 10, 24'],
                    ['trip_id' => 'kodaikanal', 'dates' => 'Oct 01, 15, 29'],
                    ['trip_id' => 'srilanka', 'dates' => 'Oct 10, 24'],
                    ['trip_id' => 'andaman', 'dates' => 'Oct 14, 28'],
                    ['trip_id' => 'kerala', 'dates' => 'Oct 07, 21'],
                    ['trip_id' => 'chikmagalur', 'dates' => 'Oct 06, 20'],
                ],
                'nov' => [
                    ['trip_id' => 'srilanka', 'dates' => 'Nov 07, 21'],
                    ['trip_id' => 'andaman', 'dates' => 'Nov 14, 28'],
                    ['trip_id' => 'thailand', 'dates' => 'Nov 10, 24'],
                    ['trip_id' => 'kerala', 'dates' => 'Nov 07, 21'],
                    ['trip_id' => 'chikmagalur', 'dates' => 'Nov 14, 28'],
                ],
                'dec' => [
                    ['trip_id' => 'srilanka', 'dates' => 'Dec 14, 28'],
                    ['trip_id' => 'andaman', 'dates' => 'Dec 14, 28'],
                    ['trip_id' => 'thailand', 'dates' => 'Dec 10, 24'],
                    ['trip_id' => 'kerala', 'dates' => 'Dec 07, 21'],
                    ['trip_id' => 'kedarkantha-old', 'dates' => 'Dec 15, 29'],
                    ['trip_id' => 'chikmagalur', 'dates' => 'Dec 14, 28'],
                ]
            ];
            // Months config we have to add the months here for the upcoming trips
            $months_config = [
                // 'jan' => ['name' => 'January', 'icon' => 'fa-snowflake'],
                // 'feb' => ['name' => 'February', 'icon' => 'fa-heart'],
                // 'mar' => ['name' => 'March', 'icon' => 'fa-sun'],
                'apr' => ['name' => 'April', 'icon' => 'fa-cloud-sun'],
                'may' => ['name' => 'May', 'icon' => 'fa-sun'],
                'jun' => ['name' => 'June', 'icon' => 'fa-cloud-sun-rain'],
                'jul' => ['name' => 'July', 'icon' => 'fa-cloud-showers-heavy'],
                'august' => ['name' => 'August', 'icon' => 'fa-cloud-sun'],
                'sep' => ['name' => 'September', 'icon' => 'fa-cloud-sun-rain'],
                'oct' => ['name' => 'October', 'icon' => 'fa-cloud-showers-heavy'],
                'nov' => ['name' => 'November', 'icon' => 'fa-cloud-bolt'],
                'dec' => ['name' => 'December', 'icon' => 'fa-cloud-sun'],
            ];
            ?>

            <div class="upcoming-container">
                <h2 class="upcoming-header head bbb">
                    <i class="fa-solid fa-calendar-days upcoming-header-icon"></i>
                    Upcoming Group Trips
                </h2>

                <!-- Tabs -->
                <div class="upcoming-tabs" id="upcoming-tabs">
                    <?php
                    foreach ($months_config as $key => $config):
                        $isActive = ($key === 'apr') ? 'active' : '';
                        ?>
                        <button class="upcoming-tab-btn <?php echo $isActive; ?>" data-tab="<?php echo $key; ?>">
                            <span class="tab-icon"><i class="fa-solid <?php echo $config['icon']; ?>"></i></span>
                            <?php echo $config['name']; ?>
                        </button>
                    <?php endforeach; ?>
                </div>
                <style>
                    @media (max-width: 600px) {
                        .tab-icon {
                            display: none !important;
                        }
                    }
                </style>

                <!-- Tab Contents -->
                <?php
                foreach ($months_config as $key => $config):
                    $isActive = ($key === 'apr') ? 'active' : '';
                    ?>
                    <div class="upcoming-tab-content <?php echo $isActive; ?>" id="tab-<?php echo $key; ?>">
                        <div class="upcoming-slider-wrapper">
                            <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                                <i class="fa fa-chevron-left"></i>
                            </button>
                            <div class="upcoming-slider" id="upcoming-slider-<?php echo $key; ?>">
                                <?php
                                // Check if schedule is empty
                                if (!isset($month_schedules[$key]) || empty($month_schedules[$key])):
                                    ?>
                                    <div class="upcoming-card"
                                        style="width: 100%; max-width: 400px; margin: 0 auto; cursor: default; border: none; background: transparent; box-shadow: none;">
                                        <div class="upcoming-content"
                                            style="align-items: center; justify-content: center; height: 350px; background: rgba(76, 185, 211, 0.1);">
                                            <div style="text-align: center; color: #4CB9D3;">
                                                <i class="fa-solid fa-clock"
                                                    style="font-size: 4rem; margin-bottom: 20px; opacity: 0.8;"></i>
                                                <h3 style="font-weight: 800; text-transform: uppercase; margin: 0;">Coming Soon!
                                                </h3>
                                                <p style="font-size: 0.9rem; margin-top: 10px; color: #555;">New trips are on
                                                    the way.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                else:
                                    foreach ($month_schedules[$key] as $schedule):
                                        $trip_id = $schedule['trip_id'];
                                        if (!isset($trips_db[$trip_id]))
                                            continue;
                                        $trip = $trips_db[$trip_id];
                                        $dates = $schedule['dates'];



                                        $price_html = '';
                                        if (!empty($trip['price'])) {
                                            $price_html = '<div class="upcoming-price">' . $trip['price'] . '</div>';
                                        } elseif (isset($trip['price_class']) && !empty($trip['price_class'])) {
                                            $price_html = '<div class="upcoming-price ' . $trip['price_class'] . '"></div>';
                                        }
                                        ?>
                                        <div class="upcoming-card" style="cursor: pointer;"
                                            onclick="window.location.href='<?php echo $trip['link']; ?>'">
                                            <div class="upcoming-content">
                                                <div class="upcoming-image">
                                                    <img src="<?php echo $trip['image']; ?>" alt="<?php echo $trip['title']; ?>">
                                                </div>
                                                <div class="upcoming-card-flex">
                                                    <div class="upcoming-duration">
                                                        <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>
                                                        <?php echo $trip['duration']; ?>
                                                    </div>
                                                    <div class="upcoming-from">
                                                        <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                                        <span>
                                                            <?php echo $trip['location']; ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <h1 class="upcoming-title">
                                                    <?php echo $trip['title']; ?>
                                                </h1>
                                                <p class="upcoming-locations">
                                                    <?php echo $trip['places']; ?>
                                                </p>
                                                <div class="upcoming-price-section">
                                                    <div class="upcoming-dates">
                                                        <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                                        <span class="upcoming-dates-text">
                                                            <?php echo $dates; ?>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <div class="upcoming-starts">Starts</div>
                                                        <?php echo $price_html; ?>
                                                    </div>
                                                </div>
                                                <a href="<?php echo $trip['link']; ?>" class="upcoming-view text-decoration-none"
                                                    style="color: #4CB9D3 !important;" onclick="event.stopPropagation()">View
                                                    Trip</a>
                                            </div>
                                        </div>
                                        <?php
                                    endforeach;
                                endif;
                                ?>
                            </div>
                            <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
                                <i class="fa fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>

                <style>
                    .view-more-container {
                        display: flex;
                        justify-content: center;
                        margin-bottom: 0px !important;
                        margin-top: 0px;
                        position: relative;
                        z-index: 5;
                    }

                    .view-more-btn {
                        padding: 10px 32px;
                        border-radius: 30px;
                        font-size: 1.1rem;
                        font-weight: 700;
                        background: #4ec0db;
                        color: #fff;
                        border: none;
                        box-shadow: 0 4px 18px 0 rgba(76, 185, 211, 0.14);
                        transition: background 0.2s, color 0.2s, box-shadow 0.2s;
                    }

                    /* Mobile Responsive Styles */
                    @media (max-width: 600px) {
                        .view-more-container {
                            margin-top: 0px;
                            margin-bottom: 20px !important;
                        }

                        .view-more-btn {
                            padding: 8px 15px !important;
                            font-size: 1rem;
                        }
                    }
                </style>

                <div class="view-more-container">
                    <a href="trips.php">
                        <button class="border-none view-more-btn text-decoration-none">
                            More Trips
                        </button>
                    </a>
                </div>

            </div>

            <script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const tabsContainer = document.getElementById('upcoming-tabs');
                    const tabContents = document.querySelectorAll('.upcoming-tab-content');
                    const tabBtns = document.querySelectorAll('.upcoming-tab-btn'); // Keep for class manipulation

                    if (tabsContainer) {
                        tabsContainer.addEventListener('click', function (e) {
                            const btn = e.target.closest('.upcoming-tab-btn');
                            if (!btn) return; // Clicked outside a button

                            const tab = btn.getAttribute('data-tab');

                            // Tab switching logic
                            tabBtns.forEach(b => b.classList.remove('active'));
                            btn.classList.add('active');

                            tabContents.forEach(tc => {
                                tc.classList.remove('active');
                                tc.style.display = 'none'; // Ensure it's hidden to reset animation state
                            });

                            const targetContent = document.getElementById(`tab-${tab}`);
                            if (targetContent) {
                                targetContent.style.display = 'block'; // Prepare for animation

                                // Force reflow to restart animation
                                void targetContent.offsetWidth;

                                targetContent.classList.add('active');

                                // Setup slider for the new tab (if needed)
                                setupSlider(
                                    `#tab-${tab} .upcoming-slider-wrapper`,
                                    `#upcoming-slider-${tab}`,
                                    '#tab-' + tab + ' .upcoming-slider-arrow.left',
                                    '#tab-' + tab + ' .upcoming-slider-arrow.right'
                                );

                                // Center first card on mobile for the active tab
                                const activeSlider = targetContent.querySelector('.upcoming-slider');
                                if (activeSlider && window.innerWidth <= 600) {
                                    const cards = Array.from(activeSlider.querySelectorAll('.upcoming-card'));
                                    if (cards.length > 0) {
                                        const cardLeft = cards[0].offsetLeft;
                                        const containerWidth = activeSlider.offsetWidth;
                                        const cardWidth = cards[0].offsetWidth;
                                        const scrollPosition = cardLeft - (containerWidth - cardWidth) / 2;
                                        activeSlider.scrollTo({
                                            left: scrollPosition,
                                            behavior: 'auto'
                                        });
                                    }
                                }
                            }
                        });
                    }

                    // Slider logic
                    function setupSlider(wrapperSelector, sliderSelector, leftArrowSelector, rightArrowSelector) {
                        const wrapper = typeof wrapperSelector === 'string' ? document.querySelector(wrapperSelector) : wrapperSelector;
                        if (!wrapper || wrapper.dataset.initialized === 'true') return;
                        const slider = wrapper.querySelector(sliderSelector);
                        const leftArrow = wrapper.querySelector(leftArrowSelector);
                        const rightArrow = wrapper.querySelector(rightArrowSelector);
                        if (!slider || !leftArrow || !rightArrow) return;
                        const getVisibleCards = () => Array.from(slider.querySelectorAll('.upcoming-card')).filter(c => c.offsetParent !== null);

                        function updateArrows() {
                            if (!slider) return;
                            // Use Math.abs to avoid floating point issues
                            leftArrow.disabled = slider.scrollLeft <= 10;
                            rightArrow.disabled = slider.scrollLeft + slider.offsetWidth >= slider.scrollWidth - 10;
                        }

                        function smoothScrollTo(position) {
                            slider.scrollTo({
                                left: position,
                                behavior: 'smooth'
                            });
                        }

                        function getCurrentIndex() {
                            const cards = getVisibleCards();
                            const center = slider.scrollLeft + slider.offsetWidth / 2;
                            let closestIndex = 0;
                            let closestDiff = Infinity;
                            cards.forEach((card, index) => {
                                const cardCenter = card.offsetLeft + card.offsetWidth / 2;
                                const diff = Math.abs(cardCenter - center);
                                if (diff < closestDiff) {
                                    closestDiff = diff;
                                    closestIndex = index;
                                }
                            });
                            return closestIndex;
                        }

                        function getCenteredPosition(index) {
                            const cards = getVisibleCards();
                            const card = cards[index];
                            if (!card) return 0;
                            const cardLeft = card.offsetLeft;
                            const containerWidth = slider.offsetWidth;
                            const cardWidth = card.offsetWidth;
                            return cardLeft - (containerWidth - cardWidth) / 2;
                        }

                        leftArrow.addEventListener('click', function () {
                            const currentIndex = getCurrentIndex();
                            const targetIndex = Math.max(0, currentIndex - 1);
                            const scrollPosition = getCenteredPosition(targetIndex);
                            smoothScrollTo(scrollPosition);
                        });

                        rightArrow.addEventListener('click', function () {
                            const cards = getVisibleCards();
                            const currentIndex = getCurrentIndex();
                            const targetIndex = Math.min(cards.length - 1, currentIndex + 1);
                            const scrollPosition = getCenteredPosition(targetIndex);
                            smoothScrollTo(scrollPosition);
                        });

                        slider.addEventListener('scroll', updateArrows);
                        window.addEventListener('resize', updateArrows);
                        updateArrows();
                        wrapper.dataset.initialized = 'true';
                    }

                    setupSlider(
                        '.upcoming-tab-content.active .upcoming-slider-wrapper',
                        '.upcoming-slider',
                        '.upcoming-slider-arrow.left',
                        '.upcoming-slider-arrow.right'
                    );

                    // Drag-to-scroll for sliders (mouse + touch)
                    function enableDragScroll(slider) {
                        let isDown = false;
                        let startX = 0;
                        let scrollLeftStart = 0;
                        let isDragging = false;
                        let lastX = 0;
                        let lastTime = 0;
                        let velocity = 0;
                        let momentumId = 0;

                        // For vertical scroll fix
                        let startY = 0;
                        let scrollTopStart = 0;
                        let verticalScroll = false;

                        function stopMomentum() {
                            if (momentumId) {
                                cancelAnimationFrame(momentumId);
                                momentumId = 0;
                            }
                        }

                        function onPointerDown(clientX, clientY) {
                            isDown = true;
                            isDragging = false;
                            startX = clientX;
                            startY = clientY !== undefined ? clientY : 0;
                            lastX = clientX;
                            lastTime = performance.now();
                            velocity = 0;
                            scrollLeftStart = slider.scrollLeft;
                            scrollTopStart = slider.scrollTop;
                            verticalScroll = false;
                            slider.classList.add('dragging');
                            stopMomentum();
                        }

                        function onPointerMove(clientX, clientY, evt) {
                            if (!isDown) return;
                            const now = performance.now();
                            const deltaX = clientX - startX;
                            const deltaY = clientY !== undefined ? clientY - startY : 0;

                            // If vertical movement is more than horizontal, allow vertical scroll
                            if (!verticalScroll && Math.abs(deltaY) > Math.abs(deltaX) && Math.abs(deltaY) > 5) {
                                verticalScroll = true;
                            }

                            if (verticalScroll) {
                                // Let the event bubble for vertical scroll
                                isDown = false;
                                slider.classList.remove('dragging');
                                return;
                            }

                            const movedSinceLast = clientX - lastX;
                            const dt = Math.max(1, now - lastTime);
                            if (Math.abs(deltaX) > 3) {
                                isDragging = true;
                            }
                            slider.scrollLeft = scrollLeftStart - deltaX;
                            velocity = (movedSinceLast) / dt; // px per ms
                            lastX = clientX;
                            lastTime = now;
                            if (evt && evt.cancelable) evt.preventDefault();
                        }

                        function onPointerUp() {
                            isDown = false;
                            slider.classList.remove('dragging');
                            // Apply momentum only if we were dragging and not vertical scroll
                            if (!isDragging || verticalScroll) return;
                            const decay = 0.95; // friction
                            const minVelocity = 0.02; // px/ms threshold
                            let currentVelocity = velocity * 16; // approx px per frame (16ms)
                            function step() {
                                // Stop if velocity is low
                                if (Math.abs(currentVelocity) < minVelocity * 16) {
                                    momentumId = 0;
                                    return;
                                }
                                slider.scrollLeft -= currentVelocity;
                                currentVelocity *= decay;
                                momentumId = requestAnimationFrame(step);
                            }
                            momentumId = requestAnimationFrame(step);
                        }

                        // Mouse
                        slider.addEventListener('mousedown', (e) => {
                            // Only left button
                            if (e.button !== 0) return;
                            onPointerDown(e.clientX, e.clientY);
                        });
                        window.addEventListener('mousemove', (e) => onPointerMove(e.clientX, e.clientY, e));
                        window.addEventListener('mouseup', onPointerUp);

                        // Touch
                        slider.addEventListener('touchstart', (e) => {
                            if (!e.touches || e.touches.length === 0) return;
                            onPointerDown(e.touches[0].clientX, e.touches[0].clientY);
                        }, {
                            passive: false // passive false so preventDefault works
                        });
                        slider.addEventListener('touchmove', (e) => {
                            if (!e.touches || e.touches.length === 0) return;
                            onPointerMove(e.touches[0].clientX, e.touches[0].clientY, e);
                        }, {
                            passive: false // passive false so preventDefault works
                        });
                        slider.addEventListener('touchend', onPointerUp, {
                            passive: true
                        });

                        // Prevent link clicks while dragging
                        slider.querySelectorAll('a').forEach((link) => {
                            link.addEventListener('click', (e) => {
                                if (isDragging) {
                                    e.preventDefault();
                                    e.stopPropagation();
                                }
                            });
                        });
                    }

                    // Only enable drag scroll on desktop, allow native scroll on mobile
                    document.querySelectorAll('.upcoming-slider').forEach(slider => {
                        if (window.innerWidth > 600) {
                            enableDragScroll(slider);
                            slider.style.touchAction = 'none';
                        } else {
                            // On mobile, allow native scrolling
                            slider.style.overflowX = 'auto';
                            slider.style.webkitOverflowScrolling = 'touch';
                            slider.style.touchAction = 'pan-x pan-y';
                        }
                    });

                    // Center first card on mobile
                    function scrollToFirstCard() {
                        const slider = document.querySelector('.upcoming-slider');
                        if (slider && window.innerWidth <= 600) {
                            const cards = Array.from(slider.querySelectorAll('.upcoming-card'));
                            if (cards.length > 0) {
                                const cardLeft = cards[0].offsetLeft;
                                const containerWidth = slider.offsetWidth;
                                const cardWidth = cards[0].offsetWidth;
                                const scrollPosition = cardLeft - (containerWidth - cardWidth) / 2;
                                slider.scrollTo({
                                    left: scrollPosition,
                                    behavior: 'auto'
                                });
                            }
                        }
                    }

                    // Debounce resize handler
                    let resizeTimeout;

                    function debounceResize() {
                        clearTimeout(resizeTimeout);
                        resizeTimeout = setTimeout(() => {
                            scrollToFirstCard();
                        }, 100);
                    }

                    scrollToFirstCard();
                    window.addEventListener('resize', debounceResize);
                });
            </script>
            <!-- <script src="assets/js/upcoming-dates.js"></script> -->
        </div>

        <!-- Events Section -->
        <div class="events-section-responsive mx-auto" style="max-width: 1800px; margin:10px auto 0 auto;">

            <img src="assets/img/event/banner/events-desktop-banner-by-roamers.avif.avif" alt=""
                class="d-none d-md-block">
            <img src="assets/img/event/banner/events-mobile-banner-by-roamers.avif" alt=""
                class="d-block d-md-none w-100">
            <div class="mt-5">



                <div class="event-container">
                    <div class="event-slider-wrapper" id="event-slider-wrapper">
                        <button class="event-slider-arrow left" aria-label="Scroll to previous trip" type="button"
                            id="event-slider-prev">
                            <i class="fa fa-chevron-left"></i>
                        </button>

                        <div class="event-slider" id="event-slider-august">

                            <!-- Event Card 1 -->
                            <div onclick="window.open('events/c&c')" style="cursor: pointer;" class="event-card">
                                <div class="event-content" style="position: relative;">
                                    <div class="event-image">
                                        <img src="assets/img/event/cards/event-card-14.avif" alt="Pottery WORK SHOP">
                                    </div>
                                    <!-- Slot at top right, responsive  #C0C0C0;-->
                                    <div class="event-slot-badge">
                                        <span class="event-dates-text" style="color: black;">
                                            <i class="fa-solid fa-users me-1"
                                                style="color:black; margin-right: 4px;"></i>
                                            Slot: 15
                                        </span>
                                    </div>
                                    <div class="event-card-content">
                                        <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                                        <h1 class="event-title event-title-responsive-on-event mt-1">
                                            Coffee & Conversations
                                            <p class="mt-1" style="font-size: 11px; margin-bottom: 0px; color: #FFFFFF; text-transform: none;
                             word-spacing: 1px; ">Sip, chat, share stories, meet like-minded people</p>

                                        </h1>
                                        <div class="event-price-section">
                                            <div class="event-dates">
                                                <span class="event-dates-text" style="font-weight:700"><i
                                                        class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i>
                                                    28th Feb,9th May
                                                    <?php echo $current_year; ?>
                                                </span>
                                            </div>
                                            <div class="event-dates">
                                                <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                                <span class="event-dates-text" style="font-weight:700 ">Chennai
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="events/c&c" class="event-view text-decoration-none"
                                        style="color: #4ec0db !important;">Register</a>
                                </div>
                            </div>

                            <!-- Event Card 2 -->
                            <div onclick="window.open('#')" style="cursor: pointer;" class="event-card">
                                <div class="event-content" style="position: relative;">
                                    <div class="event-image">
                                        <img src="assets/img/event/cards/event-card-12.avif" alt="Pottery WORK SHOP">
                                    </div>
                                    <!-- Slot at top right, responsive -->
                                    <div class="event-slot-badge">
                                        <span class="event-dates-text" style="color: black;">
                                            <i class="fa-solid fa-users me-1" style=" margin-right: 4px;"></i>
                                            Slot: -
                                        </span>
                                    </div>
                                    <div class="event-card-content">
                                        <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                                        <h1 class="event-title event-title-responsive-on-event">
                                            Pottery Work Shop
                                            <p class="mt-1"
                                                style="font-size: 10px; margin-bottom: 0px; color: #FFFFFF; text-transform: none;  word-spacing: 1px;">
                                                Shape, mold, Heal, create, laugh together</p>

                                        </h1>
                                        <div class="event-price-section">
                                            <div class="event-dates">
                                                <span class="event-dates-text" style="font-weight:700"><i
                                                        class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i>
                                                    11th Apr
                                                    <?php echo $current_year; ?>
                                                </span>
                                            </div>
                                            <div class="event-dates">
                                                <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                                <span class="event-dates-text" style="font-weight:700">Chennai
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" style="color: #4ec0db !important;"
                                        class="event-view text-decoration-none">Soon !</a>
                                </div>
                            </div>

                            <!-- Event Card 3 -->
                            <div onclick="window.open('#')" style="cursor: pointer;" class="event-card">
                                <div class="event-content" style="position: relative;">
                                    <div class="event-image">
                                        <img src="assets/img/event/cards/event-card-13.avif" alt="Pottery WORK SHOP">
                                    </div>
                                    <!-- Slot at top right, responsive -->
                                    <div class="event-slot-badge">
                                        <span class="event-dates-text" style="color: black;">
                                            <i class="fa-solid fa-users me-1" style=" margin-right: 4px;"></i>
                                            Slot: -
                                        </span>
                                    </div>
                                    <div class="event-card-content">
                                        <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                                        <h1 class="event-title event-title-responsive-on-event">
                                            Mystery Movie Night
                                            <p class="mt-1"
                                                style="font-size: 10px; margin-bottom: 0px;color: #FFFFFF; text-transform: none;word-spacing: 1px;">
                                                Watch a surprise film, popcorn, laughs, discussions</p>

                                        </h1>
                                        <div class="event-price-section">
                                            <div class="event-dates">
                                                <span class="event-dates-text" style="font-weight:700"><i
                                                        class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i>-

                                                    <?php echo $current_year; ?>
                                                </span>
                                            </div>
                                            <div class="event-dates">
                                                <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                                <span class="event-dates-text" style="font-weight:700">Coimbatore
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="event-view text-decoration-none"
                                        style="color: #4ec0db !important;">Soon !</a>
                                </div>
                            </div>

                            <!-- Event Card 4 -->
                            <div onclick="window.open('#')" style="cursor: pointer;" class="event-card">
                                <div class="event-content" style="position: relative;">
                                    <div class="event-image">
                                        <img src="assets/img/event/cards/event-card-11.avif" alt="Pottery WORK SHOP">
                                    </div>
                                    <!-- Slot at top right, responsive -->
                                    <div class="event-slot-badge">
                                        <span class="event-dates-text" style="color: black;">
                                            <i class="fa-solid fa-users me-1" style=" margin-right: 4px;"></i>
                                            Slot: -
                                        </span>
                                    </div>
                                    <div class="event-card-content">
                                        <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                                        <h1 class="event-title event-title-responsive-on-event">
                                            Strangers Fun meetup
                                            <p class="mt-1"
                                                style="font-size: 10px; margin-bottom: 0px; color: #FFFFFF; text-transform: none;  word-spacing: 1px;">
                                                Games, icebreakers, laughs, future buddies</p>

                                        </h1>
                                        <div class="event-price-section">
                                            <div class="event-dates">
                                                <span class="event-dates-text" style="font-weight:700"><i
                                                        class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i>
                                                    28th Mar,25th Apr,23rd May
                                                    <?php echo $current_year; ?>
                                                </span>
                                            </div>
                                            <div class="event-dates">
                                                <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                                <span class="event-dates-text" style="font-weight:700">Chennai
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" style="color: #4ec0db !important;"
                                        class="event-view text-decoration-none">Soon !</a>
                                </div>
                            </div>

                        </div>
                        <button class="event-slider-arrow right" aria-label="Scroll to next trip" type="button"
                            id="event-slider-next">
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>

                    <style>
                        @media (max-width:600px) {
                            .btn.btn-primary {
                                font-size: 0.98rem !important;
                                padding: 8px 18px !important;
                                border-radius: 17px !important;
                                min-width: 120px;
                                width: 90vw;
                                max-width: 400px;
                            }

                            .event-slider-wrapper+div {
                                margin: 18px 0 !important;
                            }
                        }
                    </style>
                </div>

                <script>
                    // Touch slider: swipe smoothly moves to next/prev card (like a carousel)
                    document.addEventListener('DOMContentLoaded', function () {
                        const slider = document.getElementById('event-slider-august');
                        const leftBtn = document.getElementById('event-slider-prev');
                        const rightBtn = document.getElementById('event-slider-next');
                        const cards = slider ? Array.from(slider.getElementsByClassName('event-card')) : [];

                        // Helper to get the current centered card index
                        function getCurrentIndex() {
                            if (!slider || cards.length === 0) return 0;
                            const scrollLeft = slider.scrollLeft;
                            const sliderCenter = scrollLeft + slider.offsetWidth / 2;
                            let closestIdx = 0;
                            let closestDist = Infinity;
                            cards.forEach((card, idx) => {
                                const cardCenter = card.offsetLeft + card.offsetWidth / 2;
                                const dist = Math.abs(cardCenter - sliderCenter);
                                if (dist < closestDist) {
                                    closestDist = dist;
                                    closestIdx = idx;
                                }
                            });
                            return closestIdx;
                        }

                        // Helper to scroll to a card by index, centering it
                        function scrollToCard(idx, instant = false) {
                            if (!slider || cards.length === 0) return;
                            const card = cards[idx];
                            const cardLeft = card.offsetLeft;
                            const containerWidth = slider.offsetWidth;
                            const cardWidth = card.offsetWidth;
                            const scrollPosition = cardLeft - (containerWidth - cardWidth) / 2;
                            slider.scrollTo({
                                left: scrollPosition,
                                behavior: instant ? 'auto' : 'smooth'
                            });
                        }

                        // Update arrow disabled state
                        function updateArrows() {
                            if (!slider || cards.length === 0) return;
                            leftBtn.disabled = slider.scrollLeft <= 10;
                            rightBtn.disabled = slider.scrollLeft + slider.offsetWidth >= slider.scrollWidth - 10;
                        }

                        // Button click handlers
                        if (leftBtn && rightBtn && slider && cards.length > 0) {
                            leftBtn.addEventListener('click', function () {
                                const idx = getCurrentIndex();
                                if (idx > 0) scrollToCard(idx - 1);
                            });
                            rightBtn.addEventListener('click', function () {
                                const idx = getCurrentIndex();
                                if (idx < cards.length - 1) scrollToCard(idx + 1);
                            });
                            slider.addEventListener('scroll', updateArrows);
                            window.addEventListener('resize', updateArrows);
                            // Initial state
                            setTimeout(() => {
                                updateArrows();
                                if (window.innerWidth <= 600) scrollToCard(0, true);
                            }, 100);
                        }

                        // Touch swipe: snap to next/prev card based on swipe direction and distance
                        if (slider) {
                            let isTouching = false;
                            let startX = 0;
                            let scrollLeftStart = 0;
                            let touchStartTime = 0;
                            let lastX = 0;
                            let lastMove = 0;
                            let velocity = 0;
                            let rafId = null;

                            slider.style.overflowX = 'auto';
                            slider.style.webkitOverflowScrolling = 'touch';

                            // For smoother touchmove, use requestAnimationFrame
                            function onTouchMove(e) {
                                if (!isTouching) return;
                                const x = e.touches[0].pageX;
                                const walk = startX - x;
                                slider.scrollLeft = scrollLeftStart + walk;
                                // For velocity
                                velocity = x - lastX;
                                lastX = x;
                                lastMove = Date.now();
                            }

                            slider.addEventListener('touchstart', function (e) {
                                isTouching = true;
                                startX = e.touches[0].pageX;
                                scrollLeftStart = slider.scrollLeft;
                                touchStartTime = Date.now();
                                lastX = startX;
                                velocity = 0;
                                if (rafId) {
                                    cancelAnimationFrame(rafId);
                                    rafId = null;
                                }
                            }, {
                                passive: true
                            });

                            // Use rAF for touchmove to avoid lag
                            let scheduled = false;

                            function rafTouchMove(e) {
                                if (!scheduled) {
                                    scheduled = true;
                                    rafId = requestAnimationFrame(() => {
                                        onTouchMove(e);
                                        scheduled = false;
                                    });
                                }
                            }
                            slider.addEventListener('touchmove', rafTouchMove, {
                                passive: false
                            });

                            slider.addEventListener('touchend', function (e) {
                                if (!isTouching) return;
                                isTouching = false;
                                if (rafId) {
                                    cancelAnimationFrame(rafId);
                                    rafId = null;
                                }
                                const endX = lastX;
                                const deltaX = endX - startX;
                                const elapsed = Date.now() - touchStartTime;
                                const threshold = 40; // px
                                const fastSwipe = Math.abs(deltaX) > threshold && elapsed < 350;

                                let idx = getCurrentIndex();

                                // If swipe is fast and long enough, go to next/prev card
                                if (fastSwipe) {
                                    if (deltaX < 0 && idx < cards.length - 1) {
                                        idx += 1;
                                    } else if (deltaX > 0 && idx > 0) {
                                        idx -= 1;
                                    }
                                }
                                scrollToCard(idx);
                            });

                            // Mouse drag for desktop (unchanged)
                            let isDragging = false;
                            let mouseStartX = 0;
                            let mouseScrollLeft = 0;

                            slider.addEventListener('mousedown', function (e) {
                                isDragging = true;
                                mouseStartX = e.pageX;
                                mouseScrollLeft = slider.scrollLeft;
                                slider.classList.add('dragging');
                            });

                            slider.addEventListener('mousemove', function (e) {
                                if (!isDragging) return;
                                e.preventDefault();
                                const x = e.pageX;
                                const walk = mouseStartX - x;
                                slider.scrollLeft = mouseScrollLeft + walk;
                            });

                            slider.addEventListener('mouseup', function (e) {
                                if (isDragging) {
                                    isDragging = false;
                                    slider.classList.remove('dragging');
                                    // Snap to next/prev card if swipe is big enough
                                    const endX = e.pageX;
                                    const deltaX = endX - mouseStartX;
                                    const threshold = 40;
                                    let idx = getCurrentIndex();
                                    if (Math.abs(deltaX) > threshold) {
                                        if (deltaX < 0 && idx < cards.length - 1) {
                                            idx += 1;
                                        } else if (deltaX > 0 && idx > 0) {
                                            idx -= 1;
                                        }
                                    }
                                    scrollToCard(idx);
                                }
                            });

                            slider.addEventListener('mouseleave', function (e) {
                                if (isDragging) {
                                    isDragging = false;
                                    slider.classList.remove('dragging');
                                    const idx = getCurrentIndex();
                                    scrollToCard(idx);
                                }
                            });

                            // Performance: use will-change for smoother scroll on mobile
                            slider.style.willChange = 'scroll-position, transform';
                        }
                    });
                </script>
            </div>
        </div>

        <!-- Testimonial Section -->
        <section class="travelgram" id="travelgram">
            <style>
                /* Responsive margin for travelgram section */
                .travelgram {
                    margin-top: 0px;
                }

                @media (min-width: 600px) {
                    .travelgram {
                        margin-top: 0px;
                    }
                }

                @media (min-width: 768px) {
                    .travelgram {
                        margin-top: 0px;
                    }
                }

                @media (min-width: 992px) {
                    .travelgram {
                        margin-top: 0px;
                    }
                }

                @media (min-width: 1200px) {
                    .travelgram {
                        margin-top: 0px;
                    }
                }

                /* Optional: fine-tune heading padding for large screens */
                .travelgram .head {
                    padding-top: 40px !important;
                }

                @media (min-width: 992px) {
                    .travelgram .head {
                        padding-top: 260px !important;
                    }
                }
            </style>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 inst-w d-block d-md-none">
                        <h2 style="margin-top:30px !important;" class="head bbb">
                            Our Travelgram
                            <a href="https://www.instagram.com/roamers.in/"
                                style="display:block; font-size: 16px;color: #4ec0db; margin-bottom: -10px !important;margin-left: -22px !important; margin-top: 6px !important;"><img
                                    src="assets/img/icon/insta-logo.png" alt="" class="insta-logo"></i>@roamers.in</a>
                        </h2>
                        <div class="elfsight-app-d8fb604c-d55a-470d-bf66-89a000cb227d"></div>
                        <a href="https://www.instagram.com/roamers.in/" class="gotoinsta">
                            Follow us
                        </a>
                    </div>
                    <div class="col-md-6">
                        <!-- <div class="testimonials-above">
            <h2>
              Rated by Explorers
            </h2>
            <p>
              Incredible people, unforgettable experiences, 'pinch yourself moments' - every Metanoia expedition is
              different. But don't just take our word for it...
            </p>
          </div> -->

                        <div class="testimonial">
                            <div class="testimonials">

                                <div class="slider-containe" data-bs-interval="1000">
                                    <div class="sliders">
                                        <div class="slide-box">
                                            <!-- Testi One -->


                                            <p class="comment">

                                                Joined the group trip with my sister, it was the best experience we
                                                could ask for. Everything
                                                was
                                                great about the trip, explored even the spots which was not mentioned in
                                                itinerary, don’t really
                                                know how the days went so soon.No
                                                words, Thanks you all!
                                            </p>
                                            <h3 class="name"> Shreya </h3>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <img src="assets/img/testimonials/andaman.avif" />


                                        </div>
                                        <div class="slide-box">
                                            <!-- Testi Two -->


                                            <p class="comment">

                                                The VIBE was unreal, didn’t expect I’ll connect like this.. Best trip I
                                                have gone, explored
                                                places, local foods, cultures, and those kids Ohh my goodness!!!! 😍
                                                Thank you roamers and trip
                                                captain. We’ll meet soon on our reunion :
                                            </p>
                                            <h3 class="name">Vinayak</h3>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <img src="assets/img/testimonials/spiti.avif" />


                                        </div>

                                        <div class="slide-box">
                                            <!-- Testi Two -->


                                            <p class="comment">
                                                I joined solo and was imaginable experience, my first time going with
                                                the group trip, truly
                                                knocked my expectations. Very cool people, and awesome spots. Enjoyed a
                                                lot, Spl thanks to our
                                                trip captain veer. Gonna miss you’ll Fam…
                                            </p>
                                            <h3 class="name">Naisha </h3>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <img src="assets/img/testimonials/chikmagalur.avif" />

                                        </div>
                                        <div class="slide-box">
                                            <!-- Testi Three -->


                                            <p class="comment">
                                                Camp nights with the bunch of crazy travellers, this was the trip which
                                                I’m gonna remember for
                                                long. Lots of memories to take with….. definitely a must goooo!
                                            </p>
                                            <h3 class="name">Aadhya</h3>
                                            <ul class="star">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <img src="assets/img/testimonials/manali.avif" />

                                        </div>
                                    </div>

                                    <a style="display:none;" href="#!" class="control-slider btn-left">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                    <a style="display:none;" href="#!" class="control-slider btn-right">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 inst-w d-none d-md-block">
                        <h2 class="head ">
                            Our Travelgram
                            <a href="https://www.instagram.com/roamers.in/"
                                style="margin-left:-24px; display:block; font-size: 16px;color: #4ec0db;"><img
                                    src="assets/img/icon/insta-logo.png" alt="" class="insta-logo"></i>@roamers.in</a>
                        </h2>

                        <div class="elfsight-app-d8fb604c-d55a-470d-bf66-89a000cb227d"></div>
                        <a href="https://www.instagram.com/roamers.in/" class="gotoinsta">

                            Follow us
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Talk To Our Travel Experts (Form Section) -->
        <section class="quotes pt-60">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7  quotes-img" style="margin-bottom: 20px; margin-top:60px">
                        <img class="quotes-img-img1" style="height: 100% !important; width: 100% !important;"
                            src="assets/img/icon/Vertical-private-trips-NEW.png" alt="">
                        <img class="quotes-img-img"
                            style="height: 100% !important; width: 182% !important; margin-left:-49px;"
                            src="assets/img/icon/Private-trips.jpg" alt="">
                    </div>
                    <div class="col-md-5 mt-5" id="contact-roamers">
                        <div class="form" id="home-form">
                            <div class="above-form">
                                <h2>Talk To Our Travel Experts</h2>
                            </div>
                            <div class="form-section">
                                <form id="regForm1" action="index-contact-us-mail.php" method="POST">
                                    <input type="text" required placeholder="Name" name="name1" id="name1">
                                    <input type="email" required placeholder="Email" name="email1" id="email1">
                                    <input type="text" required placeholder="Mobile Number" name="phone1" id="phone1">
                                    <input type="text" placeholder="Destination" name="des" id="des">
                                    <textarea placeholder="Message" name="mess" id="mess" rows="4"></textarea>
                                    <button type="submit" class="what-sum btn rounded-pill">
                                        <i class="fa-regular fa-comment-dots"></i>
                                        REQUEST CALL BACK
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer Sections -->
    <footer>
        <?php include('includes/footer.php'); ?>
    </footer>

    <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1"><img src="assets/img/icon/whatsapp.svg" alt=""></a>

</body>

<!--  jQuery Ripples -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
    $(document).ready(function () {
        var $el = $(".home");
        var isMobile = $(window).width() <= 768;
        var res = isMobile ? 256 : 512;
        var imageUrl = isMobile ? "assets/img/banner/mobile-banner.avif" :
            "assets/img/banner/desktop-banner-avif.avif";

        function startRipples() {
            try {
                $el.ripples({
                    resolution: res,
                    dropRadius: 20,
                    perturbance: 0.04,
                    interactive: true,
                    imageUrl: imageUrl
                });

                // Auto-ripple effect
                setInterval(function () {
                    var x = Math.random() * $el.outerWidth();
                    var y = Math.random() * $el.outerHeight();
                    var dropRadius = 20;
                    var strength = 0.0008 + Math.random() * 0.0004;

                    $el.ripples('drop', x, y, dropRadius, strength);
                }, 1000);

            } catch (e) {
                console.error("Ripples failed to initialize:", e);
            }
        }

        // Robust image loading check
        var img = new Image();
        img.onload = function () {
            startRipples();
        };
        img.onerror = function () {
            console.error("Failed to load background image for ripples:", imageUrl);
            // Try to initialize anyway as a fallback
            startRipples();
        };
        img.src = imageUrl;

        if (img.complete) {
            img.onload();
        }
    });
</script>


</html>