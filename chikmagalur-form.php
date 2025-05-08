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
  <link rel="shortcut icon" href="./assets/img/icon/fav-icon.png" type="image/x-icon"  sizes="192x192" />

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
  <style>
    .form-home {
      background: url(assets/img/bg/Booking-page-cover.jpg);
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
      bottom: -42px;
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

    ..check-box input[type="radio"]:checked {
      background: #4ec0db;
      color: white;
    }

    .banner-nav .locate::before {
      background-color: #fff;
      position: absolute;
      content: '';
      width: 2px;
      height: 59%;
      margin-top: 4px;
      right: -13px;
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

    .check-box input[type="radio"]:checked {
    background: #4ec0db;
    color: white;
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


    /* Modal container */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: 1;
      overflow: auto;
    }

    /* Modal content */
    .modal-content {
      background-color: #4ec0db !important;
      margin: 10% auto;
      padding: 30px 20px 30px 20px;
      border: 1px solid #888;
      border-radius: 15px !important;
      max-width: 450px;
      position: relative;
    }

    /* Close button (x) */
    .close {
      position: absolute;
      top: 0;
      right: 0;
      padding: 10px;
      cursor: pointer;
    }

    /* Close button hover effect */
    .close:hover {
      background-color: #f44336;
      color: white;
    }

    input::file-selector-button {
      font-weight: bold;
      color: white;
      font-weight: 400;
      padding: 0.4em;
      background-color: #094067;
      border: 1px solid #eee;
      border-radius: 6px;
      transition: 0.3s all;
      cursor: pointer;
    }

    input::file-selector-button:hover {
      background-color: white;
      color: #094067;
    }

    /* Modal content text */
    .modal-content h2 {
      font-size: 24px;
      margin-bottom: 10px;
      font-weight: 600;
      margin-top: 10px;
      color: white;
    }

    .modal-title {
      background-color: #fff;
    }

    .modal-content p {
      font-size: 16px;
      line-height: 1.6;
      color: #eeeeee;
    }

    .form button {
      height: 55px;
      width: 100%;
      color: #fff;
      font-size: 1rem;
      font-weight: 400;
      margin-top: 66px;
      border: none;
      cursor: pointer;
      transition: all 0.2s ease;
      background: #4ec0db;
    }

    /* Center the modal content */
    .modal-content {
      display: flex;
      align-items: center;
      text-align: center;
      background-color: blue;
    }

    /* Responsiveness */
    @media (max-width: 600px) {
      .modal-content {
        max-width: 90%;
      }
    }
  </style>
</head>

<body style="  background: #FDFDFD !important;">

  <?php include('includes/loader.php'); ?>

  <!-- form start -->
  <!-- ===========
======================================== -->
  <!-- ***** Header Start ***** -->
  <?php include('includes/header.php'); ?>
  <!-- ***** Header End ***** -->
  <section class="form-home">
    <h2 class="booking-head">
      Booking
    </h2>
    <ul class="banner-nav">
      <li><a href="index">Home</a></li>
      <li class="locate"><a href="chikmagalur"> Chikmagalur Bagpack</a></li>
      <li>Booking</li>
    </ul>
  </section>

  <section class=" form-content-holder">
    <!-- <img src="assets/img/icon/travel.jpg" class="travel" alt=""> -->
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <form enctype="multipart/form-data" class="form" id="booking-form" action="chikmagalur-contact.php"
            method="POST">
            <h2 class="form-heading">
              Chikmagalur Bagpack
            </h2>
            <div class="column">

              <div class="check-box">
                <label>
                  <input type="radio" checked name="traval-date" id="traval-date" value="SEP 13 ">SEP 13
                </label>
              </div>
              <div class="check-box">
                <label>
                  <input type="radio" name="traval-date" id="traval-date" value="OCT 30 ">OCT 30
                </label>
              </div>
            </div>
            <div class="column">
              <div class="input-box">
                <!-- <label>Full Name</label>  <i class="fa-solid fa-plane-departure"></i> -->
                <input type="text" name="username" id="username" placeholder="Full Name" required />
              </div>
              <div class="input-box">

                <!-- <label>Email</label>  <i class="fa-solid fa-plane-departure"></i> -->
                <input type="email" name="email" id="email" placeholder="Email" required />
              </div>
            </div>
            <div class="column">
              <div class="input-box">

                <!-- <label>Phone Number</label>  <i class="fa-solid fa-plane-departure"></i> -->
                <input type="text" name="contact" id="" placeholder="Phone" required />
              </div>
              <div class="input-box">

                <!-- <label>Birth Date</label>  <i class="fa-solid fa-plane-departure"></i> -->
                <input type="value" name="date" id="name" placeholder="D.O.B" required />
              </div>
            </div>
            <div class="gender-box">
              <label>Gender</label>
              <div class="gender-option">
                <div class="gender">
                  <input type="radio" id="check-male" value="male" name="gender" checked />
                  <label for="check-male">male</label>
                </div>
                <div class="gender">
                  <input type="radio" id="check-female" value="female" name="gender" />
                  <label for="check-female">Female</label>
                </div>
                <div class="gender">
                  <input type="radio" id="check-other" value="other" name="gender" />
                  <label for="check-other">prefer not to say</label>
                </div>
              </div>
            </div>
            <div class="gender-box">
              <label>Sharing type</label>
              <div class="gender-option">
                <div class="sharing">
                  <input type="radio" id="sharing1" value="Double Sharing" name="sharing" />
                  <label for="sharing1">Double Sharing</label>
                </div>
                <div class="sharing">
                  <input type="radio" id="sharing2" checked value="Triple Sharing" name="sharing" />
                  <label for="sharing2">Triple Sharing</label>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="input-box">

                <!-- <label>Number of Passangers</label> <i class="fa-solid fa-plane-departure"></i> -->
                <input type="number" name="count" id="count" placeholder=" Traveller count " required />
              </div>

            </div>


            <div class="input-box address">
              <!-- <img src="assets/img/icon/flight.png" alt="" class="flight">   -->
              <label>Address</label>
              <input type="text" name="address1" id="address1" placeholder="Address 1" required />
              <input type="text" name="address2" id="address2" placeholder="Address 2" required />
              <div class="column">
                <!-- <div class="select-box">
              <select>
                <option hidden>Country</option>
                <option>America</option>
                <option>Japan</option>
                <option>India</option>
                <option>Nepal</option>
              </select>
            </div> -->
                <input type="text" name="city" id="city" placeholder="City" required />
                <input type="number" name="pincode" id="pincode" placeholder="Post code" required />

              </div>
            </div>
            <button type="submit" id="book-now-button">Book Now</button>
          </form>
        </div>
        <div class="col-md-4">
          <div class="form-img">
            <img src="assets/img/andaman/Media/form.jpg" alt="form img">
          </div>
        </div>
      </div>

    </div>
  </section>

  <script src="script.js"></script>

  <div class="modal" id="booking-modal">
    <div class="modal-content">
      <span class="close" id="close-modal">&times;</span>
      <!-- Display a confirmation message or further details here -->
      <img class="pt-1" style="height:80px; width:75px;" src="assets/img/Logo/accept.png" alt="">
      <h2>Booking Confirmation</h2>

      <p>Dear Roamers, Your Enquiry for the slots reservation has been sent successfully!</p>
      <p>Thank you and Happy Roaming...</p>
      <img style="height:75px; width:70px;object-fit: cover;" src="assets/img/Logo/Roamers Logo-01.png" alt="">


    </div>
  </div>



  <script>

    const bookingForm = document.getElementById("booking-form");
    const bookingModal = document.getElementById("booking-modal");

    // Get references to the button for opening the modal and the close button
    const bookNowButton = document.getElementById("book-now-button");
    const closeBookingModal = document.getElementById("close-modal");

    // Add a click event listener to the "Book Now" button
    bookNowButton.addEventListener("click", () => {
      // Check if all required fields are filled before showing the modal
      if (isFormValid(bookingForm)) {
        // Show the modal when the button is clicked and the form is valid
        bookingModal.style.display = "block";
      } else {
        // Handle the case where the form is not valid (e.g., show an error message)
        alert("Please fill in all the required fields.");
      }
    });

    // Add a click event listener to the close button to hide the modal
    closeBookingModal.addEventListener("click", () => {
      bookingModal.style.display = "none";
    });

    // Add an event listener to close the modal if the user clicks outside of it
    window.addEventListener("click", (event) => {
      if (event.target === bookingModal) {
        bookingModal.style.display = "none";
      }
    });

    // Function to check if the form is valid (all required fields are filled)
    function isFormValid(form) {
      const requiredFields = form.querySelectorAll("[required]");
      for (const field of requiredFields) {
        if (!field.value) {
          return false;
        }
      }
      return true;
    }


  </script>










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

  <script>
    window.addEventListener('DOMContentLoaded', function () {
      const swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 10,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          1440: {
            slidesPerView: 4,
          },
          940: {
            slidesPerView: 3,
          },
          640: {
            slidesPerView: 2,
          },
          240: {
            slidesPerView: 1.1,
          },
        },
      });

    });


    document.getElementById("changecon").innerHTML = localStorage.getItem('second');
    document.getElementById("changecon").innerHTML = localStorage.getItem('three');
    document.getElementById("changecon").innerHTML = localStorage.getItem('four');
    document.getElementById("changecon").innerHTML = localStorage.getItem('five');

  </script>

</body>

</html>