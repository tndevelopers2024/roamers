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

        .upcoming-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            max-width: 2700px;
            margin: 0 auto;
        }

        .upcoming-container {
            position: relative;
            max-width: 2300px;
            margin: 0 auto;
            overflow: visible;
        }

        .upcoming-slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            gap: 40px;
        }

        .upcoming-nav-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.8);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 20px;
            z-index: 10;
            color: black;
        }



        .prev-btn {
            left: 10px;
        }

        .next-btn {
            right: 10px;
        }

        .upcoming-card {
            flex: 0 0 auto;
            width: 600px;
        }

        .upcoming-card {
            width: 600px;
            overflow: visible;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            border: 2px solid;
            border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
            border-radius: 30px;
            border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
        }

        /* Rest of your existing CSS remains exactly the same */
        .upcoming-image {
            width: 100%;
            height: 380px;
            overflow: visible;
            position: relative;
            border-radius: 24px;
        }

        .upcoming-image img {
            width: 100%;
            height: 95%;
            object-fit: cover;
            padding: 5px;
            border-radius: 30px;
        }

        .upcoming-content {
            background: linear-gradient(180deg, rgba(86, 195, 221, 0) 0%, #56C3DD 100%);
            padding: 1px 1px 8px 1px;
            color: rgb(255, 255, 255);
            position: relative;
            z-index: 1;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            overflow: visible;
            border-radius: 30px;
        }

        .upcoming-duration {
            display: flex;
            align-items: center;
            background-color: #FFFFFF;
            color: #292929;
            padding: 5px 15px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: bold;
        }

        .upcoming-duration .icon {
            margin-right: 5px;
            color: #7dd3e7;
        }

        .upcoming-from {
            font-size: 18px;
            background-color: #FFFFFF;
            color: #292929;
            padding: 5px 15px;
            border-radius: 30px;
        }

        .upcoming-title {
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            color: white;
            text-align: start;
        }

        .upcoming-locations {
            font-size: 16px;
            color: white;
            margin-bottom: 20px;
        }

        .upcoming-dates {
            display: inline-block;
            background-color: #fff;
            color: #333;
            padding: 9px 15px;
            border-radius: 19px;
            font-size: 12px;
            box-shadow: 0px 2px 4px 0px #00000040;
            box-shadow: 1px -1px 6px 0px #00000047 inset;
        }

        .upcoming-price-section {
            display: flex;
            align-items: center;
            margin-bottom: 100px;
            gap: 85px;
        }

        .upcoming-starts {
            font-size: 21px;
            text-align: start;
            font-weight: 800;
        }

        .upcoming-price {
            font-size: 28px;
            font-weight: bold;
            text-align: right;
            margin-bottom: 20px;
        }

        .upcoming-view {
            position: absolute;
            bottom: -25px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #fff;
            color: #00A6CE;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 5px 5px 44px 0px #3CADC9B2;
            font-size: 22px;
            z-index: 10;
            transition: all 0.3s ease;
            width: 223;
            height: 76;
            padding-top: 10px;
            padding-right: 32px;
            padding-bottom: 10px;
            padding-left: 32px;
        }
    </style>
</head>

<body>

    <div class="upcoming-container" style="padding: 50px;">
        <h2 style="margin: 50px 0px 50px 0px; text-align: center;">
            Upcoming Trips
        </h2>
        <div class="upcoming-slider">
            <!-- Card 1 -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="asstes\test\card.png" alt="Ooty Hills">
                    </div>
                    <div style="display: flex; justify-content: space-between; margin: 0px 15px 0px 15px">
                        <div class="upcoming-duration" style="display: flex; align-items: center; justify-content: center;">
                            <span class="icon" style="display: flex; align-items: center; font-weight: 800;"><img src="asstes\test\Duration.svg" alt=""></span> 3D/2N
                        </div>
                        <div class="upcoming-from" style="display: flex; align-items: center; justify-content: center; background-color: #4CB9D3;">
                            <span class="icon" style="display: flex; align-items: center; margin-right: 5px;">
                                <img src="asstes\test\Vector.svg" alt="">
                            </span>
                            <span style="color: #FFFFFF;">Ex : Chennai</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title" style="margin: 13px 15px 0px 35px; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">OOTY THE QUEEN OF HILLS</h1>
                    <p class="upcoming-locations" style="font-weight: 600; margin: 5px 15px 0px 15px; margin-left: 35px;">Nilgiris, Coonoor, Coimbatore</p>
                    <div class="upcoming-price-section" style="margin: 0px 20px 20px 15px">
                        <div class="upcoming-dates" style="display: flex; align-items: center; justify-content: center; ">
                            <span class="icon" style="display: flex; align-items: center;"><img src="asstes\test\calander.png" alt="" style="margin-right: 5px;"></span>
                            <span style="font-weight: 800;">May 10, 24, June 07, 21, 28, July 05,06, 12, 13, 18, 19</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">₹7,499</div>
                        </div>
                    </div>
                    <a href="#" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="asstes\test\card.png" alt="Ooty Hills">
                    </div>
                    <div style="display: flex; justify-content: space-between; margin: 0px 15px 0px 15px">
                        <div class="upcoming-duration" style="display: flex; align-items: center; justify-content: center;">
                            <span class="icon" style="display: flex; align-items: center; font-weight: 800;"><img src="asstes\test\Duration.svg" alt=""></span> 3D/2N
                        </div>
                        <div class="upcoming-from" style="display: flex; align-items: center; justify-content: center; background-color: #4CB9D3;">
                            <span class="icon" style="display: flex; align-items: center; margin-right: 5px;">
                                <img src="asstes\test\Vector.svg" alt="">
                            </span>
                            <span style="color: #FFFFFF;">Ex : Chennai</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title" style="margin: 13px 15px 0px 35px; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">OOTY THE QUEEN OF HILLS</h1>
                    <p class="upcoming-locations" style="font-weight: 600; margin: 5px 15px 0px 15px; margin-left: 35px;">Nilgiris, Coonoor, Coimbatore</p>
                    <div class="upcoming-price-section" style="margin: 0px 20px 20px 15px">
                        <div class="upcoming-dates" style="display: flex; align-items: center; justify-content: center; ">
                            <span class="icon" style="display: flex; align-items: center;"><img src="asstes\test\calander.png" alt="" style="margin-right: 5px;"></span>
                            <span style="font-weight: 800;">May 10, 24, June 07, 21, 28, July 05,06, 12, 13, 18, 19</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">₹7,499</div>
                        </div>
                    </div>
                    <a href="#" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="asstes\test\card.png" alt="Ooty Hills">
                    </div>
                    <div style="display: flex; justify-content: space-between; margin: 0px 15px 0px 15px">
                        <div class="upcoming-duration" style="display: flex; align-items: center; justify-content: center;">
                            <span class="icon" style="display: flex; align-items: center; font-weight: 800;"><img src="asstes\test\Duration.svg" alt=""></span> 3D/2N
                        </div>
                        <div class="upcoming-from" style="display: flex; align-items: center; justify-content: center; background-color: #4CB9D3;">
                            <span class="icon" style="display: flex; align-items: center; margin-right: 5px;">
                                <img src="asstes\test\Vector.svg" alt="">
                            </span>
                            <span style="color: #FFFFFF;">Ex : Chennai</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title" style="margin: 13px 15px 0px 35px; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">OOTY THE QUEEN OF HILLS</h1>
                    <p class="upcoming-locations" style="font-weight: 600; margin: 5px 15px 0px 15px; margin-left: 35px;">Nilgiris, Coonoor, Coimbatore</p>
                    <div class="upcoming-price-section" style="margin: 0px 20px 20px 15px">
                        <div class="upcoming-dates" style="display: flex; align-items: center; justify-content: center; ">
                            <span class="icon" style="display: flex; align-items: center;"><img src="asstes\test\calander.png" alt="" style="margin-right: 5px;"></span>
                            <span style="font-weight: 800;">May 10, 24, June 07, 21, 28, July 05,06, 12, 13, 18, 19</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">₹7,499</div>
                        </div>
                    </div>
                    <a href="#" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="asstes\test\card.png" alt="Ooty Hills">
                    </div>
                    <div style="display: flex; justify-content: space-between; margin: 0px 15px 0px 15px">
                        <div class="upcoming-duration" style="display: flex; align-items: center; justify-content: center;">
                            <span class="icon" style="display: flex; align-items: center; font-weight: 800;"><img src="asstes\test\Duration.svg" alt=""></span> 3D/2N
                        </div>
                        <div class="upcoming-from" style="display: flex; align-items: center; justify-content: center; background-color: #4CB9D3;">
                            <span class="icon" style="display: flex; align-items: center; margin-right: 5px;">
                                <img src="asstes\test\Vector.svg" alt="">
                            </span>
                            <span style="color: #FFFFFF;">Ex : Chennai</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title" style="margin: 13px 15px 0px 35px; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">OOTY THE QUEEN OF HILLS</h1>
                    <p class="upcoming-locations" style="font-weight: 600; margin: 5px 15px 0px 15px; margin-left: 35px;">Nilgiris, Coonoor, Coimbatore</p>
                    <div class="upcoming-price-section" style="margin: 0px 20px 20px 15px">
                        <div class="upcoming-dates" style="display: flex; align-items: center; justify-content: center; ">
                            <span class="icon" style="display: flex; align-items: center;"><img src="asstes\test\calander.png" alt="" style="margin-right: 5px;"></span>
                            <span style="font-weight: 800;">May 10, 24, June 07, 21, 28, July 05,06, 12, 13, 18, 19</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">₹7,499</div>
                        </div>
                    </div>
                    <a href="#" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="asstes\test\card.png" alt="Ooty Hills">
                    </div>
                    <div style="display: flex; justify-content: space-between; margin: 0px 15px 0px 15px">
                        <div class="upcoming-duration" style="display: flex; align-items: center; justify-content: center;">
                            <span class="icon" style="display: flex; align-items: center; font-weight: 800;"><img src="asstes\test\Duration.svg" alt=""></span> 3D/2N
                        </div>
                        <div class="upcoming-from" style="display: flex; align-items: center; justify-content: center; background-color: #4CB9D3;">
                            <span class="icon" style="display: flex; align-items: center; margin-right: 5px;">
                                <img src="asstes\test\Vector.svg" alt="">
                            </span>
                            <span style="color: #FFFFFF;">Ex : Chennai</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title" style="margin: 13px 15px 0px 35px; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">OOTY THE QUEEN OF HILLS</h1>
                    <p class="upcoming-locations" style="font-weight: 600; margin: 5px 15px 0px 15px; margin-left: 35px;">Nilgiris, Coonoor, Coimbatore</p>
                    <div class="upcoming-price-section" style="margin: 0px 20px 20px 15px">
                        <div class="upcoming-dates" style="display: flex; align-items: center; justify-content: center; ">
                            <span class="icon" style="display: flex; align-items: center;"><img src="asstes\test\calander.png" alt="" style="margin-right: 5px;"></span>
                            <span style="font-weight: 800;">May 10, 24, June 07, 21, 28, July 05,06, 12, 13, 18, 19</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">₹7,499</div>
                        </div>
                    </div>
                    <a href="#" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Card 1 -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="asstes\test\card.png" alt="Ooty Hills">
                    </div>
                    <div style="display: flex; justify-content: space-between; margin: 0px 15px 0px 15px">
                        <div class="upcoming-duration" style="display: flex; align-items: center; justify-content: center;">
                            <span class="icon" style="display: flex; align-items: center; font-weight: 800;"><img src="asstes\test\Duration.svg" alt=""></span> 3D/2N
                        </div>
                        <div class="upcoming-from" style="display: flex; align-items: center; justify-content: center; background-color: #4CB9D3;">
                            <span class="icon" style="display: flex; align-items: center; margin-right: 5px;">
                                <img src="asstes\test\Vector.svg" alt="">
                            </span>
                            <span style="color: #FFFFFF;">Ex : Chennai</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title" style="margin: 13px 15px 0px 35px; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">OOTY THE QUEEN OF HILLS</h1>
                    <p class="upcoming-locations" style="font-weight: 600; margin: 5px 15px 0px 15px; margin-left: 35px;">Nilgiris, Coonoor, Coimbatore</p>
                    <div class="upcoming-price-section" style="margin: 0px 20px 20px 15px">
                        <div class="upcoming-dates" style="display: flex; align-items: center; justify-content: center; ">
                            <span class="icon" style="display: flex; align-items: center;"><img src="asstes\test\calander.png" alt="" style="margin-right: 5px;"></span>
                            <span style="font-weight: 800;">May 10, 24, June 07, 21, 28, July 05,06, 12, 13, 18, 19</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">₹7,499</div>
                        </div>
                    </div>
                    <a href="#" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Repeat the same structure for other cards with updated class names -->
            <!-- Additional cards removed for brevity -->
        </div>
        <button class="upcoming-nav-button prev-btn">❮</button>
        <button class="upcoming-nav-button next-btn">❯</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.querySelector('.upcoming-slider');
            const prevButton = document.querySelector('.prev-btn');
            const nextButton = document.querySelector('.next-btn');
            const cards = document.querySelectorAll('.upcoming-card');

            let currentIndex = 0;

            nextButton.addEventListener('click', () => {
                currentIndex++;
                if (currentIndex >= cards.length) {
                    currentIndex = 0;
                }
                updateSlider();
            });

            prevButton.addEventListener('click', () => {
                currentIndex--;
                if (currentIndex < 0) {
                    currentIndex = cards.length - 1;
                }
                updateSlider();
            });

            function updateSlider() {
                const offset = currentIndex * -(600 + 40); // card width + gap
                slider.style.transform = `translateX(${offset}px)`;
            }
        });
    </script>
</body>

</html>