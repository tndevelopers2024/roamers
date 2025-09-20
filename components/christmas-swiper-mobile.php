
<head>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
    .christmas-swiper {
      width: 240px;
      height: 320px;
    }

    .christmas-swiper-slide {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 18px;
      font-size: 22px;
      font-weight: bold;
      color: #fff;
    }

    .christmas-swiper-slide:nth-child(1n) {
      background-color: rgb(206, 17, 17);
    }

    .christmas-swiper-slide:nth-child(2n) {
      background-color: rgb(0, 140, 255);
    }

    .christmas-swiper-slide:nth-child(3n) {
      background-color: rgb(10, 184, 111);
    }

    .christmas-swiper-slide:nth-child(4n) {
      background-color: rgb(211, 122, 7);
    }

    .christmas-swiper-slide:nth-child(5n) {
      background-color: rgb(118, 163, 12);
    }

    .christmas-swiper-slide:nth-child(6n) {
      background-color: rgb(180, 10, 47);
    }

    .christmas-swiper-slide:nth-child(7n) {
      background-color: rgb(35, 99, 19);
    }

    .christmas-swiper-slide:nth-child(8n) {
      background-color: rgb(0, 68, 255);
    }

    .christmas-swiper-slide:nth-child(9n) {
      background-color: rgb(218, 12, 218);
    }

    .christmas-swiper-slide:nth-child(10n) {
      background-color: rgb(54, 94, 77);
    }
  </style>
</head>

<body>
  <!-- Swiper -->

  <div class="christmas-swiper christmasMySwiper">
    <div class="swiper-wrapper">
      <div class="christmas-swiper-slide swiper-slide">Slide 1</div>
      <div class="christmas-swiper-slide swiper-slide">Slide 2</div>
      <div class="christmas-swiper-slide swiper-slide">Slide 3</div>
      <div class="christmas-swiper-slide swiper-slide">Slide 4</div>
      <div class="christmas-swiper-slide swiper-slide">Slide 5</div>
      <div class="christmas-swiper-slide swiper-slide">Slide 6</div>
      <div class="christmas-swiper-slide swiper-slide">Slide 7</div>
      <div class="christmas-swiper-slide swiper-slide">Slide 8</div>
      <div class="christmas-swiper-slide swiper-slide">Slide 9</div>
    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".christmasMySwiper", {
      effect: "cards",
      grabCursor: true,
    });
  </script>
</body>
