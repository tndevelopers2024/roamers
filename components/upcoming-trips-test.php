<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ooty Travel Package</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        body, html {
            font-family: 'Manrope', sans-serif;
            overflow-x: hidden;
            max-width: 100%;
            background: #f8fafc;
        }
        .upcoming-header {
            margin: 50px 0 60px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }
        .upcoming-header-icon {
            color: #4CB9D3;
            font-size: 36px;
        }
        .swiper {
            width: 100%;
            padding: 30px 0;
        }
        .swiper-wrapper {
            align-items: stretch;
        }
        .swiper-slide {
            display: flex;
            height: auto;
        }
        .upcoming-card {
            border: none;
            border-radius: 24px;
            background: #fff;
            margin: 0 10px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            min-width: 320px;
            max-width: 350px;
            width: 100%;
            height: 410px;
            position: relative;
            box-shadow: 0 4px 24px 0 rgba(44, 183, 202, 0.10), 0 1.5px 8px 0 rgba(0,0,0,0.04);
            transition: box-shadow 0.2s, transform 0.2s;
        }
        .upcoming-card:hover {
            box-shadow: 0 8px 32px 0 rgba(44, 183, 202, 0.18), 0 2px 12px 0 rgba(0,0,0,0.08);
            transform: translateY(-4px) scale(1.015);
        }
        .upcoming-image {
            width: 100%;
            height: 180px;
            border-radius: 24px 24px 0 0;
            overflow: hidden;
            background: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px 0 rgba(44, 183, 202, 0.08);
        }
        .upcoming-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 24px 24px 0 0;
            display: block;
        }
        .upcoming-content {
            background: none;
            color: #222;
            position: relative;
            z-index: 1;
            border-radius: 0 0 24px 24px;
            height: 100%;
            display: flex;
            flex-direction: column;
            padding: 1rem 1.1rem 2.5rem 1.1rem;
        }
        .upcoming-card-flex {
            display: flex;
            justify-content: space-between;
            margin: 8px 0 0 0;
            flex-wrap: wrap;
            gap: 6px;
        }
        .upcoming-duration {
            display: flex;
            align-items: center;
            background-color: #e6fafd;
            color: #1a6e7e;
            padding: 3px 10px 3px 7px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            box-shadow: 0 1px 4px 0 rgba(44, 183, 202, 0.08);
        }
        .upcoming-duration .icon {
            display: flex;
            align-items: center;
            margin-right: 5px;
        }
        .upcoming-duration .icon img {
            width: 14px !important;
        }
        .upcoming-from {
            display: flex;
            align-items: center;
            background-color: #4CB9D3;
            border-radius: 20px;
            padding: 3px 10px 3px 7px;
            font-size: 12px;
            color: #fff;
            font-weight: 500;
            box-shadow: 0 1px 4px 0 rgba(44, 183, 202, 0.08);
        }
        .upcoming-from .icon {
            display: flex;
            align-items: center;
            margin-right: 5px;
        }
        .upcoming-from .icon img {
            width: 10px !important;
        }
        .upcoming-title {
            font-size: 18px;
            text-transform: uppercase;
            color: #1a6e7e;
            text-align: start;
            margin: 10px 0 0 0;
            font-weight: 800;
            text-shadow: none;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            letter-spacing: 0.5px;
        }
        .upcoming-locations {
            font-size: 13px;
            color: #4CB9D3;
            margin: 2px 0 0 0;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            font-weight: 500;
        }
        .upcoming-price-section {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin: 18px 0 0 0;
            flex-grow: 1;
        }
        .upcoming-dates {
            display: flex;
            align-items: center;
            background-color: #f2f8fa;
            color: #1a6e7e;
            padding: 6px 12px;
            border-radius: 16px;
            font-size: 11px;
            font-weight: 600;
            box-shadow: 0 1px 4px 0 rgba(44, 183, 202, 0.08);
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .upcoming-dates .icon {
            display: flex;
            align-items: center;
            margin-right: 6px;
        }
        .upcoming-dates .icon img {
            width: 16px !important;
        }
        .upcoming-starts {
            font-size: 13px;
            font-weight: 700;
            color: #4CB9D3;
            text-align: right;
        }
        .upcoming-price {
            font-weight: 900;
            text-align: right;
            color: #1a6e7e;
            font-size: 18px;
            margin-top: 2px;
        }
        .upcoming-view {
            position: absolute;
            bottom: -22px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #4CB9D3;
            color: #fff !important;
            border-radius: 22px;
            text-decoration: none;
            font-weight: 700;
            box-shadow: 0 4px 24px 0 rgba(44, 183, 202, 0.18);
            font-size: 15px;
            z-index: 10;
            transition: all 0.2s;
            padding: 10px 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
        }
        .upcoming-view:hover, .upcoming-view:focus {
            background: #1a6e7e;
            color: #fff !important;
            text-decoration: none;
            transform: translateX(-50%) scale(1.04);
            box-shadow: 0 8px 32px 0 rgba(44, 183, 202, 0.22);
        }
        .upcoming-slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: #fff;
            border: none;
            color: #4CB9D3;
            font-size: 1.5rem;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            cursor: pointer;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s, color 0.2s;
        }
        .upcoming-slider-arrow.left {
            left: 0;
        }
        .upcoming-slider-arrow.right {
            right: 0;
        }
        .upcoming-slider-arrow.swiper-button-disabled {
            opacity: 0.4;
            cursor: not-allowed;
        }
        @media (max-width: 900px) {
            .upcoming-card {
                min-width: 320px;
                max-width: 320px;
                height: 370px;
            }
            .upcoming-image {
                height: 140px;
            }
        }
        @media (max-width: 600px) {
            .upcoming-card {
                min-width: 95vw;
                max-width: 95vw;
                height: 350px;
                margin: 0 5px;
            }
            .upcoming-image {
                height: 120px;
            }
        }
        @media (max-width: 400px) {
            .upcoming-card {
                min-width: 98vw;
                max-width: 98vw;
                height: 270px;
                margin: 0 2px;
            }
            .upcoming-image {
                height: 90px;
            }
            .upcoming-content {
                padding: 0.7rem 0.5rem 2.2rem 0.5rem;
            }
            .upcoming-title {
                font-size: 15px;
            }
            .upcoming-locations {
                font-size: 11px;
            }
            .upcoming-dates {
                font-size: 9px;
                padding: 4px 7px;
            }
            .upcoming-view {
                font-size: 13px;
                padding: 8px 16px;
            }
        }
    </style>
</head>

<body>
    <div class="container upcoming-container">
        <h2 class="upcoming-header">
            <i class="fa-solid fa-calendar-days upcoming-header-icon"></i>
            Upcoming Group Trips
        </h2>
        <ul class="nav nav-pills justify-content-center mb-4 flex-wrap gap-2" id="upcoming-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab-august-btn" data-bs-toggle="pill" data-bs-target="#tab-august" type="button" role="tab" aria-controls="tab-august" aria-selected="true">
                    <i class="fa-solid fa-cloud-sun"></i> August
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-september-btn" data-bs-toggle="pill" data-bs-target="#tab-september" type="button" role="tab" aria-controls="tab-september" aria-selected="false" disabled>
                    <i class="fa-solid fa-cloud-sun-rain"></i> September
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-october-btn" data-bs-toggle="pill" data-bs-target="#tab-october" type="button" role="tab" aria-controls="tab-october" aria-selected="false" disabled>
                    <i class="fa-solid fa-cloud-showers-heavy"></i> October
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-november-btn" data-bs-toggle="pill" data-bs-target="#tab-november" type="button" role="tab" aria-controls="tab-november" aria-selected="false" disabled>
                    <i class="fa-solid fa-cloud-bolt"></i> November
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-december-btn" data-bs-toggle="pill" data-bs-target="#tab-december" type="button" role="tab" aria-controls="tab-december" aria-selected="false" disabled>
                    <i class="fa-solid fa-cloud-sun"></i> December
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-january-btn" data-bs-toggle="pill" data-bs-target="#tab-january" type="button" role="tab" aria-controls="tab-january" aria-selected="false" disabled>
                    <i class="fa-solid fa-cloud-sun"></i> January
                </button>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-august" role="tabpanel" aria-labelledby="tab-august-btn">
                <div class="position-relative">
                    <button class="upcoming-slider-arrow left swiper-button-prev" aria-label="Scroll to previous trip"><i class="fa fa-chevron-left"></i></button>
                    <div class="swiper upcoming-slider" id="upcoming-slider-august">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="upcoming-card">
                                    <div class="upcoming-image">
                                        <img src="assets/img/valley-of-flowers/avif/img-3.avif" alt="Pondi Dive-in">
                                    </div>
                                    <div class="upcoming-content">
                                        <div class="upcoming-card-flex">
                                            <div class="upcoming-duration">
                                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>2D/1N
                                            </div>
                                            <div class="upcoming-from">
                                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                                <span>EX: Direct, Chennai</span>
                                            </div>
                                        </div>
                                        <div class="upcoming-title">Pondi Dive-in</div>
                                        <div class="upcoming-locations">Pondicherry</div>
                                        <div class="upcoming-price-section">
                                            <div class="upcoming-dates">
                                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                                <span class="upcoming-dates-text">Aug 16, 22</span>
                                            </div>
                                            <div>
                                                <div class="upcoming-starts">Starts</div>
                                                <div class="upcoming-price">₹4,990</div>
                                            </div>
                                        </div>
                                        <a href="pondicherry.php" target="_blank" class="upcoming-view">View Trip</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="upcoming-card">
                                    <div class="upcoming-image">
                                        <img src="assets/img/valley-of-flowers/avif/img-1.avif" alt="Valley of Flowers">
                                    </div>
                                    <div class="upcoming-content">
                                        <div class="upcoming-card-flex">
                                            <div class="upcoming-duration">
                                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>5D/6N
                                            </div>
                                            <div class="upcoming-from">
                                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                                <span>Ex: Rishikesh</span>
                                            </div>
                                        </div>
                                        <div class="upcoming-title">Valley of Flowers Trek</div>
                                        <div class="upcoming-locations">Rishikesh, Joshimath, Pulna</div>
                                        <div class="upcoming-price-section">
                                            <div class="upcoming-dates">
                                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                                <span class="upcoming-dates-text">Aug 2, 15, 23, 29</span>
                                            </div>
                                            <div>
                                                <div class="upcoming-starts">Starts</div>
                                                <div class="upcoming-price">₹9,999</div>
                                            </div>
                                        </div>
                                        <a href="valley-of-flowers.php" target="_blank" class="upcoming-view">View Trip</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="upcoming-card">
                                    <div class="upcoming-image">
                                        <img src="assets/img/valley-of-flowers/avif/img-2.avif" alt="Sri Lanka">
                                    </div>
                                    <div class="upcoming-content">
                                        <div class="upcoming-card-flex">
                                            <div class="upcoming-duration">
                                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                                            </div>
                                            <div class="upcoming-from">
                                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                                <span>EX: Colombo</span>
                                            </div>
                                        </div>
                                        <div class="upcoming-title">Sri Lanka</div>
                                        <div class="upcoming-locations">Sigiriya, Kandy, Ella, Galle, Bentota</div>
                                        <div class="upcoming-price-section">
                                            <div class="upcoming-dates">
                                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                                <span class="upcoming-dates-text">Aug 17</span>
                                            </div>
                                            <div>
                                                <div class="upcoming-starts">Starts</div>
                                                <div class="upcoming-price">₹43,999</div>
                                            </div>
                                        </div>
                                        <a href="srilanka.php" target="_blank" class="upcoming-view">View Trip</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="upcoming-card">
                                    <div class="upcoming-image">
                                        <img src="assets/img/valley-of-flowers/avif/img-4.avif" alt="Varkala">
                                    </div>
                                    <div class="upcoming-content">
                                        <div class="upcoming-card-flex">
                                            <div class="upcoming-duration">
                                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                            </div>
                                            <div class="upcoming-from">
                                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                                <span>EX: Chennai/Trivandrum</span>
                                            </div>
                                        </div>
                                        <div class="upcoming-title">Varkala</div>
                                        <div class="upcoming-locations">Chennai - Trivandrum</div>
                                        <div class="upcoming-price-section">
                                            <div class="upcoming-dates">
                                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                                <span class="upcoming-dates-text">Aug 15, 29</span>
                                            </div>
                                            <div>
                                                <div class="upcoming-starts">Starts</div>
                                                <div class="upcoming-price">₹8,990</div>
                                            </div>
                                        </div>
                                        <a href="varkala-grouptrip.php" target="_blank" class="upcoming-view">View Trip</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="upcoming-slider-arrow right swiper-button-next" aria-label="Scroll to next trip"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
            <!-- Other months: Coming soon, disabled -->
            <div class="tab-pane fade" id="tab-september" role="tabpanel" aria-labelledby="tab-september-btn"></div>
            <div class="tab-pane fade" id="tab-october" role="tabpanel" aria-labelledby="tab-october-btn"></div>
            <div class="tab-pane fade" id="tab-november" role="tabpanel" aria-labelledby="tab-november-btn"></div>
            <div class="tab-pane fade" id="tab-december" role="tabpanel" aria-labelledby="tab-december-btn"></div>
            <div class="tab-pane fade" id="tab-january" role="tabpanel" aria-labelledby="tab-january-btn"></div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Show toast for coming soon tabs
            document.querySelectorAll('.nav-link[disabled]').forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    if (!document.getElementById('coming-soon-toast')) {
                        const toast = document.createElement('div');
                        toast.id = 'coming-soon-toast';
                        toast.innerText = 'Coming Soon!';
                        toast.className = 'toast align-items-center text-white bg-info border-0 position-fixed top-0 start-50 translate-middle-x mt-4 shadow';
                        toast.style.zIndex = 9999;
                        toast.style.minWidth = '120px';
                        toast.style.fontWeight = 'bold';
                        toast.style.fontSize = '16px';
                        toast.style.borderRadius = '20px';
                        toast.style.padding = '10px 18px';
                        document.body.appendChild(toast);

                        setTimeout(() => {
                            toast.classList.add('show');
                        }, 10);

                        setTimeout(() => {
                            toast.classList.remove('show');
                            setTimeout(() => toast.remove(), 350);
                        }, 1200);
                    }
                });
            });

            // Swiper initialization
            const swiper = new Swiper('#upcoming-slider-august', {
                slidesPerView: 1,
                spaceBetween: 20,
                centeredSlides: false,
                navigation: {
                    nextEl: '.upcoming-slider-arrow.right',
                    prevEl: '.upcoming-slider-arrow.left',
                },
                freeMode: false,
                grabCursor: true,
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        centeredSlides: false,
                    },
                    400: {
                        slidesPerView: 1.1,
                        spaceBetween: 10,
                        centeredSlides: false,
                    },
                    600: {
                        slidesPerView: 1.2,
                        spaceBetween: 16,
                        centeredSlides: false,
                    },
                    900: {
                        slidesPerView: 2.2,
                        spaceBetween: 20,
                        centeredSlides: false,
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                        centeredSlides: false,
                    }
                }
            });

            // Center first card on mobile
            function scrollToFirstCard() {
                if (window.innerWidth <= 600 && swiper && swiper.slideTo) {
                    swiper.slideTo(0, 0);
                }
            }

            // Debounce resize handler
            let resizeTimeout;
            function debounceResize() {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(() => {
                    scrollToFirstCard();
                }, 100);
            }

            scrollToFirstCard();
            window.addEventListener('resize', debounceResize);
        });
    </script>
</body>

</html>