<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Roamers - Explore the World with Our Social Travel Agency" />
  <meta name="author" content="Themeland" />
  <title>Roamers</title>
  <link rel="icon" href="assets/img/Logo/Logo mark-01.png" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body>
  <!-- Preloader Start -->
  <div id="preloader">
    <div class="loader">
      <!-- Use JS to generate spans for better maintainability -->
      <script>
        for(let i=1;i<=20;i++)document.write(`<span style="--i: ${i}"></span>`);
      </script>
      <!-- <div class="plane">
        <ion-icon name="airplane-sharp" class="icon"></ion-icon>
      </div> -->
      <div class="plane">
        <i class="fa-solid fa-plane icon"></i>
      </div>
    </div>
  </div>
  <!-- Preloader End -->

  <!-- Scripts -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script>
    // Preloader optimized
    window.addEventListener("load", function () {
      setTimeout(function () {
        var preloader = document.getElementById("preloader");
        if (preloader) preloader.remove();
      }, 10);
    });
  </script>
</body>
</html>