<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.2/color-thief.umd.js"></script>

</head>
<style>
    .card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.2), rgba(255, 255, 255, 0.1));
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 1;
        pointer-events: none;
    }

    .card:hover::before {
        opacity: 1;
    }

    .card__content {
        position: relative;
        z-index: 2;
        color: var(--text-color, #1e293b);
    }


    .card {
        --card-bg: #ffffff;
        --card-accent: #4ec0db;
        --card-text: #1e293b;
        --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
        flex-shrink: 0;
        width: 190px;
        height: 254px;
        background: var(--card-bg);
        border-radius: 20px !important;
        position: relative;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: var(--card-shadow);
        border: 1px solid rgba(255, 255, 255, 0.2);
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
            Ubuntu, Cantarell, sans-serif;
    }

    .card__shine {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .card__glow {
        position: absolute;
        inset: -10px;
        background: radial-gradient(circle at 50% 0%, rgba(78, 192, 219, 0.3) 0%, rgba(78, 192, 219, 0) 70%);

        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .card__content {
        padding: 1.25em;
        height: 100%;
        display: flex;
        flex-direction: column;
        gap: 0.75em;
        position: relative;
        z-index: 2;
    }

    .card__badge {
        position: absolute;
        top: 12px;
        right: 12px;
        background: #10b981;
        color: white;
        padding: 0.25em 0.5em;
        border-radius: 999px;
        font-size: 0.7em;
        font-weight: 600;
        transform: scale(0.8);
        opacity: 0;
        transition: all 0.4s ease 0.1s;
    }

    .card__image {
        width: 100%;
        height: 100px;
        background: linear-gradient(45deg, #4ec0db, #3bb8d1);

        border-radius: 15px;
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        position: relative;
        overflow: hidden;
    }

    .card__image::after {
        content: "";
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.1) 0%, transparent 30%),
            repeating-linear-gradient(45deg, rgba(78, 192, 219, 0.1) 0px, rgba(78, 192, 219, 0.1) 2px, transparent 2px, transparent 4px);

        opacity: 0.5;
    }

    .card__text {
        display: flex;
        flex-direction: column;
        gap: 0.25em;
    }

    .card__title {
        color: var(--card-text);
        font-size: 1.1em;
        margin: 0;
        font-weight: 700;
        transition: all 0.3s ease;
    }

    .card__description {
        color: var(--card-text);
        font-size: 0.75em;
        margin: 0;
        opacity: 0.7;
        transition: all 0.3s ease;
    }

    .card__footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: auto;
    }

    .card__price {
        color: var(--card-text);
        font-weight: 700;
        font-size: 1em;
        transition: all 0.3s ease;
    }

    .card__button {
        width: 28px;
        height: 28px;
        background: var(--card-accent);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        cursor: pointer;
        transition: all 0.3s ease;
        transform: scale(0.9);
    }

    /* Hover Effects */
    .card:hover {
        transform: translateY(-10px);
        box-shadow:
            0 20px 25px -5px rgba(0, 0, 0, 0.1),
            0 10px 10px -5px rgba(0, 0, 0, 0.04);
        background-color: var(--hover-bg, #f0f0f0);
        /* fallback if JS fails */

        /* updated from purple to match #4ec0db */

    }

    .card:hover .card__shine {
        opacity: 1;
        animation: shine 3s infinite;
    }

    .card:hover .card__glow {
        opacity: 1;
    }

    .card:hover .card__badge {
        transform: scale(1);
        opacity: 1;
        z-index: 1;
    }

    .card:hover .card__image {
        transform: translateY(-5px) scale(1.03);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    .card:hover .card__title {
        color: var(--card-accent);
        transform: translateX(2px);
        Color: white;
    }

    .card:hover .card__description {
        opacity: 1;
        transform: translateX(2px);
        Color: white;
    }

    .card:hover .card__price {
        color: var(--card-accent);
        transform: translateX(2px);
        Color: white;
    }

    .card:hover .card__button {
        transform: scale(1);
        box-shadow: 0 0 0 4px rgba(78, 192, 219, 0.2);
        background-color: var(--hover-bg, #f0f0f0);

    }

    .card:hover .card__button svg {
        animation: pulse 1.5s infinite;
        background-color: var(--hover-bg, #f0f0f0);
    }

    /* Active State */
    .card:active {
        transform: translateY(-5px) scale(0.98);
    }

    /* Animations */
    @keyframes shine {
        0% {
            background-position: -100% 0;
        }

        100% {
            background-position: 200% 0;
        }
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(1);
        }
    }
</style>

<body>
    <section id="upcoming">
        <div class="container">
            <h2 class="head mt-5">Upcoming Trips (Version-2)</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <!-- Valley Of Flowers Card -->
                    <div class="swiper-slide card">
                        <div class="card__shine"></div>
                        <div class="card__glow"></div>
                        <a class="card__content" href="valley-of-flowers">
                            <div class="card__badge">NEW</div>
                            <img class="card__image" src="assets/img/valley-of-flowers/vally-of-flowers-image (1).webp"
                                alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="card__text">
                                    <h3 class="card__title"> 5 Days - 6 Nights</h3>
                                    <h2 class="card__title"> Valley Of Flowers</h2>
                                    <h4 class="card__description">
                                        <i class="fas fa-map-marker-alt me-1"></i> Ex : Rishikesh
                                    </h4>
                                    <p class="card__description">
                                        <i class="fas fa-route me-1"></i> Rishikesh, Joshimath, Pulna
                                    </p>
                                    <p><span class="kodai1-dates card__description"></span></p>

                                </div>
                                <div class="card__footer mt-2">
                                    <div class="card__price">
                                        <i class="fas fa-rupee-sign"></i> 9,990
                                    </div>
                                    <div class="card__button">
                                        <svg height="16" width="16" viewBox="0 0 24 24">
                                            <path stroke-width="2" stroke="currentColor" d="M4 12H20M12 4V20"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Kodaikanal -->
                    <div class="swiper-slide card">
                        <div class="card__shine"></div>
                        <div class="card__glow"></div>
                        <a class="card__content" href="kodaikanal1">
                            <div class="card__badge">NEW</div>
                            <img class="card__image" src="assets/img/kodaikanal-backpacking/Gunacav.jpeg"
                                alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="card__text">
                                    <h3 class="card__title">3 Days - 2 Nights</h3>
                                    <h2 class="card__title">Kodaikanal Backpacking</h2>
                                    <h4 class=" card__description"><i class="fas fa-map-marker-alt me-1"></i> Ex
                                        :Chennai
                                    </h4>
                                    <p class="card__description"><i class="fas fa-route me-1"></i>Kodaikanal,
                                        Vattakanal, Poombarai</p>
                                    <p><span class="kodai1-dates card__description"></span></p>
                                </div>
                                <div class="card__footer mt-2">
                                    <div class="card__price">
                                        <i class="fas fa-rupee-sign"></i> 8,990
                                    </div>
                                    <div class="card__button">
                                        <svg height="16" width="16" viewBox="0 0 24 24">
                                            <path stroke-width="2" stroke="currentColor" d="M4 12H20M12 4V20"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Ooty -->
                    <div class="swiper-slide card">
                        <div class="card__shine"></div>
                        <div class="card__glow"></div>
                        <a class="card__content" href="ooty">
                            <div class="card__badge">NEW</div>
                            <img class="card__image" src="assets/img/bg/ooty-cove.jpeg" alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="card__text">
                                    <h3 class="card__title">3 Days - 2 Nights</h3>
                                    <h2 class="card__title">Ooty the Queen of Hills</h2>
                                    <h4 class=" card__description"><i class="fas fa-map-marker-alt me-1"></i> Ex :
                                        Chennai, Coimbatore
                                    </h4>
                                    <p class="card__description"><i class="fas fa-route me-1"></i>Nilgiri, Coonoor,
                                        Coimbatore</p>
                                    <span class="ooty-dates card__description">Nov 3, 24, Dec 8, 15, 22, Jan 26</span>
                                </div>
                                <div class="card__footer mt-2">
                                    <div class="card__price">
                                        <i class="fas fa-rupee-sign"></i>7,490.
                                    </div>
                                    <div class="card__button">
                                        <svg height="16" width="16" viewBox="0 0 24 24">
                                            <path stroke-width="2" stroke="currentColor" d="M4 12H20M12 4V20"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Varkala -->
                    <div class="swiper-slide card">
                        <div class="card__shine"></div>
                        <div class="card__glow"></div>
                        <a class="card__content" href="varkala-grouptrip">
                            <div class="card__badge">NEW</div>
                            <img class="card__image" src="assets/img/varkala/kerala-1.jpg" alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="card__text">
                                    <h3 class="card__title">3 Days - 2 Nights</h3>
                                    <h2 class="card__title">Varkala & Munroe Flashpacking</h2>
                                    <h4 class=" card__description"><i class="fas fa-map-marker-alt me-1"></i> Ex :
                                        Chennai, Trivandrum
                                    </h4>
                                    <p class="card__description"><i class="fas fa-route me-1"></i>Varkala, Munroe
                                        Island, Trivandrum</p>
                                    <span class="varkala-dates card__description"></span>
                                </div>
                                <div class="card__footer mt-2">
                                    <div class="card__price">₹8,490</div>
                                    <div class="card__button">
                                        <svg height="16" width="16" viewBox="0 0 24 24">
                                            <path stroke-width="2" stroke="currentColor" d="M4 12H20M12 4V20"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Spiti Valley -->
                    <div class="swiper-slide card">
                        <div class="card__shine"></div>
                        <div class="card__glow"></div>
                        <a class="card__content" href="spiti-valley">
                            <div class="card__badge">NEW</div>
                            <img class="card__image" src="assets/img/spiti-valley/spiti-cover.jpg"
                                alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="card__text">
                                    <h3 class="card__title">7 Days - 6 Nights</h3>
                                    <h2 class="card__title">Spiti Winter Expedition</h2>
                                    <h4 class=" card__description"><i class="fas fa-map-marker-alt me-1"></i> Ex : Delhi
                                    </h4>
                                    <p class="card__description"><i class="fas fa-route me-1"></i>Spiti Valley</p>
                                    <span class="spiti-dates card__description">Dec 23</span>
                                </div>
                                <div class="card__footer mt-2">
                                    <div class="card__price">₹21,990</div>
                                    <div class="card__button">
                                        <svg height="16" width="16" viewBox="0 0 24 24">
                                            <path stroke-width="2" stroke="currentColor" d="M4 12H20M12 4V20"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Pondicherry -->
                    <div class="swiper-slide card">
                        <div class="card__shine"></div>
                        <div class="card__glow"></div>
                        <a class="card__content" href="pondicherry">
                            <div class="card__badge">NEW</div>
                            <img class="card__image" src="assets/img/short-trip/Lead-Auroville.webp"
                                alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="card__text">
                                    <h3 class="card__title">3 Days - 2 Nights</h3>
                                    <h2 class="card__title">Pondi Dive-in</h2>
                                    <h4 class=" card__description"><i class="fas fa-map-marker-alt me-1"></i> Ex :
                                        Direct, Chennai
                                    </h4>
                                    <p class="card__description"><i class="fas fa-route me-1"></i>Pondicherry</p>
                                    <span class="pondi-dates card__description">Nov 24, Dec 09, 23</span>
                                </div>
                                <div class="card__footer mt-2">
                                    <div class="card__price pondi-price"></div>
                                    <div class="card__button">
                                        <svg height="16" width="16" viewBox="0 0 24 24">
                                            <path stroke-width="2" stroke="currentColor" d="M4 12H20M12 4V20"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Kolukkumalai Trek and Munnar -->
                    <div class="swiper-slide card">
                        <div class="card__shine"></div>
                        <div class="card__glow"></div>
                        <a class="card__content" href="kolukkumalai-trek">
                            <div class="card__badge">NEW</div>
                            <img class="card__image" src="assets/img/kolukkumalai-img/2.jpg" alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="card__text">
                                    <h3 class="card__title">3 Days - 2 Nights</h3>
                                    <h2 class="card__title">Munnar with Kolukkumalai</h2>
                                    <h4 class=" card__description"><i class="fas fa-map-marker-alt me-1"></i> Ex :
                                        Direct, Chennai
                                    </h4>
                                    <p class="card__description"><i class="fas fa-route me-1"></i>Munnar</p>
                                    <span class="munnar-dates card__description">Jan 12, Feb 16</span>
                                </div>
                                <div class="card__footer mt-2">
                                    <div class="card__price munnar-price"></div>
                                    <div class="card__button">
                                        <svg height="16" width="16" viewBox="0 0 24 24">
                                            <path stroke-width="2" stroke="currentColor" d="M4 12H20M12 4V20"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Chikmagalur -->
                    <div class="swiper-slide card">
                        <div class="card__shine"></div>
                        <div class="card__glow"></div>
                        <a class="card__content" href="chikmagalur">
                            <div class="card__badge">NEW</div>
                            <img class="card__image" src="assets/img/Testimnils/chikmagalur.jpg" alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="card__text">
                                    <h3 class="card__title">3 Days - 2 Nights</h3>
                                    <h2 class="card__title">Chikmagalur Hills</h2>
                                    <h4 class=" card__description"><i class="fas fa-map-marker-alt me-1"></i> Ex :
                                        Chennai, Bangalore
                                    </h4>
                                    <p class="card__description">Chikmagalur</p>
                                    <span class="chik-dates card__description"></span>
                                </div>
                                <div class="card__footer mt-2">
                                    <div class="card__price">₹8,990</div>
                                    <div class="card__button">
                                        <svg height="16" width="16" viewBox="0 0 24 24">
                                            <path stroke-width="2" stroke="currentColor" d="M4 12H20M12 4V20"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Andaman Islands -->
                    <div class="swiper-slide card">
                        <div class="card__shine"></div>
                        <div class="card__glow"></div>
                        <a class="card__content" href="andaman-islands">
                            <div class="card__badge">NEW</div>
                            <img class="card__image" src="assets/img/backpacking/Andaman hoppers.jpg"
                                alt="roamers-Gallery">
                            <div class="silder-inner silder-inner1">
                                <div class="card__text">
                                    <h3 class="card__title">5 Days - 4 Nights</h3>
                                    <h2 class="card__title">Andaman Islands</h2>
                                    <h4 class=" card__description"><i class="fas fa-map-marker-alt me-1"></i> Ex : Port
                                        Blair
                                    </h4>
                                    <p class="card__description"><i class="fas fa-route me-1"></i>Port Blair, Havelock,
                                        Ross</p>
                                    <span class="andaman-dates card__description"></span>
                                </div>
                                <div class="card__footer mt-2">
                                    <div class="card__price">₹15,990</div>
                                    <div class="card__button">
                                        <svg height="16" width="16" viewBox="0 0 24 24">
                                            <path stroke-width="2" stroke="currentColor" d="M4 12H20M12 4V20"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="swiper-button-next" ></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const cards = document.querySelectorAll(".card");

        cards.forEach(card => {
            const img = card.querySelector(".card__image");

            // Wait for image to load
            if (img.complete) {
                applyDominantColor(card, img);
            } else {
                img.addEventListener("load", () => applyDominantColor(card, img));
            }
        });

        function applyDominantColor(card, img) {
            try {
                const colorThief = new ColorThief();
                const color = colorThief.getColor(img);
                const rgb = `rgb(${color[0]}, ${color[1]}, ${color[2]})`;

                card.style.setProperty('--hover-bg', rgb);

                // Determine brightness for text color
                const brightness = (color[0] * 299 + color[1] * 587 + color[2] * 114) / 1000;
                const textColor = brightness > 160 ? '#000' : '#fff';
                card.style.setProperty('--text-color', textColor);
            } catch (e) {
                console.error("Color extraction failed:", e);
            }
        }
    });
</script>


</html>