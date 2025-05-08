<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta property="og:image:secure_url" content=”https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png” />

  <!-- SEO Meta Description -->
  <meta name="description" content="" />
  <meta name="author" content="Themeland" />
  <meta property="og:image" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png" />
  <meta property="og:image:width" content="700" />
  <meta property="og:image:height" content="500" />

  <!-- Title  -->
  <title>Roamers</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Favicon  -->
  <!-- <link rel="icon" href="assets/img/Logo/Logo mark-01.png" sizes="192x192" /> -->
  <link rel="shortcut icon" href="./assets/img/icon/fav-icon.png" type="image/x-icon"  sizes="192x192" />
  
  <!-- ***** All CSS Files ***** -->
  <!-- ***** Font Asesome cdn ***** -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Style css -->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- Responsive css -->

  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="asstes/img/icon/fav-icon.png" type="image/x-icon">

  <style>
    .trip-home {
      background: url(assets/img/chikmangalur/Media/6.jpg) !important;
      background-position: center !important;
      background-size: cover !important;
      background-repeat: no-repeat !important;
      position: relative !important;
      background-attachment: fixed !important;
    }

    .whatapp {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
      animation: fadeInUp1 0.5s ease-in-out forwards;
      display: block !important;
    }

    .travel-des {
      padding: 30px;
    }

    .travel-des a {
      max-width: 200px;
    }

    .acc-inner li::before {
      width: 0;
      height: 0;
      border-top: 5px solid transparent;
      border-left: 10px solid #4ec0db !important;
      border-bottom: 5px solid transparent;
      position: absolute;
      left: 0;
      content: "";
      margin-top: 5px;
    }

    .acc-inner li:hover::before {
      border-left: 10px solid #555 !important;
    }

    .price-occupancy {
      padding: 10px 30px;
      background: #fff;
      border: 1px solid #eee;
      margin: 5px;
      border-radius: 5px;
      font-family: "Heebo", sans-serif;
    }


    .price-occupancy1 {
      border: none;
    }

    .price-occupancy1:focus {
      outline: 0px solid !important;
      /* border: 2px solid #4ec1db0d !important; */
      /* -moz-outline-style: none !important; */
      border-color: none !important;
      background-color: #4ec0db0f;
      box-shadow: none !important;
    }


    .occupancy {
      display: flex;
      justify-content: center;
    }

    .itinerary-logo-content p {
      font-size: 14px;
      background: #d8eefe !important;
      margin: 4px;
      color: black !important;
      color: black !important;
      border-radius: 31px;
      padding: 5px 10px;
      text-transform: capitalize;
    }

    .ai1::before {
      background-image: url(assets/img/images/line.svg) !important;
    }

    .accordion-button::after {
      background-image: url(assets/img/images/arrow-down.svg) !important;
    }

    .accordion-button:not(.collapsed)::after {
      background-image: url(assets/img/images/arrow-up.svg) !important;
      transform: rotate(-360deg) !important;
    }

    .why-us {
      background: url(assets/img/images/sea-travel.jpg);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      position: relative;
      padding: 60px 0px;
    }

    .why-us::before {
      content: "";
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .why-para {
      color: #fff;
      text-align: center;
      font-size: 16px;
      margin-bottom: 60px;
    }

    .why-us .trip-inner>h3 {
      margin-bottom: 30px;
      padding: 20px 24px;
    }

    .silder-inner h3 {
      font-size: 11px;
      color: #4EC0DB;
      font-weight: 700;
    }

    .silder-inner h2 {
      color: #094067;
      font-size: 20px;
      margin-bottom: 0.7rem;
    }

    .silder-inner h4 {
      display: flex;
      align-items: center;
      color: #5F6C7B;
      font-size: 12px;
      font-weight: 400;
    }

    .silder-inner h4>img {
      width: 20px;
      height: 20px;
      display: inline-block;
      margin-right: 15px;
      margin-top: -7px;
    }

    .silder-inner1 p {
      border: none !important;
      margin-bottom: 0px !important;
      font-size: 12px;
      font-weight: 400;
      color: #5F6C7B;
      padding-bottom: 10px;
    }

    .silder-inner span {
      display: flex;
      align-items: center;
      color: #4EC0DB;
      font-size: 16px;
      margin-left: 5px;
      font-weight: 600;
    }

    .silder-inner {
      padding: 30px 20px;
      background: #ffff;
    }

    .short-trips {
      background: none;
      padding-bottom: 60px;
    }

    .container-fluid {
      width: 96%;
      padding-right: var(--bs-gutter-x, .75rem);
      padding-left: var(--bs-gutter-x, .75rem);
      margin-right: auto;
      margin-left: auto;
    }

    .acc-btn::after {
      background-image: url(assets/img/images/arroww\ Black.svg) !important;
    }

    .acc-btn:not(.collapsed)::after {
      background-image: url(assets/img/images/arroww\ white.svg) !important;
      transform: rotate(-360deg) !important;
    }

    .trip-nav {
      grid-template-columns: repeat(4, 1fr) !important;
    }

    #tab1 p {
      padding-left: 30px;
      position: relative;
    }

    #tab1 p::before {
      content: "";
      position: absolute;
      font-size: 20px;
      background: url(assets/img/icon/chexh\ 1.png);
      left: 0;
      width: 20px;
      margin-top: 3px;
      background-position: center;
      height: 20px;
      background-size: cover;
    }

    #tab2 p {
      padding-left: 30px;
      position: relative;
    }

    #tab2 p::before {
      content: "";
      position: absolute;
      font-size: 20px;
      background: url(assets/img/icon/Close\ 1.png);
      left: 0;
      width: 20px;
      margin-top: 3px;
      background-position: center;
      height: 20px;
      background-size: cover;
    }

    .arrow-right {
      height: 20px;
      width: 30px;
      margin-left: 10px;
    }

    .trip-home {
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
      padding: 280px 280px 150px !important;
      margin-top: -127px;
      position: relative;
    }

    .trip-home h1 {
      text-align: center;
      color: #fff;
      text-transform: capitalize;
      font-weight: 800;
      line-height: 1.1 !important;
      font-size: 46px;
      margin: 86px 0px 54px !important;
    }

    @media (max-width: 600px) {
      .kerala-overview {
        font-size: 20px !important;
      }

      .price-occupancy {
        padding: 10px 5px !important;
      }

      #moreText {
        visibility: visible !important;
      }

      #readMoreLink {
        visibility: visible !important;
      }

      .readless {
        display: none;
      }

      .trip-home h1 {
        margin: 77px 0px 25px !important;
      }

      #tab1 p {
        font-size: 11px;
      }


      .accordion-button {
        font-size: 9.5px !important;
        padding: 10px 20px !important;
      }

      .days {
        font-size: 10px !important;
      }

      #tab2 p {
        font-size: 11px;
      }

      .occupancy {
        font-size: 10px !important;
      }

      .silder-inner h4 {
        font-size: 12px !important;

      }

      .slider-item2 {
        flex: 0 0 calc(96%) !important;
        padding: 15px;
      }

      .acc-container {
        padding: 0px 0px 0px 6px !important;
      }

      .slider-item2 img {
        height: 380px !important;
      }

      .slider-item2-image {
        margin-left: 0px !important;
      }
      .terms-sec1 h3{
        font-size: 17px;
        padding-top: 1.3rem !important;
      }
      .terms-sec1 h6{
        font-size: 16px !important;
      }
      .terms-sec1 li {
    line-height: 28px !important;
    font-size: 15px !important;
}
.terms-sec1 {
    margin-top: 6rem !important;
}
.terms-sec1 h1{
      font-size: 30px !important;
    }
    }

    .des-sub {
      display: flex;
      justify-content: center;
      margin-left: -43px !important;
      margin-bottom: 43px;
    }

    .accordion-button:not(.collapsed) {
      color: #0c63e4;
      background-color: #094067 !important;
    }

    #moreText {
      visibility: hidden;
    }

    #readMoreLink {
      visibility: hidden;
    }

    .faq {
      background-image: url(assets/img/images/world2.png) !important;
    }


    /*  */
    .terms-sec1{
      margin-top: 11rem;
    }
    .terms-sec1 h1{
      font-size: 45px;
    }
    .terms-sec1 li{
line-height: 60px;
font-size: 20px;
    }
   
    .terms-sec1 h6{
      font-size: 24px;
    }
  </style>
</head>

<body>
  <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1"><img src="assets/img/icon/whatsapp.svg" alt=""></a>

  <!-- ***** Header Start ***** -->
  <?php include('includes/header.php'); ?>
  <!-- ***** Header End ***** -->
  <!-- ***** Welcome Area Start ***** -->

  <section class="terms-sec1">
    <div class="container">
      <div class="row">
        <h1>CANCELLATION POLICY</h1>
        <h3 class="pt-5">Refunds will not be issued for the original booking amount in the case of cancellations. However,</h3>
       
        <ul class="pt-3 pb-5">
        <h6>The refund policy is outlined as follows:</h6>
          <li>1. If cancellations are made 30 days before the start date of the trip, 50% of the trip cost will be charged
            as cancellation fees.
          </li>
          <li>2. If cancellations are made 15-30 days before the start date of the trip, 75% of the trip cost will be
            charged as cancellation fees.</li>
          <li>3. If cancellations are made within 0-15 days before the start date of the trip, 100% of the trip cost will
            be charged as cancellation fees.
          </li>
          <li>4. In the case of unforeseen weather conditions or government restrictions, certain activities may be
            canceled and in such cases, the operator will try his best to provide an alternate feasible activity.
            However, no refund will be provided for the same.
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!--====== FOOTER START======-->
  <footer class="footer-section">
    <?php include('includes/footer.php'); ?>

    <!--====== FOOTER END======-->

    <!-- ***** All jQuery Plugins ***** -->
    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    </head>
    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>


    <!-- Active js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="assets/js/main.js"></script> -->
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="assets/js/active.js"></script>

    <script>
      window.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper-container', {
          slidesPerView: 'auto',
          spaceBetween: 10,
          loop: true,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          breakpoints: {
            1550: {
              slidesPerView: 4,
            },
            640: {
              slidesPerView: 4,
            },
            240: {
              slidesPerView: 1.1,
            },
          },
        });

      });


      // *****Sidebar tab content end*****    

      // *****Sidebar tab radio content start*****
      var sliders = document.querySelectorAll(".slider");
      sliders.forEach(function (slider) {
        var sliderContainer = slider.querySelector(".slider-container");
        var prevBtn = slider.querySelector(".prev-btn1");
        var nextBtn = slider.querySelector(".next-btn1");

        var slideWidth = slider.offsetWidth / 5; // Default slide width for desktop
        var slidesToShow = 5; // Number of slides to show at a time on desktop
        var currentSlide = 0;
        var totalSlides = sliderContainer.childElementCount;
        var touchStartX = 0;
        var touchEndX = 0;
        var isDesktop = window.innerWidth >= 768; // Adjust the breakpoint as needed

        if (!isDesktop) {
          slideWidth = slider.offsetWidth / 1; // Slide width for mobile
          slidesToShow = 1; // Number of slides to show at a time on mobile
        }

        prevBtn.addEventListener("click", handlePrevClick);
        nextBtn.addEventListener("click", handleNextClick);
        sliderContainer.addEventListener("touchstart", handleTouchStart);
        sliderContainer.addEventListener("touchmove", handleTouchMove);
        sliderContainer.addEventListener("touchend", handleTouchEnd);

        updateButtonVisibility();

        function handlePrevClick() {
          if (isDesktop) {
            currentSlide = Math.max(currentSlide - 1, 0);
          } else {
            currentSlide = Math.max(currentSlide - 1, 0);
            currentSlide = Math.min(currentSlide, totalSlides - 1);
          }
          sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
          updateButtonVisibility();
        }

        function handleNextClick() {
          if (isDesktop) {
            currentSlide = Math.min(currentSlide + 1, totalSlides - slidesToShow);
          } else {
            currentSlide = Math.min(currentSlide + 1, totalSlides - 1);
          }
          sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
          updateButtonVisibility();
        }

        function handleTouchStart(e) {
          touchStartX = e.touches[0].clientX;
        }

        function handleTouchMove(e) {
          touchEndX = e.touches[0].clientX;
          var touchDistance = touchStartX - touchEndX;

          // Smooth scrolling by adjusting the transform value based on touch distance
          sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth - touchDistance}px)`;
        }

        function handleTouchEnd() {
          var touchDistance = touchStartX - touchEndX;

          if (touchDistance > slideWidth / 2) {
            handleNextClick();
          } else if (touchDistance < -slideWidth / 2) {
            handlePrevClick();
          } else {
            // Reset the transform value if swipe distance is not significant
            sliderContainer.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
          }
        }

        function updateButtonVisibility() {
          if (currentSlide === 0) {
            prevBtn.style.display = "none";
            nextBtn.style.display = "none";
          } else if (currentSlide >= totalSlides - slidesToShow) {
            prevBtn.style.display = "none";
            nextBtn.style.display = "none";
          } else {
            prevBtn.style.display = "none";
            nextBtn.style.display = "none";
          }
        }
      });




      function toggleReadMore() {
        var moreText = document.getElementById('moreText');
        var readMoreLink = document.getElementById('readMoreLink');

        if (moreText.style.display === 'none') {
          moreText.style.display = 'inline';
          readMoreLink.textContent = '...Read Less';
        } else {
          moreText.style.display = 'none';
          readMoreLink.textContent = '...Read More';
        }
      }
      // Get all elements with the class "price-occupancy1"
      const selectElements = document.getElementsByClassName("price-occupancy1");

      // Get the price element
      const price = document.getElementById('price');

      // Add a change event listener to each select element
      for (const select of selectElements) {
        select.addEventListener("change", function () {
          // Get the selected option
          const selectedOption = select.options[select.selectedIndex];

          // Update the value
          const selectedValue = selectedOption.value;

          // You can do something with the selected value here
          price.innerHTML = selectedValue;
        });
      }
    </script>
    <script>
      var navbar = document.querySelector('nav')

      window.onscroll = function () {

        // pageYOffset or scrollY
        if (window.scrollY > 100) {
          navbar.classList.add('scrolled')
        } else {
          navbar.classList.remove('scrolled')
        }
      }
    </script>
</body>

</html>