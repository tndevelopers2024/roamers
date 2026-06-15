const fs = require('fs');
const path = require('path');

const filepath = 'c:\\\\xampp\\\\htdocs\\\\roamers\\\\ooty-christmas&newyear-enquiry-form.php';
let content = fs.readFileSync(filepath, 'utf-8');

// 1. Replace CSS
const cssReplacement = `        /* Rewind Section */
        .rewind-section { padding: 60px 20px 100px; max-width: 1200px; margin: 0 auto; }
        .rewind-title-area { text-align: center; width: 100%; }
        .rewind-title-area h2 { font-size: 32px; font-weight: 800; color: #1a1a1a; margin: 0 0 8px 0; font-family: 'Outfit', sans-serif; text-transform: uppercase; letter-spacing: 1px; }
        .rewind-title-area p { font-size: 16px; color: #666; margin: 0; font-weight: 500; }
        .journey-nav-container { display: flex !important; justify-content: center !important; gap: 20px !important; margin-top: 40px !important; width: 100% !important; position: relative !important; z-index: 1000 !important; padding-bottom: 20px !important; }
        .journey-nav-btn { width: 50px !important; height: 50px !important; border-radius: 50% !important; background: #4ec0db !important; color: #fff !important; display: flex !important; align-items: center !important; justify-content: center !important; cursor: pointer !important; transition: all 0.3s ease !important; box-shadow: 0 4px 15px rgba(78, 192, 219, 0.3) !important; border: none !important; position: relative !important; top: auto !important; left: auto !important; right: auto !important; bottom: auto !important; transform: none !important; }
        .rewind-nav-btn { display: none !important; }
        .rewind-swiper .swiper-wrapper { height: 520px; }
        .rewind-swiper { overflow: visible !important; padding: 20px 0; width: 100%; }
        .rewind-card { position: relative; height: 500px; border-radius: 25px; overflow: hidden; transition: all 0.4s ease; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); background: #fff; }
        .rewind-card img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
        .card-overlay-top { position: absolute; top: 20px; right: 20px; z-index: 10; }
        .arrow-icon { width: 40px; height: 40px; border-radius: 50%; background: rgba(255, 255, 255, 0.4); backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px); display: flex; align-items: center; justify-content: center; color: #fff; border: 1px solid rgba(255, 255, 255, 0.5); transition: all 0.3s ease; font-size: 14px; }
        .rewind-swiper .swiper-slide { cursor: pointer; }
        @media (max-width: 768px) {
            .journey-nav-container { display: none !important; }
            .journey-nav-btn { width: 40px !important; height: 40px !important; }
            .rewind-card { height: 380px; }
            .rewind-swiper .swiper-wrapper { height: 400px !important; }
            .rewind-header { flex-direction: column; align-items: center; }
            .rewind-title-area h2 { font-size: 28px; }
        }`;

content = content.replace(/\/\* Rewind Section Redesign \*\/[\s\S]*?\}\s*\}\s*<\/style>/, cssReplacement + '\n    </style>');

// 2. Insert HTML
const htmlToInsert = `    <section class="rewind-section reveal" style="position: relative; overflow: hidden; padding: 0px 0px 0px 0px ;">
        <div class="rewind-header reveal" style="margin-bottom: 50px;">
            <div class="rewind-title-area">
                <h3 class="head" style="text-align: center; margin-bottom: 20px;">
                    <img src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;" class="align-start me-2">
                    Roamers Rewind
                    <img src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;" class="align-start">
                </h3>
            </div>
        </div>

        <div style="position: relative;">
            <div class="swiper rewind-swiper" style="overflow: visible !important;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/1-min.jpg" alt="Ooty View 1">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/2.JPG" alt="Ooty View 2">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/Ooty pic 1.jpg" alt="Ooty Peak">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/Tea factory-min.jpg" alt="Ooty Tea Factory">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/Aadhiyogi.jpg" alt="Aadhiyogi">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/ootylake.jpg" alt="Ooty Lake">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rewind-card">
                            <img src="assets/img/Ooty/pykara-lake.jpg" alt="Pykara Lake">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="journey-nav-container">
            <div class="journey-nav-btn journey-prev"><i class="fa-solid fa-chevron-left"></i></div>
            <div class="journey-nav-btn journey-next"><i class="fa-solid fa-chevron-right"></i></div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>`;

content = content.replace(/<\?php include\('includes\/footer\.php'\); \?>/, htmlToInsert);

// 3. Replace JS block
const jsPattern = /\/\/\s*Rewind Swiper Initialization[\s\S]*?\}\);/g;
const jsReplacement = `// Rewind Swiper Initialization
            const rewindSwiper = new Swiper('.rewind-swiper', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slideToClickedSlide: true,
                loop: true,
                speed: 1000,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
                coverflowEffect: {
                    rotate: 20,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: false,
                },
                navigation: {
                    nextEl: '.journey-next',
                    prevEl: '.journey-prev',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1.4,
                        spaceBetween: 30,
                        coverflowEffect: {
                            rotate: 15,
                            depth: 150,
                            modifier: 1,
                        }
                    },
                    640: {
                        slidesPerView: 2.5,
                        spaceBetween: 30,
                        coverflowEffect: {
                            rotate: 20,
                            depth: 100,
                            modifier: 1,
                        }
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                        coverflowEffect: {
                            rotate: 20,
                            depth: 100,
                            modifier: 1,
                        }
                    }
                }
            });`;

content = content.replace(jsPattern, jsReplacement);

fs.writeFileSync(filepath, content, 'utf-8');
console.log('Successfully updated the Ooty Christmas file');
