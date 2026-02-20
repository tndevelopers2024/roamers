<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Roamers - Events (Feb 28)</title>
    <meta name="description"
        content="Whether you’re a Stranger or traveller looking for your tribe, planning your very first adventure, or simply curious about exploring someday – this is where it all begins. This isn’t just a meetup, it’s a community moment, a safe, welcoming space where strangers become friends, and friends become co-travellers. So come join us for a night of conversations, connections, and stories that might just inspire your next journey.">
    <meta name="keywords"
        content="Whether you’re a Stranger or traveller looking for your tribe, planning your very first adventure, or simply curious about exploring someday – this is where it all begins. This isn’t just a meetup, it’s a community moment, a safe, welcoming space where strangers become friends, and friends become co-travellers. So come join us for a night of conversations, connections, and stories that might just inspire your next journey.">
    <meta name="author" content="Themeland">
    <meta name="title" content="Roamers - Events">
    <meta property="og:title" content="Roamers - Strangers Meetup ">
    <meta property="og:description"
        content="Whether you’re a Stranger or traveller looking for your tribe, planning your very first adventure, or simply curious about exploring someday – this is where it all begins. This isn’t just a meetup, it’s a community moment, a safe, welcoming space where strangers become friends, and friends become co-travellers. So come join us for a night of conversations, connections, and stories that might just inspire your next journey.">
    <meta property="og:image" content="https://roamers.in/assets/img/event/cards/event-card-8.avif">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <link rel="canonical" href="https://www.roamers.in/">
    <link rel="shortcut icon" href="../assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Main Styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">


    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


</head>


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

    html,
    body {
        position: relative;
        height: 100%;
    }

    body {
        background: #000;

        font-size: 14px;
        color: #fff;
        margin: 0;
        padding: 0;
    }

    .event-banner-mobile img {
        margin-top: 80px;
        border-radius: 20px;
    }

    @media (max-width: 600px) {
        .event-banner-mobile {
            padding: 0;
            margin: 0 auto 20px auto;
            max-width: 100%;
        }

        .event-banner-mobile img {
            margin-top: 100px;
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 12px;
            display: block;
        }
    }

    .swiper {
        width: 100%;
        /* Set a fixed aspect ratio for the banner, e.g. 16:7 */
        aspect-ratio: 16 / 7;
        max-height: 420px;
        min-height: 220px;
        border-radius: 24px;
        overflow: hidden;
        /* Ensure proper container sizing */
        position: relative;
        background: #000;
    }

    .swiper-wrapper {
        height: 100%;
    }

    .swiper-slide {
        position: relative;
        text-align: center;
        font-size: 18px;
        background: #222;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        height: 100%;
        width: 100%;
        /* Ensure proper slide sizing */
        flex-shrink: 0;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        /* Prevent image drag ghosting */
        user-select: none;
        -webkit-user-drag: none;
        /* Ensure proper image scaling */
        min-width: 100%;
        min-height: 100%;
        max-width: none;
        max-height: none;
    }

    /* Responsive adjustments */
    @media (max-width: 900px) {
        .swiper {
            aspect-ratio: 16 / 9;
            max-height: 300px;
            min-height: 160px;
        }
    }

    @media (max-width: 600px) {
        .swiper {
            aspect-ratio: 16 / 11;
            max-height: 280px;
            min-height: 100px;
            border-radius: 12px;
            /* margin-top: 50px; */
        }
    }

    .gotoinsta:hover {
        background-color: #fff;
        color: #4ec0db;
        border: 2px solid #4ec0db;
        font-weight: 500;
    }

    .gotoinsta {
        z-index: 99 !important;
    }


    .new-year {
        position: absolute;
        height: 28px !important;
        width: 160px;
        transition: all 0.7s;
        border-radius: 0px !important;
    }

    .christmas {
        position: absolute;
        height: 28px !important;
        width: 160px;
        transition: all 0.7s;
        border-radius: 0px !important;
    }

    .slide-box {
        width: 100% !important;
        max-height: 600px;
    }

    .py-60 {
        padding: 60px 0px 70px 0;
    }

    .elfsight-app-d8fb604c-d55a-470d-bf66-89a000cb227d {
        display: none;
    }

    .quotes-img {
        display: grid !important;
        place-content: center !important;
    }

    .quotes-img-img1 {
        display: none !important;
    }

    .travelgram {
        background: url(../assets/img/images/instaFinal-1.avif) !important;
        background-size: 100% 100% !important;
        object-fit: cover !important;
        background-repeat: no-repeat !important;
        padding: 60px 0px !important;
    }



    .inner2 {
        padding-bottom: 5px !important;
    }



    .head {
        position: relative !important;
        font-weight: 700 !important;
        font-size: 32px !important;
        text-transform: capitalize !important;
        margin: 0 0 2rem !important;
        color: #1f2327 !important;
        line-height: 1.4 !important;
        text-align: center !important;
    }

    * {}

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
        margin: 10px 0 20px 0;
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



    /* dates update */
    .kodai-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .andaman-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .kerala-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .ooty-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .valley-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .view-more-btn {
        padding-top: 40px
    }

    .view-more-btn button {
        background-color: #4ec0db;
        color: #fff;
        font-weight: 600;
        padding: 10px 30px;
        border: none;
        border-radius: 3px;
    }

    .view-more-btn i {
        transition: 0.3s all;
        font-size: 17px;
        margin-left: 3px;
    }

    .view-more-btn button:hover i {
        transform: rotate(45deg);
    }

    .kedar-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .allappey-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .upcoming-mob {
        display: none;
    }

    .munnar-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .kodai1-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .pondi-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .wayanad-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .isha-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .chik-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .goa-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    .ladakh-dates {
        color: #5f6c7b !important;
        font-size: 11px !important;
        font-weight: 400 !important;
    }

    /*  */
    /* new */
    .result-item a {
        color: #000;
        font-size: 15px;
        padding: 10px;
        text-shadow: none;
    }

    .result-item a:hover {
        color: #000;
    }

    #search-results {
        color: red;
        text-shadow: 1px 2px 2px red;
        font-size: 15px;
        text-align: left;
        padding: 10px;
        border-radius: 5px;
        margin-top: 20px !important;
        padding-left: 0px;
        position: absolute;
        z-index: 99;
        gap: 20px;
        height: 400px;
        overflow: auto;
    }

    .result {
        display: flex;
        justify-content: center;
    }

    #search-container {
        max-width: 400px;
        margin: 0 auto;
    }

    .search {
        position: relative;
        top: 30%;
    }

    #search-results {
        list-style: none;
        padding: 0;
        margin: 10px 0;
        text-align: center;
    }

    .result-item {
        background-color: #fff;
        cursor: pointer;
        padding: 10px;
        transition: 0.5s all;
        border-bottom: 1px solid #000;
    }

    .result-item:hover {
        background-color: #4ec0db;
        color: #fff;
    }

    .result-item:hover .result-item a {
        color: #fff !important;
    }

    .result-item:hover a {
        color: #fff;
    }

    .search-bar-container {
        display: flex;
        align-items: center;
        background-color: transparent;
        padding: 5px;
        width: 250px;
        border: 1px solid #fff;
        height: 43px;
        border-radius: 50px;
        box-shadow: inset 2px 2px 8px #4ec0db, -2px -2px 10px #4ec0db;
        z-index: 99;
        transition: width 1.5s;
        transition: 0.5s all;
    }

    #search-input::placeholder {
        color: #fff;
        /* Set the desired color for the placeholder text */
    }

    .magnifier {
        width: 25px;
        cursor: pointer;
        filter: brightness(8.5);
    }

    .search-con {
        display: grid;
        place-content: center;
    }

    .mic-icon {
        width: 30px;
        position: absolute;
        right: 10px;
        transition: width 0.4s;
        transition-delay: 1s;
    }

    .input {
        background-color: transparent;
        border: none;
        margin: 0px -11px;
        width: 100%;
        outline: none;
        color: #fff;
        transition: width 1s;
        transition-delay: 0.5s;
    }

    .active.search-bar-container {
        width: 43px;
        left: 48%;
        transition: 0.5s all;
    }

    .social-menu ul {
        position: absolute;
        top: 90%;
        left: 50%;
        padding: 0;
        margin: 0;
        transform: translate(-50%, -50%);
        display: flex;
    }

    .before-overlay::before {
        position: absolute;
        content: '';
        background-color: #00000070;
        z-index: 99;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
    }

    .close-mark {
        text-align: center;
        display: none;
    }

    .fa-xmark {
        font-size: 30px;
        color: #fff;
        z-index: 999;
        position: relative;
        transition: 0.6s all;
        cursor: pointer;
    }

    .fa-xmark:hover {
        transform: rotate(80deg);
        color: #4ec0db;
    }

    .before-overlay {
        display: none;
        /* Initially hide the overlay */
    }

    .silder-inner h2,
    h3,
    h4 {
        text-shadow: none;
    }

    .search-box-con {
        border-radius: 10px;
        /* border: 2px solid #fff; */
        padding: 8px;
        -webkit-backdrop-filter: blur(9.8px);
        backdrop-filter: blur(9.8px);
        box-shadow: inset 2px 2px 8px #4ec0db, -2px -2px 4px #4ec0db;
    }

    .search-box-con img {
        height: 170px;
        object-fit: cover;
    }

    .trip-card {
        flex: 1 0 calc(25% - 20px);
    }

    .backpacking-img {
        height: 300px !important;
    }

    #search-results {
        display: none;
        gap: 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: start;
    }

    .trip-card {
        flex: 1 1 calc(50% - 20px);
        /* 2 columns with gap */
        max-width: calc(50% - 20px);
        box-sizing: border-box;
    }

    @media (max-width: 768px) {
        .trip-card {
            flex: 1 1 100%;
            max-width: 100%;
        }
    }
</style>

<body>

    <?php include('../includes/loader.php'); ?>
    <header>
        <?php
        $pathPrefix = '../';
        include('../includes/header.php');
        ?>
    </header>

    <main>
        <!-- One -->
        <div class="container event-banner-mobile">
            <img src="../assets/img/events/c&c-banner.jpg" alt="Pool Party" />
        </div>

        <!-- Main Content -->
        <div class="main-container">
            <div class="event-layout">
                <!-- Left Column: Event Details -->
                <div class="event-details">
                    <div class="card mb-4 animated-event-card"
                        style="background-color: #4ec0db; border-radius: 24px; box-shadow: 0 8px 32px 0 rgba(0,0,0,0.18), 0 4px 20px rgba(0,0,0,0.08); border: none;">
                        <div class="card-body">
                            <h3 class="text-white py-2 px-2 event-title-responsive"
                                style="letter-spacing: 1px; font-weight: 700;">
                                <span style="display:inline-block;">
                                    Strangers Meetup: Coffee & Convos ☕
                                </span>
                            </h3>
                        </div>
                    </div>

                    <div class="card mb-4 p-2"
                        style="border-radius: 24px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); border: none; background: #ffffffff;">
                        <div class="card-body">
                            <div class="section-title mb-2">Event Details</div>
                            <p class="pulse mb-4" style="line-height: 2.4;">
                                Here, you’ll brew more than coffee.<br>
                                Whether you’re someone looking to just chill down, have a chat, share stories, pause
                                time or simply meet like-minded friends— this is where it begins.<br>
                                Here, we don’t just sip coffee ~ you’ll sip presence, cozy vibes, fun Convo & Ice
                                breaker games.
                                You’ll leave with lighter thoughts, new perspectives, and maybe a few new buddies.<br>

                                Whether you’re curious, an introvert, a deep thinker, or someone who loves lively
                                discussions, it doesn’t matter!
                                Come join us for an evening of real conversations, cozy vibes, and strangers who are
                                just as open and curious as you are, no Judgements, Be you!

                            <div class="card mb-0"
                                style="background: #e3f6fd; border-radius: 16px; box-shadow: 0 2px 10px rgba(0,0,0,0.06); border: 2px solid white;">
                                <div class="card-body" style="padding: 1.2rem 1.5rem;">
                                    <strong>Here’s what’s waiting for you:</strong>
                                    <ul style="list-style: none; padding-left: 0; margin-bottom: 0; margin-top: 12px;">
                                        <li style="margin-bottom: 10px;">
                                            <i class="fa-solid fa-mug-hot me-1" style="color: #f7b731;"></i>
                                            A Coffee & Curated conversation prompts to spark fun evening discussions
                                        </li>
                                        <li style="margin-bottom: 10px;">
                                            <i class="fa-solid fa-dice me-1" style="color: #f7b731;"></i>
                                            Fun icebreakers to keep things effortless and natural
                                        </li>
                                        <li style="margin-bottom: 10px;">
                                            <i class="fa-solid fa-couch me-1" style="color: #0984e3;"></i>
                                            A cozy café setting where conversations flow as smoothly as your coffee
                                        </li>
                                        <li style="margin-bottom: 10px;">
                                            <i class="fa-solid fa-handshake me-1" style="color: #00b894;"></i>
                                            A chance to meet like-minded strangers and maybe future buddies
                                        </li>
                                        <li style="margin-bottom: 10px;">
                                            <i class="fa-solid fa-globe me-1 " style="color: #e17055;"></i>
                                            Discover Roamers upcoming Strangers Trips
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-sparkles me-1" style="color: #e17055;"></i>
                                            An evening filled with warmth, laughter, stories, and connections that stay
                                            with you!
                                        </li>
                                    </ul>
                                </div>
                            </div><br>
                            <p class="pulse mb-2" style="line-height: 2.4;">
                            <p class="pulse mb-2" style="line-height: 2.4;">
                                Love experiences that are both social and soulful?<br>
                                Imagine a warm evening with comforting coffee, shared laughs, honest conversations, and
                                strangers who might just become your next close circle — or someone you bump into again
                                on a Roamers trip.<br>
                                No pressure. No awkward networking.<br>
                                Just real people. Real conversations. Real Vibes!
                            </p>

                            <strong>👉 Spots are limited. Save yours now and let’s Coffee & Chill
                            </strong>
                            </p>
                        </div>
                    </div>

                    <div class="card p-2"
                        style="border-radius: 24px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); border: none; background: #e3f6fd;">
                        <div class="card-body">
                            <section id="terms">
                                <div class="important-notes">
                                    <div class="section-title mb-3">Terms &amp; Conditions</div>
                                    <ul class="terms-list fa-ul" style="margin-left: 1.5em;">
                                        <li><span class="fa-li"><i class="fa-solid fa-circle-check"
                                                    style="color: green;"></i></span>Once booked, tickets cannot be
                                            refunded or exchanged.</li>
                                        <li><span class="fa-li"><i class="fa-solid fa-circle-check"
                                                    style="color: green;"></i></span>Photos and videos may be taken
                                            during the event and used for promotional purposes.</li>
                                        <li><span class="fa-li"><i class="fa-solid fa-circle-check"
                                                    style="color: green;"></i></span>Tickets are strictly
                                            non-transferable. Any resale will result in cancellation without refund or
                                            compensation.</li>
                                        <li><span class="fa-li"><i class="fa-solid fa-circle-check"
                                                    style="color: green;"></i></span>An internet/processing fee may
                                            apply per ticket. Please review the total before completing payment.</li>
                                        <li><span class="fa-li"><i class="fa-solid fa-circle-check"
                                                    style="color: green;"></i></span>If you’re feeling unwell, please
                                            avoid purchasing tickets or attending the event.</li>
                                        <li><span class="fa-li"><i class="fa-solid fa-circle-check"
                                                    style="color: green;"></i></span>Arrive at least 15 minutes before
                                            the event to ensure smooth entry.</li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="card animated-card-pop"
                        style="border-radius: 18px; box-shadow: 0 2px 12px rgba(39, 174, 96, 0.08); border: 1px solid #e17055; margin-top: 20px; background: #ffe6ef;">
                        <div class="card-body" style="text-align: center;">
                            <span style="font-size: 1.1rem; color: #e17055; font-weight: 600;">
                                <i class="fa-solid fa-heart me-1 animated-heart-beat" style="color: #e17055;"></i>
                                Join us for an evening of warmth, stories, and soulful connections. ☕✨
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Booking Form -->
                <div class="booking-card">

                    <h3 class="section-title">
                        <i class="fa-solid fa-location-dot" style="color: #4ec0db; margin-right: 8px;"></i>
                        Chennai
                    </h3>

                    <div class="pulse"
                        style="display: flex; flex-direction: column; align-items: flex-start; gap: 18px; width: 100%; font-size: 1.08rem; color: #444; margin-bottom: 20px;">
                        <div style="display: flex; align-items: flex-start; gap: 14px;">
                            <i class="fa-regular fa-calendar-days" aria-hidden="true"
                                style="margin-top: 2px; min-width: 22px; font-size: 1.15em; color: #4ec0db;"></i>
                            <span>
                                <span style="font-weight: 500;">Fev 28, 2025</span>
                                <span style="color: #888;"> | Sunday</span>
                            </span>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 14px;">
                            <i class="fa-regular fa-clock" aria-hidden="true"
                                style="margin-top: 2px; min-width: 22px; font-size: 1.15em; color: #4ec0db;"></i>
                            <span>
                                <span style="font-weight: 500;">5 PM - 7 PM</span>
                            </span>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 14px;">
                            <i class="fa-solid fa-location-dot" aria-hidden="true"
                                style="margin-top: 2px; min-width: 22px; font-size: 1.15em; color: #4ec0db;"></i>
                            <span>
                                Chennai, Tamil Nadu
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
                        <small id="groupNote" class="pulse" style="display:none;color:#e67e22;">Group Pass requires
                            minimum
                            4
                            travelers.</small>
                    </div>

                    <div class="amount-section">
                        <div class="section-label pulse">Amount</div>
                        <div class="amount-row">
                            <span class="amount-label pulse">Price</span>
                            <span class="amount-value pulse" id="price" aria-live="polite" role="status">299₹</span>
                        </div>

                    </div>

                    <form method="POST" action="mail/events-send-mail.php">
                        <div class="form-group">
                            <label for="full_name" class="section-label pulse">Full Name</label>
                            <!-- Rename Value its Dynamic -->
                            <input type="hidden" name="event_type" value="c&c-feb-28">
                            <input type="hidden" name="redirect_url" value="../c&c.php">
                            <input id="full_name" type="text" class="form-input" name="full_name"
                                placeholder="e.g., Priya Sharma" autocomplete="name" required aria-required="true"
                                aria-describedby="error-name">
                            <div id="error-name" class="form-error" role="alert" aria-live="polite"
                                style="display:none;">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone_number" class="section-label pulse">Phone Number</label>
                            <input id="phone_number" type="tel" class="form-input" name="phone_number"
                                inputmode="numeric" pattern="[0-9]{7,15}" minlength="7" maxlength="15"
                                placeholder="Enter phone number" autocomplete="tel-national" required
                                aria-required="true" aria-describedby="error-phone">
                            <div id="error-phone" class="form-error" role="alert" aria-live="polite"
                                style="display:none;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dob" class="section-label pulse">Date of Birth</label>
                            <input id="dob" type="date" class="form-input" name="dob" placeholder="YYYY-MM-DD"
                                autocomplete="bday" required aria-required="true" aria-describedby="error-dob">
                            <div id="error-dob" class="form-error" role="alert" aria-live="polite"
                                style="display:none;">
                            </div>
                        </div>

                        <input type="hidden" name="selected_quantity" id="selected_quantity" value="1">
                        <input type="hidden" name="selected_package" id="selected_package" value="standard-pass">
                        <input type="hidden" name="calculated_base_price" id="calculated_base_price" value="299">

                        <button type="submit" class="book-btn pulse"
                            style="animation: bounceIn 0.7s; border-radius: 30px;">
                            Register Now
                            <i class="fas fa-arrow-right" style="animation: arrowMove 1.2s infinite alternate;"></i>
                        </button>

                    </form>
                </div>
            </div>
        </div>

        <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1">
            <img src="../assets/img/icon/whatsapp.svg" alt="WhatsApp" loading="lazy">
        </a>

    </main>


    <footer>
        <?php include('../includes/footer.php'); ?>
    </footer>

    <!-- Quantity selector logic -->
    <script>
        let qty = 1;
        const pricePerTicket = 299;
        function updateQtyDisplay() {
            document.getElementById('quantity').textContent = qty;
            document.getElementById('selected_quantity').value = qty;
            document.getElementById('calculated_base_price').value = pricePerTicket * qty;
            document.getElementById('price').textContent = (pricePerTicket * qty) + ' ₹';
        }
        function increaseQty() {
            qty++;
            updateQtyDisplay();
        }
        function decreaseQty() {
            if (qty > 1) {
                qty--;
                updateQtyDisplay();
            }
        }
        function updatePackage() {
            const pkg = document.getElementById('packageType').value;
            document.getElementById('selected_package').value = pkg;
        }
        // Initialize
        updateQtyDisplay();
        updatePackage();
    </script>

</body>

</html>