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
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <script>
        // WhatsApp Button Handler - Optimized
        document.addEventListener("DOMContentLoaded", function() {
            const whatsappButton = document.querySelector('.what-sum');
            if (whatsappButton) {
                whatsappButton.addEventListener("click", function(event) {
                    event.preventDefault();
                    const name1 = document.getElementById("name1")?.value.trim();
                    const phone1 = document.getElementById("phone1")?.value.trim();
                    const des = document.getElementById("des")?.value.trim();
                    const mess = document.getElementById("mess")?.value.trim();
                    const email1 = document.getElementById("email1")?.value.trim();

                    if (name1 && phone1 && email1) {
                        const params = [
                            "Client Requesting About Enquiry",
                            `Name: ${name1}`,
                            `E-mail: ${email1}`,
                            `Phone No: ${phone1}`,
                            `Desigination: ${des}`,
                            `Message: ${mess}`
                        ].join("%0a");
                        const url = `https://wa.me/+918122121066?text=${encodeURIComponent(params)}`;
                        window.open(url, '_blank')?.focus();
                    } else {
                        alert("Please fill in all required fields (Name, Email, and Phone Number).");
                    }
                });
            }
        });
    </script>

    <script>
        // Optimized Image Slider
        (function() {
            let index = 0,
                timer;
            const images = document.getElementsByClassName("slide-box");
            if (!images.length) return;

            function displayImages() {
                for (let img of images) img.style.display = "none";
                index = (index + 1 > images.length) ? 1 : index + 1;
                images[index - 1].style.display = "block";
                timer = setTimeout(displayImages, 5000);
            }

            displayImages();

            // Use event delegation for all slide-box elements
            for (let img of images) {
                img.addEventListener("mouseenter", () => clearTimeout(timer));
                img.addEventListener("mouseleave", () => timer = setTimeout(displayImages, 5000));
            }
        })();
    </script>

    <script src="index.js"></script>


    <script>
        // Search Bar Toggle - Optimized
        document.addEventListener("DOMContentLoaded", function() {
            const searchBarContainerEl = document.querySelector(".search-bar-container");
            const magnifierEl = document.querySelector(".magnifier");
            if (searchBarContainerEl && magnifierEl) {
                magnifierEl.addEventListener("click", () => {
                    searchBarContainerEl.classList.toggle("active");
                });
            }
        });
    </script>

    <script>
        // Optimized Client-side Search
        (function() {
            const data = [{
                    name: 'Andaman Island Hopping',
                    link: 'https://www.roamers.in/andaman',
                    image: 'assets/img/kolukkumalai-img/2.jpg',
                    duration: '5 DAYS / 4 NIGHTS',
                    location: 'EX: Chennai'
                },
                {
                    name: 'Munnar With Kolukkumalai',
                    link: 'https://www.roamers.in/kolukkumalai-trek',
                    image: 'assets/img/kolukkumalai-img/2.jpg',
                    duration: '3 DAYS / 2 NIGHT',
                    location: 'EX: Direct, Chennai'
                },
                {
                    name: 'Wonders of Wayanad',
                    link: 'https://roamers.in/wayanad',
                    image: 'assets/img/bg/waya-cover.jpg',
                    duration: '3 DAYS / 2 NIGHTS',
                    location: 'EX: Direct, Chennai'
                },
                {
                    name: 'Munnar With Kolukkumalai',
                    link: 'https://www.roamers.in/kolukkumalai-trek',
                    image: 'assets/img/kolukkumalai-img/2.jpg',
                    duration: '3 DAYS / 2 NIGHT',
                    location: 'EX: Chennai'
                },
                {
                    name: 'Ooty the queen of hills',
                    link: 'https://roamers.in/ooty',
                    image: 'assets/img/bg/ooty-cove.jpeg',
                    duration: '3 DAYS / 2 NIGHTS',
                    location: 'EX: Chennai, Coimbatore'
                },
                {
                    name: 'Chikmagalur Bagpacking',
                    link: 'https://roamers.in/chikmagalur',
                    image: 'assets/img/bg/ooty-cove.jpeg',
                    duration: '3 DAYS / 2 NIGHTS',
                    location: 'EX: Chennai, Bangaluru'
                },
                {
                    name: 'Kerala : To gods own country',
                    link: 'https://roamers.in/kerala',
                    image: 'assets/img/Kerala/Kerala photos.jpg',
                    duration: '5 DAYS / 4 NIGHTS',
                    location: 'EX: Kochi, Chennai'
                },
                {
                    name: 'Andaman island hopping',
                    link: 'https://roamers.in/andaman',
                    image: 'assets/img/backpacking/Andaman hoppers.jpg',
                    duration: '7 DAYS / 6 NIGHTS',
                    location: 'EX: Kochi, Chennai'
                },
                {
                    name: 'Pondi Dive-in',
                    link: 'https://roamers.in/pondicherry',
                    image: 'assets/img/short-trip/Lead-Auroville.webp',
                    duration: '3 DAYS / 2 NIGHTS',
                    location: 'EX: Chennai'
                },
                {
                    name: 'Mejestic Meghalaya',
                    link: 'https://roamers.in/meghalaya',
                    image: 'assets/img/megalaya/Front 3.jpg ',
                    duration: '6 DAYS / 5 NIGHTS',
                    location: 'EX: Guwahati'
                },
                {
                    name: 'Kodaikanal trek with poombarai',
                    link: 'https://roamers.in/kodaikanal',
                    image: 'assets/img/megalaya/Front 3.jpg ',
                    duration: '3 DAYS / 2 NIGHTS',
                    location: 'EX: Chennai'
                },
                {
                    name: 'Kedarkantha Trek',
                    link: 'https://roamers.in/kedarkantha',
                    image: 'assets/img/kedarkantha/main-sub.jpg ',
                    duration: '5 DAYS / 4 NIGHTS',
                    location: 'EX: Dehradun'
                },
                {
                    name: 'Kodaikanal Backpacking',
                    link: 'https://roamers.in/kodaikanal1',
                    image: 'assets/img/kodaikanal-backpacking/Gunacav.jpeg',
                    duration: '3 DAYS / 2 NIGHTS',
                    location: 'EX: Chennai'
                },
                {
                    name: 'Varkala & Munroe Flashpacking',
                    link: 'https://roamers.in/varkala-grouptrip',
                    image: 'assets/img/varkala/kerala-1.jpg',
                    duration: '3 DAYS / 2 NIGHTS',
                    location: 'EX: Chennai'
                },
                {
                    name: 'Spiti winter expedition',
                    link: 'https://roamers.in/spiti-valley',
                    image: 'assets/img/spiti-valley/spiti-cover.jpg',
                    duration: '7 DAYS / 6 NIGHTS',
                    location: 'EX: Delhi'
                }
            ];

            const searchInput = document.getElementById('search-input');
            const searchResults = document.getElementById('search-results');
            if (!searchInput || !searchResults) return;

            searchInput.addEventListener('input', function() {
                const query = this.value.trim().toLowerCase();
                searchResults.innerHTML = '';
                if (!query) {
                    searchResults.style.display = 'none';
                    return;
                }

                const filteredData = data
                    .filter(item => item.name.toLowerCase().includes(query))
                    .sort((a, b) => {
                        const aName = a.name.toLowerCase(),
                            bName = b.name.toLowerCase();
                        const aStarts = aName.startsWith(query),
                            bStarts = bName.startsWith(query);
                        if (aStarts && !bStarts) return -1;
                        if (!aStarts && bStarts) return 1;
                        return aName.indexOf(query) - bName.indexOf(query);
                    });

                if (!filteredData.length) {
                    searchResults.innerHTML = `<div class="col-12">No Trips found for "${query}"</div>`;
                } else {
                    searchResults.innerHTML = filteredData.map(item => `
            <div class="trip-card">
              <div class="search-box-con">
                <a href="${item.link}">
                  <img src="${item.image}" alt="${item.name}">
                  <div class="silder-inner silder-inner1">
                    <div class="inner inner2">
                      <h3>${item.duration}</h3>
                      <h4>
                        <img src="assets/img/images/loc1.svg" class="exicon" alt="location icon">
                        ${item.location}
                      </h4>
                    </div>
                    <h2>${item.name}</h2>
                  </div>
                </a>
              </div>
            </div>
          `).join('');
                }
                searchResults.style.display = 'flex';
                searchResults.style.flexWrap = 'wrap';
            });
        })();
    </script>

    <!-- The following scripts are for structured data (JSON-LD) for SEO purposes.
    They help search engines understand the content of the page, which can improve search ranking and display rich results.-->

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
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.5",
                "reviewCount": "24"
            },
            "offers": {
                "@type": "Offer",
                "url": "https://www.roamers.in/product-page",
                "priceCurrency": "USD",
                "price": "99.99",
                "itemCondition": "http://schema.org/NewCondition",
                "availability": "http://schema.org/InStock"
            },
            "review": [{
                    "@type": "Review",
                    "author": {
                        "@type": "Person",
                        "name": "John Doe"
                    },
                    "reviewRating": {
                        "@type": "Rating",
                        "ratingValue": "5"
                    },
                    "reviewBody": "This product is amazing!"
                },
                {
                    "@type": "Review",
                    "author": {
                        "@type": "Person",
                        "name": "Jane Smith"
                    },
                    "reviewRating": {
                        "@type": "Rating",
                        "ratingValue": "4"
                    },
                    "reviewBody": "Great product but a bit expensive."
                }
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


    <!-- Google Analytics Code: -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0MSFD4117B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-0MSFD4117B');
    </script>

    <!-- jQuery and Plugins -->
    <script src="assets/js/dates.js"></script>
    <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="assets/js/active.js"></script>
    <script src="assets/js/price.js"></script>

</head>

<style>
    .gotoinsta:hover {
        background-color: #fff;
        color: #4ec0db;
        border: 2px solid #4ec0db;
        font-weight: 500;
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
        padding: 60px 0px 70px 0;
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

<body>

    <?php include('includes/loader.php'); ?>
    <?php include('includes/header.php'); ?>
    <?php include('components/events/events-banner-swiper.php'); ?>
    <?php include('components/events/events-hero.php'); ?>
    <?php include('components/events/events-cards.php'); ?>
    <?php include('includes/footer.php'); ?>

    <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1"><img src="assets/img/icon/whatsapp.svg" alt=""></a>

</body>


</html>