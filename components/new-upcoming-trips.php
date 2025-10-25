<style>
    * {
        font-family: 'Manrope', sans-serif;
        box-sizing: border-box;
    }

    html,
    body {
        overflow-x: hidden;
        max-width: 100%;
        margin: 0;
    }

    .upcoming-container {
        position: relative;
        max-width: 1800px !important;
        margin: 0 auto;
        padding: 0 15px;
    }

    .upcoming-tabs {
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }

    @media (max-width: 600px) {
        .upcoming-tabs {
            gap: 6px;
            margin-bottom: 18px;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding: 0 10px;
            justify-content: flex-start;
            scrollbar-width: none;
            -ms-overflow-style: none;
            -webkit-overflow-scrolling: touch;
        }

        .upcoming-tabs::-webkit-scrollbar {
            display: none;
        }
    }

    .upcoming-tab-btn {
        background: #fff;
        color: #4CB9D3;
        border: 2px solid #4CB9D3;
        border-radius: 20px;
        padding: 8px 24px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: background 0.2s, color 0.2s;
        margin-bottom: 8px;
    }

    @media (max-width: 600px) {
        .upcoming-tab-btn {
            padding: 5px 20px;
            font-size: 12px;
            border-radius: 14px;
            margin-bottom: 4px;
        }
    }

    .upcoming-tab-btn.active,
    .upcoming-tab-btn:hover {
        background: #4CB9D3;
        color: #fff;
    }

    .upcoming-tab-content {
        display: none;
        margin-bottom: 80px;
    }

    .upcoming-tab-content.active {
        display: block;
    }

    .upcoming-card {
        flex: 0 0 auto;
        /* width: 600px !important; */
        min-width: 420px !important;
        /* max-width: 378px; */
        height: 600px;
        position: relative;
        border: 2px solid;
        border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
        border-radius: 30px;
        background: transparent;
        scroll-snap-align: start;
        margin: 0 10px;
    }

    .upcoming-image {
        width: 100%;
        height: 450px;
        border-radius: 24px;
        overflow: hidden;
    }

    .upcoming-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 24px;
        padding: 2px;
    }

    @media (max-width: 600px) {
        .upcoming-image {
            height: 500px !important;
            max-height: 70vw;
        }
    }

    @media (max-width: 400px) {
        .upcoming-image {
            height: 320px !important;
            max-height: 80vw;
        }
    }

    .upcoming-content {
        background: linear-gradient(180deg, rgba(86, 195, 221, 0) 0%, #56C3DD 100%);
        padding: 1px 1px 1px 1px;
        margin: 1px 1px 25px 1px;
        color: white;
        position: relative;
        z-index: 1;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        border-radius: 24px;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    @media (max-width: 600px) {
        .upcoming-content {
            padding: 0px;
        }
    }

    @media (max-width: 400px) {
        .upcoming-content {
            padding: 0px;
        }
    }

    .upcoming-card-flex {
        display: flex;
        justify-content: space-between;
        margin: 5px 15px 3px 10px;
        flex-wrap: wrap;
    }

    .upcoming-duration {
        display: flex;
        align-items: center;
        background-color: #FFFFFF;
        color: #292929;
        padding: 2px 6px;
        border-radius: 30px;
        font-size: 10px;
        font-weight: bold;
    }

    .upcoming-duration .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
        color: #7dd3e7;
    }

    .upcoming-duration .icon img {
        width: 12px !important;
    }

    .upcoming-from {
        display: flex;
        align-items: center;
        background-color: #4CB9D3;
        border-radius: 30px;
        padding: 3px 7px;
        font-size: 11px;
        color: #FFFFFF;
    }

    .upcoming-from .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
    }

    .upcoming-from .icon img {
        width: 6px !important;
    }

    .upcoming-title {
        font-size: 17px;
        text-transform: uppercase;
        color: white;
        text-align: start;
        margin: 5px 0px 0px 12px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .upcoming-locations {
        font-size: 12px;
        color: white;
        margin: 1px 12px;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .upcoming-price-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 0px 35px 1px 12px !important;
        flex-grow: 1;
    }

    .upcoming-dates {
        display: flex;
        align-items: center;
        background-color: #fff;
        color: #000000ff;
        padding: 5px 8px;
        border-radius: 19px;
        font-size: 8px;
        box-shadow: 0px 2px 4px 0px #00000040, 1px -1px 6px 0px #00000047 inset;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-weight: bold
    }

    .upcoming-dates .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
    }

    .upcoming-dates .icon img {
        width: 16px !important;
    }

    .upcoming-starts {
        font-size: 12px;
        font-weight: 800;
    }

    .upcoming-price {
        font-weight: bold;
        text-align: right;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .upcoming-view {
        position: absolute;
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #fff;
        color: #333;
        border-radius: 18px;
        text-decoration: none;
        font-weight: bold;
        /* box-shadow: 5px 5px 44px 0px #3CADC9B2; */
        font-size: 15px;
        z-index: 10;
        transition: all 0.3s ease;
        padding: 8px 18px;
        display: flex;
        align-items: center;
        justify-content: center;
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

    .upcoming-slider-wrapper {
        position: relative;
        width: 100%;
        padding: 0 0px !important;
        overflow: visible;
        contain: content;
    }

    .upcoming-slider {
        display: flex;
        gap: 0px !important;
        padding: 0px 0px 30px 0px;
        overflow-x: auto;
        overflow-y: visible;
        scroll-snap-type: x mandatory;
        scroll-padding: 15px;
        scrollbar-width: none;
        -ms-overflow-style: none;
        -webkit-overflow-scrolling: touch;
        will-change: scroll-position;
    }

    .upcoming-slider::-webkit-scrollbar {
        display: none;
    }

    /* Drag cursor feedback */
    /* .upcoming-slider {
        cursor: grab;
    }

    .upcoming-slider.dragging {
        cursor: grabbing;
    } */

    .upcoming-slider-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: #fff;
        border: none;
        color: #4CB9D3;
        font-size: 1.5rem;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        cursor: pointer;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s;
    }

    .upcoming-slider-arrow.left {
        left: 0;
    }

    .upcoming-slider-arrow.right {
        right: 0;
    }

    .upcoming-slider-arrow:disabled {
        opacity: 0.4;
        cursor: not-allowed;
    }

    @media (max-width: 900px) {
        .upcoming-container {
            padding: 0 10px;
        }

        .upcoming-card {
            width: 320px;
            min-width: 320px;
            max-width: 320px;
            height: 330px;
        }

        .upcoming-image {
            height: 180px;
        }

        .upcoming-title {
            font-size: 16px;
        }

        .upcoming-locations {
            font-size: 11px;
        }

        .upcoming-price-section {
            flex-direction: row;
            gap: 10px;
        }

        .upcoming-slider-wrapper {
            padding: 0 32px;
        }

        .upcoming-view {
            bottom: -18px;
        }
    }

    @media (max-width: 600px) {
        .upcoming-container {
            padding: 0 5px;
        }

        .upcoming-tab-content {
            margin-bottom: 24px;
        }

        .upcoming-slider-wrapper {
            padding: 0;
        }

        .upcoming-slider {
            -webkit-overflow-scrolling: touch;
        }

        .upcoming-card {
            width: 350px;
            min-width: 320px !important;
            max-width: 150px;
            height: 325px !important;
            margin: 0;
            scroll-snap-align: center;
        }

        .upcoming-title {
            font-size: 14px;
        }

        .upcoming-locations {
            font-size: 10px;
        }

        .upcoming-price-section {
            margin: 0px 18px 10px 12px;
            gap: 8px;
            padding: auto;
        }

        .upcoming-dates {
            font-size: 7px;
            padding: 4px 6px;
            max-width: 60%;
        }

        .upcoming-starts {
            font-size: 10px;
        }

        .upcoming-price {
            font-size: 16px;
        }

        .upcoming-view {
            width: 110px;
            height: 36px;
            font-size: 13px;
            padding: 6px 12px;
            bottom: -18px;
        }

        .upcoming-header {
            font-size: 1.1rem;
            margin: 25px 0 35px;
        }

        .upcoming-header-icon {
            font-size: 22px;
        }

        .upcoming-slider-arrow {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }

        .upcoming-slider-arrow.left {
            left: 5px;
        }

        .upcoming-slider-arrow.right {
            right: 5px;
        }
    }

    @media (max-width: 400px) {
        .upcoming-slider {}

        .upcoming-card {
            width: calc(92vw - 16px);
            min-width: calc(92vw - 16px);
            max-width: calc(92vw - 16px);
            height: 280px;
        }

        .upcoming-title {
            font-size: 13px;
            margin: 10px 12px 0px 12px;
        }

        .upcoming-locations {
            font-size: 9px;
            margin: 0px 12px 0px 12px;
        }

        .upcoming-dates {
            font-size: 6px;
            padding: 3px 5px;
            max-width: 65%;
        }

        .upcoming-starts {
            font-size: 9px;
        }

        .upcoming-price {
            font-size: 14px;
        }

        .upcoming-view {
            width: 100px;
            height: 32px;
            font-size: 12px;
            padding: 5px 10px;
            bottom: -16px;
        }

        .upcoming-slider-wrapper {
            padding: 0;
        }
    }
</style>

<div class="upcoming-container">
    <h2 class="upcoming-header head bbb">
        <i class="fa-solid fa-calendar-days upcoming-header-icon"></i>
        Upcoming Group Trips
    </h2>
    <!-- Tab -->
    <div class="upcoming-tabs" id="upcoming-tabs">
        <!-- <button class="upcoming-tab-btn " data-tab="">
                <span class="tab-icon"><i class="fa-solid fa-cloud-sun"></i></span> August
            </button> -->
        <button class="upcoming-tab-btn " data-tab="sep">
            <span class="tab-icon"><i class="fa-solid fa-cloud-sun-rain"></i></span> September
        </button>
        <button class="upcoming-tab-btn active" data-tab="oct">
            <span class="tab-icon"><i class="fa-solid fa-cloud-showers-heavy"></i></span> October
        </button>
        <button class="upcoming-tab-btn" data-tab="nov">
            <span class="tab-icon"><i class="fa-solid fa-cloud-bolt"></i></span> November
        </button>
        <button class="upcoming-tab-btn" data-tab="dec">
            <span class="tab-icon"><i class="fa-solid fa-cloud-sun"></i></span> December
        </button>
        <button class="upcoming-tab-btn" data-tab="jan">
            <span class="tab-icon"><i class="fa-solid fa-snowflake"></i></span> January
        </button>
        <button class="upcoming-tab-btn" data-tab="feb">
            <span class="tab-icon"><i class="fa-solid fa-heart"></i></span> February
        </button>
    </div>
    <style>
        @media (max-width: 600px) {
            .tab-icon {
                display: none !important;
            }
        }
    </style>
    <!-- August Tab Content -->
    <div class="upcoming-tab-content " id="tab-august">
        <div class="upcoming-slider-wrapper">
            <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="upcoming-slider" id="upcoming-slider-august">
                <!-- Pondi Dive-in Card -->
                <div class="upcoming-card" style="cursor: pointer;">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-3.avif" alt="Pondi Dive-in">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>2D/1N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Direct, Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Pondi Dive-in</h1>
                        <p class="upcoming-locations">Pondicherry</p>
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
                        <span class="upcoming-view" style="pointer-events: none;">View Trip</span>
                    </div>
                </div>
                <!-- Valley of Flowers Trek Card -->
                <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-1.avif" alt="Valley of Flowers">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>5D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>Ex: Rishikesh</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Valley of Flowers Trek</h1>
                        <p class="upcoming-locations">Rishikesh, Joshimath, Pulna</p>
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
                <!-- Sri Lanka Card -->
                <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-2.avif" alt="Sri Lanka">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Colombo</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Sri Lanka</h1>
                        <p class="upcoming-locations">Sigiriya, Kandy, Ella, Galle, Bentota</p>
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
                <!-- Varkala Card -->
                <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-4.avif" alt="Varkala">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai/Trivandrum</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Varkala</h1>
                        <p class="upcoming-locations">Chennai - Trivandrum</p>
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
                <!-- Munnar with Kolukkumalai Card -->
                <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/kolukkumalai-img/2.jpg" alt="Munnar with Kolukkumalai">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Munnar with Kolukkumalai</h1>
                        <p class="upcoming-locations">Munnar</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 6, 19, 26</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price munnar-price"></div>
                            </div>
                        </div>
                        <a href="kolukkumalai-trek.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
                <!-- Andaman Island Hopping Card -->
                <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="https://roamers.in/assets/img/backpacking/Andaman%20hoppers.jpg"
                                alt="Andaman Island Hopping">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Port Blair</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Andaman Island Hopping</h1>
                        <p class="upcoming-locations">Port Blair, Ross Island, Havelock, Neil</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Customise it!</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price andaman-price"></div>
                            </div>
                        </div>
                        <a href="andaman.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
            </div>
            <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
    <!-- September Tab Content -->
    <div class="upcoming-tab-content " id="tab-sep">
        <div class="upcoming-slider-wrapper">
            <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="upcoming-slider" id="upcoming-slider-sep">
                <!-- Onam Special – Kerala Getaway Card -->
                <div class="upcoming-card" style="cursor:pointer;" onclick="window.open('kerala-onam.php', '_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/kerala-onam/kerala-onam (11).avif" alt="Onam Special – Kerala Getaway">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Onam Special – Kerala Getaway</h1>
                        <p class="upcoming-locations">Munnar , Alappuzha</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 4</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹8499</div>
                            </div>
                        </div>
                        <a href="kerala-onam.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
                <!-- Pondi Dive-in Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('pondicherry.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-3.avif" alt="Pondi Dive-in">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>2D/1N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Direct, Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Pondi Dive-in</h1>
                        <p class="upcoming-locations">Pondicherry</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 20</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹4,990</div>
                            </div>
                        </div>
                        <a href="pondicherry.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
                <!-- Varkala Card -->
                <div class="upcoming-card" style="cursor: pointer;"
                    onclick="window.open('varkala-grouptrip.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-4.avif" alt="Varkala">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai/Trivandrum</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Varkala</h1>
                        <p class="upcoming-locations">Chennai - Trivandrum</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 12</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹8,990</div>
                            </div>
                        </div>
                        <a href="varkala-grouptrip.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
                <!-- MEJESTIC MEGHALAYA Card -->
                <div class="upcoming-card" style="cursor:pointer" onclick="window.open('meghalaya.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/megalaya/Front%203.jpg" alt="MEJESTIC MEGHALAYA">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>6D/5N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>Ex: Guwahati</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">MAJESTIC MEGHALAYA</h1>
                        <p class="upcoming-locations">Guwahati, Shillong, Cherrapunjee</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 20</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹19,990</div>
                            </div>
                        </div>
                        <a href="meghalaya.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
                <!-- CHIKMAGALUR BACKPACKING Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('chikmagalur.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/Testimnils/chikmagalur.jpg" alt="CHIKMAGALUR BACKPACKING">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai - Bangalore</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">CHIKMAGALUR BAGPACKING</h1>
                        <p class="upcoming-locations">Chikmagalur, Z point, Hebbe Falls</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 6</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹7,990</div>
                            </div>
                        </div>
                        <a href="chikmagalur.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
                <!-- Munnar with Kolukkumalai Card -->
                <div class="upcoming-card" style="cursor: pointer;"
                    onclick="window.open('kolukkumalai-trek.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/kolukkumalai-img/2.jpg" alt="Munnar with Kolukkumalai">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Munnar with Kolukkumalai</h1>
                        <p class="upcoming-locations">Munnar</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 26</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price munnar-price"></div>
                            </div>
                        </div>
                        <a href="kolukkumalai-trek.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
                <!-- Sri Lanka Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('srilanka.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-2.avif" alt="Sri Lanka">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Colombo</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Sri Lanka</h1>
                        <p class="upcoming-locations">Sigiriya, Kandy, Ella, Galle, Bentota</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 6</span>
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
            <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
    <!-- Oct Tab Content  -->
    <div class="upcoming-tab-content active" id="tab-oct">
        <div class="upcoming-slider-wrapper">
            <!-- Left Arrow Button -->
            <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="upcoming-slider" id="upcoming-slider-sep">

                <!-- Munnar with Kolukkumalai Card -->
                <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets\img\kolukkumalai-img\2.jpg" alt="Varkala">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Munnar with Kolukkumalai</h1>
                        <p class="upcoming-locations">Munnar</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 26</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price munnar-price"></div>
                            </div>
                        </div>
                        <a href="kolukkumalai-trek.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>

                <!-- CHIKMAGALUR BACKPACKING Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('chikmagalur.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/Testimnils/chikmagalur.jpg" alt="CHIKMAGALUR BACKPACKING">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai - Bangalore</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">CHIKMAGALUR BAGPACKING</h1>
                        <p class="upcoming-locations">Chikmagalur, Z point, Hebbe Falls</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 6</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹7,990</div>
                            </div>
                        </div>
                        <a href="chikmagalur.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>

                <!-- Andaman Island Hopping Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('andaman.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="https://roamers.in/assets/img/backpacking/Andaman%20hoppers.jpg"
                                alt="Andaman Island Hopping">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Port Blair</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Andaman Island Hopping</h1>
                        <p class="upcoming-locations">Port Blair, Ross Island, Havelock, Neil</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text"></span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price andaman-price"></div>
                            </div>
                        </div>
                        <a href="andaman.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>

                <!-- Kodaikanal -->
                <div class="upcoming-card" style="cursor:pointer" onclick="window.open('kodaikanal1.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/kodaikanal/Kodai.jpg" alt="Sri Lanka">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">KODAIKANAL BACKPACKING </h1>
                        <p class="upcoming-locations">Kodaikanal , Vattakanal , Poombarai</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Oct 01</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price kodaikanal-price">₹</div>
                            </div>
                        </div>
                        <a href="kodaikanal1.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>

                <!-- MEJESTIC MEGHALAYA Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('meghalaya.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/megalaya/Front%203.jpg" alt="MEJESTIC MEGHALAYA">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>6D/5N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>Ex: Guwahati</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">MAJESTIC MEGHALAYA</h1>
                        <p class="upcoming-locations">Guwahati, Shillong, Cherrapunjee</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 20</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹19,990</div>
                            </div>
                        </div>
                        <a href="meghalaya.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>

                <!-- Pondi Dive-in Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('pondicherry.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-3.avif" alt="Pondi Dive-in">
                        </div>
                        <div class="upcoming-card-flex">
                            <!-- Duration -->
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>2D/1N
                            </div>
                            <!-- From Location -->
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Direct, Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Pondi Dive-in</h1>
                        <p class="upcoming-locations">Pondicherry</p>
                        <div class="upcoming-price-section">
                            <!-- Dates -->
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 20</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹4,990</div>
                            </div>
                        </div>
                        <a href="pondicherry.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>

                <!-- Sri Lanka Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('srilanka.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-2.avif" alt="Sri Lanka">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Colombo</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Sri Lanka</h1>
                        <p class="upcoming-locations">Sigiriya, Kandy, Ella, Galle, Bentota</p>
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

                <!-- Wayanad Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('wayanad.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/optimized-images/wayand-trip/upcoming-group-trips-cover.avif"
                                alt="Sri Lanka">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Wonders of Wayanad</h1>
                        <p class="upcoming-locations">Wayanad</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text"></span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹8,990</div>
                            </div>
                        </div>
                        <a href="wayanad.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>

            </div>
            <!-- Right Arrow Button -->
            <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
    <!-- Nov Tab Content -->
    <div class="upcoming-tab-content" id="tab-nov">
        <div class="upcoming-slider-wrapper">
            <!-- Left Arrow Button -->
            <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="upcoming-slider" id="upcoming-slider-sep">
                <!-- Onam Special – Kerala Getaway Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/kerala-onam/kerala-onam (11).avif" alt="Varkala">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Chennai</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">Onam Special – Kerala Getaway</h1>
                            <p class="upcoming-locations">Munnar , Alappuzha</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 4</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price ">₹8499</div>
                                </div>
                            </div>
                            <a href="kerala-onam.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->

                <!-- Munnar with Kolukkumalai Card -->
                <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets\img\kolukkumalai-img\2.jpg" alt="Varkala">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Munnar with Kolukkumalai</h1>
                        <p class="upcoming-locations">Munnar</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 26</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price munnar-price"></div>
                            </div>
                        </div>
                        <a href="kolukkumalai-trek.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>

                <!-- CHIKMAGALUR BACKPACKING Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('chikmagalur.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/Testimnils/chikmagalur.jpg" alt="CHIKMAGALUR BACKPACKING">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai - Bangalore</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">CHIKMAGALUR BAGPACKING</h1>
                        <p class="upcoming-locations">Chikmagalur, Z point, Hebbe Falls</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 6</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹7,990</div>
                            </div>
                        </div>
                        <a href="chikmagalur.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>

                <!-- Andaman Island Hopping Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('andaman.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="https://roamers.in/assets/img/backpacking/Andaman%20hoppers.jpg"
                                alt="Andaman Island Hopping">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Port Blair</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Andaman Island Hopping</h1>
                        <p class="upcoming-locations">Port Blair, Ross Island, Havelock, Neil</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text"></span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price andaman-price"></div>
                            </div>
                        </div>
                        <a href="andaman.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
                <!-- MEJESTIC MEGHALAYA Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('meghalaya.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/megalaya/Front%203.jpg" alt="MEJESTIC MEGHALAYA">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>6D/5N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>Ex: Guwahati</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">MAJESTIC MEGHALAYA</h1>
                        <p class="upcoming-locations">Guwahati, Shillong, Cherrapunjee</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 20</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹19,990</div>
                            </div>
                        </div>
                        <a href="meghalaya.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
                <!-- Sri Lanka Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('srilanka.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-2.avif" alt="Sri Lanka">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Colombo</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Sri Lanka</h1>
                        <p class="upcoming-locations">Sigiriya, Kandy, Ella, Galle, Bentota</p>
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
                <!-- Pondi Dive-in Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('pondicherry.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-3.avif" alt="Pondi Dive-in">
                        </div>
                        <div class="upcoming-card-flex">
                            <!-- Duration -->
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>2D/1N
                            </div>
                            <!-- From Location -->
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Direct, Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Pondi Dive-in</h1>
                        <p class="upcoming-locations">Pondicherry</p>
                        <div class="upcoming-price-section">
                            <!-- Dates -->
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 20</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹4,990</div>
                            </div>
                        </div>
                        <a href="pondicherry.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
                <!-- Varkala Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/valley-of-flowers/avif/img-4.avif" alt="Varkala">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Chennai/Trivandrum</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">Varkala</h1>
                            <p class="upcoming-locations">Chennai - Trivandrum</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 12</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price">₹8,990</div>
                                </div>
                            </div>
                            <a href="varkala-grouptrip.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- Majestic Meghalaya Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/megalaya/Front%203.jpg" alt="Valley of Flowers">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>6D/5N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>Ex: Guwahati </span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">MEJESTIC MEGHALAYA</h1>
                            <p class="upcoming-locations">Guwahati, Shillong, Cherrapunjee</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 20</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price">₹19,990</div>
                                </div>
                            </div>
                            <a href="meghalaya.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- Chikmagalur Backpacking Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/Testimnils/chikmagalur.jpg" alt="Sri Lanka">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Chennai - Bangalore</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">CHIKMAGALUR BAGPACKING </h1>
                            <p class="upcoming-locations">Chikmagalur, Z point, Hebbe Falls</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 6</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price">₹7,990</div>
                                </div>
                            </div>
                            <a href="chikmagalur.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- Munnar with Kolukkumalai Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets\img\kolukkumalai-img\2.jpg" alt="Varkala">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Chennai</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">Munnar with Kolukkumalai</h1>
                            <p class="upcoming-locations">Munnar</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 26</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price munnar-price"></div>
                                </div>
                            </div>
                            <a href="kolukkumalai-trek.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- Sri Lanka Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/valley-of-flowers/avif/img-2.avif" alt="Sri Lanka">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Colombo</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">Sri Lanka</h1>
                            <p class="upcoming-locations">Sigiriya, Kandy, Ella, Galle, Bentota</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 6</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price">₹43,999</div>
                                </div>
                            </div>
                            <a href="srilanka.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
            </div>
            <!-- Right Arrow Button -->
            <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
    <!-- Dec Tab Content -->
    <div class="upcoming-tab-content" id="tab-dec">
        <div class="upcoming-slider-wrapper">
            <!-- Left Arrow Button -->
            <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="upcoming-slider" id="upcoming-slider-sep">
                <!-- Onam Special – Kerala Getaway Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/kerala-onam/kerala-onam (11).avif" alt="Varkala">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Chennai</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">Onam Special – Kerala Getaway</h1>
                            <p class="upcoming-locations">Munnar , Alappuzha</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 4</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price ">₹8499</div>
                                </div>
                            </div>
                            <a href="kerala-onam.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- CHIKMAGALUR BACKPACKING Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('chikmagalur.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/Testimnils/chikmagalur.jpg" alt="CHIKMAGALUR BACKPACKING">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai - Bangalore</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">CHIKMAGALUR BAGPACKING</h1>
                        <p class="upcoming-locations">Chikmagalur, Z point, Hebbe Falls</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 6</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹7,990</div>
                            </div>
                        </div>
                        <a href="chikmagalur.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
                <!-- Pondi Dive-in Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('pondicherry.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-3.avif" alt="Pondi Dive-in">
                        </div>
                        <div class="upcoming-card-flex">
                            <!-- Duration -->
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>2D/1N
                            </div>
                            <!-- From Location -->
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Direct, Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Pondi Dive-in</h1>
                        <p class="upcoming-locations">Pondicherry</p>
                        <div class="upcoming-price-section">
                            <!-- Dates -->
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 20</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹4,990</div>
                            </div>
                        </div>
                        <a href="pondicherry.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>

                <!-- Munnar with Kolukkumalai Card -->
                <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets\img\kolukkumalai-img\2.jpg" alt="Varkala">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Munnar with Kolukkumalai</h1>
                        <p class="upcoming-locations">Munnar</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 26</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price munnar-price"></div>
                            </div>
                        </div>
                        <a href="kolukkumalai-trek.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>

                <!-- Sri Lanka Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('srilanka.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-2.avif" alt="Sri Lanka">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Colombo</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Sri Lanka</h1>
                        <p class="upcoming-locations">Sigiriya, Kandy, Ella, Galle, Bentota</p>
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
                <!-- Andaman Island Hopping Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('andaman.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="https://roamers.in/assets/img/backpacking/Andaman%20hoppers.jpg"
                                alt="Andaman Island Hopping">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Port Blair</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Andaman Island Hopping</h1>
                        <p class="upcoming-locations">Port Blair, Ross Island, Havelock, Neil</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text"></span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price andaman-price"></div>
                            </div>
                        </div>
                        <a href="andaman.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
                <!-- MEJESTIC MEGHALAYA Card -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('meghalaya.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/megalaya/Front%203.jpg" alt="MEJESTIC MEGHALAYA">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>6D/5N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>Ex: Guwahati</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">MAJESTIC MEGHALAYA</h1>
                        <p class="upcoming-locations">Guwahati, Shillong, Cherrapunjee</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 20</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹19,990</div>
                            </div>
                        </div>
                        <a href="meghalaya.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
                <!-- Varkala Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/valley-of-flowers/avif/img-4.avif" alt="Varkala">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Chennai/Trivandrum</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">Varkala</h1>
                            <p class="upcoming-locations">Chennai - Trivandrum</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 12</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price">₹8,990</div>
                                </div>
                            </div>
                            <a href="varkala-grouptrip.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- Majestic Meghalaya Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/megalaya/Front%203.jpg" alt="Valley of Flowers">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>6D/5N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>Ex: Guwahati </span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">MEJESTIC MEGHALAYA</h1>
                            <p class="upcoming-locations">Guwahati, Shillong, Cherrapunjee</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 20</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price">₹19,990</div>
                                </div>
                            </div>
                            <a href="meghalaya.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- Chikmagalur Backpacking Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/Testimnils/chikmagalur.jpg" alt="Sri Lanka">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Chennai - Bangalore</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">CHIKMAGALUR BAGPACKING </h1>
                            <p class="upcoming-locations">Chikmagalur, Z point, Hebbe Falls</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 6</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price">₹7,990</div>
                                </div>
                            </div>
                            <a href="chikmagalur.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- Munnar with Kolukkumalai Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets\img\kolukkumalai-img\2.jpg" alt="Varkala">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Chennai</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">Munnar with Kolukkumalai</h1>
                            <p class="upcoming-locations">Munnar</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 26</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price munnar-price"></div>
                                </div>
                            </div>
                            <a href="kolukkumalai-trek.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- Sri Lanka Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/valley-of-flowers/avif/img-2.avif" alt="Sri Lanka">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Colombo</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">Sri Lanka</h1>
                            <p class="upcoming-locations">Sigiriya, Kandy, Ella, Galle, Bentota</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 6</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price">₹43,999</div>
                                </div>
                            </div>
                            <a href="srilanka.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
            </div>
            <!-- Right Arrow Button -->
            <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
    <!-- Jan Tab Content -->
    <div class="upcoming-tab-content" id="tab-jan">
        <div class="upcoming-slider-wrapper">
            <!-- Left Arrow Button -->
            <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="upcoming-slider" id="upcoming-slider-sep">
                <!-- Onam Special – Kerala Getaway Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/kerala-onam/kerala-onam (11).avif" alt="Varkala">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Chennai</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">Onam Special – Kerala Getaway</h1>
                            <p class="upcoming-locations">Munnar , Alappuzha</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 4</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price ">₹8499</div>
                                </div>
                            </div>
                            <a href="kerala-onam.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- Pondi Dive-in Card -->
                <!-- <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-3.avif" alt="Pondi Dive-in">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>2D/1N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Direct, Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Pondi Dive-in</h1>
                        <p class="upcoming-locations">Pondicherry</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 20</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹4,990</div>
                            </div>
                        </div>
                        <a href="pondicherry.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div> -->
                <!-- Sri Lanka Card -->
                <!-- <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-2.avif" alt="Sri Lanka">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Colombo</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Sri Lanka</h1>
                        <p class="upcoming-locations">Sigiriya, Kandy, Ella, Galle, Bentota</p>
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
                </div> -->
                <!-- Andaman Island Hopping Card -->
                <!-- <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="https://roamers.in/assets/img/backpacking/Andaman%20hoppers.jpg"
                                alt="Andaman Island Hopping">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Port Blair</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Andaman Island Hopping</h1>
                        <p class="upcoming-locations">Port Blair, Ross Island, Havelock, Neil</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text"></span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price andaman-price"></div>
                            </div>
                        </div>
                        <a href="andaman.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div> -->
                <!-- MEJESTIC MEGHALAYA Card -->

                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('meghalaya.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/megalaya/Front%203.jpg" alt="MEJESTIC MEGHALAYA">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>6D/5N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>Ex: Guwahati</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">MAJESTIC MEGHALAYA</h1>
                        <p class="upcoming-locations">Guwahati, Shillong, Cherrapunjee</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 20</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹19,990</div>
                            </div>
                        </div>
                        <a href="meghalaya.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>

                <!-- Varkala Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/valley-of-flowers/avif/img-4.avif" alt="Varkala">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Chennai/Trivandrum</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">Varkala</h1>
                            <p class="upcoming-locations">Chennai - Trivandrum</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 12</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price">₹8,990</div>
                                </div>
                            </div>
                            <a href="varkala-grouptrip.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- Majestic Meghalaya Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/megalaya/Front%203.jpg" alt="Valley of Flowers">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>6D/5N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>Ex: Guwahati </span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">MEJESTIC MEGHALAYA</h1>
                            <p class="upcoming-locations">Guwahati, Shillong, Cherrapunjee</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 20</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price">₹19,990</div>
                                </div>
                            </div>
                            <a href="meghalaya.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- Chikmagalur Backpacking Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/Testimnils/chikmagalur.jpg" alt="Sri Lanka">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Chennai - Bangalore</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">CHIKMAGALUR BAGPACKING </h1>
                            <p class="upcoming-locations">Chikmagalur, Z point, Hebbe Falls</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 6</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price">₹7,990</div>
                                </div>
                            </div>
                            <a href="chikmagalur.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- Munnar with Kolukkumalai Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets\img\kolukkumalai-img\2.jpg" alt="Varkala">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Chennai</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">Munnar with Kolukkumalai</h1>
                            <p class="upcoming-locations">Munnar</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 26</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price munnar-price"></div>
                                </div>
                            </div>
                            <a href="kolukkumalai-trek.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- Sri Lanka Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/valley-of-flowers/avif/img-2.avif" alt="Sri Lanka">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Colombo</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">Sri Lanka</h1>
                            <p class="upcoming-locations">Sigiriya, Kandy, Ella, Galle, Bentota</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 6</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price">₹43,999</div>
                                </div>
                            </div>
                            <a href="srilanka.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
            </div>
            <!-- Right Arrow Button -->
            <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
    <!-- Feb Tab Content -->
    <div class="upcoming-tab-content" id="tab-feb">
        <div class="upcoming-slider-wrapper">
            <!-- Left Arrow Button -->
            <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="upcoming-slider" id="upcoming-slider-sep">
                <!-- Onam Special – Kerala Getaway Card -->
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/kerala-onam/kerala-onam (11).avif" alt="Varkala">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Chennai</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">Onam Special – Kerala Getaway</h1>
                            <p class="upcoming-locations">Munnar , Alappuzha</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 4</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price ">₹8499</div>
                                </div>
                            </div>
                            <a href="kerala-onam.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- Pondi Dive-in Card -->
                <!-- <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-3.avif" alt="Pondi Dive-in">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>2D/1N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Direct, Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Pondi Dive-in</h1>
                        <p class="upcoming-locations">Pondicherry</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 20</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹4,990</div>
                            </div>
                        </div>
                        <a href="pondicherry.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div> -->
                <!-- <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-2.avif" alt="Sri Lanka">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Colombo</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Sri Lanka</h1>
                        <p class="upcoming-locations">Sigiriya, Kandy, Ella, Galle, Bentota</p>
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
                </div> -->
                <!-- <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="https://roamers.in/assets/img/backpacking/Andaman%20hoppers.jpg"
                                alt="Andaman Island Hopping">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Port Blair</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Andaman Island Hopping</h1>
                        <p class="upcoming-locations">Port Blair, Ross Island, Havelock, Neil</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text"></span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price andaman-price"></div>
                            </div>
                        </div>
                        <a href="andaman.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div> -->
                <div class="upcoming-card" style="cursor: pointer;" onclick="window.open('meghalaya.php','_blank')">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/megalaya/Front%203.jpg" alt="MEJESTIC MEGHALAYA">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>6D/5N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>Ex: Guwahati</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">MAJESTIC MEGHALAYA</h1>
                        <p class="upcoming-locations">Guwahati, Shillong, Cherrapunjee</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 20</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹19,990</div>
                            </div>
                        </div>
                        <a href="meghalaya.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div>
                <!-- <div class="upcoming-card">
                        <div class="upcoming-content">
                            <div class="upcoming-image">
                                <img src="assets/img/valley-of-flowers/avif/img-4.avif" alt="Varkala">
                            </div>
                            <div class="upcoming-card-flex">
                                <div class="upcoming-duration">
                                    <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                                </div>
                                <div class="upcoming-from">
                                    <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                    <span>EX: Chennai/Trivandrum</span>
                                </div>
                            </div>
                            <h1 class="upcoming-title">Varkala</h1>
                            <p class="upcoming-locations">Chennai - Trivandrum</p>
                            <div class="upcoming-price-section">
                                <div class="upcoming-dates">
                                    <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                    <span class="upcoming-dates-text">Sep 12</span>
                                </div>
                                <div>
                                    <div class="upcoming-starts">Starts</div>
                                    <div class="upcoming-price">₹8,990</div>
                                </div>
                            </div>
                            <a href="varkala-grouptrip.php" target="_blank" class="upcoming-view">View Trip</a>
                        </div>
                    </div> -->
                <!-- <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/megalaya/Front%203.jpg" alt="Valley of Flowers">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>6D/5N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>Ex: Guwahati </span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">MEJESTIC MEGHALAYA</h1>
                        <p class="upcoming-locations">Guwahati, Shillong, Cherrapunjee</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 20</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹19,990</div>
                            </div>
                        </div>
                        <a href="meghalaya.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div> -->
                <!-- <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/Testimnils/chikmagalur.jpg" alt="Sri Lanka">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai - Bangalore</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">CHIKMAGALUR BAGPACKING </h1>
                        <p class="upcoming-locations">Chikmagalur, Z point, Hebbe Falls</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 6</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹7,990</div>
                            </div>
                        </div>
                        <a href="chikmagalur.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div> -->
                <!-- <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets\img\kolukkumalai-img\2.jpg" alt="Varkala">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>3D/2N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Chennai</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Munnar with Kolukkumalai</h1>
                        <p class="upcoming-locations">Munnar</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 26</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price munnar-price"></div>
                            </div>
                        </div>
                        <a href="kolukkumalai-trek.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div> -->
                <!-- <div class="upcoming-card">
                    <div class="upcoming-content">
                        <div class="upcoming-image">
                            <img src="assets/img/valley-of-flowers/avif/img-2.avif" alt="Sri Lanka">
                        </div>
                        <div class="upcoming-card-flex">
                            <div class="upcoming-duration">
                                <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>7D/6N
                            </div>
                            <div class="upcoming-from">
                                <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                <span>EX: Colombo</span>
                            </div>
                        </div>
                        <h1 class="upcoming-title">Sri Lanka</h1>
                        <p class="upcoming-locations">Sigiriya, Kandy, Ella, Galle, Bentota</p>
                        <div class="upcoming-price-section">
                            <div class="upcoming-dates">
                                <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                <span class="upcoming-dates-text">Sep 6</span>
                            </div>
                            <div>
                                <div class="upcoming-starts">Starts</div>
                                <div class="upcoming-price">₹43,999</div>
                            </div>
                        </div>
                        <a href="srilanka.php" target="_blank" class="upcoming-view">View Trip</a>
                    </div>
                </div> -->
            </div>
            <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <!-- <div style="display: flex; justify-content: center; align-items: center;">
        <a href="trips.php"> <button class="upcoming-tab-btn" data-tab="">
                View All Trips
            </button></a>
    </div> -->
    <div style="display: flex; justify-content: center; margin: 30px 0;">
        <a href="trips.php"><button class="btn btn-primary" style="
                padding: 10px 32px;
                border-radius: 30px;
                font-size: 1.1rem;
                font-weight: 700;
                background: linear-gradient(90deg,#4CB9D3 0%, #32EEE7 100%);
                color: #fff;
                border: none;
                box-shadow: 0 4px 18px 0 rgba(76, 185, 211, 0.14);
                transition: background 0.2s, color 0.2s, box-shadow 0.2s;
            " onmouseover="this.style.background='linear-gradient(90deg,#32EEE7 0%, #32EEE7 100%)';this.style.color='#fff';"
                onmouseout="this.style.background='linear-gradient(90deg,#4CB9D3 0%, #32EEE7 100%)';this.style.color='#fff';">
                View More
            </button></a>
    </div>

</div>

<script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabBtns = document.querySelectorAll('.upcoming-tab-btn');
        const tabContents = document.querySelectorAll('.upcoming-tab-content');

        // Tab switching (only August is active)
        tabBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const tab = btn.getAttribute('data-tab');
                if (!tab) {
                    // Prevent multiple toasts
                    if (document.getElementById('coming-soon-toast')) return;
                    const toast = document.createElement('div');
                    toast.id = 'coming-soon-toast';
                    toast.innerText = 'Coming Soon!';
                    toast.style.position = 'fixed';
                    toast.style.top = '80px';
                    toast.style.left = '50%';
                    toast.style.transform = 'translateX(-50%) scale(0.95)';
                    toast.style.background = '#4CB9D3';
                    toast.style.color = '#fff';
                    toast.style.padding = '10px 12px';
                    toast.style.borderRadius = '20px';
                    toast.style.fontWeight = 'bold';
                    toast.style.fontSize = '16px';
                    toast.style.zIndex = 9999;
                    toast.style.boxShadow = '0 2px 12px rgba(0,0,0,0.15)';
                    toast.style.opacity = '0';
                    toast.style.transition = 'opacity 0.35s, transform 0.35s';
                    document.body.appendChild(toast);

                    setTimeout(() => {
                        toast.style.opacity = '1';
                        toast.style.transform = 'translateX(-50%) scale(1)';
                    }, 10);

                    setTimeout(() => {
                        toast.style.opacity = '0';
                        toast.style.transform = 'translateX(-50%) scale(0.95)';
                        setTimeout(() => {
                            if (toast.parentNode) toast.parentNode.removeChild(toast);
                        }, 350);
                    }, 1000);
                    return;
                }

                // Tab switching logic (if more tabs are enabled in future)
                tabBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                tabContents.forEach(tc => tc.classList.remove('active'));
                const content = document.getElementById('tab-' + tab);
                if (content) {
                    content.classList.add('active');
                    // Initialize slider for the newly active tab once
                    setupSlider(
                        '#' + content.id + ' .upcoming-slider-wrapper',
                        '.upcoming-slider',
                        '.upcoming-slider-arrow.left',
                        '.upcoming-slider-arrow.right'
                    );
                    // Center first card on mobile for the active tab
                    const activeSlider = content.querySelector('.upcoming-slider');
                    if (activeSlider && window.innerWidth <= 600) {
                        const cards = Array.from(activeSlider.querySelectorAll('.upcoming-card'));
                        if (cards.length > 0) {
                            const cardLeft = cards[0].offsetLeft;
                            const containerWidth = activeSlider.offsetWidth;
                            const cardWidth = cards[0].offsetWidth;
                            const scrollPosition = cardLeft - (containerWidth - cardWidth) / 2;
                            activeSlider.scrollTo({
                                left: scrollPosition,
                                behavior: 'auto'
                            });
                        }
                    }
                }
            });
        });

        // Slider logic
        function setupSlider(wrapperSelector, sliderSelector, leftArrowSelector, rightArrowSelector) {
            const wrapper = typeof wrapperSelector === 'string' ? document.querySelector(wrapperSelector) : wrapperSelector;
            if (!wrapper || wrapper.dataset.initialized === 'true') return;
            const slider = wrapper.querySelector(sliderSelector);
            const leftArrow = wrapper.querySelector(leftArrowSelector);
            const rightArrow = wrapper.querySelector(rightArrowSelector);
            if (!slider || !leftArrow || !rightArrow) return;
            const cards = Array.from(slider.querySelectorAll('.upcoming-card'));

            function updateArrows() {
                if (!slider) return;
                // Use Math.abs to avoid floating point issues
                leftArrow.disabled = slider.scrollLeft <= 10;
                rightArrow.disabled = slider.scrollLeft + slider.offsetWidth >= slider.scrollWidth - 10;
            }

            function smoothScrollTo(position) {
                slider.scrollTo({
                    left: position,
                    behavior: 'smooth'
                });
            }

            function getCurrentIndex() {
                const center = slider.scrollLeft + slider.offsetWidth / 2;
                let closestIndex = 0;
                let closestDiff = Infinity;
                cards.forEach((card, index) => {
                    const cardCenter = card.offsetLeft + card.offsetWidth / 2;
                    const diff = Math.abs(cardCenter - center);
                    if (diff < closestDiff) {
                        closestDiff = diff;
                        closestIndex = index;
                    }
                });
                return closestIndex;
            }

            function getCenteredPosition(index) {
                const card = cards[index];
                const cardLeft = card.offsetLeft;
                const containerWidth = slider.offsetWidth;
                const cardWidth = card.offsetWidth;
                return cardLeft - (containerWidth - cardWidth) / 2;
            }

            leftArrow.addEventListener('click', function() {
                const currentIndex = getCurrentIndex();
                const targetIndex = Math.max(0, currentIndex - 1);
                const scrollPosition = getCenteredPosition(targetIndex);
                smoothScrollTo(scrollPosition);
            });

            rightArrow.addEventListener('click', function() {
                const currentIndex = getCurrentIndex();
                const targetIndex = Math.min(cards.length - 1, currentIndex + 1);
                const scrollPosition = getCenteredPosition(targetIndex);
                smoothScrollTo(scrollPosition);
            });

            slider.addEventListener('scroll', updateArrows);
            window.addEventListener('resize', updateArrows);
            updateArrows();
            wrapper.dataset.initialized = 'true';
        }

        setupSlider(
            '.upcoming-tab-content.active .upcoming-slider-wrapper',
            '.upcoming-slider',
            '.upcoming-slider-arrow.left',
            '.upcoming-slider-arrow.right'
        );

        // Drag-to-scroll for sliders (mouse + touch)
        function enableDragScroll(slider) {
            let isDown = false;
            let startX = 0;
            let scrollLeftStart = 0;
            let isDragging = false;
            let lastX = 0;
            let lastTime = 0;
            let velocity = 0;
            let momentumId = 0;

            // For vertical scroll fix
            let startY = 0;
            let scrollTopStart = 0;
            let verticalScroll = false;

            function stopMomentum() {
                if (momentumId) {
                    cancelAnimationFrame(momentumId);
                    momentumId = 0;
                }
            }

            function onPointerDown(clientX, clientY) {
                isDown = true;
                isDragging = false;
                startX = clientX;
                startY = clientY !== undefined ? clientY : 0;
                lastX = clientX;
                lastTime = performance.now();
                velocity = 0;
                scrollLeftStart = slider.scrollLeft;
                scrollTopStart = slider.scrollTop;
                verticalScroll = false;
                slider.classList.add('dragging');
                stopMomentum();
            }

            function onPointerMove(clientX, clientY, evt) {
                if (!isDown) return;
                const now = performance.now();
                const deltaX = clientX - startX;
                const deltaY = clientY !== undefined ? clientY - startY : 0;

                // If vertical movement is more than horizontal, allow vertical scroll
                if (!verticalScroll && Math.abs(deltaY) > Math.abs(deltaX) && Math.abs(deltaY) > 5) {
                    verticalScroll = true;
                }

                if (verticalScroll) {
                    // Let the event bubble for vertical scroll
                    isDown = false;
                    slider.classList.remove('dragging');
                    return;
                }

                const movedSinceLast = clientX - lastX;
                const dt = Math.max(1, now - lastTime);
                if (Math.abs(deltaX) > 3) {
                    isDragging = true;
                }
                slider.scrollLeft = scrollLeftStart - deltaX;
                velocity = (movedSinceLast) / dt; // px per ms
                lastX = clientX;
                lastTime = now;
                if (evt && evt.cancelable) evt.preventDefault();
            }

            function onPointerUp() {
                isDown = false;
                slider.classList.remove('dragging');
                // Apply momentum only if we were dragging and not vertical scroll
                if (!isDragging || verticalScroll) return;
                const decay = 0.95; // friction
                const minVelocity = 0.02; // px/ms threshold
                let currentVelocity = velocity * 16; // approx px per frame (16ms)
                function step() {
                    // Stop if velocity is low
                    if (Math.abs(currentVelocity) < minVelocity * 16) {
                        momentumId = 0;
                        return;
                    }
                    slider.scrollLeft -= currentVelocity;
                    currentVelocity *= decay;
                    momentumId = requestAnimationFrame(step);
                }
                momentumId = requestAnimationFrame(step);
            }

            // Mouse
            slider.addEventListener('mousedown', (e) => {
                // Only left button
                if (e.button !== 0) return;
                onPointerDown(e.clientX, e.clientY);
            });
            window.addEventListener('mousemove', (e) => onPointerMove(e.clientX, e.clientY, e));
            window.addEventListener('mouseup', onPointerUp);

            // Touch
            slider.addEventListener('touchstart', (e) => {
                if (!e.touches || e.touches.length === 0) return;
                onPointerDown(e.touches[0].clientX, e.touches[0].clientY);
            }, {
                passive: false // passive false so preventDefault works
            });
            slider.addEventListener('touchmove', (e) => {
                if (!e.touches || e.touches.length === 0) return;
                onPointerMove(e.touches[0].clientX, e.touches[0].clientY, e);
            }, {
                passive: false // passive false so preventDefault works
            });
            slider.addEventListener('touchend', onPointerUp, {
                passive: true
            });

            // Prevent link clicks while dragging
            slider.querySelectorAll('a').forEach((link) => {
                link.addEventListener('click', (e) => {
                    if (isDragging) {
                        e.preventDefault();
                        e.stopPropagation();
                    }
                });
            });
        }

        // Only enable drag scroll on desktop, allow native scroll on mobile
        document.querySelectorAll('.upcoming-slider').forEach(slider => {
            if (window.innerWidth > 600) {
                enableDragScroll(slider);
                slider.style.touchAction = 'none';
            } else {
                // On mobile, allow native scrolling
                slider.style.overflowX = 'auto';
                slider.style.webkitOverflowScrolling = 'touch';
                slider.style.touchAction = 'pan-x pan-y';
            }
        });

        // Center first card on mobile
        function scrollToFirstCard() {
            const slider = document.querySelector('.upcoming-slider');
            if (slider && window.innerWidth <= 600) {
                const cards = Array.from(slider.querySelectorAll('.upcoming-card'));
                if (cards.length > 0) {
                    const cardLeft = cards[0].offsetLeft;
                    const containerWidth = slider.offsetWidth;
                    const cardWidth = cards[0].offsetWidth;
                    const scrollPosition = cardLeft - (containerWidth - cardWidth) / 2;
                    slider.scrollTo({
                        left: scrollPosition,
                        behavior: 'auto'
                    });
                }
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
<script src="assets/js/upcoming-dates.js"></script>
<script src="assets/js/price.js"></script>