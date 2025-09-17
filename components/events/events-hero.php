<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Munnar with Kolukkumalai Adventure - 3 Days 2 Nights | Roamers</title>
    <meta name="description"
        content="Join Roamers for an epic Munnar with Kolukkumalai adventure! Experience sunrise treks, zipline adventures, and the world's highest tea plantation. Book your 3D2N package now!">
    <meta name="keywords"
        content="Munnar travel, Kolukkumalai trek, Kerala adventure, group travel, solo travel, Roamers, 3 days 2 nights, tea plantation, sunrise trek">
    <meta name="author" content="Roamers">
    <meta name="title" content="Munnar with Kolukkumalai Adventure - 3 Days 2 Nights | Roamers">
    <meta property="og:title" content="Munnar with Kolukkumalai Adventure - Roamers">
    <meta property="og:description"
        content="Embark on an epic journey through Munnar and Kolukkumalai. Experience zipline adventures, sunrise treks, and the world's highest tea plantation with Roamers!">
    <meta property="og:image" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png">
    <meta property="og:image:secure_url" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png">
    <meta property="og:image:width" content="700">
    <meta property="og:image:height" content="500">
    <link rel="canonical" href="https://www.roamers.in/munnar-kolukkumalai-adventure">
    <link rel="shortcut icon" href="assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Event",
            "name": "Munnar with Kolukkumalai Adventure - 3 Days / 2 Nights",
            "description": "Sunrise trek at Kolukkumalai, zipline adventure, tea plantation visit, and curated group travel experience by Roamers.",
            "startDate": "2025-01-01",
            "eventStatus": "https://schema.org/EventScheduled",
            "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
            "location": {
                "@type": "Place",
                "name": "Munnar, Kerala",
                "address": {
                    "@type": "PostalAddress",
                    "addressRegion": "Kerala",
                    "addressCountry": "IN"
                }
            },
            "organizer": {
                "@type": "Organization",
                "name": "Roamers",
                "url": "https://www.roamers.in"
            },
            "offers": {
                "@type": "AggregateOffer",
                "priceCurrency": "INR",
                "lowPrice": "7999",
                "highPrice": "9999",
                "availability": "https://schema.org/InStock"
            }
        }
    </script>
    <script>
        let quantity = 1;
        const taxRate = 0; // flat tax handled separately
        const pricesByPackage = {
            'standard-pass': 299,
            'premium-pass': 299,
            'group-pass': 299
        };

        function getSelectedPackage() {
            const select = document.getElementById('packageType');
            return select ? select.value : 'standard-pass';
        }

        function formatINR(amount) {
            try {
                return new Intl.NumberFormat('en-IN').format(amount);
            } catch (e) {
                return amount.toFixed ? amount.toFixed(2) : amount;
            }
        }

        function syncHiddenFields(basePrice, tax, total) {
            document.getElementById('selected_quantity').value = String(quantity);
            document.getElementById('selected_package').value = getSelectedPackage();
            document.getElementById('calculated_base_price').value = String(basePrice);
            document.getElementById('calculated_tax').value = tax.toFixed(2);
            document.getElementById('calculated_total').value = total.toFixed(2);
        }

        function enforceGroupRules() {
            const isGroup = getSelectedPackage() === 'group-pass';
            const note = document.getElementById('groupNote');
            if (isGroup && quantity < 4) {
                quantity = 4;
            }
            if (note) note.style.display = isGroup ? 'inline' : 'none';
        }

        function updateAmounts() {
            enforceGroupRules();
            document.getElementById('quantity').textContent = String(quantity);
            const packageType = getSelectedPackage();
            const unitPrice = pricesByPackage[packageType] || pricesByPackage['standard-pass'];
            const subtotal = unitPrice * quantity;
            const tax = 20;
            const total = subtotal + tax;

            document.getElementById('price').textContent = `${formatINR(subtotal)} ₹`;
            document.getElementById('tax').textContent = `+ ${tax.toFixed(2)} Tax`;

            syncHiddenFields(unitPrice, tax, total);
        }

        function increaseQty() {
            quantity++;
            updateAmounts();
        }

        function decreaseQty() {
            const isGroup = getSelectedPackage() === 'group-pass';
            const minQty = isGroup ? 4 : 1;
            if (quantity > minQty) {
                quantity--;
                updateAmounts();
            }
        }

        function loginWithGoogle() {
            alert('Google login will be implemented here.');
        }

        // Hook up package change
        document.getElementById('packageType').addEventListener('change', function() {
            updateAmounts();
        });

        function setFieldError(inputEl, errorEl, message) {
            if (!inputEl || !errorEl) return;
            if (message) {
                errorEl.textContent = message;
                errorEl.style.display = 'block';
                inputEl.setAttribute('aria-invalid', 'true');
            } else {
                errorEl.textContent = '';
                errorEl.style.display = 'none';
                inputEl.removeAttribute('aria-invalid');
            }
        }

        function validateForm() {
            const nameInput = document.getElementById('full_name');
            const emailInput = document.getElementById('email');
            const phoneInput = document.getElementById('phone_number');
            const nameError = document.getElementById('error-name');
            const emailError = document.getElementById('error-email');
            const phoneError = document.getElementById('error-phone');

            let isValid = true;

            // Name validation
            const nameValue = (nameInput.value || '').trim();
            if (nameValue.length < 2) {
                setFieldError(nameInput, nameError, 'Please enter your full name.');
                isValid = false;
            } else {
                setFieldError(nameInput, nameError, '');
            }

            // Email validation
            const emailValue = (emailInput.value || '').trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
            if (!emailRegex.test(emailValue)) {
                setFieldError(emailInput, emailError, 'Enter a valid email address.');
                isValid = false;
            } else {
                setFieldError(emailInput, emailError, '');
            }

            // Phone validation
            const phoneValue = (phoneInput.value || '').trim();
            const phoneRegex = /^[0-9]{7,15}$/;
            if (!phoneRegex.test(phoneValue)) {
                setFieldError(phoneInput, phoneError, 'Enter a valid phone number (7-15 digits).');
                isValid = false;
            } else {
                setFieldError(phoneInput, phoneError, '');
            }

            return isValid;
        }

        // Form submission handler: populate hidden fields and allow submit if valid
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            const packageType = getSelectedPackage();
            const unitPrice = pricesByPackage[packageType] || pricesByPackage['standard-pass'];
            const subtotal = unitPrice * quantity;
            const tax = 20;
            const total = subtotal + tax;
            syncHiddenFields(unitPrice, tax, total);

            if (!validateForm()) {
                e.preventDefault();
                const firstError = document.querySelector('[aria-invalid="true"]');
                if (firstError) firstError.focus();
            }
        });

        // Initialize on load
        updateAmounts();
    </script>

    <!-- jQuery and Plugins -->
    <script src="assets/js/jquery/jquery-3.5.1.min.js" defer></script>
    <script src="assets/js/bootstrap/popper.min.js" defer></script>
    <script src="assets/js/bootstrap/bootstrap.min.js" defer></script>
    <script src="assets/js/plugins/plugins.min.js" defer></script>
    <script src="assets/js/active.js" defer></script>
</head>

<style>
    * {
        font-family: 'Manrope', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {

        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .event-banner {
        background: linear-gradient(135deg, #4ec0db 0%, #2ecc71 50%, #27ae60 100%);
        padding: 40px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .banner-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 2;
    }

    .banner-title {
        font-size: 3.5rem;
        font-weight: 800;
        color: #ffffff;
        margin: 0 0 20px 0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .banner-subtitle {
        color: white;
        font-size: 1.2rem;
        margin: 0 0 30px 0;
        font-weight: 500;
    }

    .banner-illustrations {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 30px 0;
    }

    .illustration {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: white;
    }

    .people-illustrations {
        display: flex;
        gap: 15px;
        justify-content: center;
        margin: 20px 0;
    }

    .person-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: white;
    }

    .event-tags {
        display: flex;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        top: -15px;
    }

    .tag {
        padding: 8px 20px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 0.9rem;
    }

    .tag-offline {
        background-color: #8e44ad;
        color: white;
    }

    .tag-soldout {
        background-color: #e74c3c;
        color: white;
    }

    .main-container {
        max-width: 1400px;
        margin: 30px auto;
        padding: 0 20px;
    }

    .event-layout {
        display: grid;
        grid-template-columns: 1fr 400px;
        gap: 40px;
        align-items: start;
    }

    .event-details {
        /* background: white; */
        border-radius: 30px;
        /* padding: 40px; */
        /* box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08); */
    }

    .event-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin: 0 0 30px 0;
        line-height: 1.3;
    }

    .section-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #2c3e50;
        margin: 30px 0 20px 0;
    }

    .event-description {
        color: #555;
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 30px;
    }

    .terms-list {
        color: #555;
        font-size: 1rem;
        line-height: 1.6;
    }

    .terms-list li {
        margin-bottom: 12px;
    }

    .booking-card {
        background: white;
        border-radius: 30px;
        padding: 10px 40px 20px 40px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        position: sticky;
        top: 20px;
    }

    .location-header {
        color: #27ae60;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .booking-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: #2c3e50;
        margin: 0 0 25px 0;
    }

    .event-info {
        margin-bottom: 25px;
    }

    .info-item {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        /* color: #555;
        font-size: 1rem; */
    }

    .info-item i {
        width: 20px;
        margin-right: 12px;
        color: #4ec0db;
    }

    .ticket-section {
        margin-bottom: 25px;
    }

    .section-label {
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 10px;
        font-size: 1rem;
    }

    .ticket-dropdown {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 1rem;
        background: white;
        margin-bottom: 15px;
    }

    .ticket-dropdown:hover {
        /* border-color: #4ec0db; */
        box-shadow: 0 0 0 3px rgba(78, 192, 219, 0.15);
    }

    .ticket-dropdown:focus {
        outline: none;
        border-color: #4ec0db;
    }

    .quantity-selector {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .qty-btn {
        width: 40px;
        height: 40px;
        border: 2px solid #e0e0e0;
        background: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 1.2rem;
        color: #555;
    }

    .qty-btn:hover {
        border-color: #4ec0db;
        color: #4ec0db;
    }

    .qty-display {
        font-size: 1.2rem;
        font-weight: 600;
        color: #2c3e50;
        min-width: 30px;
        text-align: center;
    }

    .amount-section {
        margin-bottom: 25px;
    }

    .amount-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
    }

    .amount-label {
        color: #555;
        font-size: 1rem;
    }

    .amount-value {
        font-weight: 600;
        color: #2c3e50;
        font-size: 1.1rem;
    }

    .tax-amount {
        color: #27ae60;
        font-size: 0.95rem;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-input {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s;
    }

    .form-input:focus {
        outline: none;
        border-color: #4ec0db;
    }

    .phone-input-group {
        display: flex;
        gap: 10px;
    }

    .country-code {
        width: 80px;
        padding: 12px 10px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 1rem;
        background: white;
    }

    .phone-input {
        flex: 1;
    }

    .book-btn {
        width: 100%;
        background: #4ec0db;
        color: white;
        border: none;
        padding: 15px;
        border-radius: 8px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: background-color 0.3s;
        margin-bottom: 15px;
    }

    .book-btn:hover {
        background: rgb(133, 210, 228);
    }

    .divider {
        text-align: center;
        color: #999;
        margin: 15px 0;
        position: relative;
    }

    .divider::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 1px;
        background: #e0e0e0;
        z-index: 1;
    }

    .divider span {
        background: white;
        padding: 0 15px;
        position: relative;
        z-index: 2;
    }

    .google-btn {
        width: 100%;
        background: white;
        color: #555;
        border: 2px solid #e0e0e0;
        padding: 15px;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: border-color 0.3s;
    }

    .google-btn:hover {
        border-color: #4ec0db;
    }

    .google-logo {
        width: 20px;
        height: 20px;
    }

    /* Accessibility & focus states */
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

    .form-input:focus-visible,
    .ticket-dropdown:focus-visible,
    .country-code:focus-visible,
    .qty-btn:focus-visible,
    .book-btn:focus-visible,
    .google-btn:focus-visible {
        outline: 3px solid #4ec0db;
        outline-offset: 2px;
    }

    .form-error {
        color: #e74c3c;
        font-size: 0.9rem;
        margin-top: 6px;
    }

    .form-hint {
        color: #777;
        font-size: 0.9rem;
        margin-top: 6px;
    }

    @media (max-width: 768px) {
        .event-layout {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .banner-title {
            font-size: 2.5rem;
        }

        .event-title {
            font-size: 2rem;
        }

        .booking-card {
            position: static;
        }

        .banner-illustrations {
            flex-direction: column;
            gap: 20px;
        }

        .people-illustrations {
            flex-wrap: wrap;
        }
    }


    @keyframes cardFadeInUp {
        0% {
            opacity: 0;
            transform: translateY(40px) scale(0.96);
        }

        60% {
            opacity: 1;
            transform: translateY(-8px) scale(1.03);
        }

        100% {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .animated-event-card {
        animation: cardFadeInUp 1s cubic-bezier(0.23, 1, 0.32, 1);
        will-change: opacity, transform;
        transition: box-shadow 0.3s;
        position: relative;
        overflow: hidden;
    }

    .animated-event-card::before {
        content: "";
        position: absolute;
        left: -60px;
        top: 0;
        width: 60px;
        height: 100%;
        background: linear-gradient(120deg, #fff6, #4ec0db44 60%, transparent 100%);
        transform: skewX(-20deg);
        animation: shine 2.2s 0.5s linear infinite;
        pointer-events: none;
        opacity: 0.7;
    }

    @keyframes shine {
        0% {
            left: -60px;
        }

        80% {
            left: 110%;
        }

        100% {
            left: 110%;
        }
    }


    .event-banner-wrapper {
        width: 100%;
        height: 400px !important;

    }

    .event-banner-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    @media (max-width: 768px) {
        .event-banner-wrapper {
            height: 180px !important;
            /* padding: 0px 10px 0px 10px; */
        }

        .event-banner-image {
            width: 100%;
            height: 500px !important;
            object-fit: cover;
            display: block;
        }

    }

    /* .main-container {
            background: #fff;
        } */

    @media (max-width: 768px) {
        .main-container {
            max-width: 1400px;
            margin: 50px auto;
            padding: 0 20px;
        }
    }


    @keyframes pulseTitle {
        0% {
            text-shadow: 0 2px 12px #0002, 0 0 0 #fff;
        }

        100% {
            text-shadow: 0 2px 18px #fff8, 0 0 8px #fff6;
        }
    }


    @keyframes cardPopIn {
        0% {
            transform: scale(0.95) translateY(30px);
            opacity: 0;
        }

        60% {
            transform: scale(1.05) translateY(-8px);
            opacity: 1;
        }

        100% {
            transform: scale(1) translateY(0);
            opacity: 1;
        }
    }

    @keyframes heartBeat {

        0%,
        100% {
            transform: scale(1);
        }

        20% {
            transform: scale(1.2);
        }

        40% {
            transform: scale(0.95);
        }

        60% {
            transform: scale(1.1);
        }

        80% {
            transform: scale(0.98);
        }
    }

    .animated-card-pop {
        animation: cardPopIn 0.9s cubic-bezier(.23, 1.01, .32, 1) both;
    }

    .animated-heart-beat {
        animation: heartBeat 1.2s infinite;
        display: inline-block;
    }
</style>

<!-- Main Content -->
<div class="main-container">
    <div class="event-layout">
        <!-- Left Column: Event Details -->
        <div class="event-details">
            <div class="card mb-4 animated-event-card"
                style="background-color: #4ec0db; border-radius: 24px; box-shadow: 0 8px 32px 0 rgba(0,0,0,0.18), 0 4px 20px rgba(0,0,0,0.08); border: none;">
                <div class="card-body">
                    <h3 class="text-white py-2 px-2 event-title-responsive" style="letter-spacing: 1px; font-weight: 700;">
                        <span style="display:inline-block;">
                            Strangers Meetup: Meet Your Future Travel Buddies
                        </span>
                    </h3>
                    <style>
                        @media (max-width: 600px) {
                            .event-title-responsive {
                                font-size: 17px !important;
                                padding-left: 0.5rem !important;
                                padding-right: 0.5rem !important;
                                text-align: left !important;
                                line-height: 1.3 !important;
                                word-break: break-word;
                            }
                        }

                        @media (min-width: 601px) and (max-width: 900px) {
                            .event-title-responsive {
                                font-size: 1rem !important;
                            }
                        }

                        @media (min-width: 901px) {
                            .event-title-responsive {
                                font-size: 1.5rem !important;
                            }
                        }
                    </style>
                </div>
            </div>

            <div class="card mb-4 p-2"
                style="border-radius: 24px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); border: none; background: #e3f6fd;">
                <div class="card-body">
                    <div class="section-title mb-2">Event Details</div>
                    <p class="pulse mb-0" style="line-height: 2.4;">
                        Love to travel but don’t always find people who share the same vibe? This is your space. Imagine walking into a room full of curious travellers, solo explorers, and adventure seekers who are just as excited to swap stories, laugh over travel fails, and dream up the next Strangers trip together.<br><br>
                    <div class="card mb-3" style="background: #e3f6fd; border-radius: 16px; box-shadow: 0 2px 10px rgba(0,0,0,0.06); border: 2px solid white;">
                        <div class="card-body" style="padding: 1.2rem 1.5rem;">
                            <strong>Here’s what’s waiting for you:</strong>
                            <ul style="list-style: none; padding-left: 0; margin-bottom: 0; margin-top: 12px;">
                                <li style="margin-bottom: 10px;">
                                    <i class="fa-solid fa-star me-1" style="color: #f7b731;"></i>
                                    Fun icebreakers that feel more like games than small talk
                                </li>
                                <li style="margin-bottom: 10px;">
                                    <i class="fa-solid fa-star me-1" style="color: #f7b731;"></i>
                                    Travel story circles where you’ll hear wild adventures &amp; hidden gem tips
                                </li>
                                <li style="margin-bottom: 10px;">
                                    <i class="fa-solid fa-users me-1" style="color: #0984e3;"></i>
                                    Like-minded people who are open, friendly, and love to explore
                                </li>
                                <li style="margin-bottom: 10px;">
                                    <i class="fa-solid fa-user-friends me-1" style="color: #00b894;"></i>
                                    A chance to find your next travel buddy for upcoming Roamers trips
                                </li>
                                <li>
                                    <i class="fa-regular fa-face-laugh-beam me-1" style="color: #e17055;"></i>
                                    An evening filled with good vibes, laughter, and meaningful connections
                                </li>
                            </ul>
                        </div>
                    </div>
                    Whether you’re a Stranger or traveller looking for your tribe, planning your very first adventure, or simply curious about exploring someday – this is where it all begins.<br><br>
                    This isn’t just a meetup, it’s a community moment, a safe, welcoming space where strangers become friends, and friends become co-travellers.<br><br>
                    So come join us for a night of conversations, connections, and stories that might just inspire your next journey. 🗺️💫<br>
                    <strong>👉 Spots are limited. Save yours now and let’s create memories together, even before the trip begins!</strong>
                    </p>
                </div>
            </div>

            <div class="card p-2"
                style="border-radius: 24px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); border: none; background: #e3f6fd;">
                <div class="card-body">
                    <section id="terms">
                        <div class="important-notes">
                            <div class="section-title mb-3">Terms &amp; Conditions</div>
                            <div>
                                <p>
                                    <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                                    Once booked, tickets cannot be refunded or exchanged.
                                </p>
                                <p>
                                    <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                                    Photos and videos may be taken during the event and used for promotional purposes.
                                </p>
                                <p>
                                    <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                                    Tickets are strictly non-transferable. Any resale will result in cancellation without refund or compensation.
                                </p>
                                <p>
                                    <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                                    An internet/processing fee may apply per ticket. Please review the total before completing payment.
                                </p>
                                <p>
                                    <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                                    If you’re feeling unwell, please avoid purchasing tickets or attending the event.
                                </p>
                                <p>
                                    <i class="fa-solid fa-circle-check me-2 pulse" style="color: green;"></i>
                                    Arrive at least 15 minutes before the event to ensure smooth entry.
                                </p>

                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="card animated-card-pop"
                style="border-radius: 18px; box-shadow: 0 2px 12px rgba(39, 174, 96, 0.08); border: 1px solid #e17055; margin-top: 20px; background: #ffe6ef;">
                <div class="card-body" style="text-align: center;">
                    <span style="font-size: 1.1rem; color: #e17055; font-weight: 600;">
                        <i class="fa-solid fa-heart me-1 animated-heart-beat" style="color: #e17055;"></i>
                        Join us for an evening of fun, laughter, and connection!
                    </span>
                </div>
            </div>
        </div>

        <!-- Right Column: Booking Form -->
        <div class="booking-card">

            <h3 class="section-title">
                <i class="fa-solid fa-location-dot" style="color: #4ec0db; margin-right: 8px;"></i>
                Backyard - Adyar, Chennai
            </h3>

            <div class="pulse"
                style="display: flex; flex-direction: column; align-items: flex-start; gap: 18px; width: 100%; font-size: 1.08rem; color: #444; margin-bottom: 20px;">
                <div style="display: flex; align-items: flex-start; gap: 14px;">
                    <i class="fa-regular fa-calendar-days" aria-hidden="true"
                        style="margin-top: 2px; min-width: 22px; font-size: 1.15em; color: #4ec0db;"></i>
                    <span>
                        <span style="font-weight: 500;">Sep 21, 2025</span>
                        <span style="color: #888;"> | Sunday</span>
                    </span>
                </div>
                <div style="display: flex; align-items: flex-start; gap: 14px;">
                    <i class="fa-regular fa-clock" aria-hidden="true"
                        style="margin-top: 2px; min-width: 22px; font-size: 1.15em; color: #4ec0db;"></i>
                    <span>
                        <span style="font-weight: 500;">5:30 PM - 8:30 PM</span>
                    </span>
                </div>
                <div style="display: flex; align-items: flex-start; gap: 14px;">
                    <i class="fa-solid fa-location-dot" aria-hidden="true"
                        style="margin-top: 2px; min-width: 22px; font-size: 1.15em; color: #4ec0db;"></i>
                    <span>
                        53/23, 3rd Main Road, Gandhi Nagar, Adyar, Chennai, Tamil Nadu 600020
                    </span>
                </div>
            </div>

            <div class="ticket-section">
                <div class="section-label pulse">Choose Package Type</div>
                <select class="ticket-dropdown " id="packageType" name="package_type" aria-label="Package Type">
                    <option value="standard-pass">Female</option>
                    <option value="premium-pass">Male</option>
                    <!-- <option value="group-pass">Group Pass (4+ people)</option> -->
                </select>

                <div class="quantity-selector">
                    <button class="qty-btn" type="button" onclick="decreaseQty()"
                        aria-label="Decrease quantity">-</button>
                    <span class="qty-display pulse" id="quantity" aria-live="polite">1</span>
                    <button class="qty-btn" type="button" onclick="increaseQty()"
                        aria-label="Increase quantity">+</button>
                </div>
                <small id="groupNote" class="pulse" style="display:none;color:#e67e22;">Group Pass requires minimum
                    4
                    travelers.</small>
            </div>

            <div class="amount-section">
                <div class="section-label pulse">Amount</div>
                <div class="amount-row">
                    <span class="amount-label pulse">Price</span>
                    <span class="amount-value pulse" id="price" aria-live="polite" role="status">299 ₹</span>
                </div>
            </div>

            <form method="POST" action="events-send-mail.php">
                <div class="form-group">
                    <label for="full_name" class="section-label pulse">Full Name</label>
                    <input type="hidden" name="event_type" value="stranger-events">
                    <input id="full_name" type="text" class="form-input" name="full_name"
                        placeholder="e.g., Priya Sharma" autocomplete="name" required aria-required="true"
                        aria-describedby="error-name">
                    <div id="error-name" class="form-error" role="alert" aria-live="polite" style="display:none;">
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone_number" class="section-label pulse">Phone Number</label>
                    <input id="phone_number" type="tel" class="form-input" name="phone_number" inputmode="numeric"
                        pattern="[0-9]{7,15}" minlength="7" maxlength="15" placeholder="Enter phone number"
                        autocomplete="tel-national" required aria-required="true" aria-describedby="error-phone">
                    <div id="error-phone" class="form-error" role="alert" aria-live="polite" style="display:none;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="dob" class="section-label pulse">Date of Birth</label>
                    <input id="dob" type="date" class="form-input" name="dob"
                        placeholder="YYYY-MM-DD" autocomplete="bday" required aria-required="true"
                        aria-describedby="error-dob">
                    <div id="error-dob" class="form-error" role="alert" aria-live="polite" style="display:none;">
                    </div>
                </div>

                <input type="hidden" name="selected_quantity" id="selected_quantity" value="1">
                <input type="hidden" name="selected_package" id="selected_package" value="standard-pass">
                <input type="hidden" name="calculated_base_price" id="calculated_base_price" value="299">

                <button type="submit" class="book-btn pulse" style="animation: bounceIn 0.7s; border-radius: 30px;">
                    Register Now
                    <i class="fas fa-arrow-right" style="animation: arrowMove 1.2s infinite alternate;"></i>
                </button>
                <style>
                    @keyframes bounceIn {
                        0% {
                            opacity: 0;
                            transform: scale(0.7) translateY(40px);
                        }

                        60% {
                            opacity: 1;
                            transform: scale(1.05) translateY(-10px);
                        }

                        80% {
                            transform: scale(0.98) translateY(2px);
                        }

                        100% {
                            opacity: 1;
                            transform: scale(1) translateY(0);
                        }
                    }

                    @keyframes arrowMove {
                        0% {
                            transform: translateX(0);
                        }

                        100% {
                            transform: translateX(8px);
                        }
                    }
                </style>
                <!-- <div class="info-item" style="width:100%;">
                        <form action="https://www.google.com/maps/dir/" method="get" target="_blank"
                            style="display:block; width:100%;">
                            <input type="hidden" name="api" value="1">
                            <input type="hidden" name="destination"
                                value="Pink lotus studio, 17, 2nd Street, near Jain overseas, Bharathy Nagar, Guindy, Chennai">
                            <button type="submit" class="book-btn no-hover pulse"
                                style="display:flex;align-items:center;gap:6px;width:100%;">
                                <i class="fas fa-map-marker-alt"></i> Google Map Directions
                            </button>
                        </form>
                    </div> -->
            </form>
        </div>
    </div>
</div>

<a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1">
    <img src="assets/img/icon/whatsapp.svg" alt="WhatsApp" loading="lazy">
</a>