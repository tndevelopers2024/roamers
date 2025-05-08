<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- SEO Meta Description -->
  <meta name="description" content="" />
  <meta name="author" content="Themeland" />

  <!-- Title  -->
  <title>Roamers</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <link rel="icon" href="assets/img/Logo/Logo mark-01.png" />


</head>

<body>
  <!--====== Preloader Area Start ======-->
  <div id="preloader">
    <div class="loader">
      <span style="--i: 1"></span>
      <span style="--i: 2"></span>
      <span style="--i: 3"></span>
      <span style="--i: 4"></span>
      <span style="--i: 5"></span>
      <span style="--i: 6"></span>
      <span style="--i: 7"></span>
      <span style="--i: 8"></span>
      <span style="--i: 9"></span>
      <span style="--i: 10"></span>
      <span style="--i: 11"></span>
      <span style="--i: 12"></span>
      <span style="--i: 13"></span>
      <span style="--i: 14"></span>
      <span style="--i: 15"></span>
      <span style="--i: 16"></span>
      <span style="--i: 17"></span>
      <span style="--i: 18"></span>
      <span style="--i: 19"></span>
      <span style="--i: 20"></span>
      <div class="plane">
        <ion-icon name="airplane-sharp" class="icon"></ion-icon>
      </div>
    </div>
  </div>

  <!--====== Preloader Area End ======-->

  <!-- ***** All jQuery Plugins ***** -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- jQuery(necessary for all JavaScript plugins) -->
  <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

  <!-- Active js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- <script src="assets/js/main.js"></script> -->
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script>
    // :: 1.0 PRELOADER ACTIVE CODE
    $(window).on("load", function () {
      $(".loader").addClass("loader");

      if ($(".loader").hasClass("loader")) {
        $("#preloader")
          .delay(900)
          .queue(function () {
            $(this).remove();
          });
      }
    });

  </script>
</body>

</html>