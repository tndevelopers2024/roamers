<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Ooty Travel Package</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Manrope', sans-serif;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #f0f9ff, #e6f7fe);
            padding: 20px;
            min-height: 100vh;
            margin: 0;
        }

        .head {
            text-align: center;
            font-size: 2.5rem;
            color: #0d5c75;
            margin: 30px 0;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
            font-weight: 800;
        }

        .upcoming-container {
            position: relative;
            max-width: 1800px;
            margin: 0 auto;
            overflow: visible;
            padding: 0 60px;
        }

        .upcoming-slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            gap: 40px;
            padding: 10px 0;
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
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .upcoming-nav-button:hover {
            background: white;
            transform: translateY(-50%) scale(1.1);
        }

        .prev-btn {
            left: 0;
        }

        .next-btn {
            right: 0;
        }

        .upcoming-card {
            flex: 0 0 auto;
            min-width: 300px;
            max-width: 600px;
            width: 100%;
            overflow: visible;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            position: relative;
            border: 2px solid;
            border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
            border-radius: 30px;
            background: white;
        }

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
            gap: 20px;
            flex-wrap: wrap;
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
            width: 223px;
            height: 76px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px 32px;
        }

        .upcoming-view:hover {
            background: #f0fdff;
            transform: translateX(-50%) translateY(-5px);
            box-shadow: 5px 10px 50px 0px #3CADC9;
        }

        .card-top {
            display: flex;
            justify-content: space-between;
            margin: 0px 15px 0px 15px;
        }

        .card-title {
            margin: 13px 15px 0px 35px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .card-locations {
            font-weight: 600;
            margin: 5px 15px 0px 15px;
            margin-left: 35px;
        }

        .card-bottom {
            margin: 0px 20px 20px 15px;
        }

        /* Responsive styles */
        @media (max-width: 1800px) {
            .upcoming-card {
                max-width: 550px;
            }
        }

        @media (max-width: 1600px) {
            .upcoming-card {
                max-width: 500px;
            }
            
            .upcoming-price-section {
                gap: 40px;
            }
        }

        @media (max-width: 1400px) {
            .upcoming-card {
                max-width: 450px;
            }
            
            .upcoming-image {
                height: 350px;
            }
            
            .upcoming-price-section {
                gap: 30px;
            }
        }

        @media (max-width: 1200px) {
            .upcoming-card {
                max-width: 400px;
            }
            
            .upcoming-image {
                height: 320px;
            }
        }

        @media (max-width: 992px) {
            .upcoming-card {
                max-width: 350px;
            }
            
            .upcoming-image {
                height: 300px;
            }
            
            .upcoming-title {
                font-size: 22px;
            }
            
            .upcoming-price-section {
                margin-bottom: 90px;
            }
            
            .upcoming-view {
                width: 200px;
                height: 65px;
                font-size: 20px;
            }
        }

        @media (max-width: 768px) {
            .upcoming-container {
                padding: 0 50px;
            }
            
            .upcoming-card {
                max-width: 100%;
                min-width: 280px;
            }
            
            .upcoming-image {
                height: 280px;
            }
            
            .upcoming-title {
                font-size: 20px;
            }
            
            .upcoming-price {
                font-size: 24px;
            }
            
            .upcoming-starts {
                font-size: 18px;
            }
            
            .card-top {
                flex-direction: column;
                gap: 10px;
            }
            
            .upcoming-duration, .upcoming-from {
                width: fit-content;
            }
            
            .upcoming-price-section {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
                margin-bottom: 80px;
            }
            
            .upcoming-view {
                width: 180px;
                height: 60px;
                font-size: 18px;
                bottom: -20px;
            }
        }

        @media (max-width: 576px) {
            .head {
                font-size: 2rem;
            }
            
            .upcoming-container {
                padding: 0 40px;
            }
            
            .upcoming-nav-button {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
            
            .upcoming-image {
                height: 250px;
            }
            
            .upcoming-title {
                font-size: 18px;
                margin-left: 25px;
            }
            
            .card-locations {
                margin-left: 25px;
                font-size: 14px;
            }
            
            .upcoming-dates {
                font-size: 11px;
            }
            
            .upcoming-price {
                font-size: 22px;
            }
            
            .upcoming-starts {
                font-size: 16px;
            }
            
            .upcoming-view {
                width: 160px;
                height: 55px;
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <h2 class="head">
        Upcoming Trips
    </h2>
    <div class="upcoming-container">
        <div class="upcoming-slider">
            <!-- Card 1 -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://images.unsplash.com/photo-1593696140826-c58b021acf8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Ooty Hills">
                    </div>
                    <div class="card-top">
                        <div class="upcoming-duration" style="display: flex; align-items: center; justify-content: center;">
                            <span class="icon" style="display: flex; align-items: center; font-weight: 800;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#56C3DD" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#56C3DD" stroke-width="2"/>
                                    <path d="M12 6V12L16 14" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span> 3D/2N
                        </div>
                        <div class="upcoming-from" style="display: flex; align-items: center; justify-content: center; background-color: #4CB9D3;">
                            <span class="icon" style="display: flex; align-items: center; margin-right: 5px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z" fill="white"/>
                                </svg>
                            </span>
                            <span style="color: #FFFFFF;">Ex : Chennai</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title card-title">OOTY THE QUEEN OF HILLS</h1>
                    <p class="upcoming-locations card-locations">Nilgiris, Coonoor, Coimbatore</p>
                    <div class="upcoming-price-section card-bottom">
                        <div class="upcoming-dates" style="display: flex; align-items: center; justify-content: center; ">
                            <span class="icon" style="display: flex; align-items: center;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#56C3DD" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 2V6" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 2V6" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 10H21" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
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
            <!-- Card 2 -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://images.unsplash.com/photo-1605548236564-7b9c2d0c78d0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Kodaikanal">
                    </div>
                    <div class="card-top">
                        <div class="upcoming-duration" style="display: flex; align-items: center; justify-content: center;">
                            <span class="icon" style="display: flex; align-items: center; font-weight: 800;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#56C3DD" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#56C3DD" stroke-width="2"/>
                                    <path d="M12 6V12L16 14" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span> 4D/3N
                        </div>
                        <div class="upcoming-from" style="display: flex; align-items: center; justify-content: center; background-color: #4CB9D3;">
                            <span class="icon" style="display: flex; align-items: center; margin-right: 5px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z" fill="white"/>
                                </svg>
                            </span>
                            <span style="color: #FFFFFF;">Ex : Bangalore</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title card-title">KODAIKANAL LAKE RETREAT</h1>
                    <p class="upcoming-locations card-locations">Pillar Rocks, Coakers Walk, Silver Cascade</p>
                    <div class="upcoming-price-section card-bottom">
                        <div class="upcoming-dates" style="display: flex; align-items: center; justify-content: center; ">
                            <span class="icon" style="display: flex; align-items: center;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#56C3DD" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 2V6" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 2V6" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 10H21" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span style="font-weight: 800;">June 15, 22, 29, July 06, 13, 20, 27</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">₹8,999</div>
                        </div>
                    </div>
                    <a href="#" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://images.unsplash.com/photo-1559666126-84f389727b9a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Munnar">
                    </div>
                    <div class="card-top">
                        <div class="upcoming-duration" style="display: flex; align-items: center; justify-content: center;">
                            <span class="icon" style="display: flex; align-items: center; font-weight: 800;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#56C3DD" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#56C3DD" stroke-width="2"/>
                                    <path d="M12 6V12L16 14" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span> 5D/4N
                        </div>
                        <div class="upcoming-from" style="display: flex; align-items: center; justify-content: center; background-color: #4CB9D3;">
                            <span class="icon" style="display: flex; align-items: center; margin-right: 5px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z" fill="white"/>
                                </svg>
                            </span>
                            <span style="color: #FFFFFF;">Ex : Kochi</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title card-title">MUNNAR TEA GARDENS</h1>
                    <p class="upcoming-locations card-locations">Eravikulam, Mattupetty Dam, Tea Museum</p>
                    <div class="upcoming-price-section card-bottom">
                        <div class="upcoming-dates" style="display: flex; align-items: center; justify-content: center; ">
                            <span class="icon" style="display: flex; align-items: center;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#56C3DD" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 2V6" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 2V6" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 10H21" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span style="font-weight: 800;">July 01, 08, 15, 22, 29, Aug 05, 12</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">₹10,499</div>
                        </div>
                    </div>
                    <a href="#" class="upcoming-view">View Trip</a>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="upcoming-card">
                <div class="upcoming-content">
                    <div class="upcoming-image">
                        <img src="https://images.unsplash.com/photo-15884191000809-5657f1d3ac88?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Coorg">
                    </div>
                    <div class="card-top">
                        <div class="upcoming-duration" style="display: flex; align-items: center; justify-content: center;">
                            <span class="icon" style="display: flex; align-items: center; font-weight: 800;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#56C3DD" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#56C3DD" stroke-width="2"/>
                                    <path d="M12 6V12L16 14" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span> 3D/2N
                        </div>
                        <div class="upcoming-from" style="display: flex; align-items: center; justify-content: center; background-color: #4CB9D3;">
                            <span class="icon" style="display: flex; align-items: center; margin-right: 5px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z" fill="white"/>
                                </svg>
                            </span>
                            <span style="color: #FFFFFF;">Ex : Mysore</span>
                        </div>
                    </div>
                    <h1 class="upcoming-title card-title">COORG COFFEE TRAILS</h1>
                    <p class="upcoming-locations card-locations">Abbey Falls, Raja's Seat, Dubare</p>
                    <div class="upcoming-price-section card-bottom">
                        <div class="upcoming-dates" style="display: flex; align-items: center; justify-content: center; ">
                            <span class="icon" style="display: flex; align-items: center;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#56C3DD" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 2V6" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 2V6" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 10H21" stroke="#56C3DD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <span style="font-weight: 800;">Aug 10, 17, 24, 31, Sep 07, 14</span>
                        </div>
                        <div>
                            <div class="upcoming-starts">Starts</div>
                            <div class="upcoming-price" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">₹6,999</div>
                        </div>
                    </div>
                    <a href="#" class="upcoming-view">View Trip</a>
                </div>
            </div>
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
            let cardWidth = cards[0].offsetWidth;
            let gap = 40;
            let cardsPerView = 1;
            
            // Calculate how many cards fit in the view
            function calculateCardsPerView() {
                const containerWidth = slider.parentElement.offsetWidth;
                cardWidth = cards[0].offsetWidth;
                cardsPerView = Math.max(1, Math.floor(containerWidth / (cardWidth + gap)));
            }
            
            // Update slider position
            function updateSlider() {
                const offset = currentIndex * (cardWidth + gap);
                slider.style.transform = `translateX(-${offset}px)`;
            }
            
            // Handle window resize
            window.addEventListener('resize', function() {
                calculateCardsPerView();
                updateSlider();
            });
            
            // Navigation
            nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex + cardsPerView) % (cards.length - cardsPerView + 1);
                updateSlider();
            });
            
            prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex - cardsPerView + (cards.length - cardsPerView + 1)) % (cards.length - cardsPerView + 1);
                updateSlider();
            });
            
            // Initialize
            calculateCardsPerView();
            updateSlider();
        });
    </script>
</body>

</html>