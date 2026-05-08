<?php
session_start();
include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form - Roamers | Spiti Valley</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
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
            /* --shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1); */
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
            padding: 80px 80px;
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
            from {
                opacity: 0;
                transform: translateY(40px) scale(0.98);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
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
            margin: 0 0 8px 0;
            font-weight: 800;
            font-family: 'Outfit', sans-serif;
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
            display: flex;
            align-items: center;
            width: 100%;
            height: 52px;
            background: #ffffff;
            border: 1.5px solid #cbd5e1;
            border-radius: 16px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
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
            z-index: 2;
        }

        .input-wrapper input,
        .input-wrapper select {
            width: 100% !important;
            height: 100% !important;
            padding: 0 45px 0 52px;
            border: none !important;
            border-radius: 0 !important;
            font-size: 15px;
            font-weight: 500;
            background: transparent !important;
            outline: none !important;
            color: var(--text);
            position: relative;
            z-index: 1;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .input-wrapper .dropdown-icon {
            position: absolute;
            right: 20px;
            left: auto;
            top: 50%;
            transform: translateY(-50%);
            color: #b0bec5;
            font-size: 14px;
            pointer-events: none;
            z-index: 2;
            transition: all 0.3s;
        }

        .input-wrapper:focus-within .dropdown-icon {
            color: var(--secondary);
            transform: translateY(-50%) rotate(180deg);
        }

        .input-wrapper:focus-within {
            border-color: var(--secondary);
            box-shadow: 0 0 0 4px rgba(78, 192, 219, 0.1), var(--glow);
        }

        .input-wrapper:focus-within i {
            color: var(--secondary);
            transform: translateY(-50%) scale(1.1);
        }

        .input-wrapper-textarea {
            width: 100% !important;
            padding: 15px 20px;
            border: 1.5px solid #cbd5e1;
            border-radius: 16px;
            font-size: 15px;
            font-weight: 500;
            background: #ffffff;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            outline: none;
            min-height: 120px;
            resize: vertical;
        }

        .input-wrapper-textarea:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 4px rgba(78, 192, 219, 0.1), var(--glow);
        }

        .whatsapp-wrapper {
            display: flex;
            align-items: center;
            border: 1.5px solid #cbd5e1;
            border-radius: 16px;
            overflow: hidden;
            background: #ffffff;
            transition: all 0.3s;
            height: 52px;
        }

        .whatsapp-wrapper input {
            width: 95% !important;
        }

        .whatsapp-wrapper:focus-within {
            border-color: var(--secondary);
            box-shadow: 0 0 0 4px rgba(78, 192, 219, 0.1), var(--glow);
        }

        .country-code {
            display: flex;
            align-items: center;
            padding: 0 18px;
            height: 52px;
            background: #fdfdfd;
            border-right: 1.5px solid #cbd5e1;
            font-weight: 700;
            font-size: 14px;
        }

        .country-code img {
            width: 22px;
            margin-right: 10px;
            border-radius: 2px;
        }

        .whatsapp-wrapper input {
            flex: 1;
            border: none !important;
            padding: 15px 20px;
            background: transparent !important;
            font-size: 15px;
            font-weight: 500;
            outline: none;
            height: 52px;
        }

        .whatsapp-wrapper input:focus {
            box-shadow: none !important;
        }

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
            border: 1.5px solid #cbd5e1;
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

        .radio-card input:checked+.radio-box {
            border-color: var(--secondary);
            background: rgba(78, 192, 219, 0.06);
            box-shadow: var(--glow);
        }

        .radio-card input:checked+.radio-box i {
            color: var(--secondary);
            transform: scale(1.2);
        }

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

        .submit-btn:active {
            transform: translateY(-1px) scale(1);
        }

        @media (max-width: 950px) {
            .enquiry-container {
                flex-direction: column;
                max-width: 600px;
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
        }
    </style>
</head>

<body>
    <section>
        <img src="assets/img/spiti-valley/spiti-cover.jpg" alt="Spiti Valley Banner"
            style="width: 100%; height: 50vh; object-fit: cover; object-position: top; z-index: 0; opacity: 1; margin-top: 68px;">
    </section>

    <div class="page-wrapper">
        <div class="enquiry-container">
            <div class="form-section">
                <div class="section-header">
                    <h1>Spiti Valley Plan Your Trip</h1>
                </div>

                <form action="spiti-valley-enquiry-mail.send.php" method="POST">
                    <div class="row" style="display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 0;">
                        <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Full Name</label>
                            <div class="input-wrapper">
                                <i class="fa-regular fa-user"></i>
                                <input type="text" name="name" placeholder="Enter Your Full Name" required>
                            </div>
                        </div>

                        <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Email Address</label>
                            <div class="input-wrapper ">
                                <i class="fa-regular fa-envelope"></i>
                                <input type="email" name="email" placeholder="Enter Your Email Address" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>WhatsApp Number</label>
                        <div class="whatsapp-wrapper">
                            <div class="country-code">
                                <img src="https://flagcdn.com/w40/in.png" alt="India Flag">
                                <span>+91</span>
                            </div>
                            <input type="tel" name="phone" placeholder="Enter WhatsApp Number" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Which destination are you interested in?</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-earth-asia"></i>
                            <select name="destination" required>
                                <option value="Spiti Valley">Spiti Valley</option>
                            </select>
                            <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                        </div>
                    </div>

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
                        <div class="form-group" style="flex: 1; min-width: 220px;">
                            <label>Trip Preference</label>
                            <div class="input-wrapper">
                                <i class="fa-solid fa-suitcase"></i>
                                <select name="trip_type" required>
                                    <option value="Group Trip">Group Trip / Fixed Departure</option>
                                    <option value="Private Trip">Private / Customized Trip</option>
                                </select>
                                <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                            </div>
                        </div>

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
                                <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Additional Information (Optional)</label>
                        <textarea class="input-wrapper-textarea" name="message"
                            placeholder="Any specific requirements or travel goals?"></textarea>
                    </div>

                    <button type="submit" class="submit-btn" name="submit">
                        <span>Send My Enquiry</span>
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>
</body>

</html>

