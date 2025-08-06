<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ooty Travel Package</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Manrope', sans-serif;
        }

        html,
        body {
            overflow-x: hidden;
            max-width: 100%;
        }

        .upcoming-container {
            position: relative;
            max-width: 1700px;
            margin: 0 auto;
            overflow: hidden;
        }

        .upcoming-tabs {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 40px;
            flex-wrap: wrap;
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

        .upcoming-tab-btn.active,
        .upcoming-tab-btn:hover {
            background: #4CB9D3;
            color: #fff;
        }

        .upcoming-tab-content {
            display: none;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: center;
            margin-bottom: 143px;
        }

        .upcoming-tab-content.active {
            display: flex;
        }

        .upcoming-card {
            flex: 0 0 auto;
            width: 350px;
            height: 300px;
            overflow: visible;
            position: relative;
            border: 2px solid;
            border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
            border-radius: 30px;
            background: #fff0;
        }

        .upcoming-image {
            width: 100%;
            height: 230px;
            overflow: visible;
            position: relative;
            border-radius: 24px;
        }

        .upcoming-image img {
            width: 100%;
            height: 95%;
            object-fit: cover;
            padding: 3px;
            border-radius: 24px;
        }

        .upcoming-content {
            background: linear-gradient(180deg, rgba(86, 195, 221, 0) 0%, #56C3DD 100%);
            padding: 1px 1px 8px 1px;
            color: rgb(255, 255, 255);
            position: relative;
            z-index: 1;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            overflow: visible;
            border-radius: 24px;
        }

        .upcoming-card-flex {
            display: flex;
            justify-content: space-between;
            margin: 0px 15px 0px 15px;
            flex-wrap: wrap;
        }

        .upcoming-duration {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #FFFFFF;
            color: #292929;
            padding: 2px 6px 2px 5px;
            border-radius: 30px;
            font-size: 10px;
            font-weight: bold;
        }

        .upcoming-duration .icon {
            display: flex;
            align-items: center;
            font-weight: 800;
            margin-right: 5px;
            color: #7dd3e7;
        }

        .upcoming-duration .icon img {
            width: 12px !important;
        }

        .upcoming-from {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #4CB9D3;
            border-radius: 30px;
            padding: 3px 7px;
        }

        .upcoming-from .icon {
            display: flex;
            align-items: center;
            margin-right: 5px;
        }

        .upcoming-from .icon img {
            width: 6px !important;
        }

        .upcoming-from span {
            color: #FFFFFF;
            font-size: 11px;
        }

        .upcoming-title {
            font-size: 17px;
            text-transform: uppercase;
            color: white;
            text-align: start;
            margin: 18px 15px 0px 18px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .upcoming-locations {
            font-size: 12px;
            color: white;
            margin-bottom: 20px;
            margin: 0px 15px 0px 18px;
        }

        .upcoming-price-section {
            display: flex;
            align-items: center;
            margin-bottom: 100px;
            gap: 171px;
            margin: 0px 5px 1px 17px;
        }

        .upcoming-dates {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            color: #333;
            padding: 5px 8px;
            border-radius: 19px;
            font-size: 8px;
            box-shadow: 0px 2px 4px 0px #00000040;
            box-shadow: 1px -1px 6px 0px #00000047 inset;
        }

        .upcoming-dates .icon {
            display: flex;
            align-items: center;
            margin-right: 5px;
        }

        .upcoming-dates .icon img {
            width: 16px !important;
        }

        .upcoming-dates span[style*="font-weight: 800;"] {
            font-weight: 800;
        }

        .upcoming-starts {
            font-size: 12px;
            text-align: start;
            font-weight: 800;
        }

        .upcoming-price {
            font-weight: bold;
            text-align: right;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .upcoming-view {
            position: absolute;
            bottom: -25px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #fff;
            color: #333;
            border-radius: 18px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 5px 5px 44px 0px #3CADC9B2;
            font-size: 15px;
            z-index: 10;
            transition: all 0.3s ease;
            padding: 8px 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .upcoming-h2 {
            margin: 50px 0px 60px 0px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .upcoming-h2 .fa-calendar-days {
            color: #4CB9D3;
            font-size: 36px;
            vertical-align: middle;
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .upcoming-card {
                width: 450px;
            }

            .upcoming-image {
                height: 280px;
            }

            .upcoming-price-section {
                gap: 40px;
            }

            .upcoming-view {
                width: 180px;
                height: 60px;
                font-size: 18px;
                padding: 8px 20px;
            }
        }

        @media (max-width: 900px) {
            .upcoming-container {
                padding: 30px 10px;
            }

            .upcoming-tab-content {
                gap: 20px;
            }

            .upcoming-card {
                width: 320px;
            }

            .upcoming-image {
                height: 180px;
            }

            .upcoming-title {
                font-size: 18px;
            }

            .upcoming-locations {
                font-size: 13px;
            }

            .upcoming-price-section {
                gap: 15px;
                flex-direction: column;
                align-items: flex-start;
            }

            .upcoming-view {
                width: 140px;
                height: 48px;
                font-size: 15px;
                padding: 6px 10px;
            }
        }

        @media (max-width: 600px) {
            .upcoming-container {
                padding: 10px 0px;
                max-width: 100vw;
                overflow: hidden;
            }

            .upcoming-tab-content {
                gap: 15px;
                flex-direction: column;
                align-items: center;
                margin-bottom: 40px;
            }

            .upcoming-card {
                width: 280px;
                min-width: 280px;
                max-width: 280px;
                margin: 0 5px 20px 0;
                height: 320px;
                min-height: 320px;
            }

            .upcoming-image {
                height: 180px;
            }

            .upcoming-title {
                font-size: 16px;
                margin: 8px 15px 0px 15px;
                line-height: 1.3;
            }

            .upcoming-locations {
                font-size: 11px;
                margin: 0px 15px 5px 17px;
                line-height: 1.4;
            }

            .upcoming-price-section {
                gap: 15px;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
            }

            .upcoming-dates {
                font-size: 8px;
                padding: 5px 8px;
                line-height: 1.3;
                max-width: 60%;
                word-wrap: break-word;
            }

            .upcoming-starts {
                font-size: 11px;
            }

            .upcoming-price {
                font-size: 18px;
            }

            .upcoming-view {
                width: 120px;
                height: 40px;
                font-size: 14px;
                padding: 8px 16px;
                left: 50%;
                right: auto;
                transform: translateX(-50%);
                border-radius: 18px;
                bottom: -20px;
            }

            .upcoming-h2 {
                font-size: 1.1rem !important;
                margin: 25px 0px 35px 0px;
                padding: 0 15px;
            }

            .upcoming-duration,
            .upcoming-from {
                font-size: 10px;
                padding: 3px 6px;
            }
        }

        @media (max-width: 400px) {
            .upcoming-container {
                padding: 8px 0px;
            }

            .upcoming-tab-content {
                margin-bottom: 30px;
            }

            .upcoming-card {
                width: 260px;
                max-width: 369px;
                min-width: 260px;
                margin: 0 5px 15px 0;
                height: 300px;
                min-height: 300px;
            }

            .upcoming-image {
                height: 160px;
            }

            .upcoming-title {
                font-size: 14px;
                line-height: 1.2;
            }

            .upcoming-locations {
                font-size: 10px;
                margin: 0px 12px 4px 15px;
                line-height: 1.3;
            }

            .upcoming-price-section {
                gap: 10px;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
            }

            .upcoming-dates {
                font-size: 7px;
                padding: 4px 6px;
                line-height: 1.2;
                max-width: 65%;
            }

            .upcoming-starts {
                font-size: 10px;
            }

            .upcoming-price {
                font-size: 16px;
            }

            .upcoming-view {
                width: 100px;
                height: 36px;
                font-size: 12px;
                padding: 6px 12px;
            }

            .upcoming-h2 {
                font-size: 1rem !important;
                margin: 20px 0px 30px 0px;
                padding: 0 12px;
            }

            .upcoming-duration,
            .upcoming-from {
                font-size: 9px;
                padding: 2px 5px;
            }
        }

        @media (max-width: 320px) {
            .upcoming-container {
                padding: 5px 0px;
            }

            .upcoming-card {
                width: 240px;
                max-width: 240px;
                min-width: 240px;
                margin: 0 3px 12px 0;
                height: 280px;
                min-height: 280px;
            }

            .upcoming-image {
                height: 140px;
            }

            .upcoming-title {
                font-size: 12px;
                margin: 5px 10px 0px 10px;
                line-height: 1.2;
            }

            .upcoming-locations {
                font-size: 9px;
                margin: 0px 10px 3px 12px;
                line-height: 1.3;
            }

            .upcoming-price-section {
                gap: 10px;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
                padding: 0 10px;
            }

            .upcoming-dates {
                font-size: 6px;
                padding: 3px 5px;
                line-height: 1.2;
                max-width: 70%;
            }

            .upcoming-starts {
                font-size: 9px;
            }

            .upcoming-price {
                font-size: 14px;
            }

            .upcoming-view {
                width: 90px;
                height: 32px;
                font-size: 11px;
                padding: 5px 10px;
            }

            .upcoming-h2 {
                font-size: 0.9rem !important;
                margin: 15px 0px 25px 0px;
                padding: 0 10px;
            }

            .upcoming-duration,
            .upcoming-from {
                font-size: 8px;
                padding: 2px 4px;
            }
        }

        /* Additional responsive classes for dates and other elements */
        .upcoming-header {
            margin: 50px 0px 60px 0px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .upcoming-header-icon {
            color: #4CB9D3;
            font-size: 36px;
            vertical-align: middle;
        }
    </style>
    <!-- Font Awesome for calendar icon (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

    <div class="upcoming-container">
        <h2 class="upcoming-header">
            <i class="fa-solid fa-calendar-days upcoming-header-icon"></i>
            Upcoming Group Trips
        </h2>
        <div class="upcoming-tabs" id="upcoming-tabs">
            <button class="upcoming-tab-btn active" data-tab="august">
                <i class="fa-solid fa-cloud-sun"></i> August
            </button>
            <!-- if you wana show just put september on data-tab -->
            <button class="upcoming-tab-btn" data-tab="" onclick="showComingSoon(event)">
                <i class="fa-solid fa-cloud-sun-rain"></i> September
            </button>
            <button class="upcoming-tab-btn" data-tab="" onclick="showComingSoon(event)">
                <i class="fa-solid fa-cloud-showers-heavy"></i> October
            </button>
            <button class="upcoming-tab-btn" data-tab="" onclick="showComingSoon(event)">
                <i class="fa-solid fa-cloud-bolt"></i> November
            </button>
            <button class="upcoming-tab-btn" data-tab="" onclick="showComingSoon(event)">
                <i class="fa-solid fa-cloud-sun"></i> December
            </button>
            <button class="upcoming-tab-btn" data-tab="" onclick="showComingSoon(event)">
                <i class="fa-solid fa-temperature-low"></i> January
            </button>
            <script>
                function showComingSoon(e) {
                    e.preventDefault();
                    // Remove any existing toast
                    let oldToast = document.getElementById('coming-soon-toast');
                    if (oldToast) oldToast.remove();
                    // Create toast
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
                    toast.style.transition = 'opacity 0.35s cubic-bezier(.4,0,.2,1), transform 0.35s cubic-bezier(.4,0,.2,1)';
                    document.body.appendChild(toast);

                    // Animate in
                    setTimeout(() => {
                        toast.style.opacity = '1';
                        toast.style.transform = 'translateX(-50%) scale(1)';
                    }, 10);

                    // Animate out and remove
                    setTimeout(() => {
                        toast.style.opacity = '0';
                        toast.style.transform = 'translateX(-50%) scale(0.95)';
                        setTimeout(() => {
                            toast.remove();
                        }, 350);
                    }, 1000);
                }
            </script>
        </div>
        <!-- August Tab -->
        <div class="upcoming-tab-content active" id="tab-august">

            <!-- Valley of Flowers -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/valley-of-flowers/vally-of-flowers-image%20(1).webp"
                            alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span> 5D/6N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span>Ex : Rishikesh</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">VALLEY OF FLOWERS TREK</h1>
                    <p class="upcoming-locations"> Rishikesh, Joshimath, Pulna
                    </p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
                            <span class="upcoming-dates-text">Aug 2,15,23,29</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price">₹9,999</div>
                        </div>
                    </div>
                    <a href="valley-of-flowers.php" target="_blank" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Sri Lanka -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/Sirlanka/srilanka-images-by-roamers%20(44).webp"
                            alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span> 7D/6N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span>EX: Colombo
                            </span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">Sri Lanka</h1>
                    <p class="upcoming-locations"> Sigiriya, Kandy, Ella, Galle, Bentota</p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
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
            <!-- Pondi Dive-in -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/short-trip/Lead-Auroville.webp" alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span>2D/ 1N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span> EX: Direct, Chennai
                            </span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">Pondi Dive-in
                    </h1>
                    <p class="upcoming-locations"> Pondicherry</p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
                            <span class="upcoming-dates-text">Aug 16,22</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price">₹4,990</div>
                        </div>
                    </div>
                    <a href="pondicherry.php" target="_blank" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!--varkala -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/varkala/varkala-bg1.jpg" alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span>3D/ 2N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span> EX: Chennai / Trivandrum
                            </span>
                        </div>
                    </div>
                    <h1 class="upcoming-title"> VARKALA </h1>
                    <p class="upcoming-locations"> Chennai - Trivandrum</p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
                            <span class="upcoming-dates-text">Aug 15,29</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price ">8,990/-</div>
                        </div>
                    </div>
                    <a href="varkala-grouptrip.php" target="_blank" class="upcoming-view">View Trip</a>
                </div>
            </div>

        </div>
        <!-- September Tab -->
        <div class="upcoming-tab-content" id="tab-september">
            <!-- Sri Lanka -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/Sirlanka/srilanka-images-by-roamers%20(44).webp"
                            alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span> 7D/6N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span>EX: Colombo
                            </span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">Sri Lanka</h1>
                    <p class="upcoming-locations"> Sigiriya, Kandy, Ella, Galle, Bentota</p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
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
            <!-- Pondi Dive-in -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/short-trip/Lead-Auroville.webp" alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span>2D/ 1N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span> EX: Direct, Chennai
                            </span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">Pondi Dive-in
                    </h1>
                    <p class="upcoming-locations"> Pondicherry</p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
                            <span class="upcoming-dates-text">Aug 16,22</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price">₹4,990</div>
                        </div>
                    </div>
                    <a href="pondicherry.php" target="_blank" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Valley of Flowers -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/valley-of-flowers/vally-of-flowers-image%20(1).webp"
                            alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span> 5D/6N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span>Ex : Rishikesh</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">VALLEY OF FLOWERS TREK</h1>
                    <p class="upcoming-locations"> Rishikesh, Joshimath, Pulna
                    </p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
                            <span class="upcoming-dates-text">Aug 2,15,23,29</span>
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
        <!-- October Tab -->
        <div class="upcoming-tab-content" id="tab-october">
            <!-- Valley of Flowers -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/valley-of-flowers/vally-of-flowers-image%20(1).webp"
                            alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span> 5D/6N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span>Ex : Rishikesh</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">VALLEY OF FLOWERS TREK</h1>
                    <p class="upcoming-locations"> Rishikesh, Joshimath, Pulna
                    </p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
                            <span class="upcoming-dates-text">Aug 2,15,23,29</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price">₹9,999</div>
                        </div>
                    </div>
                    <a href="valley-of-flowers.php" target="_blank" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Sri Lanka -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/Sirlanka/srilanka-images-by-roamers%20(44).webp"
                            alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span> 7D/6N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span>EX: Colombo
                            </span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">Sri Lanka</h1>
                    <p class="upcoming-locations"> Sigiriya, Kandy, Ella, Galle, Bentota</p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
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
            <!-- Pondi Dive-in -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/short-trip/Lead-Auroville.webp" alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span>2D/ 1N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span> EX: Direct, Chennai
                            </span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">Pondi Dive-in
                    </h1>
                    <p class="upcoming-locations"> Pondicherry</p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
                            <span class="upcoming-dates-text">Aug 16,22</span>
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
        <!-- November Tab -->
        <div class="upcoming-tab-content" id="tab-november">
            <!-- Valley of Flowers -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/valley-of-flowers/vally-of-flowers-image%20(1).webp"
                            alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span> 5D/6N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span>Ex : Rishikesh</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">VALLEY OF FLOWERS TREK</h1>
                    <p class="upcoming-locations"> Rishikesh, Joshimath, Pulna
                    </p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
                            <span class="upcoming-dates-text">Aug 2,15,23,29</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price">₹9,999</div>
                        </div>
                    </div>
                    <a href="valley-of-flowers.php" target="_blank" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Sri Lanka -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/Sirlanka/srilanka-images-by-roamers%20(44).webp"
                            alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span> 7D/6N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span>EX: Colombo
                            </span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">Sri Lanka</h1>
                    <p class="upcoming-locations"> Sigiriya, Kandy, Ella, Galle, Bentota</p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
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
            <!-- Pondi Dive-in -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/short-trip/Lead-Auroville.webp" alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span>2D/ 1N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span> EX: Direct, Chennai
                            </span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">Pondi Dive-in
                    </h1>
                    <p class="upcoming-locations"> Pondicherry</p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
                            <span class="upcoming-dates-text">Aug 16,22</span>
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
        <!-- December Tab -->
        <div class="upcoming-tab-content " id="tab-december">
            <!-- Valley of Flowers -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/valley-of-flowers/vally-of-flowers-image%20(1).webp"
                            alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span> 5D/6N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span>Ex : Rishikesh</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">VALLEY OF FLOWERS TREK</h1>
                    <p class="upcoming-locations"> Rishikesh, Joshimath, Pulna
                    </p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
                            <span class="upcoming-dates-text">Aug 2,15,23,29</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price">₹9,999</div>
                        </div>
                    </div>
                    <a href="valley-of-flowers.php" target="_blank" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Sri Lanka -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/Sirlanka/srilanka-images-by-roamers%20(44).webp"
                            alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span> 7D/6N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span>EX: Colombo
                            </span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">Sri Lanka</h1>
                    <p class="upcoming-locations"> Sigiriya, Kandy, Ella, Galle, Bentota</p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
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
            <!-- Pondi Dive-in -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://roamers.in/assets/img/short-trip/Lead-Auroville.webp" alt="Valley of Flowers">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span>2D/ 1N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span> EX: Direct, Chennai
                            </span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">Pondi Dive-in
                    </h1>
                    <p class="upcoming-locations"> Pondicherry</p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
                            <span class="upcoming-dates-text">Aug 16,22</span>
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
        <!-- January Tab -->
        <div class="upcoming-tab-content" id="tab-january">
            <!-- Ooty -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="assets/img/Ooty/1-min.jpg" alt="Ooty Hills">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span> 3D/2N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span>Ex : Chennai</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">OOTY THE QUEEN OF HILLS</h1>
                    <p class="upcoming-locations">Nilgiris, Coonoor, Coimbatore</p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
                            <span class="upcoming-dates-text">Jan 5, 12, 19</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price">₹17,499</div>
                        </div>
                    </div>
                    <a href="ooty.php" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Kerala -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="assets/img/Kerala/7221844019.jpg" alt="Kerala Backwaters">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span> 4D/3N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span>Ex : Chennai</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">KERALA GOD'S OWN COUNTRY</h1>
                    <p class="upcoming-locations">Munnar, Thekkady, Alleppey</p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
                            <span class="upcoming-dates-text">Jan 5, 12, 19</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price">₹12,999</div>
                        </div>
                    </div>
                    <a href="kerala.php" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Andaman -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="assets/img/andaman/Media/43111.jpg" alt="Andaman Islands">
                    </div>
                    <div class="upcoming-card-flex">
                        <div class="upcoming-duration">
                            <span class="icon"><img src="asstes\test\Duration.svg" alt=""></span> 5D/4N
                        </div>
                        <div class="upcoming-from">
                            <span class="icon"><img src="asstes\test\Vector.svg" alt=""></span>
                            <span>Ex : Chennai</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title">ANDAMAN ISLAND ADVENTURE</h1>
                    <p class="upcoming-locations">Port Blair, Havelock, Neil Island</p>
                    <div class="upcoming-price-section">
                        <div class="upcoming-dates">
                            <span class="icon"><img src="asstes\test\calander.png" alt=""></span>
                            <span class="upcoming-dates-text">Jan 5, 12, 19</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price">₹18,999</div>
                        </div>
                    </div>
                    <a href="andaman.php" class="upcoming-view">View Trip</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab switching logic
        document.addEventListener('DOMContentLoaded', function () {
            const tabBtns = document.querySelectorAll('.upcoming-tab-btn');
            const tabContents = document.querySelectorAll('.upcoming-tab-content');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    // Remove active from all
                    tabBtns.forEach(b => b.classList.remove('active'));
                    tabContents.forEach(tc => tc.classList.remove('active'));
                    // Add active to clicked
                    btn.classList.add('active');
                    const tab = btn.getAttribute('data-tab');
                    const content = document.getElementById('tab-' + tab);
                    if (content) content.classList.add('active');
                });
            });
        });
    </script>
</body>

</html>