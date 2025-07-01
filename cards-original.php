<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .text-color-from-envoto {
            color: #1ca8cb !important;
        }

        .text-color-from-envoto-2 {
            color: #daf1f7;
        }

        .description-text-color {
            color: #687179;
        }

        .background-color-from-envoto-1 {
            background-color: #daf1f7;
        }

        /* .background-color-from-envoto-2 {
            background-color: rgb(225, 225, 225) !important;
        } */

        .rating-badge {
            background-color: #daf1f7;
            color: var(--main-text-color);
            font-size: 11px;
            padding: 5px 10px;
            border-radius: 1rem;
        }

        .statrs-custom-css {
            font-size: 12px;
            margin: 0px 35px 0px 0px !important;
        }
    </style>
</head>

<body>
    <section class="upcoming-trips py-60 upcoming-desk" id="upcoming">
        <div class="container-fluid">
            <h2 class="head">
                Upcoming Trips
            </h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <!-- Valley Of Flowers -->
                    <div class="swiper-slide border" style="border-radius: 15px;">
                        <a href="valley-of-flowers" class="text-decoration-none">
                            <img src="assets/img/valley-of-flowers/vally-of-flowers-image (1).webp"
                                alt="Valley of Flowers" style="width: 100%; border-radius: 15px;" />
                            <div class="card-body  ">
                                <div class="d-flex justify-content-between align-items-center ">
                                    <div class="d-flex justfy-content-between me-1">
                                        <small class="description-text-color">
                                            <i class="fa-regular fa-clock text-color-from-envoto me-1"></i> 5N/6D
                                        </small>
                                    </div>
                                    <div class="rating-badge  background-color-from-envoto-1 text-color-from-envoto">
                                        Ex : Rishikesh
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center justify-content-center">
                                    <h6 class="fw-bold m-0 mt-3" style="color: #094067;">Valley Of Flowers</h6>
                                </div>
                                <div>
                                    <div
                                        class="d-flex justify-content-between align-items-center description-text-color small">
                                        <div class="d-flex align-items-center">
                                            <div class="me-1 mb-1 mt-1">
                                                <i class="fa-solid fa-location-dot text-color-from-envoto "></i>
                                            </div>
                                            <small class=" description-text-color">Rishikesh, Joshimath,
                                                Pulna</small>
                                            </span>
                                        </div>
                                        <p class="description-text-color statrs-custom-css">
                                            Starts
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="slider-container p-0  mt-2 rounded-3"
                                        id="slider">
                                        <i class="fa-solid fa-calendar-days me-2 text-color-from-envoto "></i><span
                                            class="valley-dates card__description "></span>
                                    </div>
                                    <span class="text-color-from-envoto fw-bold d-flex align-items-center flex-row">
                                        <i class="fas fa-rupee-sign me-1"></i> 9,990<span> /-</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Kodaikanal Backpacking -->
                    <div class="swiper-slide">
                        <a href="kodaikanal1">
                            <img src="assets/img/kodaikanal-backpacking/Gunacav.jpeg" alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="inner inner2 inner-home">
                                    <h3>3 DAYS / 2 NIGHTS</h3>
                                    <h4><img src="assets/img/images/loc1.svg" class="exicon"
                                            alt="second location-icon">EX: Chennai
                                    </h4>
                                </div>
                                <h2>Kodaikanal Backpacking</h2>
                                <p><img src="assets/img/images/loc.svg" alt="location-icon"> Kodaikanal, Vattakanal,
                                    Poombarai
                                </p>
                                <div class="inner">
                                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg"
                                            alt="second location-icon">
                                        <span class="kodai1-dates"></span>
                                    </h4>
                                    <h4><span class="kodai1-price">₹8,990</span> </h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Ooty the Queen of Hills -->
                    <div class="swiper-slide">
                        <a href="ooty">
                            <img src="assets/img/bg/ooty-cove.jpeg" alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="inner inner2">
                                    <h3>3 DAYS / 2 NIGHTS</h3>
                                    <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">
                                        EX: Chennai,
                                        Coimbatore
                                    </h4>
                                </div>
                                <h2>Ooty the Queen of Hills
                                </h2>
                                <div class="inner">
                                    <p><img src="assets/img/images/loc.svg" alt="location-icon">Nilgiri, Coonoor,
                                        Coimbatore
                                    </p>
                                    <h4 class="sta">Starts at </h4>
                                </div>

                                <div class="inner">
                                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg"
                                            alt="second location-icon">
                                        <span class="ooty-dates">Nov 3, 24, Dec 8, 15, 22, Jan 26 </span>
                                    </h4>
                                    <h4><span id="ooty-price">₹7,490</span> </h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Varkala & Munroe Flashpacking -->
                    <div class="swiper-slide">
                        <a href="varkala-grouptrip">
                            <img src="assets/img/varkala/kerala-1.jpg" alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="inner inner2">
                                    <h3>3 DAYS / 2 NIGHTS</h3>
                                    <h4><img src="assets/img/images/loc1.svg" class="exicon"
                                            alt="second location-icon">EX: Chennai,
                                        Trivandrum
                                    </h4>
                                </div>
                                <h2>Varkala & Munroe Flashpacking
                                </h2>
                                <div class="inner">
                                    <p><img src="assets/img/images/loc.svg" alt="location-icon">Varkala, Munroe Island,
                                        Trivandrum</p>
                                    <h4 class="sta">Starts at </h4>
                                </div>

                                <div class="inner">
                                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg"
                                            alt="second location-icon">
                                        <span class="varkala-dates">Jan
                                            12, Feb 16 </span>
                                    </h4>
                                    <h4><span class="varkala-price">₹8,490</span> </h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Spiti Winter Expedition -->
                    <div class="swiper-slide">
                        <a href="spiti-valley">
                            <img src="assets/img/spiti-valley/spiti-cover.jpg" alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="inner inner2">
                                    <h3>7 DAYS / 6 NIGHTS</h3>
                                    <h4><img src="assets/img/images/loc1.svg " class="exicon"
                                            alt="second location-icon">EX: Delhi
                                    </h4>
                                </div>
                                <h2>Spiti Winter Expedition</h2>
                                <p><img src="assets/img/images/loc.svg" alt="location-icon">Spiti Valley</p>
                                <div class="inner">
                                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg"
                                            alt="second location-icon">
                                        <span class="spiti-dates"> Dec 23 </span>
                                    </h4>
                                    <h4><span class="spiti-price">₹21,990</span> </h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Pondi Dive-in -->
                    <div class="swiper-slide">
                        <a href="pondicherry">

                            <img src="assets/img/short-trip/Lead-Auroville.webp" alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="inner inner2">
                                    <h3>3 DAYS / 2 NIGHTS</h3>
                                    <h4><img src="assets/img/images/loc1.svg" class="exicon" alt="second location-icon">
                                        EX: Direct,
                                        Chennai
                                    </h4>
                                </div>
                                <h2>Pondi Dive-in
                                </h2>
                                <div class="inner">
                                    <p><img src="assets/img/images/loc.svg" alt="location-icon">Pondicherry</p>
                                    <h4 class="sta">Starts at </h4>
                                </div>

                                <div class="inner">
                                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg"
                                            alt="second location-icon">
                                        <span class="pondi-dates">Nov
                                            24, Dec 09, 23 </span>
                                    </h4>
                                    <h4><span class="pondi-price"></span> </h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Munnar with Kolukkumalai -->
                    <div class="swiper-slide">
                        <a href="kolukkumalai-trek">
                            <img src="assets/img/kolukkumalai-img/2.jpg" alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="inner inner2">
                                    <h3>3 DAYS / 2 NIGHTS</h3>
                                    <h4><img src="assets/img/images/loc1.svg" class="exicon"
                                            alt="second location-icon">EX: Direct,
                                        Chennai
                                    </h4>
                                </div>
                                <h2>Munnar with Kolukkumalai
                                </h2>
                                <div class="inner">
                                    <p><img src="assets/img/images/loc.svg" alt="location-icon">Munnar</p>
                                    <h4 class="sta">Starts at </h4>
                                </div>

                                <div class="inner">
                                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg"
                                            alt="second location-icon">
                                        <span class="munnar-dates">Jan
                                            12, Feb 16 </span>
                                    </h4>
                                    <h4><span class="munnar-price"></span> </h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Chikmagalur Backpacking -->
                    <div class="swiper-slide">
                        <a href="chikmagalur">
                            <img src="assets/img/Testimnils/chikmagalur.jpg" alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="inner inner2">
                                    <h3>3 DAYS / 2 NIGHTS</h3>
                                    <h4><img src="assets/img/images/loc1.svg" class="exicon"
                                            alt="second location-icon">EX: Chennai,
                                        Bangalore
                                    </h4>
                                </div>
                                <h2>Chikmagalur Backpacking
                                </h2>
                                <div class="inner">
                                    <p><img src="assets/img/images/loc.svg" alt="location-icon">Chikmagalur, Z point,
                                        Hebbe Falls</p>
                                    <h4 class="sta">Starts at </h4>
                                </div>

                                <div class="inner">
                                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg"
                                            alt="second location-icon">
                                        <span class="chik-dates"></span>
                                    </h4>
                                    <h4><span class="chik-price">₹7,990</span> </h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Andaman Island Hopping -->
                    <div class="swiper-slide">
                        <a href="andaman">
                            <img src="assets/img/backpacking/Andaman hoppers.jpg" alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="inner inner2">
                                    <h3>7 DAYS / 6 NIGHTS</h3>
                                    <h4><img src="assets/img/images/loc1.svg" class="exicon"
                                            alt="second location-icon">EX: Port Blair
                                    </h4>
                                </div>
                                <h2>Andaman Island Hopping
                                </h2>
                                <div class="inner">
                                    <p><img src="assets/img/images/loc.svg" alt="location-icon">Havelock Island, Neil
                                        Island, Port
                                        Blair
                                    </p>
                                    <h4 class="sta">Starts at </h4>
                                </div>

                                <div class="inner">
                                    <h4 style="padding-right: 20px;"><img src="assets/img/images/date.svg"
                                            alt="second location-icon">
                                        <span class="andaman-dates"> Dec 23 </span>
                                    </h4>
                                    <h4><span class="andaman-price">₹24,490</span> </h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Add more swiper-slide elements for additional images -->
                </div>
                <div class="swiper-button-next" style="right: 46px;"></div>
                <div class="swiper-button-prev" style="left: 46px;"></div>
            </div>
        </div>
    </section>

</body>

</html>