<?php
/**
 * ==========================================
 *          DEVELOPER GUIDE: UPCOMING TRIPS
 * ==========================================
 * 
 * This component uses a dynamic PHP structure to render trips. 
 * You do NOT need to edit the HTML directly for standard updates.
 * 
 * ------------------------------------------
 * 1. HOW TO ADD A NEW TRIP TYPE
 * ------------------------------------------
 * Add a new entry to the $trips_db array.
 * Key: A unique identifier (e.g., 'new_trip_name')
 * Value: An array with the following fields:
 *   - title: Name of the trip
 *   - image: Path to the image
 *   - duration: e.g., '3D/2N'
 *   - location: e.g., 'Ex: Chennai'
 *   - places: List of places covered
 *   - price: Display price (e.g., '₹9,999'). Leave empty if using class.
 *   - price_class: (Optional) CSS class for custom price styling (e.g., 'munnar-price')
 *   - link: URL to the trip page
 * 
 * Example:
 * 'my_new_trip' => [
 *     'title' => 'My New Trip',
 *     'image' => 'assets/img/my-trip.jpg',
 *     ...
 * ],
 * 
 * ------------------------------------------
 * 2. HOW TO SCHEDULE A TRIP
 * ------------------------------------------
 * Add the trip's unique key to the $month_schedules array under the desired month.
 * 
 * Example (Adding 'my_new_trip' to March):
 * 'mar' => [
 *     ['trip_id' => 'my_new_trip', 'dates' => 'Mar 15, 22'],
 * ],
 * 
 * ==========================================
 */

//  Trip Database we have to add the trips here for the upcoming trips in the database
$trips_db = [
    'meghalaya' => [
        'title' => 'MAJESTIC MEGHALAYA',
        'image' => 'assets/img/megalaya/Front%203.jpg',
        'duration' => '6D/5N',
        'location' => 'Ex: Guwahati',
        'places' => 'Guwahati, Shillong, Cherrapunjee',
        'price' => '₹19,990',
        'original_price' => '',
        'link' => 'meghalaya'
    ],
    'varkala' => [
        'title' => 'Varkala',
        'image' => 'assets/img/valley-of-flowers/avif/img-4.avif',
        'duration' => '3D/2N',
        'location' => 'EX: Chennai/Trivandrum',
        'places' => 'Chennai - Trivandrum',
        'price' => '₹8,990',
        'link' => 'varkala-grouptrip'
    ],
    'chikmagalur' => [
        'title' => 'CHIKMAGALUR BACKPACKING',
        'image' => 'assets/img/Testimnils/chikmagalur.jpg',
        'duration' => '3D/2N',
        'location' => 'EX: Chennai - Bangalore',
        'places' => 'Chikmagalur, Z point, Hebbe Falls',
        'price' => '₹7,990',
        'link' => 'chikmagalur'
    ],
    // munnar with kolukkumalai
    'munnar' => [
        'title' => 'Munnar with Kolukkumalai',
        'image' => 'assets/img/kolukkumalai-img/2.jpg',
        'duration' => '3D/2N',
        'location' => 'EX: Chennai',
        'places' => 'Munnar',
        'price' => '',
        'price_class' => 'munnar-price',
        'link' => 'kolukkumalai-trek'
    ],
    'srilanka' => [
        'title' => 'Sri Lanka',
        'image' => 'assets/img/valley-of-flowers/avif/img-2.avif',
        'duration' => '7D/6N',
        'location' => 'EX: Colombo',
        'places' => 'Sigiriya, Kandy, Ella, Galle, Bentota',
        'price' => '₹43,999',
        'link' => 'srilanka'
    ],
    'pondi' => [
        'title' => 'Pondi Dive-in',
        'image' => 'assets/img/valley-of-flowers/avif/img-3.avif',
        'duration' => '2D/1N',
        'location' => 'EX: Direct, Chennai',
        'places' => 'Pondicherry',
        'price' => '₹4,990',
        'link' => 'pondicherry'
    ],
    'valley' => [
        'title' => 'Valley of Flowers Trek',
        'image' => 'assets/img/valley-of-flowers/avif/img-1.avif',
        'duration' => '5D/6N',
        'location' => 'Ex: Rishikesh',
        'places' => 'Rishikesh, Joshimath, Pulna',
        'price' => '₹9,999',
        'link' => 'valley-of-flowers'
    ],
    'andaman' => [
        'title' => 'Andaman Island Hopping',
        'image' => 'https://roamers.in/assets/img/backpacking/Andaman%20hoppers.jpg',
        'duration' => '7D/6N',
        'location' => 'EX: Port Blair',
        'places' => 'Port Blair, Ross Island, Havelock, Neil',
        'price' => '₹24,990',
        'price_class' => 'andaman-price',
        'link' => 'andaman'
    ],
    'kodaikanal' => [
        'title' => 'KODAIKANAL BACKPACKING',
        'image' => 'assets/img/kodaikanal/Kodai.jpg',
        'duration' => '3D/2N',
        'location' => 'EX: Chennai',
        'places' => 'Kodaikanal , Vattakanal , Poombarai',
        'price' => '₹',
        'price_class' => 'kodaikanal-price',
        'link' => 'kodaikanal1'
    ],
    'wayanad' => [
        'title' => 'Wonders of Wayanad',
        'image' => 'assets/optimized-images/wayand-trip/upcoming-group-trips-cover.avif',
        'duration' => '3D/2N',
        'location' => 'EX: Chennai',
        'places' => 'Wayanad',
        'price' => '₹8,990',
        'link' => 'wayanad'
    ],
    'kerala_onam' => [
        'title' => 'Onam Special – Kerala Getaway',
        'image' => 'assets/img/kerala-onam/kerala-onam (11).avif',
        'duration' => '3D/2N',
        'location' => 'EX: Chennai',
        'places' => 'Munnar , Alappuzha',
        'price' => '₹8499',
        'link' => 'kerala-onam'
    ],
    'ooty' => [
        'title' => 'Ooty The Queen of Hills',
        'image' => 'assets/img/Ooty/Ooty%20pic%201.jpg',
        'duration' => '3D/2N',
        'location' => 'EX: Chennai, Coimbatore',
        'places' => 'Ooty, Pykara, Coonoor, Isha',
        'price' => '₹6,999',
        'link' => 'ooty'
    ]
];
// Month schedules we have to add the trips here based on the month for the upcoming trips
$month_schedules = [
    'jan' => [
        ['trip_id' => 'meghalaya', 'dates' => 'Jan 14,24'],
        ['trip_id' => 'varkala', 'dates' => 'Jan 14,24'],
        ['trip_id' => 'andaman', 'dates' => 'Jan 14'],
        ['trip_id' => 'munnar', 'dates' => 'Jan 14'],
    ],
    'feb' => [
        ['trip_id' => 'meghalaya', 'dates' => 'Feb 14,19'],
        ['trip_id' => 'varkala', 'dates' => 'Feb 14,27'],
        ['trip_id' => 'andaman', 'dates' => 'Feb 14,28'],
        ['trip_id' => 'munnar', 'dates' => 'Feb 14'],
        ['trip_id' => 'ooty', 'dates' => 'Feb 14'],


    ],
    'mar' => [
        ['trip_id' => 'meghalaya', 'dates' => 'Mar 21,28'],
        ['trip_id' => 'varkala', 'dates' => 'Mar 13,27'],
        ['trip_id' => 'andaman', 'dates' => 'Mar 21,28'],
        ['trip_id' => 'munnar', 'dates' => 'Mar 6,20'],
        ['trip_id' => 'ooty', 'dates' => 'Mar 6'],



    ],
    'apr' => [
        ['trip_id' => 'meghalaya', 'dates' => 'Apr 11'],
        ['trip_id' => 'andaman', 'dates' => 'Apr 03,18'],
        ['trip_id' => 'munnar', 'dates' => 'Apr 14'],
    ],
    'may' => [],
    'jun' => [],
    'jul' => [],
    'august' => [
        ['trip_id' => 'pondi', 'dates' => 'Aug 16, 22'],
        ['trip_id' => 'valley', 'dates' => 'Aug 2, 15, 23, 29'],
        ['trip_id' => 'srilanka', 'dates' => 'Aug 17'],
        ['trip_id' => 'varkala', 'dates' => 'Aug 15, 29'],
        ['trip_id' => 'munnar', 'dates' => 'Sep 6, 19, 26'],
        ['trip_id' => 'andaman', 'dates' => 'Customise it!'],
    ],
    'sep' => [
        ['trip_id' => 'kerala_onam', 'dates' => 'Sep 4'],
        ['trip_id' => 'pondi', 'dates' => 'Sep 20'],
        ['trip_id' => 'varkala', 'dates' => 'Sep 12'],
        ['trip_id' => 'meghalaya', 'dates' => 'Sep 20'],
        ['trip_id' => 'chikmagalur', 'dates' => 'Sep 6'],
        ['trip_id' => 'munnar', 'dates' => 'Sep 26'],
        ['trip_id' => 'srilanka', 'dates' => 'Sep 6'],
        ['trip_id' => 'wayanad', 'dates' => ''],
    ],
    'oct' => [
        ['trip_id' => 'munnar', 'dates' => 'Sep 26'],
        ['trip_id' => 'chikmagalur', 'dates' => 'Sep 6'],
        ['trip_id' => 'andaman', 'dates' => ''],
        ['trip_id' => 'kodaikanal', 'dates' => 'Oct 01'],
        ['trip_id' => 'meghalaya', 'dates' => 'Sep 20'],
        ['trip_id' => 'pondi', 'dates' => 'Sep 20'],
        ['trip_id' => 'srilanka', 'dates' => 'Aug 17'],
    ],
    'nov' => [
        ['trip_id' => 'munnar', 'dates' => 'Sep 26'],
        ['trip_id' => 'chikmagalur', 'dates' => 'Sep 6'],
        ['trip_id' => 'andaman', 'dates' => ''],
        ['trip_id' => 'meghalaya', 'dates' => 'Sep 20'],
        ['trip_id' => 'srilanka', 'dates' => 'Aug 17'],
    ],
    'dec' => [
        ['trip_id' => 'chikmagalur', 'dates' => 'Sep 6'],
        ['trip_id' => 'pondi', 'dates' => 'Sep 20'],
        ['trip_id' => 'munnar', 'dates' => 'Sep 26'],
        ['trip_id' => 'srilanka', 'dates' => 'Aug 17'],
        ['trip_id' => 'andaman', 'dates' => ''],
        ['trip_id' => 'meghalaya', 'dates' => 'Sep 20'],
    ]
];
// Months config we have to add the months here for the upcoming trips
$months_config = [
    'jan' => ['name' => 'January', 'icon' => 'fa-snowflake'],
    'feb' => ['name' => 'February', 'icon' => 'fa-heart'],
    'mar' => ['name' => 'March', 'icon' => 'fa-sun'],
    'apr' => ['name' => 'April', 'icon' => 'fa-cloud-sun'],
    'may' => ['name' => 'May', 'icon' => 'fa-sun'],
    'jun' => ['name' => 'June', 'icon' => 'fa-cloud-sun-rain'],
    'jul' => ['name' => 'July', 'icon' => 'fa-cloud-showers-heavy'],
    // 'august' => ['name' => 'August', 'icon' => 'fa-cloud-sun'],
    // 'sep' => ['name' => 'September', 'icon' => 'fa-cloud-sun-rain'],
    // 'oct' => ['name' => 'October', 'icon' => 'fa-cloud-showers-heavy'],
    // 'nov' => ['name' => 'November', 'icon' => 'fa-cloud-bolt'],
    // 'dec' => ['name' => 'December', 'icon' => 'fa-cloud-sun'],
];
?>
<style>
    * {
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
        max-width: 1600px !important;
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

    /* .upcoming-tab-btn.active,
    .upcoming-tab-btn:hover {
        background: #4CB9D3;
        color: #fff;
    } */

    .upcoming-tab-content {
        display: none;
        margin-bottom: 0px;
        opacity: 0;
        transform: translateY(15px);
        backface-visibility: hidden;
        will-change: transform, opacity;
    }

    .upcoming-tab-content.active {
        display: block;
        animation: fadeInSlide 0.5s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
    }

    @keyframes fadeInSlide {
        0% {
            opacity: 0;
            transform: translateY(15px) scale(0.99);
        }

        100% {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

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
        overflow: visible !important;
        /* Fix for button clipping */
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
        color: #333 !important;
        /* Force dark text */
        border-radius: 18px;
        text-decoration: none;
        font-weight: bold;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1) !important;
        /* Force shadow visibility */
        font-size: 15px;
        z-index: 999;
        /* Max Z-index */
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
        /* contain: content; Removed to fix button clipping */
    }

    .upcoming-slider {
        display: flex;
        gap: 0px !important;
        padding: 0px 0px 50px 0px;
        /* Increased padding to prevent clipping */
        overflow-x: auto;
        overflow-y: visible;
        /* Try to allow hanging content */
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
            margin-bottom: 0px;
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

    @media (min-width: 601px) {
        .upcoming-card:nth-of-type(n+6) {
            display: none !important;
        }
    }
</style>

<div class="upcoming-container">
    <h2 class="upcoming-header head bbb">
        <i class="fa-solid fa-calendar-days upcoming-header-icon"></i>
        Upcoming Group Trips
    </h2>

    <!-- Tabs -->
    <div class="upcoming-tabs" id="upcoming-tabs">
        <?php
        foreach ($months_config as $key => $config):
            $isActive = ($key === 'feb') ? 'active' : '';
            ?>
            <button class="upcoming-tab-btn <?php echo $isActive; ?>" data-tab="<?php echo $key; ?>">
                <span class="tab-icon"><i class="fa-solid <?php echo $config['icon']; ?>"></i></span>
                <?php echo $config['name']; ?>
            </button>
        <?php endforeach; ?>
    </div>
    <style>
        @media (max-width: 600px) {
            .tab-icon {
                display: none !important;
            }
        }
    </style>

    <!-- Tab Contents -->
    <?php
    foreach ($months_config as $key => $config):
        $isActive = ($key === 'feb') ? 'active' : '';
        ?>
        <div class="upcoming-tab-content <?php echo $isActive; ?>" id="tab-<?php echo $key; ?>">
            <div class="upcoming-slider-wrapper">
                <button class="upcoming-slider-arrow left" aria-label="Scroll to previous trip" type="button">
                    <i class="fa fa-chevron-left"></i>
                </button>
                <div class="upcoming-slider" id="upcoming-slider-<?php echo $key; ?>">
                    <?php
                    // Check if schedule is empty
                    if (!isset($month_schedules[$key]) || empty($month_schedules[$key])):
                        ?>
                        <div class="upcoming-card"
                            style="width: 100%; max-width: 400px; margin: 0 auto; cursor: default; border: none; background: transparent; box-shadow: none;">
                            <div class="upcoming-content"
                                style="align-items: center; justify-content: center; height: 350px; background: rgba(76, 185, 211, 0.1);">
                                <div style="text-align: center; color: #4CB9D3;">
                                    <i class="fa-solid fa-clock"
                                        style="font-size: 4rem; margin-bottom: 20px; opacity: 0.8;"></i>
                                    <h3 style="font-weight: 800; text-transform: uppercase; margin: 0;">Coming Soon!</h3>
                                    <p style="font-size: 0.9rem; margin-top: 10px; color: #555;">New trips are on the way.</p>
                                </div>
                            </div>
                        </div>
                        <?php
                    else:
                        foreach ($month_schedules[$key] as $schedule):
                            $trip_id = $schedule['trip_id'];
                            if (!isset($trips_db[$trip_id]))
                                continue;
                            $trip = $trips_db[$trip_id];
                            $dates = $schedule['dates'];

                            $onclick = "window.open('{$trip['link']}','_blank')";

                            $price_html = '';
                            if (!empty($trip['price'])) {
                                $price_html = '<div class="upcoming-price">' . $trip['price'] . '</div>';
                            } elseif (isset($trip['price_class']) && !empty($trip['price_class'])) {
                                $price_html = '<div class="upcoming-price ' . $trip['price_class'] . '"></div>';
                            }
                            ?>
                            <div class="upcoming-card" style="cursor: pointer;" onclick="<?php echo $onclick; ?>">
                                <div class="upcoming-content">
                                    <div class="upcoming-image">
                                        <img src="<?php echo $trip['image']; ?>" alt="<?php echo $trip['title']; ?>">
                                    </div>
                                    <div class="upcoming-card-flex">
                                        <div class="upcoming-duration">
                                            <span class="icon"><img src="assets/svg/time.svg" alt="Time"></span>
                                            <?php echo $trip['duration']; ?>
                                        </div>
                                        <div class="upcoming-from">
                                            <span class="icon"><img src="assets/svg/location.svg" alt="Location"></span>
                                            <span>
                                                <?php echo $trip['location']; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <h1 class="upcoming-title">
                                        <?php echo $trip['title']; ?>
                                    </h1>
                                    <p class="upcoming-locations">
                                        <?php echo $trip['places']; ?>
                                    </p>
                                    <div class="upcoming-price-section">
                                        <div class="upcoming-dates">
                                            <span class="icon"><img src="assets/svg/calander.svg" alt="Calendar"></span>
                                            <span class="upcoming-dates-text">
                                                <?php echo $dates; ?>
                                            </span>
                                        </div>
                                        <div>
                                            <div class="upcoming-starts">Starts</div>
                                            <?php echo $price_html; ?>
                                        </div>
                                    </div>
                                    <a href="<?php echo $trip['link']; ?>" target="_blank"
                                        class="upcoming-view text-decoration-none" style="color: #4CB9D3 !important;">View
                                        Trip</a>
                                </div>
                            </div>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </div>
                <button class="upcoming-slider-arrow right" aria-label="Scroll to next trip" type="button">
                    <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>
    <?php endforeach; ?>

    <style>
        .view-more-container {
            display: flex;
            justify-content: center;
            margin-bottom: 0px !important;
            margin-top: -60px;
            position: relative;
            z-index: 5;
        }

        .view-more-btn {
            padding: 10px 32px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 700;
            background: #4ec0db;
            color: #fff;
            border: none;
            box-shadow: 0 4px 18px 0 rgba(76, 185, 211, 0.14);
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 600px) {
            .view-more-container {
                margin-top: 0px;
                margin-bottom: 20px !important;
            }

            .view-more-btn {
                padding: 8px 15px !important;
                font-size: 1rem;
            }
        }
    </style>

    <div class="view-more-container">
        <a href="trips.php">
            <button class="border-none view-more-btn text-decoration-none">
                More Trips
            </button>
        </a>
    </div>

</div>
<script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabsContainer = document.getElementById('upcoming-tabs');
        const tabContents = document.querySelectorAll('.upcoming-tab-content');
        const tabBtns = document.querySelectorAll('.upcoming-tab-btn'); // Keep for class manipulation

        if (tabsContainer) {
            tabsContainer.addEventListener('click', function (e) {
                const btn = e.target.closest('.upcoming-tab-btn');
                if (!btn) return; // Clicked outside a button

                const tab = btn.getAttribute('data-tab');

                // Tab switching logic
                tabBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                tabContents.forEach(tc => {
                    tc.classList.remove('active');
                    tc.style.display = 'none'; // Ensure it's hidden to reset animation state
                });

                const targetContent = document.getElementById(`tab-${tab}`);
                if (targetContent) {
                    targetContent.style.display = 'block'; // Prepare for animation

                    // Force reflow to restart animation
                    void targetContent.offsetWidth;

                    targetContent.classList.add('active');

                    // Setup slider for the new tab (if needed)
                    setupSlider(
                        `#tab-${tab} .upcoming-slider-wrapper`,
                        `#upcoming-slider-${tab}`,
                        '#tab-' + tab + ' .upcoming-slider-arrow.left',
                        '#tab-' + tab + ' .upcoming-slider-arrow.right'
                    );

                    // Center first card on mobile for the active tab
                    const activeSlider = targetContent.querySelector('.upcoming-slider');
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
        }

        // Slider logic
        function setupSlider(wrapperSelector, sliderSelector, leftArrowSelector, rightArrowSelector) {
            const wrapper = typeof wrapperSelector === 'string' ? document.querySelector(wrapperSelector) : wrapperSelector;
            if (!wrapper || wrapper.dataset.initialized === 'true') return;
            const slider = wrapper.querySelector(sliderSelector);
            const leftArrow = wrapper.querySelector(leftArrowSelector);
            const rightArrow = wrapper.querySelector(rightArrowSelector);
            if (!slider || !leftArrow || !rightArrow) return;
            const getVisibleCards = () => Array.from(slider.querySelectorAll('.upcoming-card')).filter(c => c.offsetParent !== null);

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
                const cards = getVisibleCards();
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
                const cards = getVisibleCards();
                const card = cards[index];
                if (!card) return 0;
                const cardLeft = card.offsetLeft;
                const containerWidth = slider.offsetWidth;
                const cardWidth = card.offsetWidth;
                return cardLeft - (containerWidth - cardWidth) / 2;
            }

            leftArrow.addEventListener('click', function () {
                const currentIndex = getCurrentIndex();
                const targetIndex = Math.max(0, currentIndex - 1);
                const scrollPosition = getCenteredPosition(targetIndex);
                smoothScrollTo(scrollPosition);
            });

            rightArrow.addEventListener('click', function () {
                const cards = getVisibleCards();
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
<!-- <script src="assets/js/upcoming-dates.js"></script> -->
<!-- <script src="assets/js/price.js"></script> -->