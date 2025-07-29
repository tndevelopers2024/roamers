<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modern Tab Section</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(120deg, #f8fafc 0%, #e0f7fa 100%);
      font-family: 'Urbanist', sans-serif !important;
      min-height: 100vh;
    }
    /* Override all font-family everywhere */
    * {
      font-family: 'Urbanist', sans-serif !important;
    }

    .head {
      text-align: center;
      margin-bottom: 40px;
      color: #094067;
      font-weight: 800;
      font-size: 2.5rem;
      letter-spacing: 1px;
      text-shadow: 0 2px 8px rgba(78, 192, 219, 0.08);
    }

    .nav-tabs {
      border-bottom: none !important;
      justify-content: center;
      gap: 0.7rem; /* reduced gap */
      margin-bottom: 2.5rem;
    }

    .nav-tabs .nav-link {
      background: #fff !important;
      color: #094067 !important;
      border-radius: 16px !important; /* smaller radius */
      padding: 6px 14px !important;   /* smaller padding */
      font-weight: 600 !important;
      font-size: 0.92rem !important;  /* smaller font */
      border: 2px solid transparent !important;
      letter-spacing: 0.3px;
      margin-right: 10px;
      border-radius: 1.2rem !important;
      background: transparent !important;
      color: #094067 !important;
      font-weight: 600 !important;
      border: none !important;
      box-shadow: none !important;
      transition: background 0.25s, color 0.25s, box-shadow 0.25s;
      position: relative;
      min-width: 90px;
      min-height: 32px;
      line-height: 1.2;
    }

    .nav-tabs .nav-link:last-child {
      margin-right: 0;
    }

    .nav-tabs .nav-link.active, .nav-tabs .nav-link:focus {
      background: linear-gradient(90deg, #4ec0db 60%, #0ea5e9 100%) !important;
      color: #fff !important;
      box-shadow: 0 4px 16px rgba(78, 192, 219, 0.15) !important;
      border: none !important;
      z-index: 1;
      /* Remove transform for no hover-like effect */
      transform: none !important;
    }

    /* Remove all hover effects for nav-tabs */
    .nav-tabs .nav-link:hover,
    .nav-tabs .nav-link:active {
      background: #fff !important;
      color: #094067 !important;
      box-shadow: none !important;
      border: none !important;
      transform: none !important;
    }

    .tab-content {
      margin-top: 2rem;
    }

    .row.g-4 {
      --bs-gutter-x: 2.2rem;
      --bs-gutter-y: 2.2rem;
    }

    .swiper-slide {
      border-radius: 22px;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 2px 12px rgba(78, 192, 219, 0.08);
      border: 1.5px solid #e6f0f5;
      transition: none;
      position: relative;
      min-height: 340px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      padding: 0;
      margin-bottom: 0.5rem;
    }
    .silder-inner {
      padding: 14px 10px 10px 10px;
      background: linear-gradient(120deg, #fafdff 80%, #e0f7fa 100%);
      border-bottom-left-radius: 22px;
      border-bottom-right-radius: 22px;
      flex: 1 1 auto;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      min-height: 160px;
    }
    .swiper-slide img:not(.new-year) {
      border-top-left-radius: 22px;
      border-top-right-radius: 22px;
      height: 180px;
      object-fit: cover;
      width: 100%;
      transition: none;
      box-shadow: 0 2px 8px rgba(78, 192, 219, 0.08);
    }
    @media (max-width: 991.98px) {
      .swiper-slide img:not(.new-year) {
        height: 140px;
      }
    }
    @media (max-width: 767.98px) {
      .swiper-slide img:not(.new-year) {
        height: 100px;
      }
    }
    /* Details button for cards */
    .card-details-btn {
      display: inline-block;
      margin-top: 10px;
      padding: 4px 16px;
      background: linear-gradient(90deg, #4ec0db 60%, #0ea5e9 100%);
      color: #fff;
      border: none;
      border-radius: 1.2rem;
      font-size: 0.85rem;
      font-weight: 600;
      text-decoration: none;
      box-shadow: 0 1px 4px rgba(78, 192, 219, 0.10);
      transition: none;
      cursor: pointer;
      text-align: center;
    }
    .card-details-btn:active {
      background: #0ea5e9;
    }
    @media (max-width: 991.98px) {
      .swiper-slide {
        min-height: 300px;
      }
      .silder-inner {
        padding: 10px 6px 8px 6px;
        min-height: 120px;
      }
      .swiper-slide img:not(.new-year) {
        height: 90px;
      }
    }
    @media (max-width: 767.98px) {
      .swiper-slide {
        min-height: 220px;
      }
      .silder-inner {
        padding: 7px 3px 6px 3px;
        min-height: 80px;
      }
      .swiper-slide img:not(.new-year) {
        height: 60px;
      }
    }

    .swiper-slide a {
      text-decoration: none;
      color: inherit;
      display: block;
      height: 100%;
    }

    /* Remove all hover effects for images */
    .swiper-slide:hover img:not(.new-year),
    .swiper-slide:active img:not(.new-year) {
      filter: none;
    }

    .new-year {
      position: absolute;
      top: 10px;
      left: 10px;
      width: 48px;
      height: 48px;
      z-index: 2;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(78, 192, 219, 0.12);
      border: 2px solid #fff;
      background: #fff;
    }

    .silder-inner h2 {
      color: #094067;
      font-size: 1.05rem;
      font-weight: 700;
      margin: 8px 0 6px 0;
      letter-spacing: 0.4px;
      text-shadow: 0 1px 4px rgba(78, 192, 219, 0.06);
    }

    .silder-inner h3, .silder-inner h4 {
      font-size: 0.82rem;
      color: #687179;
      margin-bottom: 3px;
      font-weight: 500;
      letter-spacing: 0.15px;
    }

    .silder-inner p {
      font-size: 0.80rem;
      color: #687179;
      margin-bottom: 6px;
      font-weight: 400;
    }

    .inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 0.5rem;
    }

    .inner2 {
      margin-bottom: 6px;
    }

    .sta {
      font-size: 0.80rem;
      color: #4ec0db;
      font-weight: 600;
      margin-left: 6px;
    }

    .dates {
      color: #0ea5e9 !important;
      font-size: 10px !important;
      font-weight: 600 !important;
      letter-spacing: 0.15px;
    }

    .kodai1-price,
    #ooty-price,
    .varkala-price,
    .spiti-price,
    .chik-price,
    .andaman-price,
    .pondi-price,
    .valley-price,
    .munnar-price,
    .srilanka-price,
    #wayanad-price,
    #kodai-back-price {
      color: #4ec0db;
      font-weight: 700;
      font-size: 0.92rem;
      letter-spacing: 0.15px;
    }

    .rating-badge {
      background-color: #e6f7fb;
      padding: 1px 6px;
      border-radius: 4px;
      font-size: 10px;
      font-weight: 600;
      color: #0ea5e9;
      margin-left: 4px;
    }

    .exicon {
      width: 16px;
      height: 16px;
      margin-right: 5px;
      vertical-align: middle;
    }

    /* Remove all hover effects for links */
    .swiper-slide a:hover h2,
    .swiper-slide a:active h2 {
      color: #094067;
      text-decoration: none;
      transition: none;
    }

    /* Responsive tweaks */
    @media (max-width: 991.98px) {
      .row.g-4 {
        --bs-gutter-x: 1.2rem;
        --bs-gutter-y: 1.2rem;
      }
      .swiper-slide {
        min-height: 440px;
      }
      .nav-tabs .nav-link {
        padding: 6px 10px !important;
        font-size: 0.88rem !important;
      }
    }
    @media (max-width: 767.98px) {
      .swiper-slide {
        min-height: 420px;
      }
      .silder-inner {
        padding: 16px 10px 12px 10px;
      }
      .nav-tabs .nav-link {
        padding: 5px 7px !important;
        font-size: 0.82rem !important;
      }
      .head {
        font-size: 2rem;
      }
    }
    @media (max-width: 575.98px) {
      .swiper-slide {
        min-height: 380px;
      }
      .head {
        font-size: 1.3rem;
      }
      .nav-tabs .nav-link {
        padding: 4px 4px !important;
        font-size: 0.75rem !important;
      }
    }
    .nav-tabs-scroll {
      flex-wrap: nowrap !important;
      overflow-x: auto;
      overflow-y: hidden;
      -webkit-overflow-scrolling: touch;
      scrollbar-width: none; /* Firefox */
      padding-inline: 12px; /* Add space on left/right, reduced */
      justify-content: center;
      background: #f4f8fb;
      border-radius: 2rem;
      box-shadow: 0 2px 12px rgba(78, 192, 219, 0.08);
      margin-bottom: 2.5rem;
    }
    .nav-tabs-scroll::-webkit-scrollbar {
      display: none; /* Chrome, Safari */
    }
    /* Make tab icons smaller */
    .nav-tabs .nav-link i {
      font-size: 0.95em;
      margin-right: 0.3em !important;
    }
    /* Fix Font Awesome icons not showing due to global font-family override */
    .fa, .fas, .far, .fal, .fa-solid, .fa-regular, .fa-light {
      font-family: 'Font Awesome 6 Free' !important;
      font-weight: 900 !important;
    }
    .fab, .fa-brands {
      font-family: 'Font Awesome 6 Brands' !important;
      font-weight: 400 !important;
    }
    .custom-tab-bar-wrapper,
    .custom-tab-bar,
    .custom-tab.selected {
      overflow: visible !important;
    }

    .custom-tab-bar-wrapper {
      padding-top: 48px; /* or more if needed */
    }
  </style>
</head>

<body>
  <div class="container py-5">
    <h2 class="head">
      <i class="fa-solid fa-calendar-days me-2" style="color:#4ec0db;"></i>
      Upcoming Group Trips
    </h2>
    <!-- Restore .tab-pin above selected tab, remove .bar-pin -->
    <div class="custom-tab-bar-wrapper">
      <div class="custom-tab-bar" id="customTabBar">
        <div class="custom-tab selected">
          <img src="assets/img/icon/fav-icon.png" class="tab-pin" alt="Selected" />
          <span>March</span>
        </div>
        <div class="custom-tab">APRIL</div>
        <div class="custom-tab">MAY</div>
        <div class="custom-tab">JUNE</div>
        <div class="custom-tab">JULY</div>
      </div>
    </div>
    <style>
      .custom-tab-bar-wrapper {
        width: 100%;
        background: transparent;
        margin: 0 auto;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 120px;
        box-sizing: border-box;
      }
      .custom-tab-bar {
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        background: linear-gradient(90deg, #6ec6f7 0%, #4ec0db 60%, #0ea5e9 100%);
        padding: 0 12px;
        height: 60px;
        position: relative;
        min-width: 700px;
        max-width: 900px;
        width: 100%;
        overflow-x: auto;
        border-radius: 32px;
        box-shadow: 0 4px 24px 0 rgba(78,192,219,0.10);
        margin: 0 auto;
        justify-content: center;
        z-index: 1;
      }
      .custom-tab {
        position: relative;
        min-width: 110px;
        height: 40px;
        margin: 0 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-family: 'Urbanist', sans-serif;
        font-weight: 700;
        font-size: 1.25rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        cursor: pointer;
        border-radius: 20px;
        transition: background 0.18s, color 0.18s, box-shadow 0.18s;
        background: transparent;
        z-index: 1;
        box-shadow: none;
        outline: none;
        border: none;
        user-select: none;
      }
      .custom-tab:not(.selected):hover {
        background: rgba(255,255,255,0.10);
        color: #e0f7fa;
        box-shadow: 0 2px 8px rgba(78,192,219,0.08);
      }
      .custom-tab.selected {
        background: #fff;
        color: #2196f3;
        text-transform: capitalize;
        box-shadow: 0 2px 12px rgba(78,192,219,0.13);
        font-weight: 800;
        border-radius: 20px;
        z-index: 2;
      }
      .custom-tab.selected span {
        font-weight: 800;
      }
      .tab-pin {
        position: absolute;
        top: -48px;
        left: 50%;
        transform: translateX(-50%) scale(1.1);
        width: 34px;
        height: 34px;
        z-index: 9999;
        filter: drop-shadow(0 2px 6px rgba(78,192,219,0.18));
        transition: top 0.22s cubic-bezier(.4,2,.6,1), filter 0.18s;
        animation: pin-bounce 0.5s;
      }
      @keyframes pin-bounce {
        0% { top: -70px; opacity: 0; }
        60% { top: -52px; opacity: 1; }
        100% { top: -48px; opacity: 1; }
      }
      @media (max-width: 900px) {
        .tab-pin {
          top: -38px;
          width: 28px;
          height: 28px;
          z-index: 9999;
        }
        @keyframes pin-bounce {
          0% { top: -54px; opacity: 0; }
          60% { top: -40px; opacity: 1; }
          100% { top: -38px; opacity: 1; }
        }
      }
      @media (max-width: 600px) {
        .tab-pin {
          top: -28px;
          width: 20px;
          height: 20px;
          z-index: 9999;
        }
        @keyframes pin-bounce {
          0% { top: -38px; opacity: 0; }
          60% { top: -30px; opacity: 1; }
          100% { top: -28px; opacity: 1; }
        }
      }
      @media (max-width: 1000px) {
        .custom-tab-bar {
          min-width: 340px;
          max-width: 98vw;
        }
      }
      @media (max-width: 600px) {
        .custom-tab-bar {
          height: 48px;
          padding: 0 4px;
          border-radius: 18px;
          min-width: 220px;
        }
        .custom-tab {
          min-width: 80px;
          font-size: 1rem;
          margin: 0 4px;
          height: 32px;
          border-radius: 14px;
        }
        .custom-tab-bar-wrapper {
          min-height: 70px;
        }
      }
    </style>
    <script>
      // Remove all .tab-pin JS logic, keep only tab selection
      const tabBar = document.getElementById('customTabBar');
      const tabs = tabBar.querySelectorAll('.custom-tab');
      function selectTab(idx) {
        tabs.forEach((tab, i) => {
          tab.classList.remove('selected');
          // Remove pin if exists
          const pin = tab.querySelector('.tab-pin');
          if (pin) pin.remove();
          if (tab.querySelector('span')) {
            tab.querySelector('span').style.textTransform = 'capitalize';
          }
          tab.style.textTransform = 'uppercase';
        });
        const selected = tabs[idx];
        selected.classList.add('selected');
        // Add pin above selected
        if (!selected.querySelector('.tab-pin')) {
          const img = document.createElement('img');
          img.src = 'assets/img/icon/fav-icon.png';
          img.className = 'tab-pin';
          img.alt = 'Selected';
          selected.insertBefore(img, selected.firstChild);
        }
        if (selected.querySelector('span')) {
          selected.querySelector('span').style.textTransform = 'capitalize';
        }
        selected.style.textTransform = 'capitalize';
      }
      tabs.forEach((tab, idx) => {
        tab.addEventListener('click', () => selectTab(idx));
      });
    </script>

    <div class="tab-content" id="myTabContent">
      <!-- Tab 1 - July -->
      <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
        <div class="row g-4">
          <!-- Pondi Dive-in -->
          <div class="col-md-6 col-lg-3">
            <div class="swiper-slide">
              <a href="pondicherry">
                <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>2 DAYS / 1 NIGHT</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Pondi Dive-in</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Pondicherry</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="dates july-month-dates-pondicherry"></span>
                    </h4>
                    <h4><span class="pondi-price">₹7,990</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- Kodaikanal Backpacking -->
          <div class="col-md-6 col-lg-3">
            <div class="swiper-slide">
              <a href="kodaikanal1">
                <img src="assets/img/kodaikanal-backpacking/Gunacav.jpeg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2 inner-home">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai</h4>
                  </div>
                  <h2>Kodaikanal Backpacking</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Kodaikanal, Vattakanal, Poombarai</p>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="kodai1-dates"></span>
                    </h4>
                    <h4><span class="kodai1-price">₹8,990</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- Ooty the Queen of Hills -->
          <div class="col-md-6 col-lg-3">
            <div class="swiper-slide">
              <a href="ooty">
                <img src="assets/img/bg/ooty-cove.jpeg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2 inner-home">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai</h4>
                  </div>
                  <h2>Ooty the Queen of Hills</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Nilgiri, Coonoor, Coimbatore</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="ooty-dates"></span>
                    </h4>
                    <h4><span id="ooty-price">₹7,490</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- Valley of flowers -->
          <div class="col-md-6 col-lg-3">
            <div class="swiper-slide">
              <a href="valley-of-flowers">
                <img src="assets/img/valley-of-flowers/vally-of-flowers-image (1).webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2 inner-home">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai</h4>
                  </div>
                  <h2>Valley Of Flowers</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Rishikesh, Joshimath, Pulna</p>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="valley-dates"></span>
                    </h4>
                    <h4><span class="valley-price">₹8,990</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab 2 - August -->
      <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
        <div class="row g-4">
          <!-- Pondi Dive-in -->
          <div class="col-md-6 col-lg-3">
            <div class="swiper-slide">
              <a href="pondicherry">
                <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Pondi Dive-in</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Pondicherry</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="dates aug-month-dates-pondicherry"></span>
                    </h4>
                    <h4><span class="pondi-price">₹7,990</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- Kerala -->
          <div class="col-md-6 col-lg-3">
            <div class="swiper-slide">
              <a href="munnar-alleppey3">
                <img src="assets/img/Kerala/Kerala photos.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2 inner-home">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Kochi, Chennai</h4>
                  </div>
                  <h2>Munnar Alleppey</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Munnar, Alappuzha</p>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="allappey-dates"></span>
                    </h4>
                    <h4><span id="kodai-back-price">₹7,990</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- Ooty  -->
          <div class="col-md-6 col-lg-3">
            <div class="swiper-slide">
              <a href="ooty">
                <img src="assets/img/bg/ooty-cove.jpeg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2 inner-home">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai, Coimbatore</h4>
                  </div>
                  <h2>Ooty the Queen of Hills</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Nilgiri, Coonoor, Coimbatore</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="ooty-dates"></span>
                    </h4>
                    <h4><span id="ooty-price">₹7,490</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- Valley of flowers -->
          <div class="col-md-6 col-lg-3">
            <div class="swiper-slide">
              <a href="valley-of-flowers">
                <img src="assets/img/valley-of-flowers/vally-of-flowers-image (1).webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2 inner-home">
                    <!-- BUG FIX: Corrected duration to match actual trip length -->
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>6 DAYS / 5 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Rishikesh</h4>
                  </div>
                  <h2>Valley Of Flowers</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Rishikesh, Joshimath, Pulna</p>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="valley-dates"></span>
                    </h4>
                    <h4><span class="valley-price">₹8,990</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab 3 - September -->
      <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
        <div class="row g-4">
          <!-- Pondi Dive-in -->
          <div class="col-md-6 col-lg-3">
            <div class="swiper-slide">
              <a href="pondicherry">
                <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>2 DAYS / 1 NIGHT</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Pondi Dive-in</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Pondicherry</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="dates sep-month-dates-pondicherry"></span>
                    </h4>
                    <h4><span class="pondi-price">₹7,990</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <!-- Munnar with Kolukkumalai -->
            <div class="swiper-slide">
              <a href="kolukkumalai-trek">
                <img src="assets/img/kolukkumalai-img/2.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Munnar with Kolukkumalai</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Munnar</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="munnar-dates"></span>
                    </h4>
                    <h4><span class="munnar-price">₹8,490</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <!-- Chikmagalur Backpacking -->
            <div class="swiper-slide">
              <a href="chikmagalur">
                <img src="assets/img/Testimnils/chikmagalur.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai, Bangalore</h4>
                  </div>
                  <h2>Chikmagalur Backpacking</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Chikmagalur, Z point, Hebbe Falls</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="chik-dates"></span>
                    </h4>
                    <h4><span class="chik-price">₹7,990</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <!-- Andaman Island Hopping -->
            <div class="swiper-slide">
              <a href="andaman">
                <img src="assets/img/backpacking/Andaman hoppers.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>7 DAYS / 6 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Port Blair</h4>
                  </div>
                  <h2>Andaman Island Hopping</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Havelock Island, Neil Island, Port Blair</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="andaman-dates"></span>
                    </h4>
                    <h4><span class="andaman-price">₹24,490</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab 4 - October -->
      <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
        <div class="row g-4">
          <!-- Pondi Dive-in -->
          <div class="col-md-6 col-lg-3">
            <div class="swiper-slide">
              <a href="pondicherry">
                <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>2 DAYS / 1 NIGHT</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Pondi Dive-in</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Pondicherry</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="dates oct-month-dates-pondicherry"></span>
                    </h4>
                    <h4><span class="pondi-price">₹7,990</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <!-- Munnar with Kolukkumalai -->
            <div class="swiper-slide">
              <a href="kolukkumalai-trek">
                <img src="assets/img/kolukkumalai-img/2.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Munnar with Kolukkumalai</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Munnar</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="munnar-dates"></span>
                    </h4>
                    <h4><span class="munnar-price">₹8,490</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <!-- Chikmagalur Backpacking -->
            <div class="swiper-slide">
              <a href="chikmagalur">
                <img src="assets/img/Testimnils/chikmagalur.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai, Bangalore</h4>
                  </div>
                  <h2>Chikmagalur Backpacking</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Chikmagalur, Z point, Hebbe Falls</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="chik-dates"></span>
                    </h4>
                    <h4><span class="chik-price">₹7,990</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <!-- Andaman Island Hopping -->
            <div class="swiper-slide">
              <a href="andaman">
                <img src="assets/img/backpacking/Andaman hoppers.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>7 DAYS / 6 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Port Blair</h4>
                  </div>
                  <h2>Andaman Island Hopping</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Havelock Island, Neil Island, Port Blair</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="andaman-dates"></span>
                    </h4>
                    <h4><span class="andaman-price">₹24,490</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab 5 - November -->
      <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
        <div class="row g-4">
          <!-- Pondi Dive-in -->
          <div class="col-md-6 col-lg-3">
            <div class="swiper-slide">
              <a href="pondicherry">
                <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>2 DAYS / 1 NIGHT</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Pondi Dive-in</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Pondicherry</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="dates nov-month-dates-pondicherry"></span>
                    </h4>
                    <h4><span class="pondi-price">₹7,990</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <!-- Munnar with Kolukkumalai -->
            <div class="swiper-slide">
              <a href="kolukkumalai-trek">
                <img src="assets/img/kolukkumalai-img/2.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Munnar with Kolukkumalai</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Munnar</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="munnar-dates"></span>
                    </h4>
                    <h4><span class="munnar-price">₹8,490</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <!-- Chikmagalur Backpacking -->
            <div class="swiper-slide">
              <a href="chikmagalur">
                <img src="assets/img/Testimnils/chikmagalur.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai, Bangalore</h4>
                  </div>
                  <h2>Chikmagalur Backpacking</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Chikmagalur, Z point, Hebbe Falls</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="chik-dates"></span>
                    </h4>
                    <h4><span class="chik-price">₹7,990</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <!-- Andaman Island Hopping -->
            <div class="swiper-slide">
              <a href="andaman">
                <img src="assets/img/backpacking/Andaman hoppers.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>7 DAYS / 6 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Port Blair</h4>
                  </div>
                  <h2>Andaman Island Hopping</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Havelock Island, Neil Island, Port Blair</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="andaman-dates"></span>
                    </h4>
                    <h4><span class="andaman-price">₹24,490</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab 6 - December -->
      <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
        <div class="row g-4">
          <!-- Pondi Dive-in -->
          <div class="col-md-6 col-lg-3">
            <div class="swiper-slide">
              <a href="pondicherry">
                <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>2 DAYS / 1 NIGHT</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Pondi Dive-in</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Pondicherry</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="dates dec-month-dates-pondicherry"></span>
                    </h4>
                    <h4><span class="pondi-price">₹7,990</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <!-- Munnar with Kolukkumalai -->
            <div class="swiper-slide">
              <a href="kolukkumalai-trek">
                <img src="assets/img/kolukkumalai-img/2.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Munnar with Kolukkumalai</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Munnar</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="munnar-dates"></span>
                    </h4>
                    <h4><span class="munnar-price">₹8,490</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <!-- Chikmagalur Backpacking -->
            <div class="swiper-slide">
              <a href="chikmagalur">
                <img src="assets/img/Testimnils/chikmagalur.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai, Bangalore</h4>
                  </div>
                  <h2>Chikmagalur Backpacking</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Chikmagalur, Z point, Hebbe Falls</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="chik-dates"></span>
                    </h4>
                    <h4><span class="chik-price">₹7,990</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <!-- Andaman Island Hopping -->
            <div class="swiper-slide">
              <a href="andaman">
                <img src="assets/img/backpacking/Andaman hoppers.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3><i class="fa-solid fa-clock me-1 text-color-from-envoto"></i>7 DAYS / 6 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Port Blair</h4>
                  </div>
                  <h2>Andaman Island Hopping</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-map-marker-alt text-color-from-envoto me-1"></i>Havelock Island, Neil Island, Port Blair</p>
                    <h4 class="sta">Starts at</h4>
                  </div>
                  <div class="inner">
                    <h4>
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="andaman-dates"></span>
                    </h4>
                    <h4><span class="andaman-price">₹24,490</span></h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/grop-trips-dates.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Fix Bootstrap tab bugs: ensure only one tab is active, and only one tab-pane is shown
    document.addEventListener('DOMContentLoaded', function () {
      // Bootstrap 5 should handle tab switching, but sometimes custom code or markup issues can cause bugs.
      // We'll enforce correct tab and pane activation.

      // Get all tab buttons and tab panes
      const tabButtons = document.querySelectorAll('#myTab .nav-link');
      const tabPanes = document.querySelectorAll('#myTabContent .tab-pane');

      tabButtons.forEach(function (btn) {
        btn.addEventListener('click', function (e) {
          e.preventDefault();

          // Remove 'active' from all tab buttons
          tabButtons.forEach(function (b) {
            b.classList.remove('active');
            b.setAttribute('aria-selected', 'false');
          });

          // Add 'active' to clicked tab
          btn.classList.add('active');
          btn.setAttribute('aria-selected', 'true');

          // Hide all tab panes
          tabPanes.forEach(function (pane) {
            pane.classList.remove('show', 'active');
          });

          // Show the selected tab pane
          const target = btn.getAttribute('data-bs-target');
          const pane = document.querySelector(target);
          if (pane) {
            pane.classList.add('show', 'active');
          }
        });
      });

      // Optional: If you want to support hash navigation (e.g. #tab3), you can add code here.
    });
  </script>
</body>

</html>