<style>
  .home {
    padding: 160px 0px 220px 0px;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    background-position: top !important;
    height: 140vh;
  }

  .home {
    background: url('assets/img/banner/desktop-banner-avif.avif');
    object-fit: cover !important;
  }

  @media (max-width: 600px) {

    .home {
      padding: 100px 0px 0px 0px;
      background: url('assets/img/banner/mobile-banner.avif');
      background-size: 100% 100% !important;
      background-repeat: no-repeat !important;
      background-position: top !important;
      background-position-y: 5px !important;
      width: 100vw;
      height: 100vw;
      /* background-position-x: 5px !important; */
    }

    .categories-container {
      padding-bottom: 30px !important;
    }

    .py-60 {
      padding: 55px 0px 60px 0px !important;
    }

    .form {
      padding: 32px 20px 20px 20px !important;
    }

    .search-bar-container {
      width: 200px !important;
      height: 33px !important;
    }

    .categories1 {
      padding: 30px 10px !important;
    }

    .home-row {
      position: absolute;
      margin: auto;
      bottom: 19px !important;
      left: 8.5%;
    }

    .testimonials {
      padding: 2rem 0rem !important;
      margin: -75px 0px 20px 0px !important;
      width: 100% !important;
      background: none !important;
      box-shadow: none !important;
    }

    .roamers-head {
      display: none !important;
    }

    .inner-home h4 {
      font-size: 11px !important;
    }

    .travelgram {
      background: url(assets/img/bg/Vertical-film-roll.jpg) !important;
      background-size: cover !important;
      background-position: center !important;
      object-fit: cover !important;
      background-repeat: no-repeat !important;
      padding: 153px 0px !important;
    }

    .quotes-img-img {
      display: none !important;
    }

    .quotes-img {
      margin-bottom: 0px !important;
    }

    .silder-inner h4 {
      font-size: 12px !important;

    }

    .inner {
      padding-top: 5px !important;
      padding-bottom: 5px !important;
    }

    .quotes-img-img1 {
      display: block !important;
    }

    .bbb {
      margin-top: -72px !important;
    }

    .search-con {
      margin-bottom: 0px !important;
      margin-top: -20px !important;
    }

    .gotoinsta {
      margin-bottom: 30px;
      padding: 7px 20px !important;
      font-size: 16px;
      width: 156px !important;
    }

    .search {
      top: 6% !important;
    }

    .ml11 {
      margin-top: 320px !important;
    }

    .letters {
      font-size: calc(1em + 4vmin) !important;
    }

    .home {
      height: 683px !important;
    }

    .navbar-nav {
      padding-top: 20px !important;
      padding-bottom: 10px !important;
    }

    .upcoming-mob {
      display: block !important;
    }

    .view-more-btn {
      padding-bottom: 30px !important;
    }

    #search-results {
      display: block !important;
    }

    .trip-card {
      margin-bottom: 20px !important;
    }

    .search-box-con img {
      height: 170px !important;
    }
  }

  .home-behind-content {
    text-align: center;
    letter-spacing: 5px;
    position: relative;
    display: grid;
    place-items: center;
    color: #ffffff38;
    font-size: 200px;
    font-weight: 600;
    text-transform: uppercase;
    line-height: 1.3em;
    letter-spacing: 2px;
  }


  .home-icon-content img {
    width: 60px;
    height: 60px;
    filter: invert(1);
    margin: 0px 0px 10px;
  }

  .home-icon-content h3 {
    font-size: 20px;
    font-weight: 200;
    color: white;
    text-align: center;
    margin: 10px 0px;
  }

  .home-icon-content h4 {
    font-size: 22px;
    font-weight: 400;
    color: white;
    text-align: center;
  }

  .home-icon-content {
    margin-top: 30px;
  }


  .home-row {
    position: absolute;
    width: 86%;
    margin: auto;
    bottom: 50px;
    left: 7%;
    right: 7%;
  }

  .margin {
    margin-top: 100px;
  }

  @media (max-width: 768px) {
    .margin {
      margin-top: 60px;
    }
  }

  @media (max-width: 480px) {
    .margin {
      margin-top: 40px;
    }
  }
</style>


<section class="home">
  <div class=" home1 before-overlay">
  </div>
  <div class="close-mark">
    <i onclick="closebefore()" class="fa-solid fa-xmark"></i>
  </div>
  <div class="search">
    <div class="search-con">
      <div id="maxsearch" onclick="maxsearch()" class="search-bar-container">
        <img src="https://cdn4.iconfinder.com/data/icons/evil-icons-user-interface/64/magnifier-512.png" alt="magnifier"
          class="magnifier" />
        <input type="text" class="input" id="search-input" placeholder="Search..." autocomplete="off">
      </div>
    </div>
    <div class="result">
      <div class="container" id="search-results">
        <div class="row">
        </div>
      </div>
    </div>
  </div>

  <script>
    function maxsearch() {
      var maxsearch = document.getElementById("maxsearch");
      maxsearch.style.width = "350px";
      var before = document.querySelector('.before-overlay');
      before.style.display = "block";
      var close = document.querySelector(".close-mark");
      close.style.display = "block";
      document.querySelector(".search").style.top = "11%";
    }

    function closebefore() {
      var before = document.querySelector('.before-overlay');
      before.style.display = "none";
      var close = document.querySelector(".close-mark");
      close.style.display = "none";
      var maxsearch = document.getElementById("maxsearch");
      maxsearch.style.width = "250px";
      document.getElementById("search-results").style.display = "none";
      document.querySelector(".search").style.top = "28%";

      // Clear the input field
      document.getElementById("search-input").value = "";
    }
  </script>


  <div class="margin">
    <div class="row home-row">
      <div class="col-3">
        <div class="home-icon-content text-center" style="margin-bottom: 52px;">
          <picture>
            <source srcset="assets/img/icon/solo.png" media="(max-width: 800px)">
            <img src="assets/img/icon/solo.png" alt="home icon image">
          </picture>
          <h4>Solo friendly</h4>
        </div>
      </div>
      <div class="col-3">
        <div class="home-icon-content text-center">
          <picture>
            <source srcset="assets/img/icon/roadshow.png" media="(max-width: 800px)">
            <img src="assets/img/icon/roadshow.png" alt="home icon image">
          </picture>
          <h4>
            Group Trips</h4>
        </div>
      </div>
      <div class="col-3">
        <div class="home-icon-content text-center">
          <picture>
            <source srcset="assets/img/icon/trekcamp.png" media="(max-width: 800px)">
            <img src="assets/img/icon/trekcamp.png" alt="home icon image">
          </picture>
          <h4>
            Treks, Camps</h4>
        </div>
      </div>
      <div class="col-3">
        <div class="home-icon-content text-center">
          <picture>
            <source srcset="assets/img/icon/Meetups.png" media="(max-width: 800px)">
            <img src="assets/img/icon/Meetups.png" alt="home icon image">
          </picture>
          <h4>
            Roamers <br class="d-block d-sm-none"> Meetups</h4>
        </div>
      </div>
    </div>
  </div>
</section>