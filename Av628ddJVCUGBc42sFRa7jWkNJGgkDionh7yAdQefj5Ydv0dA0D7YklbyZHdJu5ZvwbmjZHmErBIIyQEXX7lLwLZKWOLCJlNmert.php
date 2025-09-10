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

  <!-- Search Bar Toggle -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const searchBarContainerEl = document.querySelector(".search-bar-container");
      const magnifierEl = document.querySelector(".magnifier");
      if (searchBarContainerEl && magnifierEl) {
        magnifierEl.addEventListener("click", function() {
          searchBarContainerEl.classList.toggle("active");
        });
      }
    });
  </script>

  <!-- Client-side Search -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
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
          .filter(function(item) {
            return item.name.toLowerCase().includes(query);
          })
          .sort(function(a, b) {
            const aName = a.name.toLowerCase();
            const bName = b.name.toLowerCase();
            const aStarts = aName.startsWith(query);
            const bStarts = bName.startsWith(query);
            if (aStarts && !bStarts) return -1;
            if (!aStarts && bStarts) return 1;
            return aName.indexOf(query) - bName.indexOf(query);
          });

        if (!filteredData.length) {
          searchResults.innerHTML = '<div class="col-12">No Trips found for "' + query + '"</div>';
        } else {
          searchResults.innerHTML = filteredData.map(function(item) {
            return (
              '<div class="trip-card">' +
              '<div class="search-box-con">' +
              '<a href="' + item.link + '">' +
              '<img src="' + item.image + '" alt="' + item.name + '">' +
              '<div class="silder-inner silder-inner1">' +
              '<div class="inner inner2">' +
              '<h3>' + item.duration + '</h3>' +
              '<h4>' +
              '<img src="assets/img/images/loc1.svg" class="exicon" alt="location icon">' +
              item.location +
              '</h4>' +
              '</div>' +
              '<h2>' + item.name + '</h2>' +
              '</div>' +
              '</a>' +
              '</div>' +
              '</div>'
            );
          }).join('');
        }
        searchResults.style.display = 'flex';
        searchResults.style.flexWrap = 'wrap';
      });
    });
  </script>

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

  <!-- WhatsApp Button Handler -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const whatsappButton = document.querySelector('.what-sum');
      if (whatsappButton) {
        whatsappButton.addEventListener("click", function(event) {
          event.preventDefault();
          var name1 = document.getElementById("name1") ? document.getElementById("name1").value.trim() : "";
          var phone1 = document.getElementById("phone1") ? document.getElementById("phone1").value.trim() : "";
          var des = document.getElementById("des") ? document.getElementById("des").value.trim() : "";
          var mess = document.getElementById("mess") ? document.getElementById("mess").value.trim() : "";
          var email1 = document.getElementById("email1") ? document.getElementById("email1").value.trim() : "";

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
            var win = window.open(url, '_blank');
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
    document.addEventListener("DOMContentLoaded", function() {
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
        images[j].addEventListener("mouseenter", function() {
          clearTimeout(timer);
        });
        images[j].addEventListener("mouseleave", function() {
          timer = setTimeout(displayImages, 5000);
        });
      }
    });
  </script>

  <!-- Main JS -->
  <script src="index.js"></script>

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
  <?php include('components/banner.php'); ?>
  <?php include('components/banner-below.php'); ?>
  <?php include('components/new-upcoming-trips.php'); ?>

  <!-- <div class="container" style="position: relative;">
    <div class="upcoming-container"
      style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 130px; max-width: 1500px; margin-left: auto; margin-right: auto;">

      <section>
        <h2 class="upcoming-header">
          <i class="fa-solid fa-calendar-days upcoming-header-icon"></i>
          Featured Events
        </h2>

        <div class="upcoming-tab-content active" id="tab-august">
          <div class="upcoming-slider-wrapper">
            <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
              <i class="fa fa-chevron-left"></i>
            </button>
            <div class="upcoming-slider">
              <div class="upcoming-card">
                <div class="upcoming-content">
                  <div class="upcoming-image">
                    <img src="assets/img/valley-of-flowers/avif/img-3.avif" alt="Pondi Dive-in">
                  </div>
                  <div class="upcoming-card-flex">
                    <div class="upcoming-duration">
                      <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>2D/1N
                    </div>
                    <div class="upcoming-from">
                      <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                      <span>EX: Direct, Chennai</span>
                    </div>
                  </div>
                  <h1 class="upcoming-title">Pondi Dive-in</h1>
                  <p class="upcoming-locations">Pondicherry</p>
                  <div class="upcoming-price-section">
                    <div class="upcoming-dates">
                      <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                      <span class="upcoming-dates-text">Aug 16, 22</span>
                    </div>
                    <div>
                      <div class="upcoming-starts">Starts</div>
                      <div class="upcoming-price">₹4,990</div>
                    </div>
                  </div>
                  <a href="pondicherry.php" target="_blank" class="upcoming-view">View Trip</a>
                </div>
              </div>
              <div class="upcoming-card">
                <div class="upcoming-content">
                  <div class="upcoming-image">
                    <img src="assets/img/valley-of-flowers/avif/img-3.avif" alt="Pondi Dive-in">
                  </div>
                  <a href="pondicherry.php" target="_blank" class="upcoming-view">Register</a>
                </div>
              </div>
              <div class="upcoming-card">
                <div class="upcoming-content">
                  <div class="upcoming-image">
                    <img src="assets/img/valley-of-flowers/avif/img-3.avif" alt="Pondi Dive-in">
                  </div>
                  <a href="pondicherry.php" target="_blank" class="upcoming-view">Register</a>
                </div>
              </div>
              <div class="upcoming-card">
                <div class="upcoming-content">
                  <div class="upcoming-image">
                    <img src="assets/img/valley-of-flowers/avif/img-3.avif" alt="Pondi Dive-in">
                  </div>
                  <div class="upcoming-card-flex">
                    <div class="upcoming-duration">
                      <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>2D/1N
                    </div>
                    <div class="upcoming-from">
                      <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                      <span>EX: Direct, Chennai</span>
                    </div>
                  </div>
                  <h1 class="upcoming-title">Pondi Dive-in</h1>
                  <p class="upcoming-locations">Pondicherry</p>
                  <div class="upcoming-price-section">
                    <div class="upcoming-dates">
                      <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                      <span class="upcoming-dates-text">Aug 16, 22</span>
                    </div>
                    <div>
                      <div class="upcoming-starts">Starts</div>
                      <div class="upcoming-price">₹4,990</div>
                    </div>
                  </div>
                  <a href="pondicherry.php" target="_blank" class="upcoming-view">View Trip</a>
                </div>
              </div>
              <div class="upcoming-card">
                <div class="upcoming-content">
                  <div class="upcoming-image">
                    <img src="assets/img/valley-of-flowers/avif/img-3.avif" alt="Pondi Dive-in">
                  </div>
                  <a href="pondicherry.php" target="_blank" class="upcoming-view">Register</a>
                </div>
              </div>
            </div>
            <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
              <i class="fa fa-chevron-right"></i>
            </button>
          </div>
        </div>
      </section>

    </div>
    <img src="assets/img/banner/events-examaple.png" alt="" style="width: 100%; display: block; position: relative; z-index: 1;">
  </div> -->

  <!-- -------------Testing Areas ------------- -->

  <!-- Completed -->

  <!-- Testing -->

  <?php include('components/christmas.php'); ?>

  <div style="padding: 100px 0px 100px 0px;">
    <?php include('components/christmas -2.php'); ?>
  </div>
  <div style="padding: 100px 0px 100px 0px;">
    <?php include('components/christmas -1.php'); ?>
  </div>


  <div class="container" style="margin-top: 150px;">
    <a href="events.php"><img src="assets/img/event/banner/event-image-by-roamers-3.png" alt=""></a>
  </div>


  <!-- -------------Testing Areas ------------- -->


  <section class="travelgram" style="margin-top: 100px;" id="travelgram">
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

                      Joined the group trip with my sister, it was the best experience we could ask for. Everything was
                      great about the trip, explored even the spots which was not mentioned in itinerary, don’t really
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
                    <img src="assets/img/Testimnils/Andaman.jpg" />


                  </div>
                  <div class="slide-box">
                    <!-- Testi Two -->


                    <p class="comment">

                      The VIBE was unreal, didn’t expect I’ll connect like this.. Best trip I have gone, explored
                      places, local foods, cultures, and those kids Ohh my goodness!!!! 😍 Thank you roamers and trip
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
                    <img src="assets/img/Testimnils/Spiti.jpg" />


                  </div>

                  <div class="slide-box">
                    <!-- Testi Two -->


                    <p class="comment">
                      I joined solo and was imaginable experience, my first time going with the group trip, truly
                      knocked my expectations. Very cool people, and awesome spots. Enjoyed a lot, Spl thanks to our
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
                    <img src="assets/img/Testimnils/chikmagalur.jpg" />

                  </div>
                  <div class="slide-box">
                    <!-- Testi Three -->


                    <p class="comment">
                      Camp nights with the bunch of crazy travellers, this was the trip which I’m gonna remember for
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
                    <img src="assets/img/Testimnils/Manali.jpg" />

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
          <h2 class="head " style="padding-top: 260px !important;">
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

  <section class="short-trips py-60" id="shortbreak">
    <h2 class="head">
      Short Break Trips
    </h2>
    <div class="container-fluid">
      <div class="swiper-container">
        <div class="swiper-wrapper">


          <div class="swiper-slide">
            <a href="valley-of-flowers">
              <img src="assets/img/valley-of-flowers/vally-of-flowers-image (1).webp" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>5 DAYS - 6 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Rishikesh
                  </h4>
                </div>
                <h2>Valley Of Flowers
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Rishikesh, Joshimath, Pulna </p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="valley-dates"></span>
                  </h4>
                  <h4><span id="valley-price"></span> </h4>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="kolukkumalai-trek">
              <img src="assets/img/kolukkumalai-img/2.jpg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Direct,
                    Chennai
                  </h4>
                </div>
                <h2>Munnar with Kolukkumalai
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Munnar</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="munnar-dates"></span>
                  </h4>
                  <h4><span id="munnar-price" class="munnar-price"></span> </h4>
                </div>
              </div>
            </a>
          </div>


          <div class="swiper-slide">
            <a href="wayanad">
              <!-- <img class="new-year" src="assets/img/bg/Pongal-gif.gif" alt=""> -->
              <img src="assets/img/bg/waya-cover.jpg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Direct,
                    Chennai
                  </h4>
                </div>
                <h2>Wonders of Wayanad
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Wayanad</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="wayanad-dates"> Jan 12 </span>
                  </h4>
                  <h4><span id="wayanad-price">₹7,990</span> </h4>
                </div>
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="varkala-grouptrip">
              <img src="assets/img/varkala/kerala-1.jpg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Chennai,
                    Trivandrum
                  </h4>
                </div>
                <h2>Varkala & Munroe Flashpacking
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Varkala, Munroe Island, Trivandrum</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="varkala-dates">Jan
                      12, Feb 16 </span>
                  </h4>
                  <h4><span class="varkala-price">₹8,490</span> </h4>
                </div>
              </div>
            </a>
          </div>

          <div class="swiper-slide swiper-slide-image">
            <a href="ooty">
              <img src="assets/img/bg/ooty-cove.jpeg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon"> EX: Chennai,
                    Coimbatore
                  </h4>
                </div>
                <h2>Ooty the Queen of Hills
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Nilgiri, Coonoor, Coimbatore
                  </p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="ooty-dates">Nov 3, 24, Dec 8, 15, 22, Jan 26 </span>
                  </h4>
                  <h4><span id="ooty-price">₹7,490</span> </h4>
                </div>
              </div>
            </a>
          </div>


          <div class="swiper-slide">
            <a href="kodaikanal">
              <img src="assets/img/kodaikanal/Dolphin nose.jpg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Chennai
                  </h4>
                </div>
                <h2>Kodaikanal Trek with Poombarai
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Perumal peak, Vattakanal, Poombarai</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="kodai-dates">Jan
                      26, Feb 10 </span>
                  </h4>
                  <h4><span class="kodai-price">₹7,990</span> </h4>
                </div>
              </div>
            </a>
          </div>

          <!-- <div class="swiper-slide">
            <a href="kolukkumalai">
              <img class="new-year" src="assets/img/bg/christmas.gif" alt="">
              <img src="assets/img/short-trip/st1.JPG" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>2 DAYS / 1 NIGHT</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Chennai
                  </h4>
                </div>
                <h2>Munnar with Kolukkumalai
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Kolukkumalai, Munnar </p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="kolukku-dates"> Dec
                      8, 23, Jan 12 </span>
                  </h4>
                  <h4><span>₹5,499</span> </h4>
                </div>
              </div>
            </a>
          </div> -->


          <div class="swiper-slide">
            <a href="pondicherry">
              <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon"> EX: Chennai
                  </h4>
                </div>
                <h2>Pondi Dive-in
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Pondicherry</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="pondi-dates">Nov
                      24, Dec 09, 23 </span>
                  </h4>
                  <h4><span class="pondi-price"></span> </h4>
                </div>
              </div>
            </a>
          </div>


          <div class="swiper-slide swiper-slide-image">
            <a href="kedarkantha">
              <img src="assets/img/kedarkantha/main-sub.avif " alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>5 DAYS / 4 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon"> EX: Dehradun
                  </h4>
                </div>
                <h2>Kedarkantha Trek
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Kedarkantha
                  </p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="kedar-dates">Open Soon</span>
                  </h4>
                  <h4><span class="kedar-price">₹8,990</span> </h4>
                </div>
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="chikmagalur">
              <img src="assets/img/Testimnils/chikmagalur.jpg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Chennai,
                    Bangalore
                  </h4>
                </div>
                <h2>Chikmagalur Backpacking
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Chikmagalur, Z point, Hebbe Falls</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="chik-dates"> Dec
                      15 </span>
                  </h4>
                  <h4><span class="chik-price">₹7,990</span> </h4>
                </div>
              </div>
            </a>
          </div>

          <!-- <div class="swiper-slide">
            <a href="#home-form">
              <img src="assets/img/short-trip/Tourist-Places-in-Kodaikanal-.jpg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Chennai
                  </h4>
                </div>
                <h2>Kodai paradise
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Kodaikanal</p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    Opens Soon
                  </h4>
                  <h4><span>₹7,499</span> </h4>
                </div>
              </div>
            </a>
          </div> -->
          <div class="swiper-slide">
            <a href="#home-form">
              <img src="assets/img/Kerala/goa-cover.jpeg" alt="roamers-Gallery">
              <div class="silder-inner silder-inner1">
                <div class="inner inner2">
                  <h3>3 DAYS / 2 NIGHTS</h3>
                  <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Bangalore
                  </h4>
                </div>
                <h2>Goa Escape
                </h2>
                <div class="inner">
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">North Goa, South Goa </p>
                  <h4 class="sta">Starts at </h4>
                </div>

                <div class="inner">
                  <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg" alt="second location-icon">
                    <span class="goa-dates">Opens Soon</span>
                  </h4>
                  <h4><span class="goa-price">₹8,490</span> </h4>
                </div>
              </div>
            </a>
          </div>

          <!-- Add more swiper-slide elements for additional images -->
        </div>
        <div class="swiper-button-next" style="right: 46px;"></div>
        <div class="swiper-button-prev" style="left: 46px;"></div>
      </div>
    </div>
  </section>

  <section class="quotes pt-60">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7  quotes-img" style="margin-bottom: 20px;">
          <img class="quotes-img-img1" style="height: 100% !important; width: 100% !important;"
            src="assets/img/icon/Vertical-private-trips-NEW.png" alt="">
          <img class="quotes-img-img" style="height: 100% !important;
    width: 182% !important;
    margin-left:-49px;" src="assets/img/icon/Private-trips.jpg" alt="">
        </div>
        <div class="col-md-5" id="contact-roamers">
          <div class="form" id="home-form">
            <div class="above-form">
              <!-- <h3>Have A Query?</h3> -->
              <h2>Talk To Our Travel Experts</h2>
            </div>
            <div class="form-section">
              <form style="text-align: center !important;" id="regForm1" action="index-contact-us-mail.php"
                method="POST">
                <input type="text" required placeholder="Name" name="name1" id="name1">
                <input type="email" required placeholder="Email" name="email1" id="email1">
                <input type="text" required placeholder="Mobile Number" name="phone1" id="phone1">
                <input type="text" placeholder="Destination" name="des" id="des">
                <textarea placeholder="Message" name="mess" id="mess" id="" rows="4"></textarea>
                <button style="margin-top: 20px;" type="submit" class="what-sum btn mb-4 "><i
                    class="fa-regular fa-comment-dots"></i>
                  REQUEST CALL BACK</button>
              </form>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php include('includes/footer.php'); ?>

  <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1"><img src="assets/img/icon/whatsapp.svg" alt=""></a>

</body>


</html>