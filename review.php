<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Roamers - Kedarkantha Trek</title>

  <!-- SEO Meta Description -->
  <meta name="description" content="Kedarkantha Trek - 5 Days 4 Nights winter snow trek through the Himalayas with Roamers" />
  <meta name="author" content="Roamers" />
  <meta property="og:image" content="https://roamers.in/assets/img/kedarkantha/Swargrohini_Oodari.jpg" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/kedarkantha/Swargrohini_Oodari.jpg" />
  <meta property="og:image:width" content="700" />
  <meta property="og:image:height" content="500" />
  <meta property="og:title" content="Kedarkantha Trek - Roamers" />
  <meta property="og:description"
    content="Trek through snow-covered forests to a stunning Himalayan summit at 12,500 ft. Book your Kedarkantha Trek with Roamers!" />
  <meta property="og:url" content="https://roamers.in/kedarkantha" />
  <meta property="og:type" content="website" />

  <link rel="shortcut icon" href="./assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Style css -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Damion&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <!-- Responsive css -->
  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- Bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { overflow-x: hidden; font-family: 'Lato', sans-serif; }

    h1,h2,h3,h4,h5,h6,.section-title,.head,.banner-title,.card-title,.accordion-button {
      font-family: 'Montserrat', sans-serif;
      color: #094067;
    }

    .head {
      color: #094067 !important;
      position: relative;
      padding-bottom: 15px;
      text-align: center !important;
    }
    .head::after {
      content: '';
      position: absolute;
      left: 50%;
      bottom: 0;
      transform: translateX(-50%);
      height: 4px;
      width: 50px;
      border-radius: 2px;
      animation: expandBar 3s ease-in-out infinite alternate;
    }
    @keyframes expandBar {
      0% { width: 40px; opacity: 0.7; }
      100% { width: 90px; opacity: 1; }
    }

    /* Banner */
    .banner-overlay {
      position: absolute; top: 0; left: 0; width: 100%; height: 100%;
      background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.5) 50%, rgba(0,0,0,0.7) 100%);
      display: flex; align-items: center; justify-content: center; z-index: 2;
    }
    .banner-content { text-align: center; color: #fff; padding: 20px; max-width: 800px; z-index: 10; }
    .banner-title {
      font-size: 3.5rem; font-weight: 800; text-transform: uppercase; letter-spacing: 2px;
      margin-bottom: 20px; text-shadow: 2px 2px 15px rgba(0,0,0,0.5); color: #fff !important;
      position: relative; z-index: 20;
    }
    .banner-subtitle {
      font-size: 1.5rem; font-weight: 400; margin-bottom: 30px;
      text-shadow: 1px 1px 10px rgba(0,0,0,0.5); color: #fff !important;
      position: relative; z-index: 20;
    }

    @media (max-width: 768px) {
      nav::before { display: none; }
      .banner-title { font-size: 2rem !important; padding: 0 15px; }
      .banner-subtitle { font-size: 1rem !important; padding: 0 15px; }
    }

    /* About Section */
    .about-area {
      position: relative; z-index: 1; padding: 120px 0 60px;
      background-color: #f9f9f9; overflow: hidden;
    }
    .about-img-wrapper { position: relative; z-index: 1; }
    .about-img-1 { width: 85%; border-radius: 20px; overflow: hidden; }
    .about-img-1 img { width: 100%; transition: all 0.4s ease; }
    .about-img-2 {
      position: absolute; bottom: 0; right: 0; width: 55%; border-radius: 20px;
      overflow: hidden; border: 5px solid #fff; box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .about-img-2 img { width: 100%; }

    @media (max-width: 768px) {
      .about-img-1 { width: 100%; margin-bottom: 20px; }
      .about-img-2 { position: relative; width: 90%; margin: -40px auto 0; right: auto; bottom: auto; display: block; }
      .about-img-wrapper { padding-bottom: 0; text-align: center; }
      .experience-badge { position: relative; bottom: auto; left: auto; margin: -30px auto 20px; width: fit-content; right: auto; }
    }

    .experience-badge {
      position: absolute; bottom: 30px; left: 30px; background: #4EC0DB;
      padding: 20px 25px; border-radius: 15px; color: #fff;
      box-shadow: 0 10px 20px rgba(78,192,219,0.3); text-align: center; z-index: 2;
    }
    .experience-badge h3 { font-size: 35px; font-weight: 800; margin: 0; line-height: 1; }
    .experience-badge p { margin: 0; font-size: 14px; font-weight: 500; opacity: 0.9; }

    .about-content { padding-left: 30px; }
    .section-subtitle { color: #4EC0DB; font-family: 'Damion', cursive; font-size: 24px; margin-bottom: 10px; display: block; }
    .section-title { font-size: 42px; font-weight: 800; color: #2c3e50; line-height: 1.2; margin-bottom: 40px; }

    .feature-list { list-style: none; padding: 0; position: relative; }
    .feature-item { display: flex; align-items: flex-start; margin-bottom: 35px; position: relative; }
    .feature-item:not(:last-child)::before {
      content: ""; position: absolute; left: 32px; top: 65px;
      height: calc(100% - 30px); border-left: 2px dashed #e0e0e0;
    }
    .icon-box {
      width: 65px; height: 65px; background: #4EC0DB; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      margin-right: 25px; flex-shrink: 0; box-shadow: 0 8px 20px rgba(78,192,219,0.2);
      transition: all 0.3s ease; position: relative; z-index: 2;
    }
    .icon-box::after {
      content: ''; position: absolute; top: -5px; left: -5px; right: -5px; bottom: -5px;
      border: 1px solid rgba(78,192,219,0.3); border-radius: 50%;
    }
    .icon-box img { width: 32px; filter: brightness(0) invert(1); }
    .feature-text h4 { font-size: 20px; font-weight: 700; margin: 0 0 8px; color: #2c3e50; }
    .feature-text p { font-size: 15px; color: #777; margin: 0; line-height: 1.6; }

    @media (max-width: 600px) {
      .section-title { font-size: 28px !important; }
    }

    /* Gallery Section */
    .gallery-section { padding: 60px 0; background: #fff; overflow: hidden; }
    .swiper-container-gallery {
      width: 100%; padding-top: 60px; padding-bottom: 70px; overflow: visible !important;
    }
    .swiper-container-gallery .swiper-slide {
      background-position: center; background-size: cover; width: 300px; height: 450px !important;
      border-radius: 20px; overflow: hidden; box-shadow: 0 15px 50px rgba(0,0,0,0.2);
      filter: none !important; opacity: 1 !important; transition: all 0.5s ease;
    }
    @media (max-width: 600px) {
      .swiper-container-gallery .swiper-slide { width: 75vw !important; height: 350px !important; }
    }
    .swiper-container-gallery .swiper-slide-active {
      filter: blur(0px); opacity: 1; box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    }
    .swiper-container-gallery .swiper-slide img { display: block; width: 100%; height: 100%; object-fit: cover; }
    .gallery-overlay {
      position: absolute; bottom: 0; left: 0; width: 100%; padding: 20px;
      background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
      color: #fff; transform: translateY(100%); transition: transform 0.3s ease;
    }
    .swiper-container-gallery .swiper-slide-active .gallery-overlay { transform: translateY(0); }
    .gallery-overlay h5 { margin: 0; font-size: 20px; font-weight: 600; color: #fff; text-shadow: 0 2px 4px rgba(0,0,0,0.5); }

    /* Itinerary */
    .itinerary-section { padding: 80px 0; background: #f9f9f9; }
    .itinerary-card {
      background: #fff; border-radius: 16px; padding: 30px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-bottom: 20px;
      border-left: 4px solid #4EC0DB; transition: all 0.3s ease;
    }
    .itinerary-card .day-badge {
      display: inline-block; background: #4EC0DB; color: #fff; padding: 4px 16px;
      border-radius: 20px; font-size: 13px; font-weight: 700; margin-bottom: 12px;
      letter-spacing: 1px;
    }
    .itinerary-card h4 { font-size: 18px; font-weight: 700; color: #2c3e50; margin-bottom: 15px; }
    .itinerary-card ul { list-style: none; padding: 0; }
    .itinerary-card ul li {
      position: relative; padding-left: 20px; margin-bottom: 10px;
      font-size: 15px; color: #555; line-height: 1.7;
    }
    .itinerary-card ul li::before {
      content: ''; position: absolute; left: 0; top: 8px; width: 8px; height: 8px;
      border-radius: 50%; background: #4EC0DB;
    }
    .itinerary-icons { display: flex; gap: 15px; margin-bottom: 15px; flex-wrap: wrap; }
    .itinerary-icons span {
      display: flex; align-items: center; gap: 6px; font-size: 13px; color: #777;
      background: #f0f9fb; padding: 5px 12px; border-radius: 20px;
    }
    .itinerary-icons span img { width: 20px; height: 20px; }

    /* Inclusions/Exclusions */
    .inc-exc-section { padding: 80px 0; background: #fff; }
    .inc-exc-card {
      background: #f9f9f9; border-radius: 16px; padding: 30px; height: 100%;
      box-shadow: 0 4px 10px rgba(0,0,0,0.04);
    }
    .inc-exc-card h3 { font-size: 22px; font-weight: 700; margin-bottom: 20px; color: #2c3e50; }
    .inc-exc-card ul { list-style: none; padding: 0; }
    .inc-exc-card ul li {
      position: relative; padding-left: 30px; margin-bottom: 12px;
      font-size: 15px; color: #555; line-height: 1.6;
    }
    .inc-exc-card.inclusions ul li::before {
      content: '\f00c'; font-family: 'Font Awesome 6 Free'; font-weight: 900;
      position: absolute; left: 0; color: #27ae60; font-size: 14px;
    }
    .inc-exc-card.exclusions ul li::before {
      content: '\f00d'; font-family: 'Font Awesome 6 Free'; font-weight: 900;
      position: absolute; left: 0; color: #e74c3c; font-size: 14px;
    }

    /* Booking CTA */
    .booking-cta {
      background: linear-gradient(135deg, #094067 0%, #1a6fa0 100%);
      padding: 60px 0; text-align: center; color: #fff;
    }
    .booking-cta h2 { color: #fff; font-size: 36px; font-weight: 800; margin-bottom: 10px; }
    .booking-cta p { font-size: 18px; opacity: 0.9; margin-bottom: 30px; }
    .btn-book-now {
      display: inline-flex; align-items: center; gap: 10px;
      background: #4EC0DB; color: #fff; padding: 14px 40px; border-radius: 50px;
      font-size: 18px; font-weight: 700; text-decoration: none;
      box-shadow: 0 8px 25px rgba(78,192,219,0.4); transition: all 0.3s ease;
    }
    .btn-book-now:hover { background: #fff; color: #094067; transform: translateY(-3px); }
    .btn-inquiry {
      display: inline-flex; align-items: center; gap: 10px;
      background: transparent; color: #fff; padding: 14px 40px; border-radius: 50px;
      font-size: 18px; font-weight: 700; text-decoration: none;
      border: 2px solid rgba(255,255,255,0.5); transition: all 0.3s ease; margin-left: 15px;
    }
    .btn-inquiry:hover { background: rgba(255,255,255,0.1); color: #fff; border-color: #fff; }

    @media (max-width: 600px) {
      .booking-cta h2 { font-size: 24px; }
      .btn-book-now, .btn-inquiry { display: block; margin: 10px auto; width: fit-content; }
      .btn-inquiry { margin-left: auto; }
    }

    /* FAQ Premium */
    .faq .accordion-item {
      border: none !important; margin-bottom: 20px !important; border-radius: 16px !important;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05) !important; overflow: hidden !important;
      background: #fff !important; transition: all 0.3s ease !important;
    }
    .faq .accordion-button {
      border-radius: 16px !important; font-weight: 700 !important; font-size: 1.15rem !important;
      color: #2c3e50 !important; background-color: #fff !important; box-shadow: none !important;
      padding: 25px 30px !important; text-transform: capitalize; transition: all 0.3s ease !important;
    }
    .faq .accordion-button:not(.collapsed) {
      background-color: transparent !important; background: transparent !important;
      color: #4EC0DB !important; box-shadow: none !important; border: 0 !important;
    }
    .faq .accordion-button:focus, .faq .accordion-button:active {
      background-color: transparent !important; box-shadow: none !important;
      border-color: transparent !important; outline: none !important; color: #4EC0DB !important;
    }
    .faq .accordion-collapse { border: 0 !important; box-shadow: none !important; }
    .faq .accordion-body {
      padding: 30px !important; color: #555 !important; line-height: 1.7 !important;
      background-color: #fff !important; font-size: 1rem !important; border-top: 0 !important;
    }
    .faq .accordion-button::after {
      width: 40px; height: 40px; background-position: center; background-size: 16px !important;
      background-color: #fff; border-radius: 50%;
      transition: all 0.4s cubic-bezier(0.68,-0.55,0.265,1.55) !important;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%232c3e50' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cline x1='12' y1='5' x2='12' y2='19'%3e%3c/line%3e%3cline x1='5' y1='12' x2='19' y2='12'%3e%3c/line%3e%3c/svg%3e") !important;
      border: 1px solid rgba(0,0,0,0.05); padding: 2px;
    }
    .faq .accordion-button:not(.collapsed)::after {
      background-color: #4EC0DB;
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23ffffff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cline x1='5' y1='12' x2='19' y2='12'%3e%3c/line%3e%3c/svg%3e") !important;
      transform: rotate(180deg) !important;
      box-shadow: 0 6px 20px rgba(78,192,219,0.4); border-color: transparent; padding: 7px;
    }
    @media (max-width: 768px) {
      .faq { padding: 40px 15px !important; margin: 0 !important; background-image: none !important; }
      .faq .accordion-item { border-radius: 16px !important; margin-bottom: 15px !important; }
      .faq .accordion-button { border-radius: 16px !important; font-size: 16px !important; padding: 20px !important; }
      .faq .accordion-button:not(.collapsed)::after {
        background-color: #4EC0DB;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23ffffff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cline x1='5' y1='12' x2='19' y2='12'%3e%3c/line%3e%3c/svg%3e") !important;
        transform: rotate(180deg) !important;
        box-shadow: 0 6px 20px rgba(78,192,219,0.4); border-color: transparent; padding: 2px;
      }
    }

    /* Highlights Cards */
    .highlights-section { background-color: #f9f9f9; padding: 60px 0; margin-top: 0; }
    .highlight-card {
      background: #fff; padding: 30px 20px; border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-align: center; height: 100%;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .highlight-icon {
      width: 70px; height: 70px; background: #e0f7fa; color: #4EC0DB; border-radius: 50%;
      display: flex; align-items: center; justify-content: center; font-size: 30px;
      margin: 0 auto 20px; transition: all 0.3s ease;
    }
    .highlight-card h4 { font-size: 18px; font-weight: 700; margin-bottom: 10px; color: #333; }
    .highlight-card p { font-size: 14px; color: #666; line-height: 1.6; }
  </style>
</head>

<body>
  <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1"><img src="assets/img/icon/whatsapp.svg" alt=""></a>
  <?php include('includes/header.php'); ?>

  <!-- Banner -->
  <section id="banner"
    style="height: 110vh; display: flex; align-items: center; justify-content: center; position: relative; padding: 350px 0; background-image: url('assets/img/kedarkantha/Swargrohini_Oodari.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
    <div style="position: relative; z-index: 1; text-align: center; color: white; width: 100%;">
      <h2
        style="font-size: 49px; font-weight: 900; margin: 0; color: #fff; text-shadow: 2px 2px 8px rgba(0,0,0,0.7); letter-spacing: 1px;">
        KEDARKANTHA TREK</h2>
    </div>
  </section>

  

  <!-- Highlights Section -->
  <section class="highlights-section">
    <div class="container">
      <h2 class="head mb-5">Trek Highlights</h2>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="highlight-card">
            <div class="highlight-icon"><i class="fa-solid fa-mountain"></i></div>
            <h4>12,500 ft Summit</h4>
            <p>Reach the stunning Kedarkantha peak with breathtaking 360° views of the Himalayan range.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="highlight-card">
            <div class="highlight-icon"><i class="fa-solid fa-snowflake"></i></div>
            <h4>Snow Trek</h4>
            <p>Trek through magical snow-covered forests of pine, oak, and rhododendron trees.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="highlight-card">
            <div class="highlight-icon"><i class="fa-solid fa-campground"></i></div>
            <h4>Camping Experience</h4>
            <p>Camp under starlit skies at Juda Ka Taal and Kedarkantha base camp.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="highlight-card">
            <div class="highlight-icon"><i class="fa-solid fa-calendar-days"></i></div>
            <h4>5 Days / 4 Nights</h4>
            <p>Well-paced itinerary with pickup & drop from Dehradun. All meals included.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="about-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="about-img-wrapper">
            <div class="about-img-1">
              <img src="assets/img/kedarkantha/Kedarkantha-1.jpg" alt="Kedarkantha Trek">
            </div>
            <div class="about-img-2">
              <img src="assets/img/kedarkantha/img.jpg" alt="Kedarkantha Snow">
            </div>
            <div class="experience-badge">
              <h3 style="color:#fff;">20km</h3>
              <p>Trek Length</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <span class="section-subtitle">Explore Kedarkantha</span>
            <h2 class="section-title">Snowy Kedarkantha Trek: Winter Magic Awaits! ❄</h2>
            <ul class="feature-list">
              <li class="feature-item">
                <div class="icon-box"><i class="fa-solid fa-mountain" style="font-size:24px; color:#fff;"></i></div>
                <div class="feature-text">
                  <h4>Summit at 12,500 ft</h4>
                  <p>Catch a stunning sunrise painting the Himalayas in hues you've never seen before from the Kedarkantha peak.</p>
                </div>
              </li>
              <li class="feature-item">
                <div class="icon-box"><i class="fa-solid fa-tree" style="font-size:24px; color:#fff;"></i></div>
                <div class="feature-text">
                  <h4>Snow-Covered Forest Trek</h4>
                  <p>Trek through magical pine forests blanketed in snow, creating a fairy-tale soundtrack with each step.</p>
                </div>
              </li>
              <li class="feature-item">
                <div class="icon-box"><i class="fa-solid fa-water" style="font-size:24px; color:#fff;"></i></div>
                <div class="feature-text">
                  <h4>Juda Ka Taal</h4>
                  <p>Visit the pristine frozen lake surrounded by towering conifers – a magical campsite experience.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Itinerary Section -->
  <section class="itinerary-section">
    <div class="container">
      <h2 class="head mb-5">Itinerary</h2>
      <div class="row justify-content-center">
        <div class="col-lg-9">

          <div class="itinerary-card">
            <span class="day-badge">DAY 1</span>
            <h4>Drive from Dehradun to Sankri Base Village (198KM, 8H Drive)</h4>
            <div class="itinerary-icons">
              <span><img src="assets/img/icon/transportation.png" alt="">Transportation</span>
              <span><img src="assets/img/icon/Hotel.png" alt="">Hotel</span>
              <span><img src="assets/img/icon/meals.png" alt="">Dinner</span>
            </div>
            <ul>
              <li>Meet your fellow travelers and trip captains at the pickup point at 6:00 AM at Dehradun Railway Station (Tentative).</li>
              <li>Our journey begins as we drive towards Sankri village, the starting point for the Kedarkantha Trek.</li>
              <li>Upon reaching Sankri Village, let's settle into our homestay. The rest of the day is at leisure.</li>
              <li>In the evening, let's savor dinner, followed by a comfortable overnight stay in Sankri Village.</li>
            </ul>
          </div>

          <div class="itinerary-card">
            <span class="day-badge">DAY 2</span>
            <h4>Sankri to Juda Ka Taal Trek (4KM, 4H Trek)</h4>
            <div class="itinerary-icons">
              <span><img src="assets/img/icon/transportation.png" alt="">Transportation</span>
              <span><img src="assets/img/icon/Camp.png" alt="" style="width:25px;">Camp</span>
              <span><img src="assets/img/icon/meals.png" alt="">Breakfast + Lunch + Dinner</span>
            </div>
            <ul>
              <li>Start the day with an early morning breakfast and a briefing from team captains.</li>
              <li>Trek through the picturesque lush green forests filled with pine trees, with the majestic Swargrohini Massif on the backdrop.</li>
              <li>After a five-hour trek, we'll reach Juda Ka Taal. Lunch awaits at our campsite.</li>
              <li>Dinner in the evening, followed by an overnight stay at Juda Ka Taal campsite.</li>
            </ul>
          </div>

          <div class="itinerary-card">
            <span class="day-badge">DAY 3</span>
            <h4>Juda Ka Taal to Kedarkantha Base Camp (3KM, 3H Trek)</h4>
            <div class="itinerary-icons">
              <span><img src="assets/img/icon/transportation.png" alt="">Transportation</span>
              <span><img src="assets/img/icon/Camp.png" alt="" style="width:25px;">Camp</span>
              <span><img src="assets/img/icon/meals.png" alt="">Breakfast + Lunch + Dinner</span>
            </div>
            <ul>
              <li>Rise and shine team! The day will be started with morning tea, followed by breakfast.</li>
              <li>After a quick briefing, we'll embark on the trek towards the Kedarkantha base camp (3-4 hours).</li>
              <li>Upon reaching, let's check in to our new campsite, followed by warm lunch.</li>
              <li>Spend the rest of the day at leisure – play games, snowball fights, music and dance!</li>
              <li>In the evening, dinner at the campsite followed by stargazing.</li>
            </ul>
          </div>

          <div class="itinerary-card">
            <span class="day-badge">DAY 4</span>
            <h4>Trek to Kedarkantha Peak & Back to Juda Ka Taal (9KM, 8H Trek)</h4>
            <div class="itinerary-icons">
              <span><img src="assets/img/icon/transportation.png" alt="">Transportation</span>
              <span><img src="assets/img/icon/Camp.png" alt="" style="width:25px;">Camp</span>
              <span><img src="assets/img/icon/meals.png" alt="">Breakfast + Lunch + Dinner</span>
            </div>
            <ul>
              <li>The time has come! We'll rise early at 2:00 AM for a prompt start to the summit.</li>
              <li>Trek up to the Kedarkantha Summit, catching the sunrise from the top.</li>
              <li>Take in the stunning 360-degree view of Gangotri, Swargarohini, Banderpooch, Kinner Kailash, and more.</li>
              <li>Descend back to the base camp. Lunch will be served upon return.</li>
              <li>Last night at the campsite – celebrate with a farewell bash. Overnight stay at Juda Ka Taal.</li>
            </ul>
          </div>

          <div class="itinerary-card">
            <span class="day-badge">DAY 5</span>
            <h4>Juda Ka Taal to Sankri (4KM, 4H Trek) & Back to Dehradun (8H Drive)</h4>
            <div class="itinerary-icons">
              <span><img src="assets/img/icon/transportation.png" alt="">Transportation</span>
              <span><img src="assets/img/icon/Hotel.png" alt="">N / A</span>
              <span><img src="assets/img/icon/meals.png" alt="">Breakfast + Lunch</span>
            </div>
            <ul>
              <li>After a delightful breakfast, we'll descend to Sankri Village from Juda Ka Taal.</li>
              <li>Upon reaching Sankri, we'll freshen up and have a satisfying lunch.</li>
              <li>Set our course for Dehradun, aiming to arrive by late evening.</li>
              <li>As we conclude our journey, it's time to depart. Goodbyes are never easy but what a ride it has been!</li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Inclusions / Exclusions -->
  <section class="inc-exc-section">
    <div class="container">
      <h2 class="head mb-5">What's Included & Excluded</h2>
      <div class="row g-4 justify-content-center">
        <div class="col-lg-5 col-md-6">
          <div class="inc-exc-card inclusions">
            <h3><i class="fa-solid fa-circle-check" style="color:#27ae60; margin-right:10px;"></i>Inclusions</h3>
            <ul>
              <li>Cover all Transportation as mentioned in itinerary.</li>
              <li>Includes Hotels & Camps. Solo travellers can share with persons of same gender.</li>
              <li>All Meals from Day 1 Dinner to Day 5 Lunch are included.</li>
              <li>Light snacks and soup while on the trek.</li>
              <li>Experienced Trek Leaders who are super friendly & knowledgeable.</li>
              <li>Entry fees for included places and local tax. No hidden charges.</li>
              <li>A-Z Trip assistance from our Travel Experts.</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-5 col-md-6">
          <div class="inc-exc-card exclusions">
            <h3><i class="fa-solid fa-circle-xmark" style="color:#e74c3c; margin-right:10px;"></i>Exclusions</h3>
            <ul>
              <li>Personal Expenses like shopping and optional activities.</li>
              <li>Any other costing due to natural calamity or forced circumstances out of our control.</li>
              <li>GST (5%) is applicable extra.</li>
              <li>Anything which is not mentioned in the above Inclusions.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Booking CTA -->
  <section class="booking-cta">
    <div class="container">
      <h2>Ready for the Adventure?</h2>
      <p>Starting at ₹8,999 per person • 5 Days / 4 Nights • Ex: Dehradun</p>
      <a href="kedarkantha-form.php" class="btn-book-now"><i class="fa-solid fa-arrow-right"></i> Book Now</a>
      <a href="https://wa.me/message/QYDBK5TO42TGH1" class="btn-inquiry"><i class="fa-brands fa-whatsapp"></i> Send Inquiry</a>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="gallery-section">
    <div class="container">
      <h2 class="head">Glimpses of Kedarkantha</h2>
      <div class="swiper-container-gallery">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="assets/img/kedarkantha/sankri-village.jpg" alt="Sankri Village">
            <div class="gallery-overlay"><h5>Sankri Village</h5></div>
          </div>
          <div class="swiper-slide">
            <img src="assets/img/kedarkantha/lake.jpg" alt="Juda Ka Taal">
            <div class="gallery-overlay"><h5>Juda Ka Taal</h5></div>
          </div>
          <div class="swiper-slide">
            <img src="assets/img/kedarkantha/camp.jpg" alt="Campsite">
            <div class="gallery-overlay"><h5>Juda Ka Taal Campsite</h5></div>
          </div>
          <div class="swiper-slide">
            <img src="assets/img/kedarkantha/peak-k.jpg" alt="Kedarkantha Peak">
            <div class="gallery-overlay"><h5>Kedarkantha Peak</h5></div>
          </div>
          <div class="swiper-slide">
            <img src="assets/img/kedarkantha/Swargrohini_Oodari.jpg" alt="Swargrohini Massif">
            <div class="gallery-overlay"><h5>Swargrohini Massif</h5></div>
          </div>
          <div class="swiper-slide">
            <img src="assets/img/kedarkantha/kedar-camp.jpeg" alt="Kedarkantha Base Camp">
            <div class="gallery-overlay"><h5>Kedarkantha Base Camp</h5></div>
          </div>
          <div class="swiper-slide">
            <img src="assets/img/kedarkantha/Kedarkantha-1.jpg" alt="Kedarkantha Trail">
            <div class="gallery-overlay"><h5>Kedarkantha Trail</h5></div>
          </div>
          <div class="swiper-slide">
            <img src="assets/img/kedarkantha/img.jpg" alt="Snow Trek">
            <div class="gallery-overlay"><h5>Snow Trek</h5></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq">
    <h2 class="head">FAQ</h2>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item acc-item">
              <h2 class="accordion-header acco-head" id="flush-headingOne">
                <button class="accordion-button acc-btn collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Can I Join solo?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  Absolutely! Whether you're joining solo, with friends, or as a couple, these group trips are designed to accommodate all types of travelers. Join us for budget-friendly adventures and check off more items from your bucket list!
                </div>
              </div>
            </div>
            <div class="accordion-item acc-item">
              <h2 class="accordion-header acco-head" id="flush-headingTwo">
                <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  How about safety for female Travellers?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  Yes, female solo travelers can confidently join our group trips. We prioritize their safety by ensuring a secure environment with trusted trip captains, verified hosts, and reliable transport vendors. Your safety is our top priority – any safety concerns during the trip will be promptly addressed by our team. So relax and make the most of your journey!
                </div>
              </div>
            </div>
            <div class="accordion-item acc-item">
              <h2 class="accordion-header acco-head" id="flush-headingThree">
                <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  What is the age requirement to Join?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">The trips is for 18-35 year olds</div>
              </div>
            </div>
            <div class="accordion-item acc-item">
              <h2 class="accordion-header acco-head" id="flush-headingFour">
                <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                  How do I confirm my booking?
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Send the payment screenshot to info@roamers.in and you'll get the confirmation email within 24 hours.</div>
              </div>
            </div>
            <div class="accordion-item acc-item">
              <h2 class="accordion-header acco-head" id="flush-headingFive">
                <button class="accordion-button collapsed acc-btn" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                  How do I trust Roamers?
                </button>
              </h2>
              <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">You can absolutely trust us! We've nailed over 500 awesome trips. Check out the great reviews, speak to our travel consultants, and check the website for further details. Our offices are in Chennai and Delhi – we're all about being upfront and reliable all the way… Feel free to connect.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>

  <!-- Scripts -->
  <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>
  <script src="assets/js/bootstrap/popper.min.js"></script>
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>
  <script src="assets/js/plugins/plugins.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/active.js"></script>
  <script src="assets/js/dates.js"></script>

  <script>
    var navbar = document.querySelector('nav');
    window.onscroll = function () {
      if (window.scrollY > 100) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    };

    var gallerySwiper = new Swiper('.swiper-container-gallery', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      spaceBetween: 40,
      loop: true,
      loopedSlides: 6,
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 150,
        modifier: 1.5,
        slideShadows: false,
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  </script>
</body>

</html>