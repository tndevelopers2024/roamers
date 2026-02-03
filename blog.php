<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- SEO Meta Description -->
  <meta name="description" content="" />
  <meta name="author" content="Themeland" />
  <meta property="og:image" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png" />
  <meta property="og:image:width" content="300" />
  <meta property="og:image:height" content="200" />

  <!-- Title  -->
  <title>Roamers</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Favicon  -->
  <!-- <link rel="icon" href="assets/img/Logo/Logo mark-01.png" /> -->
  <link rel="shortcut icon" href="./assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192" />

  <!-- ***** All CSS Files ***** -->
  <!-- ***** Font Asesome cdn ***** -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Style css -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/form.css" />

  <!-- Responsive css -->

  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="shortcut icon" href="asstes/img/icon/fav-icon.png" type="image/x-icon">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0MSFD4117B"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-0MSFD4117B');
  </script>

  <style>
    .form-home {
      background: url(assets/img/andaman/Media/pexels-asad-photo-maldives-1450353.jpg);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      position: relative;
      padding: 200px 0px 150px;
      background-attachment: fixed;
    }

    .form-home::after {
      content: '';
      position: absolute;
      background: url(assets/img/overlay/shape8.png);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      bottom: -3px;
      width: 100%;
      height: 218px;
      transform: rotate(180deg);
      z-index: 3;
    }

    .form-home::before {
      content: '';
      position: absolute;
      background-color: rgba(0, 0, 0, 0.5);
      inset: 0;
    }

    .booking-head {
      font-size: 40px;
      font-weight: 700;
      text-align: center;
      color: #fff;
      position: relative;

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

    .section-shape {
      position: absolute;
      top: -96px;
      left: 0;
      width: 100%;
      height: 96px;
      background-size: contain;
      background-repeat: repeat-x;
      z-index: 1;
    }

    .kodai1-dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .banner-nav {
      display: flex;
      gap: 20px;
      justify-content: center;
      padding: 0;
    }

    .banner-nav li {
      position: relative;
    }

    .banner-nav li>a {
      color: #4ec0db;
    }

    .banner-nav li:last-child {
      color: #fff;
    }



    .banner-nav li:first-child::before {
      background-color: #fff;
      position: absolute;
      content: '';
      width: 2px;
      height: 59%;
      margin-top: 4px;
      right: -13px;
    }

    .form-img img {
      height: 770px;
      object-fit: cover;
      border-radius: 12px;
    }

    .check-box {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-right: 20px;
    }

    .check-box input {
      margin: 0 !important;
    }

    .form-heading {
      margin-bottom: 40px;
    }

    .check-box input[type="radio"]:checked {
      background: #4ec0db;
      color: white;
    }

    .trip-page h1 {
      text-align: center;
      color: #fff;
      /* position: absolute; */
      text-transform: capitalize;
      font-weight: 800;
      line-height: 1.1 !important;
      font-size: 46px;
      /* margin: 40px 0px 60px 504px; */
    }

    .check-box input[type="radio"] {
      cursor: pointer;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      outline: 0;
      background: lightgray;
      height: 16px;
      width: 16px;
      border: 1px solid white;
      color: white;
    }

    .trip-page {
      background-image: url('assets/img/bg/Trips-page cover.jpg') !important;
      background-repeat: no-repeat;
      background-position: bottom !important;
      object-fit: cover !important;
      background-size: cover;
      background-attachment: local !important;
      padding: 225px 0 160px 0;
      margin-top: -30px !important;
      position: relative;
    }

    .trip-page::before {
      content: '';
      background-color: #00000047;
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
    }


    .check-box input[type="radio"]:after {
      content: ' ';
      position: relative;
      left: 40%;
      top: 30%;
      width: 15%;
      height: 40%;
      border: solid #fff;
      border-width: 0 2px 2px 0;
      transform: rotate(50deg);
      display: none;
    }

    .check-box input[type="radio"]:checked:after {
      display: block;
    }

    .read-btn {
      background-color: #4ec0db;
      color: #fff;
      font-weight: 600;
      padding: 5px 20px;
      border: none;
      border-radius: 3px;
      margin-top: 40px;
    }

    @media (max-width:600px) {
      .nav-pills a {
        font-size: 10px !important;
        padding: 8px !important;
      }

      .blog-container {
        padding: 5px !important;
      }


      .nav-pills {
        padding: 10px !important;
      }

      .swiper-slide {
        margin-bottom: 40px !important;
      }

      .upper-nav {
        margin-bottom: 3rem !important;
      }

      .silder-inner h4 {
        font-size: 9px !important;
      }

      .trip-page {
        margin-top: 0;
        padding: 99px 10px 50px 10px !important;
        background-attachment: local !important;
      }

      .trip-page h1 {
        margin: 77px 0px 25px !important;
        text-shadow: 0px 2px 2px rgba(255, 255, 255, 0.4) !important;
        font-size: 30px !important;
      }
    }

    /* Style for the pills */
    .nav-pills {
      display: flex;
      list-style: none;
      padding: 0 100px 0 100px;
    }

    .nav-pills li {
      flex: 1;
      text-align: center;
    }


    .nav-pills a {
      text-decoration: none;
      padding: 10px;
      background-color: #4ec0db1f;
      color: black;
      display: block;
      border: 1px solid #eee;
    }

    .trip-1 {
      border-top-left-radius: 15px;
      border-bottom-left-radius: 15px;
    }

    .trip-3 {
      border-top-right-radius: 15px;
      border-bottom-right-radius: 15px;
    }

    .bg-smoke {
      background-color: #fff !important;
    }

    /* .nav-pills a:hover {
      background-color: #094067;
      color: white;
    } */

    .nav-pills a.active {
      background-color: #4ec0db;
      color: white;
    }


    /* Style for the content sections */
    .section {
      display: none;
    }

    .section.active {
      display: block;
    }

    .testi-box {
      box-shadow: 0px 10px 15px 0px rgb(220 177 0 / 30%);
    }

    .blog-container {
      margin: 50px 0 !important;
      padding: 50px;
    }

    .blog-wrapper {
      box-shadow: 0px 0px 7px 0 rgba(0, 0, 0, 0.21);
      padding: 30px 20px;
      background-color: #fff;
      border-radius: 10px;
      margin: 30px 0;
    }

    .blog-wrapper a:hover img {
      transform: scale(1.03) !important;
      transition: all 0.3s ease 0s;
    }

    .blog-wrapper a:hover h5 {
      color: #4ec0db;
    }
  </style>
</head>

<body style="  background: #FDFDFD !important;">


  <!-- form start -->
  <!-- ===========
======================================== -->
  <!-- ***** Header Start ***** -->
  <?php include('includes/header.php'); ?>
  <!-- ***** Header End ***** -->
  <section class="trip-page" style="background-image: url('assets/img/bg/trips-cover.jpg');">
    <div class="container" style="  position: relative;">
      <h1>Blogs</h1>


    </div>
  </section>
  <div class="container">
    <div class="blog-container">

      <!-- Post Start -->
      <div class="blog-wrapper">
        <a href="top-benefits-of-group-travel">
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="blog-img">
                <img class="img-fluid" src="assets/img/backpacking/Leh ladakh (1).jpg">
              </div>
            </div>
            <div style="place-content:center;" class="col-md-7">
              <div class="blog-content ps-lg-2">
                <h5 class="mt-4">Top Benefits of Group Travel Trips: Fun, Safety and Savings</h5>
                <p style="color:grey; font-size: 10px;">Mar 01, 2025</p>
                <p>Travelling with friends or with family members always makes the trip a one to remember for lifetime.
                  To achieve endless laughter, fun and excitement definitely you have to prefer group travel options. A
                  group travel is always better than travelling as an individual due to its safety, cost savings and
                  unlimited fun.
                </p>
                <button class="read-btn">Read More</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <!-- Post End -->

      <!-- Post Start -->
      <div class="blog-wrapper">
        <a href="india's-hidden-gems-10-best-camping-cestinations.php">
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="blog-img">
                <img class="img-fluid" src="assets/img/bg/india-blog.jpg">
              </div>
            </div>
            <div style="place-content:center;" class="col-md-7">
              <div class="blog-content ps-lg-2">
                <h5 class="mt-4">India's Hidden Gems: 10 Best Camping Destinations</h5>
                <p style="color:grey; font-size: 10px;">Feb 24, 2025</p>
                <p>What do you do when you get tired of staring at a bright screen all day? Do you like packing your
                  bags and taking a trip to a scenic part of India? Either with your best mates and family or all by
                  yourself to cherish the beauty of the world? Well, if this sounds like your vibe, then here are 10 of
                  the most beautiful camping spots in India.</p>
                <button class="read-btn">Read More</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <!-- Post End -->
      <!-- Post Start -->
      <div class="blog-wrapper">
        <a href="must-do-experiences-in-kerala-the-ultimate-bucket-list.php">
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="blog-img">
                <img class="img-fluid" src="assets/img/bg/kerala-blog.jpeg">
              </div>
            </div>
            <div style="place-content:center;" class="col-md-7">
              <div class="blog-content ps-lg-2">
                <h5 class="mt-4">Must-Do Experiences in Kerala: The Ultimate Bucket List</h5>
                <p style="color:grey; font-size: 10px;">Feb 24, 2025</p>
                <p>Called "God's Own Country," Kerala offers a wealth of activities. You can find things to do that
                  combine culture, adventure, and scenic beauty. The following ten must-do events encapsulate the spirit
                  of this enchanted South Indian state, ranging from exhilarating pursuits to tranquil moments that
                  evoke deep emotions.</p>
                <button class="read-btn">Read More</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <!-- Post End -->

      <!-- Post Start -->

      <div class="blog-wrapper">

        <a href="meghalaya-backpacking-trip.php">
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="blog-img">
                <img class="img-fluid" src="assets/img/megalaya/nohkalikali-falls.jpg">
              </div>
            </div>
            <div style="place-content:center;" class="col-md-7">
              <div class="blog-content ps-lg-2">
                <h5 class="mt-4">Meghalaya backpacking trip:
                  A complete guide to explore the Abode of Clouds </h5>
                <p style="color:grey; font-size: 10px;">December 23, 2024</p>
                <p>Meghalaya is a state situated in North East India and is known as the abode of clouds. It has a rich
                  biodiversity and has a plenty of exciting tourist destinations. The state is rich in its diverse
                  culture, rich traditional festivals and dramatic terrain. Some of the hotspot destinations found in
                  Meghalaya are Shillong cherrapunji, elephant falls, latum canyons, Don Bosco museum etc..
                </p>
                <button class="read-btn">Read More</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <!-- Post End -->

      <!-- Post Start -->

      <div class="blog-wrapper">

        <a href="perfect-weekend-getaway.php">
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="blog-img">
                <img class="img-fluid" src="assets/img/Kerala/7221844019.jpg">
              </div>
            </div>
            <div style="place-content:center;" class="col-md-7">
              <div class="blog-content ps-lg-2">
                <h5 class="mt-4">Perfect Weekend Gataway: Top Destination to Escape the Hustel</h5>
                <p style="color:grey; font-size: 10px;">December 23, 2024</p>
                <p>Meghalaya is a state situated in North East India and is known as the abode of clouds. It has a rich
                  biodiversity and has a plenty of exciting tourist destinations. The state is rich in its diverse
                  culture, rich traditional festivals and dramatic terrain. Some of the hotspot destinations found in
                  Meghalaya are Shillong cherrapunji, elephant falls, latum canyons, Don Bosco museum etc..
                </p>
                <button class="read-btn">Read More</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <!-- Post End -->

      <!-- post Start -->
      <div class="blog-wrapper">

        <a href="unlimited-guide-backpacking-trips.php">
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="blog-img">
                <img class="img-fluid" src="assets/img/andaman/Media/bc-trip.avif">
              </div>
            </div>
            <div class="col-md-7">
              <div class="blog-content ps-lg-2">
                <h5 class="mt-4">The Ultimate Guide to Backpack Trips in India</h5>
                <p style="color:grey; font-size: 10px;">December 05, 2024</p>
                <p>India is a country with its rich heritage and culture and at the same time perfect destination for
                  backpackers. The country's diverse culture, foods amd festivals are magical and exploring India is
                  definitely a great idea for travellers who are cautious about spending money. There are so much
                  exciting and cultural locations found in India, beautiful temples, architectural sites , historical
                  spots ect which leaves you speechless. </p>
                <button class="read-btn">Read More</button>
              </div>
            </div>
          </div>
        </a>

      </div>
      <!-- Post End -->

      <!-- post Start -->
      <div class="blog-wrapper">

        <a href="how-to-choose-best-solo-group-travel-package.php">
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="blog-img">
                <img class="img-fluid" src="assets/img/Kerala/Kerala%20photos.jpg">
              </div>
            </div>
            <div class="col-md-7">
              <div class="blog-content ps-lg-2">
                <h5 class="mt-4">How to Choose the Best Solo Group Travel Package for Your Needs</h5>
                <p style="color:grey; font-size: 10px;">August 24, 2024</p>
                <p>Being able to travel alone and at your own speed can have a profoundly transformational effect.
                  However, a solo group travel package can be the ideal choice for you if you're searching for a way to
                  combine your independence with the company of other travelers.</p>
                <button class="read-btn">Read More</button>
              </div>


            </div>
          </div>
        </a>

      </div>
      <!-- Post End -->

      <!-- post Start -->
      <div class="blog-wrapper">

        <a href="how-to-choose-the-right-group-trip.php">
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="blog-img">
                <img class="img-fluid" src="assets/img/kolukkumalai-img/2.jpg">
              </div>
            </div>
            <div class="col-md-7">
              <div class="blog-content ps-lg-2">
                <h5 class="mt-4">How to Choose the Right Group Trip: A Guide for Every Traveller</h5>
                <p style="color:grey; font-size: 10px;">August 24, 2024</p>
                <p>Going on a group holiday can be a delightful way to discover new places, connect with other travel
                  enthusiasts, and make lifelong memories. To make sure that the group holiday you choose fits your
                  tastes and budget, you must give it considerable thought. You'll be guided through the best ways to
                  choose the ideal group trip that meets your requirements by this guide.</p>
                <button class="read-btn">Read More</button>
              </div>
            </div>
          </div>
        </a>

      </div>
      <!-- Post End -->







      <!-- post Start -->
      <!-- <div class="blog-wrapper">

<a href="how-to-choose-the-right-group-trip.php">
  <div class="row align-items-center">
    <div class="col-md-5">
      <div class="blog-img">
        <img class="img-fluid" src="assets/img/kolukkumalai-img/2.jpg">
      </div>
    </div>
    <div class="col-md-7">
      <div class="blog-content">
        <h5>How to Choose the Right Group Trip: A Guide for Every Traveller</h5>
        <p style="color:grey; font-size: 10px;">August 24, 2024</p>
        <p>Going on a group holiday can be a delightful way to discover new places, connect with other travel
          enthusiasts, and make lifelong memories. To make sure that the group holiday you choose fits your
          tastes and budget, you must give it considerable thought. You'll be guided through the best ways to
          choose the ideal group trip that meets your requirements by this guide.</p>
          <button class="read-btn">Read More</button>
      </div>
    </div>
  </div>
</a>


</div> -->

      <!-- Post End -->

      <!-- Post Start -->

      <div class="blog-wrapper">

        <a href="island-hopping-in-andaman.php">
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="blog-img">
                <img class="img-fluid" src="assets/img/andaman/Media/43111.jpg">
              </div>
            </div>
            <div class="col-md-7">
              <div class="blog-content ps-lg-2">
                <h5 class="mt-4">Island Hopping in Andaman: An Unforgettable Ocean Adventure</h5>
                <p style="color:grey; font-size: 10px;">August 24, 2024</p>
                <p>The Andaman Islands, a paradise tucked away in the Bay of Bengal, entice tourists with their
                  immaculate beaches, glistening waters, and verdant surroundings. The real charm of the Andaman Islands
                  is revealed when you go on an island-hopping excursion, even though every island in this archipelago
                  is a treasure in and of itself.</p>
                <button class="read-btn">Read More</button>
              </div>
            </div>
          </div>
        </a>


      </div>
      <!-- Post End -->

      <!-- Post Start -->

      <div class="blog-wrapper">

        <a href="how-to-choose-group-and-solo.php">
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="blog-img">
                <img class="img-fluid" src="assets/img/andaman/Media/Andaman-blog.jpg">
              </div>
            </div>
            <div style="place-content:center;" class="col-md-7">
              <div class="blog-content ps-lg-2">
                <h5 class="mt-4">How to choose the best group trips and solo travel tours for Adventures </h5>
                <p style="color:grey; font-size: 10px;">August 24, 2024</p>
                <p>The people who are extremely extrovert and ready to face the circumstances without hesitation
                  definitely goes for adventure tours. The adventure tours gives entirely wow experience and suitable
                  for both solo and group trips. But, it is very important to choose what you actually want. When it
                  comes for a journey, both the group trips and solo trips are completely adventurous in their own way.
                </p>
                <button class="read-btn">Read More</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <!-- Post End -->

      <!-- Post Start -->

      <div class="blog-wrapper">

        <a href="7-Celestial-Havens.php">
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="blog-img">
                <img class="img-fluid" src="assets/img/bg/sky.jpg">
              </div>
            </div>
            <div style="place-content:center;" class="col-md-7">
              <div class="blog-content ps-lg-2">
                <h5 class="mt-4">7 Celestial Havens: A Stargazer's Guide to India's Most Breathtaking Dark Sky
                  Destinations</h5>
                <p style="color:grey; font-size: 10px;">Jan 10, 2025</p>
                <p>India's sky provides a magnificent backdrop on which the night turns into a call to discover the
                  mysteries of space. The nation offers exceptional astronomical views from high-altitude deserts to
                  isolated mountain valleys, where stars shine through clear skies and turn the night into a living
                  auditorium of old cosmic tales.
                </p>
                <button class="read-btn">Read More</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <!-- Post End -->

      <!-- Post Start -->

      <div class="blog-wrapper">

        <a href="ladak-blog.php">
          <div class="row align-items-center">
            <div class="col-md-5">
              <div class="blog-img">
                <img class="img-fluid" src="assets/img/bg/ladak.jpg">
              </div>
            </div>
            <div style="place-content:center;" class="col-md-7">
              <div class="blog-content ps-lg-2">
                <h5 class="mt-4">The Greatest Time to Explore Ladakh: A Story from a Traveler</h5>
                <p style="color:grey; font-size: 10px;">Jan 22, 2025</p>
                <p>Hey everyone, I just want to share my amazing Ladakh backpacking trips trip with you all. This may
                  help you plan for your upcoming May-September vacation. Initially, I was excited, and I packed all my
                  necessary things in the first week of May. Before that, I want to introduce Roamers, the greatest
                  company for planning such daring excursions.</p>
                <button class="read-btn">Read More</button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <!-- Post End -->

    </div>
  </div>


  <!--====== FOOTER START======-->
  <?php include('includes/footer.php'); ?>

  <!--====== FOOTER END======-->


  <!--====== quotes End ======-->


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
  <script src="assets/js/dates.js"></script>


</body>

</html>