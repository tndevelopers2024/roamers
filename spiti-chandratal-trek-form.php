<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta property="og:image:secure_url" content="" width="600" height="600" alt="image for spiti chandratal" />
    <title>Roamers - Spiti Chandratal Trek - Form</title>

    <!-- SEO Meta Description -->
    <meta name="description" content="Book your Spiti Chandratal Trek with Roamers. Fill in your details and select your preferred travel dates." />
    <meta name="author" content="Roamers" />
    <meta property="og:image:width" content="700" />
    <meta property="og:image:height" content="500" />

    <!-- Basic Open Graph tags -->
    <meta property="og:title" content="Roamers - Spiti Chandratal Trek" />
    <meta property="og:description" content="Book your Spiti Chandratal Trek with Roamers. High altitude adventure, ancient monasteries and Chandratal Lake." />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Roamers - Spiti Chandratal Trek" />
    <meta name="twitter:description" content="Book your Spiti Chandratal Trek with Roamers." />
    <meta name="twitter:image" content="" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/valley-of-flowers.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/Logo/Logo mark-01.png" type="image/x-icon">
    <link rel="shortcut icon" href="./assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- All CSS Files -->
    <link rel="stylesheet" href="assets/css/srilanka.css">
    <!-- Font Awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');

        h1, h2, h3, h4, h5, h6, p, span, li, button, .btn, a, .head, div, th, td, tr {
            font-family: "Urbanist", sans-serif !important;
        }

        .available-box {
            padding: 20px;
            border-radius: 10px;
            height: 65vh;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .available-box::-webkit-scrollbar { width: 10px; background-color: #a3a3a3; border-radius: 10px; }
        .available-box::-webkit-scrollbar-thumb { background: #4ec0db; border-radius: 10px; }
        .available-box h3 { margin-bottom: 20px; text-align: center; }
        .cost-col h2 { margin-bottom: 20px; }

        .details-box {
            padding: 10px 30px;
            background: #4ec0db;
            color: #fff !important;
            border-radius: 10px;
            justify-content: space-between;
            transition: background 0.2s linear;
            position: relative;
            cursor: pointer;
        }
        .details-box:before {
            content: "";
            height: 15px;
            width: 15px;
            border: 4px solid #fff;
            border-left: transparent;
            border-top: transparent;
            position: absolute;
            right: 30px;
            transform: rotate(45deg) translateY(-50%);
        }
        .details-box:hover { background-color: #094067; }
        .details-box.active { background-color: #094067; color: white; }
        .details-head h4 { color: #fff !important; font-size: 20px !important; }

        .price-box {
            border: 1px solid #4ec0db;
            border-radius: 10px;
            background-color: aliceblue;
        }
        .price-box .row { transition: 0.5s; cursor: pointer; margin: 0px 20px; position: relative; }
        .price-box .row:before {
            content: "";
            position: absolute;
            bottom: 0; left: 0; z-index: 0;
            height: 2px; width: 100%;
            background: linear-gradient(90deg, rgba(2,0,36,0) 0%, rgba(31,130,255,1) 50%, rgba(0,212,255,0) 100%);
        }
        .price-box h5 { font-size: 14px }
        .price-box .col { place-content: center !important; }

        .costing-table {
            border: 1px solid #ddd;
            border-radius: 20px;
            overflow: hidden;
            background-color: aliceblue;
        }
        .costing-table th, .costing-table td {
            text-align: center;
            vertical-align: middle;
            border-radius: 20px;
            font-size: 16px;
        }
        .costing-table th { background-color: #4ec0db; font-weight: bold; font-size: 16px; }

        .starting-price { margin-top: 20px; font-size: 22px; font-weight: bold; color: #4ec0db; }
        .starting-price-box { display: flex; gap: 20px; }

        .book-btn {
            border: none;
            padding: 10px 30px;
            background: #094067;
            border-radius: 2rem;
            color: #fff;
            font-size: 20px;
        }

        .prev-step { background: #fff; color: black; border: 1px solid #094067; }

        thead { background: #4ec0db; color: #fff; }
        .date h5 { font-size: 18px; }
        .price-col h4 { font-size: 16px; }
        .price-col { align-items: center; display: flex; gap: 5px; }
        .price-box h5, p, h4 { margin-bottom: 0px !important; }

        .glowing-text {
            font-size: 16px !important;
            background: linear-gradient(to right, #ff5858, #f857a6);
            color: #fff;
            position: absolute;
            left: 121%;
            transform: translate(-10%, 0);
            width: 150px;
            top: -40px;
            padding: 3px 6px;
            border-radius: 10px;
        }
        .glowing-text i { animation: blink-effect 1s infinite; }
        @keyframes blink-effect { 0%{opacity:1} 50%{opacity:0} 100%{opacity:1} }

        .custom-date { position: relative; display: inline-block; width: 100%; }
        .custom-date input[type="date"] { padding: 10px 40px 10px 10px; font-size: 16px; border-radius: 8px; border: 1px solid #ccc; outline: none; }
        .custom-date i { position: absolute; right: 10px; top: 50%; transform: translateY(-50%); color: #666; pointer-events: none; }
        input[type="date"]::-webkit-calendar-picker-indicator { opacity: 0; cursor: pointer; position: absolute; right: 0; width: 100%; height: 100%; }

        #per-details { display: none; }
        #full-details { display: none; }

        .input-field input { border: 1px solid #a3a3a3; outline: none !important; box-shadow: none !important; }
        .phone[type="number"]::-webkit-outer-spin-button,
        .phone[type="number"]::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }
        input[type="number"] { -moz-appearance: textfield; }

        label { margin-top: 20px !important; margin-right: 20px !important; }
        textarea { resize: none !important; height: 200px !important; outline: none !important; border: 1px solid #a3a3a3 !important; box-shadow: none !important; width: 100% !important; }
        select { width: 100% !important; padding: 20px !important; outline: none !important; box-shadow: none !important; }

        .span { display: block; font-size: 18px !important; line-height: 10px !important; margin-top: 24px; color: #000 !important; font-weight: 600 !important; }
        .form-img img { border-radius: 10px; }

        .step-container { position: relative; text-align: center; transform: translateY(-43%); }
        .step-circle {
            width: 30px; height: 30px; border-radius: 50%; background-color: #fff;
            border: 2px solid #4ec0db; line-height: 30px; font-weight: bold;
            display: flex; align-items: center; justify-content: center; margin-bottom: 10px; cursor: pointer;
        }
        .step-line { position: absolute; top: 16px; left: 50px; width: calc(100% - 100px); height: 2px; background-color: #4ec0db; z-index: -1; }

        .booking-form-head { margin-top: 150px; font-weight: 800; font-size: 20px; }

        .radio-item [type="radio"] { display: none; }
        .radio-item + .radio-item { margin-top: 15px; }
        .radio-item label {
            display: block; padding: 20px 60px; border: 1px solid #a3a3a3; border-radius: 8px;
            cursor: pointer; font-size: 18px; font-weight: 400; min-width: 250px; width: 100%;
            white-space: nowrap; position: relative; transition: 0.4s ease-in-out 0s;
        }
        .radio-item label:after, .radio-item label:before { content: ""; position: absolute; border-radius: 50%; }
        .radio-item label:after { height: 19px; width: 19px; border: 2px solid rgb(49,173,255); left: 21px; top: calc(50% - 13px); }
        .radio-item label:before { background: #4ec0db; height: 20px; width: 20px; left: 21px; top: calc(50%-5px); transform: scale(5); opacity: 0; visibility: hidden; transition: 0.4s ease-in-out 0s; }
        .radio-item [type="radio"]:checked ~ label { border-color: #4ec0db; }
        .radio-item [type="radio"]:checked ~ label::before { opacity: 1; visibility: visible; transform: scale(1); }

        .selected-date-div { display: flex; align-items: center; justify-content: center; gap: 30px; width: fit-content; }
        .selected-div-h4 { display: flex; align-items: center; justify-content: center; background: #094067 !important; padding: 10px 20px; gap: 5px; border-radius: 16px; }
        .selected-date-div h4 { color: #fff; }

        .package-info-box { position: relative; overflow: hidden; min-height: 120px; transition: all 0.3s ease-in-out; opacity: 0; transform: translateY(-20px); }
        .package-info-box.show { opacity: 1; transform: translateY(0); }
        .background-image { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('assets/img/spiti/spiti1.jpg'); background-size: cover; background-position: center; filter: blur(4px); transform: scale(1.1); }
        .blur-overlay { position: relative; z-index: 1; border-radius: 15px; }
        .package-date { border-radius: 15px; padding: 1rem; margin-top: 1rem; text-align: center; }
        .date-label { display: flex; align-items: center; justify-content: center; gap: 8px; margin-bottom: 0; }
        .date-label i, .date-label span.text { color: #fff !important; font-size: 1.3rem; font-weight: 500; }
        .selected-date { font-size: 1.3rem !important; color: #fff !important; margin: 0; }
        .package-title { text-align: center; margin-bottom: 1rem; }
        .package-divider { background: #fff; height: 3px; width: 60px; margin: 1rem auto; border-radius: 2px; opacity: 0.8; }

        .custom-table thead { background-color: #4ec0db; color: #fff; }
        .custom-table th, .custom-table td { vertical-align: middle; text-align: center; border: 1px solid #dee2e6; border-radius: 8px; }
        .custom-table tbody tr:nth-child(even) { background-color: #f8f9fa; border-radius: 8px; }

        @media (min-width: 992px) {
            .col.order-lg-2 { position: sticky; top: 100px; height: fit-content; z-index: 100; }
        }
        @media (max-width: 768px) {
            .costing-table th, .costing-table td { font-size: 14px; padding: 10px 5px; }
            .cost-col { padding: 15px 10px !important; margin: 0 !important; }
            .booking-form-head { margin-top: 100px; }
            .starting-price { font-size: 18px !important; margin-top: 10px !important; text-align: center; }
            .starting-price-box { display: flex; flex-direction: column !important; gap: 10px; text-align: center !important; }
            .available-box { padding: 20px 10px !important; height: 40vh; }
        }
        @media screen and (min-width: 768px) {
            .booking-form-head { margin-top: 200px; font-size: 32px; }
        }
    </style>

</head>

<body>

    <!-- WhatsApp -->
    <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1">
        <img src="assets/img/icon/whatsapp.svg" alt="">
    </a>

    <!-- Header -->
    <?php include('includes/header.php'); ?>

    <!-- Page Heading -->
    <div class="text-center mb-4">
        <h1 class="booking-form-head" style="margin-bottom: 50px;">Spiti Chandratal Trek</h1>
    </div>

    <section class="">
        <div class="container">
            <form action="spiti-chandratal-trek-mail-send.php" method="POST" autocomplete="off">
                <div class="row row-cols-lg-2 row-cols-1 gy-4 px-0 mx-0 px-2 pb-5 px-md-5" id="date-form">

                    <!-- Left: Form Steps -->
                    <div class="col order-lg-1 order-2 shadow-lg p-3" style="border-radius:20px">
                        <div id="container" class="container" style="margin-top:30px;">
                            <div class="progress px-1" style="height: 3px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                            </div>
                        </div>

                        <div class="p-3" style="border-radius: 20px;">

                            <!-- Step 1: Available Dates -->
                            <div class="dates" id="dates">
                                <div id="monthly-data-container">
                                    <h4 class="text-center fw-bold">Available Dates</h4>
                                    <!-- Dynamic content inserted by JS -->
                                </div>
                                <div class="button-div d-flex justify-content-end mt-5"></div>
                            </div>

                            <!-- Step 2: Traveller Details -->
                            <div class="row gy-4" id="per-details">
                                <div>
                                    <button id="pre-btn" class="btn rounded-pill"> <span class="me-1">←</span> Back</button>
                                    <h4 class="text-center fw-bold">Traveller Details</h4>
                                </div>
                                <div class="per-form">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row row-cols-1 g-3">
                                                <div class="col">
                                                    <div class="input-field">
                                                        <input type="text" id="name" placeholder="Full Name" name="name" autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="input-field">
                                                        <input type="email" name="email" placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="input-field">
                                                        <input type="number" class="phone" id="phone" name="phone" placeholder="Phone Number" required
                                                            oninput="this.value = this.value.slice(0, 10).replace(/[^0-9]/g, '');">
                                                    </div>
                                                </div>
                                                <span class="span mt-5">Date Of Birth</span>
                                                <div class="col">
                                                    <div class="input-field">
                                                        <div class="custom-date">
                                                            <input type="date" name="dob" id="dob" placeholder="D.O.B" required>
                                                            <i class="fa-solid fa-calendar-days"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <span class="span mt-5">Gender</span>
                                                    <div class="radio-item"><input name="gender" id="radio1" type="radio" value="Male"><label for="radio1">Male</label></div>
                                                    <div class="radio-item"><input name="gender" id="radio2" type="radio" value="Female"><label for="radio2">Female</label></div>
                                                    <div class="radio-item"><input name="gender" id="radio3" type="radio" value="Others"><label for="radio3">Others</label></div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <span class="span mt-5">Sharing</span>
                                                    <div class="radio-item"><input name="sharing" id="radio4" type="radio" value="Double Sharing"><label for="radio4">Double Sharing</label></div>
                                                    <div class="radio-item"><input name="sharing" id="radio5" type="radio" value="Triple Sharing"><label for="radio5">Triple Sharing</label></div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <label for="travel-date" class="form-label span mt-5">Select Members:</label>
                                                    <div class="input-field">
                                                        <input type="hidden" id="travel-date" name="date" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-field mt-4">
                                                <input type="number" id="traveller-count" name="person-count" placeholder="Traveller Count" min="1" required>
                                                <span class="span mt-5">Pickup & Drop Location</span>
                                                <div class="input-field mt-4">
                                                    <select id="pickup" name="pickup" class="form-select mt-4" required>
                                                        <option value="" disabled selected>Select the Location</option>
                                                        <option value="Delhi">Delhi</option>
                                                        <option value="Manali">Manali</option>
                                                        <option value="Shimla">Shimla</option>
                                                    </select>
                                                </div>
                                                <span class="span mt-5">Address</span>
                                                <div class="input-field mt-4">
                                                    <input type="text" placeholder="Address 1" name="address1" required>
                                                </div>
                                                <div class="input-field mt-4">
                                                    <input type="text" placeholder="Address 2" name="address2" required>
                                                </div>
                                                <div class="row mt-4 gx-4">
                                                    <div class="col">
                                                        <div class="input-field">
                                                            <input type="text" placeholder="City" name="city" required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="input-field">
                                                            <input type="text" placeholder="Post Code" name="post-code" required
                                                                oninput="this.value = this.value.slice(0, 6).replace(/[^0-9]/g, '');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="button-div d-flex justify-content-end gap-2 mt-4">
                                                <button id="pre-btn" class="book-btn prev-step">Back</button>
                                                <button class="book-btn next-step" id="next-btn2">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3: Full Details -->
                            <div id="full-details">
                                <h1>full details</h1>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Costing Panel -->
                    <div class="col order-lg-2 order-1 shadow-lg p-4" style="border-radius:20px">
                        <div class="row px-2 px-md-4">
                            <div class="package-info-box" style="border-radius: 10px; display: none;" id="selected-date-box">
                                <div class="background-image shadow"></div>
                                <div class="blur-overlay">
                                    <div class="package-date">
                                        <div class="d-flex align-items-center justify-content-center border rounded">
                                            <h5 class="text-white fw-bold py-2 me-2" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Your adventure starts: </h5>
                                            <h5 class="fw-bold text-white" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5); border-radius: 5px;" id="selected-package-date">Date Not selected</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cost-col mt-3" style="border-radius: 20px;">
                                <h4 class="text-center mb-3 fw-bold">Costing</h4>
                                <div class="table-responsive">
                                    <table class="table custom-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sharing</th>
                                                <th scope="col">Offer Price</th>
                                            </tr>
                                        </thead>
                                        <tbody id="costing-table-body">
                                            <tr>
                                                <td>Triple Sharing</td>
                                                <td>₹21,999/- &nbsp;<strike style="color:#999;">₹28,999/-</strike></td>
                                            </tr>
                                            <tr>
                                                <td>Double Sharing</td>
                                                <td>₹23,999/- &nbsp;<strike style="color:#999;">₹30,999/-</strike></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="justify-content-center starting-price-box px-3">
                                    <p id="starting-price" class="starting-price"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>

    <!-- jQuery -->
    <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/active.js"></script>
    <script src="assets/js/dates.js"></script>

    <!-- Costing Data Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetch("./dynamic/database.json?v=" + new Date().getTime())
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.json();
                })
                .then(data => {
                    const locationKey = "spiti-chandratal";
                    const locationData = data[locationKey];

                    if (!locationData) {
                        console.error(`No data found for location: ${locationKey}`);
                        return;
                    }

                    if (!locationData.costing) {
                        console.error("No costing data found for the selected location.");
                        return;
                    }

                    const startingPriceElem = document.getElementById("starting-price");
                    if (startingPriceElem) {
                        startingPriceElem.textContent = `Starting Price: ${locationData.costing.startingPrice}`;
                    }

                    const tableBody = document.getElementById("costing-table-body");
                    if (!tableBody) return;

                    let rows = "";
                    locationData.costing.prices.forEach(price => {
                        rows += `<tr>
                            <td>${price.sharing || "N/A"}</td>
                            <td>${price.offer || "N/A"} &nbsp;<strike style="color:#999;">${price.mrp || ""}</strike></td>
                        </tr>`;
                    });
                    tableBody.innerHTML = rows;
                })
                .catch(error => console.error("Error loading costing data:", error));
        });
    </script>

    <!-- Dates Data Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetch("./dynamic/database.json?v=" + new Date().getTime())
                .then(response => response.json())
                .then(data => {
                    const locationKey = "spiti-chandratal";
                    const locationData = data[locationKey];

                    if (!locationData) {
                        console.error("No data found for the selected location.");
                        return;
                    }

                    const container = document.getElementById("monthly-data-container");
                    let firstMonth = true;

                    for (const [month, details] of Object.entries(locationData)) {
                        if (month === "costing") continue;

                        const monthBox = document.createElement("div");
                        monthBox.className = "details-box d-flex align-items-center mt-4";
                        monthBox.onclick = () => togglePriceBox(monthBox);

                        const monthHeader = document.createElement("div");
                        monthHeader.className = "details-head d-flex gap-2";
                        monthHeader.innerHTML = `<div class="icon"><i class="fa-solid fa-calendar-days mb-2"></i></div><h4>${month}</h4>`;

                        monthBox.appendChild(monthHeader);

                        const priceBox = document.createElement("div");
                        priceBox.className = "price-box mt-3";
                        priceBox.style.display = firstMonth ? "block" : "none";

                        if (firstMonth) {
                            monthBox.classList.add("active");
                        }

                        details.forEach(detail => {
                            const row = document.createElement("div");
                            row.className = "row";
                            row.style.cursor = "pointer";
                            row.onclick = function() { selectDateFromRow(detail.date); };
                            row.innerHTML = `
                                <div class="col text-center my-3 position-relative"><h5>${detail.date}</h5>
                                ${detail.special ? `<span class="glowing-text"><i class="fa-solid fa-angles-down"></i> ${detail.special} <i class="fa-solid fa-angles-down"></i></span>` : ""}</div>
                                <div class="col text-center">
                                    <p style="color:${detail.statusColor};">${detail.status}</p>
                                </div>
                                <div class="col price-col text-center"><p>Starts at:</p><h4>${detail.price}</h4></div>
                            `;
                            priceBox.appendChild(row);
                        });

                        container.appendChild(monthBox);
                        container.appendChild(priceBox);
                        firstMonth = false;
                    }
                })
                .catch(error => console.error("Error fetching data:", error));
        });

        function togglePriceBox(element) {
            const priceBox = element.nextElementSibling;
            const isVisible = priceBox.style.display === "block";

            document.querySelectorAll('.price-box').forEach(box => box.style.display = 'none');
            document.querySelectorAll('.details-box').forEach(box => box.classList.remove('active'));

            if (!isVisible) {
                priceBox.style.display = 'block';
                element.classList.add('active');
            } else {
                priceBox.style.display = 'none';
                element.classList.remove('active');
            }
        }

        function selectDateFromRow(date) {
            document.getElementById('travel-date').value = date;
            document.getElementById('selected-package-date').textContent = date;
            const box = document.getElementById('selected-date-box');
            box.style.display = 'block';
            setTimeout(() => box.classList.add('show'), 50);

            // Move to step 2
            document.getElementById('dates').style.display = 'none';
            document.getElementById('per-details').style.display = 'block';
            document.querySelector('.progress-bar').style.width = '50%';
        }
    </script>

    <!-- Back Button & Nav Scroll -->
    <script>
        document.addEventListener('click', function (e) {
            if (e.target && e.target.id === 'pre-btn') {
                e.preventDefault();
                document.getElementById('per-details').style.display = 'none';
                document.getElementById('dates').style.display = 'block';
                document.querySelector('.progress-bar').style.width = '0%';
            }
        });

        var navbar = document.querySelector("nav");
        window.onscroll = function () {
            if (window.scrollY > 100) { navbar.classList.add("scrolled"); }
            else { navbar.classList.remove("scrolled"); }
        };
    </script>

</body>
</html>
