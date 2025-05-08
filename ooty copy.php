<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/Ooty/4.jpg" width="300" height="400"
    alt="image for ooty" />

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

  <!-- Responsive css -->

  <link rel="stylesheet" href="assets/css/responsive.css" />
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />


  <style>
    .nav-pills .nav-link.active {
      background: blue;
    }
  </style>
</head>

<body>



  <!-- Large modal -->
  <style>
    .calender-div {
      width: 46%;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      padding: 10px;
      border-radius: 5px;
    }

    .calendar {
      display: flex;
      gap: 20px;
      justify-content: center;
    }

    .new-year {
      position: absolute;
      object-fit: cover;
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

    * {
      margin: 0;
      padding: 0;
    }

    body {
      background: white;
    }

    .container {
      border: 1px solid grey;
      margin: 1rem;
    }

    [data-tab-info] {
      display: none;
    }

    .active[data-tab-info] {
      display: block;
    }

    .tab-content {
      margin-top: 1rem;
      padding-left: 1rem;
      font-size: 20px;
      font-family: sans-serif;
      font-weight: bold;
      color: rgb(0, 0, 0);
    }

    .tabs {
      padding-top: 10px;
      font-size: 25px;
      color: rgb(0, 0, 0);
      justify-content: center;
      display: flex;
      margin: 0;
    }

    .tabs span {
      background: #00d4ff;
      padding: 5px 26px;
      border-radius: 5px;
      color: white;
      border: 1px solid rgb(255, 255, 255);
    }

    .tabs span.active {
      background-color: #b1f2ff;
      color: #000;
    }

    .tabs span:hover {
      opacity: 0.6;
      cursor: pointer;
    }

    .large-btn {
      width: 140px !important;
      height: 45px !important;
      font-size: 11px !important;
      text-transform: uppercase !important;
      letter-spacing: 2.5px !important;
      font-weight: 500 !important;
      color: #000 !important;
      background-color: #fff !important;
      border: none !important;
      border-radius: 45px !important;
      box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1) !important;
      transition: all 0.3s ease 0s !important;
      cursor: pointer !important;
      outline: none !important;
    }

    .large-btn:hover {
      background-color: #2EE59D !important;
      box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4) !important;
      color: #fff !important;
      height: 75px !important;
      transform: translateY(-7px) !important;
    }

    .large-btn {
      position: fixed;
      bottom: 50px;
      z-index: 999;
      animation: fadeInUp1 0.5s ease-in-out forwards;
      display: none;
    }

    .container {
      border: none;
    }

    .large-btn:hover .dates {
      color: white !important;
    }

    .dates {
      color: #000;
      font-size: 13px;
    }

    .img-img {
      height: 210px;
      object-fit: cover;
    }

    @media (max-width: 600px) {
      .calendar {
        display: block;
      }

      .calender-div {
        width: 100%;
      }

      .tab-content {
        overflow-y: scroll;
      }

      .tabs span {
        padding: 5px 10px;
      }
    }
    /* dates update */
.kodai-dates{
  color: #5f6c7b !important;
  font-size: 11px !important;
  font-weight: 400 !important;
}
.andaman-dates{
  color: #5f6c7b !important;
  font-size: 11px !important;
  font-weight: 400 !important;
}
.kerala-dates{
  color: #5f6c7b !important;
  font-size: 11px !important;
  font-weight: 400 !important;
}
.ooty-dates{
  color: #5f6c7b !important;
  font-size: 11px !important;
  font-weight: 400 !important;
}
.pondi-dates{
  color: #5f6c7b !important;
  font-size: 11px !important;
  font-weight: 400 !important;
}
.kolukku-dates{
  color: #5f6c7b !important;
  font-size: 11px !important;
  font-weight: 400 !important;
}
.chik-dates{
  color: #5f6c7b !important;
  font-size: 11px !important;
  font-weight: 400 !important;
}
.goa-dates{
  color: #5f6c7b !important;
  font-size: 11px !important;
  font-weight: 400 !important;
}
/*  */
  </style>

  <!-- Large modal -->
  <button type="button" class="btn large-btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><span
      class="dates"> Check trips</span></button>

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">


        <!-- Body Container -->
        <div class="container">

          <!-- Tabs Detail -->
          <div class="tabs">
            <span class="active" data-tab-value="#tab_1">Jan 13</span>
            <span data-tab-value="#tab_2">Jan 26 </span>
            <span data-tab-value="#tab_3">Dec 31 </span>
          </div>

          <!-- Tab content -->
          <div class="tab-content">
            <div class="tabs__tab active" id="tab_1" data-tab-info>
              <div class="calendar">
                <div class="calender-div">
                  <a href="kerala">
                    <img class="img-img" src="assets/img/backpacking/Kerala centre.jpg" alt="roamers-Gallery">
                    <div class="silder-inner silder-inner1">
                      <div class="inner inner2">
                        <h3>6 DAYS / 5 NIGHTS</h3>
                        <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX:
                          Kochi
                        </h4>
                      </div>
                      <h2>Kerala: To God’s Own Country

                      </h2>
                      <div class="inner">
                        <p><img src="assets/img/images/loc.svg" alt="location-icon">Vagamon, Varkala, Alleppey</p>
                        <h4 class="sta">Starts at </h4>
                      </div>

                      <div class="inner">
                        <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg"
                            alt="second location-icon"> Nov
                          25, Dec 23
                        </h4>
                        <h4><span>₹19,499</span> </h4>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="calender-div">
                  <a href="kolukkumalai">
                    <img class="new-year" src="assets/img/bg/christmas.gif" alt="">
                    <img class="img-img" src="assets/img/short-trip/st1.JPG" alt="roamers-Gallery">
                    <div class="silder-inner silder-inner1">
                      <div class="inner inner2">
                        <h3>2 DAYS / 1 NIGHT</h3>
                        <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Chennai
                        </h4>
                      </div>
                      <h2>Munnar with Kolukumalai
                      </h2>
                      <div class="inner">
                        <p><img src="assets/img/images/loc.svg" alt="location-icon">Kolukkumalai, Munnar </p>
                        <h4 class="sta">Starts at </h4>
                      </div>

                      <div class="inner">
                        <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg"
                            alt="second location-icon">Nov
                          11, 24, Dec 8, 23, Jan 26</h4>
                        <h4><span>₹5,499</span> </h4>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <!-- tab2 -->
            <div class="tabs__tab" id="tab_2" data-tab-info>
              <div class="calendar">
                <div class="calender-div">
                  <a href="ooty">
                    <img class="img-img" src="assets/img/short-trip/Ooty photo.jpg " alt="roamers-Gallery">
                    <div class="silder-inner silder-inner1">
                      <div class="inner inner2">
                        <h3>3 DAYS / 2 NIGHTS</h3>
                        <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon"> EX:
                          Chennai,
                          Coimbatore
                        </h4>
                      </div>
                      <h2>Ooty the Queen of Hills
                      </h2>
                      <div class="inner">
                        <p><img src="assets/img/images/loc.svg" alt="location-icon">Nilgiri, Conoor, Coimbatore
                        </p>
                        <h4 class="sta">Starts at </h4>
                      </div>

                      <div class="inner">
                        <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg"
                            alt="second location-icon">
                          Nov 3, 24, Dec 8, 15, 22, Jan 26</h4>
                        <h4><span>₹6,999</span> </h4>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="calender-div">
                  <a href="kodaikanal">
                    <img class="img-img" src="assets/img/kodaikanal/Dolphin nose.jpg" alt="roamers-Gallery">
                    <div class="silder-inner silder-inner1">
                      <div class="inner inner2">
                        <h3>2 DAYS / 1 NIGHTS</h3>
                        <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Chennai
                        </h4>
                      </div>
                      <h2>Kodaikanal Trek & Camp
                      </h2>
                      <div class="inner">
                        <p><img src="assets/img/images/loc.svg" alt="location-icon">Kodaikanal, Echo Rock, Dolphin's
                          Nose</p>
                        <h4 class="sta">Starts at </h4>
                      </div>

                      <div class="inner">
                        <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg"
                            alt="second location-icon">Jan
                          26, Feb 10</h4>
                        <h4><span>₹3,499</span> </h4>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <!-- tab3 -->
            <div class="tabs__tab" id="tab_3" data-tab-info>
              <div class="calendar">
                <div class="calender-div">
                  <a href="pondicherry-newyear">
                    <img class="new-year" src="assets/img/bg/New-year-gold.gif" alt="">
                    <img class="img-img" src="assets/img/pondicherry/Media/paradise-beach1.jpg" alt="roamers-Gallery">
                    <div class="silder-inner silder-inner1">
                      <div class="inner inner2">
                        <h3>2 DAYS / 1 NIGHT</h3>
                        <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon"> EX: Chennai
                        </h4>
                      </div>
                      <h2>Pondi Tour & Celebration
                      </h2>
                      <div class="inner">
                        <p><img src="assets/img/images/loc.svg" alt="location-icon">Pondicherry</p>
                        <h4 class="sta">Starts at </h4>
                      </div>

                      <div class="inner">
                        <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg"
                            alt="second location-icon">Dec
                          31</h4>
                        <span>₹6,499
                        </span>
                      </div>
                    </div>
                  </a>
                </div>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>





  <script type="text/javascript">


    const tabs = document.querySelectorAll('[data-tab-value]')
    const tabInfos = document.querySelectorAll('[data-tab-info]')

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const target = document
          .querySelector(tab.dataset.tabValue);
        tabInfos.forEach(tabInfo => {
          tabInfo.classList.remove('active')
        })
        target.classList.add('active');
      })
    })

    document.querySelectorAll('.tabs span').forEach(tab => {
      tab.addEventListener('click', () => {
        document.querySelector('.tabs span.active').classList.remove('active');
        tab.classList.add('active');
      });
    });
  </script>




  <!--====== quotes End ======-->

  <!--====== FOOTER START======-->


  <!--====== FOOTER END======-->

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

    window.addEventListener("DOMContentLoaded", function () {
      const swiper = new Swiper(".swiper-container", {
        slidesPerView: "auto",
        spaceBetween: 10,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          1300: {
            slidesPerView: 4,
          },
          640: {
            slidesPerView: 3,
          },
          240: {
            slidesPerView: 1.1,
          },
        },
      });
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


    var selectElements = document.getElementById("price-occ");
    var selectElements1 = document.getElementById("price-occ1");
    var price = document.getElementById('price');

    selectElements.addEventListener("change", updatePrice);
    selectElements1.addEventListener("change", updatePrice);

    function updatePrice() {
      var selectedValue = selectElements.value;
      var selectedValue1 = selectElements1.value;

      if (selectedValue == "double" && selectedValue1 == "chennai") {
        price.innerHTML = "₹7,999";
      } else if (selectedValue == "triple" && selectedValue1 == "coimbatore") {
        price.innerHTML = "₹6,999";
      } else if (selectedValue == "triple" && selectedValue1 == "chennai") {
        price.innerHTML = "₹7,499";
      } else if (selectedValue == "double" && selectedValue1 == "coimbatore") {
        price.innerHTML = "₹7,499";
      }
    }

    // Initial price update when the page loads
    updatePrice();
  </script>
  <script>
    var navbar = document.querySelector("nav");

    window.onscroll = function () {
      // pageYOffset or scrollY
      if (window.scrollY > 100) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    };



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
  </script>
</body>

</html>