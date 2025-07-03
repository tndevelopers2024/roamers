<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modern Tab Section</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .dates {
      color: #5f6c7b !important;
      font-size: 11px !important;
      font-weight: 400 !important;
    }

    .card__description {
      color: #687179;
      font-size: 11px !important;
    }

    .nav-tabs {
      border-bottom: none !important;
      justify-content: center;
      gap: 1rem;
    }

    .nav-tabs .nav-link {
      /* border: 1px solid #4ec0db !important; */
      background: rgb(251, 251, 251) !important;
      color: rgb(0, 0, 0) !important;
      border-radius: 15px !important;
      padding: 10px 20px !important;
      transition: 0.3s ease-in-out !important;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05) !important;
      font-weight: 500 !important;
    }

    .nav-tabs .nav-link.active {
      background: #4ec0db !important;
      color: white !important;
      /* border: 1px solid #4ec0db !important; */
    }

    .tab-content {
      margin-top: 2rem;
    }

    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      transition: transform 0.2s ease;
      overflow: hidden;
      margin-bottom: 20px;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      height: 200px;
      object-fit: cover;
      width: 100%;
    }

    .card-body {
      padding: 1rem;
    }

    /* Added for consistent styling of all cards */
    .swiper-slide {
      border-radius: 15px;
      overflow: hidden;

    }

    .text-color-from-envoto {
      color: #4ec0db;
    }

    .description-text-color {
      color: #687179;
    }

    .rating-badge {
      background-color: #e6f7fb;
      padding: 2px 8px;
      border-radius: 4px;
      font-size: 12px;
    }

    .head {
      text-align: center;
      margin-bottom: 30px;
      color: #094067;
      font-weight: 700;
    }

    .silder-inner {
      padding: 15px;
    }

    .silder-inner h2 {
      color: #094067;
      font-size: 18px;
      font-weight: 700;
      margin: 10px 0;
    }

    .silder-inner h3 {
      font-size: 14px;
      color: #687179;
      margin-bottom: 5px;
    }

    .silder-inner h4 {
      font-size: 14px;
      color: #687179;
      margin-bottom: 5px;
    }

    .silder-inner p {
      font-size: 14px;
      color: #687179;
      margin-bottom: 10px;
    }

    .inner {
      display: flex;
      justify-content: space-between;
    }

    .exicon {
      width: 16px;
      height: 16px;
      margin-right: 5px;
    }

    .kodai1-price,
    #ooty-price,
    .varkala-price,
    .spiti-price,
    .chik-price,
    .andaman-price {
      color: #4ec0db;
      font-weight: bold;
    }
  </style>
</head>

<body>

  <div class="container py-5">
    <h2 class="head">
      Upcoming Group Trips
    </h2>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button"
          role="tab" aria-selected="true">July
          2025</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab"
          aria-selected="false">August 2025</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab"
          aria-selected="false">September 2025</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab"
          aria-selected="false">October 2025</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab"
          aria-selected="false">November 2025</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab"
          aria-selected="false">December 2025</button>
      </li>
    </ul>

    <div class="tab-content" id="myTabContent">
      <!-- Tab 1 - July -->
      <div class="tab-pane fade show active" id="tab1" role="tabpanel">
        <div class="row g-4">
          <!-- Pondi Dive-in -->
          <div class="col-md-3">
            <div class="swiper-slide">
              <a href="pondicherry">
                <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>2 DAYS / 1 NIGHT</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>
                      EX: Direct, Chennai
                    </h4>
                  </div>
                  <h2>Pondi Dive-in</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Pondicherry</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="dates july-month-dates-pondicherry"></span>
                    </h4>
                    <h4><span class="pondi-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- Kodaikanal Backpacking -->
          <div class="col-md-3">
            <div class="swiper-slide">
              <a href="kodaikanal1">
                <img src="assets/img/kodaikanal-backpacking/Gunacav.jpeg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2 inner-home">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai</h4>
                  </div>
                  <h2>Kodaikanal Backpacking</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i> Kodaikanal, Vattakanal,
                      Poombarai</p>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="kodai1-dates"></span>
                    </h4>
                    <h4><span class="kodai1-price">₹8,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- Ooty the Queen of Hills -->
          <div class="col-md-3">
            <div class="swiper-slide">
              <a href="ooty">
                <img src="assets/img/bg/ooty-cove.jpeg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2 inner-home">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai</h4>
                  </div>
                  <h2>Ooty the Queen of Hills</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Nilgiri, Coonoor, Coimbatore
                    </p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="ooty-dates"></span>
                    </h4>
                    <h4><span id="ooty-price">₹7,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- Valley of flowers -->
          <div class="col-md-3">
            <div class="swiper-slide">
              <a href="valley-of-flowers">
                <img src="assets/img/valley-of-flowers/vally-of-flowers-image (1).webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2 inner-home">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai</h4>
                  </div>
                  <h2>Valley Of Flowers</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i> Rishikesh, Joshimath, Pulna
                    </p>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="valley-dates"></span>
                    </h4>
                    <h4><span class="valley-price">₹8,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab 2 - August -->
      <div class="tab-pane fade" id="tab2" role="tabpanel">
        <div class="row g-4">
          <!-- Pondi Dive-in -->
          <div class="col-md-3">
            <div class="swiper-slide">
              <a href="pondicherry">
                <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Pondi Dive-in</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Pondicherry</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="dates aug-month-dates-pondicherry"></span>
                    </h4>
                    <h4><span class="pondi-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!--Kerala -->
          <div class="col-md-3">
            <div class="swiper-slide">
              <a href="munnar-alleppey3">
                <img src="assets/img/Kerala/Kerala photos.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2 inner-home">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Kochi, Chennai</h4>
                  </div>
                  <h2>Munnar Alleppey</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i> Munnar, Alappuzha</p>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="allappey-dates"></span>
                    </h4>
                    <h4><span id="kodai-back-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- Wayanad -->
          <div class="col-md-3">
            <div class="swiper-slide">
              <a href="wayanad">
                <img class="new-year" src="assets/img/bg/Pongal-gif.gif" alt="">
                <img src="assets/img/bg/waya-cover.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Direct,
                      Chennai</h4>
                  </div>
                  <h2>Wonders of Wayanad</h2>
                  <div class="inner">
                    <p><img src="assets/img/images/loc.svg" alt="location-icon">Wayanad</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <img src="assets/img/images/date.svg" alt="second location-icon">
                      <span class="wayanad-dates"></span>
                    </h4>
                    <h4><span id="wayanad-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- Ooty  -->
          <div class="col-md-3">
            <div class="swiper-slide">
              <a href="ooty">
                <img src="assets/img/bg/ooty-cove.jpeg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai, Coimbatore</h4>
                  </div>
                  <h2>Ooty the Queen of Hills</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Nilgiri, Coonoor, Coimbatore
                    </p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="ooty-dates"></span>
                    </h4>
                    <h4><span id="ooty-price">₹7,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- Valley of flowers -->
          <div class="col-md-3">
            <div class="swiper-slide">
              <a href="valley-of-flowers">
                <img src="assets/img/valley-of-flowers/vally-of-flowers-image (1).webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2 inner-home">
                    <h3>5 Days - 6 Nights</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Rishikesh</h4>
                  </div>
                  <h2>Valley Of Flowers</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i> Rishikesh, Joshimath, Pulna
                    </p>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="valley-dates"></span>
                    </h4>
                    <h4><span class="valley-price">₹8,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- Sri Lanka -->
          <div class="col-md-3">
            <div class="swiper-slide">
              <a href="srilanka.php">
                <img src="assets/img/Sirlanka/srilanka-images-by-roamers (44).avif" class="backpacking-img"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>7 Days / 6 Nights</h3>
                    <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">EX: Colombo</h4>
                  </div>
                  <h2>Sri Lanka</h2>
                  <p><img src="assets/img/images/loc.svg" alt="location-icon">Sigiriya, Kandy, Ella, Galle, Bentota,
                    Colombo</p>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <img src="assets/img/images/date.svg" alt="second location-icon">
                      <span class="srilanka-dates"></span>
                    </h4>
                    <h4>Starts at <span class="srilanka-price"></span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab 3 - September -->
      <div class="tab-pane fade" id="tab3" role="tabpanel">
        <div class="row g-4">
          <!-- Pondi Dive-in -->
          <div class="col-md-3">
            <div class="swiper-slide">
              <a href="pondicherry">
                <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>2 DAYS / 1 NIGHT</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>
                      EX: Direct, Chennai
                    </h4>
                  </div>
                  <h2>Pondi Dive-in</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Pondicherry</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="dates sep-month-dates-pondicherry"></span>
                    </h4>
                    <h4><span class="pondi-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Munnar with Kolukkumalai -->
            <div class="swiper-slide">
              <a href="kolukkumalai-trek">
                <img src="assets/img/kolukkumalai-img/2.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Munnar with Kolukkumalai</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Munnar</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="munnar-dates"></span>
                    </h4>
                    <h4><span class="munnar-price">₹8,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Chikmagalur Backpacking -->
            <div class="swiper-slide">
              <a href="chikmagalur">
                <img src="assets/img/Testimnils/chikmagalur.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai, Bangalore</h4>
                  </div>
                  <h2>Chikmagalur Backpacking</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Chikmagalur, Z point, Hebbe
                      Falls</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="chik-dates"></span>
                    </h4>
                    <h4><span class="chik-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Andaman Island Hopping -->
            <div class="swiper-slide">
              <a href="andaman">
                <img src="assets/img/backpacking/Andaman hoppers.jpg" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>7 DAYS / 6 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Port Blair</h4>
                  </div>
                  <h2>Andaman Island Hopping</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Havelock Island, Neil Island,
                      Port Blair</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="andaman-dates"></span>
                    </h4>
                    <h4><span class="andaman-price">₹24,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab 4 - October -->
      <div class="tab-pane fade" id="tab4" role="tabpanel">
        <div class="row g-4">
          <!-- Pondi Dive-in -->
          <div class="col-md-3">
            <div class="swiper-slide">
              <a href="pondicherry">
                <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>2 DAYS / 1 NIGHT</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>
                      EX: Direct, Chennai
                    </h4>
                  </div>
                  <h2>Pondi Dive-in</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Pondicherry</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="dates oct-month-dates-pondicherry"></span>
                    </h4>
                    <h4><span class="pondi-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Munnar with Kolukkumalai -->
            <div class="swiper-slide">
              <a href="kolukkumalai-trek">
                <img
                  src="https://images.unsplash.com/photo-1593693392686-3624a7b4a8a4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Munnar with Kolukkumalai</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Munnar</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="munnar-dates"></span>
                    </h4>
                    <h4><span class="munnar-price">₹8,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Chikmagalur Backpacking -->
            <div class="swiper-slide">
              <a href="chikmagalur">
                <img
                  src="https://images.unsplash.com/photo-1593693392686-3624a7b4a8a4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai, Bangalore</h4>
                  </div>
                  <h2>Chikmagalur Backpacking</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Chikmagalur, Z point, Hebbe
                      Falls</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="chik-dates"></span>
                    </h4>
                    <h4><span class="chik-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Andaman Island Hopping -->
            <div class="swiper-slide">
              <a href="andaman">
                <img
                  src="https://images.unsplash.com/photo-1593693392686-3624a7b4a8a4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>7 DAYS / 6 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Port Blair</h4>
                  </div>
                  <h2>Andaman Island Hopping</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Havelock Island, Neil Island,
                      Port Blair</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="andaman-dates"></span>
                    </h4>
                    <h4><span class="andaman-price">₹24,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab 5 - November -->
      <div class="tab-pane fade" id="tab5" role="tabpanel">
        <div class="row g-4">
          <!-- Pondi Dive-in -->
          <div class="col-md-3">
            <div class="swiper-slide">
              <a href="pondicherry">
                <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>2 DAYS / 1 NIGHT</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>
                      EX: Direct, Chennai
                    </h4>
                  </div>
                  <h2>Pondi Dive-in</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Pondicherry</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="dates nov-month-dates-pondicherry"></span>
                    </h4>
                    <h4><span class="pondi-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <!-- Munnar with Kolukkumalai -->
            <div class="swiper-slide">
              <a href="kolukkumalai-trek">
                <img
                  src="https://images.unsplash.com/photo-1593693392686-3624a7b4a8a4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Munnar with Kolukkumalai</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Munnar</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="munnar-dates"></span>
                    </h4>
                    <h4><span class="munnar-price">₹8,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <!-- Chikmagalur Backpacking -->
            <div class="swiper-slide">
              <a href="chikmagalur">
                <img
                  src="https://images.unsplash.com/photo-1593693392686-3624a7b4a8a4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai, Bangalore</h4>
                  </div>
                  <h2>Chikmagalur Backpacking</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Chikmagalur, Z point, Hebbe
                      Falls</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="chik-dates"></span>
                    </h4>
                    <h4><span class="chik-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <!-- Andaman Island Hopping -->
            <div class="swiper-slide">
              <a href="andaman">
                <img
                  src="https://images.unsplash.com/photo-1593693392686-3624a7b4a8a4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>7 DAYS / 6 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Port Blair</h4>
                  </div>
                  <h2>Andaman Island Hopping</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Havelock Island, Neil Island,
                      Port Blair</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="andaman-dates"></span>
                    </h4>
                    <h4><span class="andaman-price">₹24,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tab 6 - December -->
      <div class="tab-pane fade" id="tab6" role="tabpanel">
        <div class="row g-4">
          <!-- Pondi Dive-in -->
          <div class="col-md-3">
            <div class="swiper-slide">
              <a href="pondicherry">
                <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>2 DAYS / 1 NIGHT</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>
                      EX: Direct, Chennai
                    </h4>
                  </div>
                  <h2>Pondi Dive-in</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Pondicherry</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="dates dec-month-dates-pondicherry"></span>
                    </h4>
                    <h4><span class="pondi-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Munnar with Kolukkumalai -->
            <div class="swiper-slide">
              <a href="kolukkumalai-trek">
                <img
                  src="https://images.unsplash.com/photo-1593693392686-3624a7b4a8a4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Direct, Chennai</h4>
                  </div>
                  <h2>Munnar with Kolukkumalai</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Munnar</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="munnar-dates"></span>
                    </h4>
                    <h4><span class="munnar-price">₹8,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Chikmagalur Backpacking -->
            <div class="swiper-slide">
              <a href="chikmagalur">
                <img
                  src="https://images.unsplash.com/photo-1593693392686-3624a7b4a8a4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>3 DAYS / 2 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Chennai, Bangalore</h4>
                  </div>
                  <h2>Chikmagalur Backpacking</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Chikmagalur, Z point, Hebbe
                      Falls</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="chik-dates"></span>
                    </h4>
                    <h4><span class="chik-price">₹7,990</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <!-- Andaman Island Hopping -->
            <div class="swiper-slide">
              <a href="andaman">
                <img
                  src="https://images.unsplash.com/photo-1593693392686-3624a7b4a8a4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                  alt="roamers-Gallery">
                <div class="silder-inner silder-inner1">
                  <div class="inner inner2">
                    <h3>7 DAYS / 6 NIGHTS</h3>
                    <h4><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>EX: Port Blair</h4>
                  </div>
                  <h2>Andaman Island Hopping</h2>
                  <div class="inner">
                    <p><i class="fa-solid fa-location-dot text-color-from-envoto me-1"></i>Havelock Island, Neil Island,
                      Port Blair</p>
                    <h4 class="sta">Starts at </h4>
                  </div>
                  <div class="inner">
                    <h4 style="padding-right: 20px;">
                      <i class="fa-solid fa-calendar-days text-color-from-envoto me-1"></i>
                      <span class="andaman-dates"></span>
                    </h4>
                    <h4><span class="andaman-price">₹24,490</span> </h4>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="assets\js\grop-trips-dates.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>