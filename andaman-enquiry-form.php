<?php
session_start();
include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form - Roamers | Plan Your Adventure</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4ec0db;
            --secondary: #4ec0db;
            --accent: #ef4565;
            --text: #5f6c7b;
            --bg: #fffffe;
            --white: #ffffff;
            --glass: rgba(255, 255, 255, 0.92);
            --border: rgba(78, 192, 219, 0.2);
            --shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
            --glow: 0 0 15px rgba(78, 192, 219, 0.3);
        }

        * {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fbff;
            background-image: 
                radial-gradient(at 0% 0%, rgba(78, 192, 219, 0.08) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(9, 64, 103, 0.05) 0px, transparent 50%),
                radial-gradient(at 50% 100%, rgba(78, 192, 219, 0.05) 0px, transparent 50%);
            margin: 0;
            padding: 0;
            color: var(--text);
            overflow-x: hidden;
        }

        .page-wrapper {
            padding: 160px 20px 100px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .enquiry-container {
            width: 100%;
            max-width: 550px;
            background: var(--glass);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 40px;
            overflow: hidden;
            box-shadow: var(--shadow);
            border: 1px solid var(--border);
            display: flex;
            flex-direction: row;
            animation: containerReveal 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        @keyframes containerReveal {
            from { opacity: 0; transform: translateY(40px) scale(0.98); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        .side-info {
            flex: 1;
            background: var(--primary);
            padding: 60px 45px;
            color: var(--white);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
            /* Mesh Gradient Effect */
            background: linear-gradient(135deg, #094067 0%, #0b5082 100%);
        }

        .side-info::before {
            content: '';
            position: absolute;
            width: 150%;
            height: 150%;
            top: -25%;
            left: -25%;
            background: radial-gradient(circle at 70% 20%, rgba(78, 192, 219, 0.2) 0%, transparent 40%),
                        radial-gradient(circle at 20% 80%, rgba(78, 192, 219, 0.15) 0%, transparent 40%);
            animation: meshMove 15s ease-in-out infinite alternate;
            pointer-events: none;
        }

        @keyframes meshMove {
            0% { transform: rotate(0deg) scale(1); }
            100% { transform: rotate(10deg) scale(1.1); }
        }

        .side-info h2 {
            font-size: 36px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 25px;
            font-family: 'Outfit', sans-serif;
            position: relative;
            z-index: 1;
        }

        .side-info p {
            font-size: 17px;
            line-height: 1.7;
            opacity: 0.85;
            margin-bottom: 40px;
            position: relative;
            z-index: 1;
        }

        .benefits-list {
            position: relative;
            z-index: 1;
        }

        .benefit-item {
            display: flex;
            align-items: center;
            margin-bottom: 24px;
            background: rgba(255, 255, 255, 0.05);
            padding: 12px 18px;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.3s;
        }

        .benefit-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(8px);
        }

        .benefit-item i {
            width: 36px;
            height: 36px;
            background: rgba(78, 192, 219, 0.2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 18px;
            color: var(--secondary);
            font-size: 16px;
        }

        .benefit-item span {
            font-weight: 500;
            font-size: 15px;
        }

        .form-section {
            flex: 1.6;
            padding: 60px;
            background: var(--white);
            position: relative;
        }

        .section-header {
            margin-bottom: 40px;
        }

        .section-header h1 {
            font-size: 28px;
            /* color: var(--primary); */
            margin: 0 0 8px 0;
            font-weight: 800;
            font-family: 'Outfit', sans-serif;
        }

        .section-header p {
            font-size: 15px;
            margin: 0;
            color: var(--text);
            opacity: 0.6;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: 700;
            color: #4ec0db;
            letter-spacing: 0.3px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #b0bec5;
            transition: all 0.3s;
            font-size: 16px;
            pointer-events: none;
        }

        .input-wrapper input, 
        .input-wrapper select, 
        .input-wrapper textarea {
            width: 100%;
            padding: 15px 20px 15px 52px;
            border: 1.5px solid #f0f4f8;
            border-radius: 16px;
            font-size: 15px;
            font-weight: 500;
            /* color: var(--primary); */
            background: #fbfdfe;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            outline: none;
        }

        .input-wrapper textarea {
            padding-left: 20px;
            min-height: 120px;
            resize: vertical;
        }

        .input-wrapper input:focus, 
        .input-wrapper select:focus, 
        .input-wrapper textarea:focus {
            border-color: var(--secondary);
            background: #fff;
            box-shadow: 0 0 0 4px rgba(78, 192, 219, 0.1), var(--glow);
        }

        .input-wrapper input:focus + i,
        .input-wrapper select:focus + i {
            color: var(--secondary);
            transform: translateY(-50%) scale(1.1);
        }

        /* WhatsApp Input Group */
        .whatsapp-wrapper {
            display: flex;
            border: 1.5px solid #f0f4f8;
            border-radius: 16px;
            overflow: hidden;
            background: #fbfdfe;
            transition: all 0.3s;
        }

        .whatsapp-wrapper:focus-within {
            border-color: var(--secondary);
            box-shadow: 0 0 0 4px rgba(78, 192, 219, 0.1), var(--glow);
        }

        .country-code {
            display: flex;
            align-items: center;
            padding: 0 18px;
            background: #f8fafc;
            border-right: 1.5px solid #f0f4f8;
            font-weight: 700;
            /* color: var(--primary); */
            font-size: 14px;
        }

        .country-code img {
            width: 22px;
            margin-right: 10px;
            border-radius: 2px;
        }

        .whatsapp-wrapper input {
            border: none;
            padding-left: 18px;
            background: transparent;
        }

        .whatsapp-wrapper input:focus {
            box-shadow: none;
        }

        /* Radio Group */
        .radio-group {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-top: 10px;
        }

        .radio-card {
            position: relative;
            cursor: pointer;
        }

        .radio-card input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        .radio-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px 10px;
            background: #fff;
            border: 1.5px solid #f0f4f8;
            border-radius: 18px;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            min-height: 100px;
        }

        .radio-box i {
            font-size: 24px;
            margin-bottom: 12px;
            color: #ccd6dd;
            transition: all 0.3s;
        }

        .radio-box span {
            font-size: 13px;
            font-weight: 600;
            color: var(--text);
            transition: all 0.3s;
        }

        .radio-card:hover .radio-box {
            border-color: var(--secondary);
            background: rgba(78, 192, 219, 0.02);
            transform: translateY(-2px);
        }

        .radio-card input:checked + .radio-box {
            border-color: var(--secondary);
            background: rgba(78, 192, 219, 0.06);
            box-shadow: var(--glow);
        }

        .radio-card input:checked + .radio-box i {
            color: var(--secondary);
            transform: scale(1.2);
        }
/* 
        .radio-card input:checked + .radio-box span {
            color: var(--primary);
        } */

        .submit-btn {
            width: 100%;
            padding: 20px;
            background: #4ec0db;
            color: var(--white);
            border: none;
            border-radius: 20px;
            font-size: 18px;
            font-weight: 800;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            margin-top: 10px;
            box-shadow: 0 12px 30px rgba(9, 64, 103, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            font-family: 'Outfit', sans-serif;
        }

        .submit-btn:hover {
            transform: translateY(-4px) scale(1.01);
            box-shadow: 0 20px 40px rgba(9, 64, 103, 0.35);
            background: linear-gradient(135deg, var(--secondary) 0%, var(--primary) 100%);
        }

        .submit-btn:active {
            transform: translateY(-1px) scale(1);
        }

        .submit-btn i {
            transition: transform 0.4s ease;
        }

        .submit-btn:hover i {
            transform: translateX(6px) rotate(-10deg);
        }

        @media (max-width: 950px) {
            .enquiry-container {
                flex-direction: column;
                max-width: 600px;
            }
            .side-info {
                padding: 50px 40px;
            }
            .form-section {
                padding: 45px 35px;
            }
        }

        @media (max-width: 600px) {
            .page-wrapper {
                padding: 100px 15px 50px;
            }
            .form-section {
                padding: 35px 20px;
            }
            .radio-group {
                grid-template-columns: 1fr 1fr;
            }
            .side-info h2 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>

      <!-- Banner -->
    <section id="banner" style=" height: 110vh; display: flex; align-items: center; justify-content: center; position: relative; padding: 350px 0; background-image: url('assets/img/andaman/andaman-bg.avif'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; "></div>
        <div style="position: relative; z-index: 1; text-align: center; color: white; width: 100%;">
        <h2 style="font-size: 49px; font-weight: 900; margin: 0; color: #fff; text-shadow: 2px 2px 8px rgba(0,0,0,0.7); letter-spacing: 1px;">ANDAMAN ISLAND HOPPING</h2>
        <ul style="list-style: none; display: flex; flex-wrap: wrap; justify-content: center; margin-top: 30px; padding: 0;">
            <li style="display: flex; align-items: center; font-weight: 800; color: #fff; margin-right: 15px; font-size: 16px;">
            PORT BLAIR
            <span style="margin-left: 10px;"><img src="assets/img/Sirlanka/arrow-icon-by-roamers.png" alt="" style="width: 13px; margin-bottom: 3px;"></span>
            </li>
            <li style="display: flex; align-items: center; font-weight: 800; color: #fff; margin-right: 15px; font-size: 16px;">
            HAVELOCK ISLAND
            <span style="margin-left: 10px;"><img src="assets/img/Sirlanka/arrow-icon-by-roamers.png" alt="" style="width: 13px; margin-bottom: 3px;"></span>
            </li>
            <li style="display: flex; align-items: center; font-weight: 800; color: #fff; margin-right: 15px; font-size: 16px;">
            NEIL ISLAND
            <span style="margin-left: 10px;"><img src="assets/img/Sirlanka/arrow-icon-by-roamers.png" alt="" style="width: 13px; margin-bottom: 3px;"></span>
            </li>
            <li style="display: flex; align-items: center; font-weight: 800; color: #fff; font-size: 16px;">
            ROSS ISLAND
            </li>
        </ul>
        </div>
    </section>

    <div class="page-wrapper">
        <div class="enquiry-container">
            <!-- Side Information Area -->
            <!-- <div class="side-info">
                <div>
                    <h2>Ready for your next adventure?</h2>
                    <p>Unlock curated travel experiences. Our experts are ready to craft your dream itinerary.</p>
                    
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <i class="fa-solid fa-bolt"></i>
                            <span>Fast Response (24h)</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fa-solid fa-map-location-dot"></i>
                            <span>Bespoke Itineraries</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fa-solid fa-users"></i>
                            <span>Solo & Group Experts</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span>Top Rated Services</span>
                        </div>
                    </div>
                </div>
                
                <div style="margin-top: 40px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.15); position: relative; z-index: 1;">
                    <p style="font-size: 13px; margin-bottom: 8px; opacity: 0.7;">Direct Assistance</p>
                    <a href="tel:+918122121066" style="color: var(--secondary); text-decoration: none; font-weight: 800; font-size: 20px; display: flex; align-items: center; gap: 10px;">
                        <i class="fa-solid fa-phone-volume" style="font-size: 16px;"></i>
                        +91 81221 21066
                    </a>
                </div>
            </div> -->

            <!-- Main Form Section -->
            <div class="form-section">
                <div class="section-header">
                    <h1>Plan Your Trip</h1>
                    <p>Start your journey with a few simple details.</p>
                </div>

                <form action="andaman-enquiry-mail.send.php" method="POST">
                    
                    <div class="row" style="display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 0;">
                        <!-- Full Name -->
                        <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Full Name</label>
                            <div class="input-wrapper">
                                <i class="fa-regular fa-user"></i>
                                <input type="text" name="name" placeholder="Meena" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Email Address</label>
                            <div class="input-wrapper">
                                <i class="fa-regular fa-envelope"></i>
                                <input type="email" name="email" placeholder="meena@example.com" required>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp Number -->
                    <div class="form-group">
                        <label>WhatsApp Number</label>
                        <div class="whatsapp-wrapper">
                            <div class="country-code">
                                <img src="https://flagcdn.com/w40/in.png" alt="India Flag">
                                <span>+91</span>
                            </div>
                            <div class="input-wrapper" style="flex: 1;">
                                <input type="tel" name="phone" placeholder="Whatapp number" required style="padding-left: 20px;">
                            </div>
                        </div>
                    </div>

                    <!-- Destination interested -->
                    <div class="form-group">
                        <label>Which destination are you interested in?</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-earth-asia"></i>
                            <select name="destination" required>
                                <option value="" disabled selected>Select Destination</option>
                                <option value="Andaman Island Hopping">Andaman Island Hopping</option>
                                <option value="Munnar with Kolukkumalai">Munnar with Kolukkumalai</option>
                                <option value="Wonders of Wayanad">Wonders of Wayanad</option>
                                <option value="Ooty the Queen of Hills">Ooty the Queen of Hills</option>
                                <option value="Kodaikanal Trek with Poombarai">Kodaikanal Trek with Poombarai</option>
                                <option value="Chikmagalur Trek">Chikmagalur Trek</option>
                                <option value="Varkala & Munroe Flashpacking">Varkala & Munroe Flashpacking</option>
                                <option value="Leh Ladakh with Umling la">Leh Ladakh with Umling la</option>
                                <option value="Pondi Dive-in">Pondi Dive-in</option>
                                <option value="Goa Escape">Goa Escape</option>
                                <option value="Majestic Meghalaya">Majestic Meghalaya</option>
                                <option value="Kedarkantha Trek">Kedarkantha Trek</option>
                                <option value="Spiti Winter Expedition">Spiti Winter Expedition</option>
                                <option value="Spiti Chandratal Trek">Spiti Chandratal Trek</option>
                                <option value="Not Sure / Help Me Choose">Not Sure / Help Me Choose</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>

                    <!-- Number of People -->
                    <div class="form-group">
                        <label>Number of People</label>
                        <div class="radio-group">
                            <label class="radio-card">
                                <input type="radio" name="pax" value="Solo" checked>
                                <div class="radio-box">
                                    <i class="fa-solid fa-user"></i>
                                    <span>Solo</span>
                                </div>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="pax" value="Couple">
                                <div class="radio-box">
                                    <i class="fa-solid fa-heart"></i>
                                    <span>Couple</span>
                                </div>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="pax" value="3-5">
                                <div class="radio-box">
                                    <i class="fa-solid fa-users"></i>
                                    <span>3-5 Pax</span>
                                </div>
                            </label>
                            <label class="radio-card">
                                <input type="radio" name="pax" value="6+">
                                <div class="radio-box">
                                    <i class="fa-solid fa-people-group"></i>
                                    <span>6+ Group</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="row" style="display: flex; gap: 20px; flex-wrap: wrap;">
                         <!-- Type of Trip -->
                         <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Trip Preference</label>
                            <div class="input-wrapper">
                                <i class="fa-solid fa-suitcase"></i>
                                <select name="trip_type" required>
                                    <option value="Group Trip">Group Trip / Fixed Departure</option>
                                    <option value="Private Trip">Private / Customized Trip</option>
                                </select>
                            </div>
                        </div>

                        <!-- Month -->
                        <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Travel Month</label>
                            <div class="input-wrapper">
                                <i class="fa-regular fa-calendar-days"></i>
                                <select name="month" required>
                                    <option value="" disabled selected>Select Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="form-group">
                        <label>Additional Information (Optional)</label>
                        <div class="input-wrapper">
                            <textarea name="message" placeholder="Any specific requirements or travel goals?"></textarea>
                        </div>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="submit-btn" name="submit">
                        <span>Send My Enquiry</span>
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>

                </form>
            </div>
        </div>
    </div>

      <!-- Rewind -->
  <section class="scroll-section">
    <h3 class="head" style="text-align: center; margin-bottom: 20px;"> <img
        src="assets/img/valley-of-flowers/fast-backward.png" alt="rewind icon" style="width: 25px;"
        class="align-start me-2">Roamers Rewind <img src="assets/img/valley-of-flowers/fast-backward.png"
        alt="rewind icon" style="width: 25px;" class="align-start">
    </h3>
    <div class="swiper-container two">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slider-image">
            <img src="https://roamers.in/assets/img/andaman/Media/bharatpur-beach-neil-island.jpg" alt="Sri Lanka 1">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image">
            <img src="https://roamers.in/assets/img/andaman/Media/cellular-jail-in-andaman-reviews.jpg"
              alt="Sri Lanka 2">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image">
            <img src="https://roamers.in/assets/img/andaman/Media/pexels-asad-photo-maldives-1450353.jpg"
              alt="Sri Lanka 3">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image">
            <img src="https://roamers.in/assets/img/andaman/Media/andaman-markets.jpg" alt="Sri Lanka 4">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image">
            <img src="https://roamers.in/assets/img/andaman/Media/Portblair-group-min.jpg" alt="Sri Lanka 5">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image">
            <img src="https://roamers.in/assets/img/andaman/Media/610a5c749433a121_images-anthropological3-500x500.jpeg"
              alt="Sri Lanka 6">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image">
            <img src="https://roamers.in/assets/img/andaman/Media/61af5c4e959d8191_28.jpg" alt="Sri Lanka 8">
          </div>
        </div>

      </div>
      <div class="swiper-pagination d-none d-md-none"></div>
    </div>
  </section>

    <?php include('includes/footer.php'); ?>

    <script>
        // Subtle entrance staggered animations for benefit items
        document.addEventListener('DOMContentLoaded', () => {
            const items = document.querySelectorAll('.benefit-item');
            items.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-20px)';
                setTimeout(() => {
                    item.style.transition = 'all 0.5s cubic-bezier(0.16, 1, 0.3, 1)';
                    item.style.opacity = '1';
                    item.style.transform = 'translateX(0)';
                }, 400 + (index * 100));
            });
        });
    </script>

        
</body>
</html>
