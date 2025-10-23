<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ooty Travel Package</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- ... (styles unchanged, omitted for brevity) ... -->
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
            max-width: 1500px;
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
            opacity: 0;
            transition: opacity 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .upcoming-tab-content.active {
            display: block;
            opacity: 1;
            transition: opacity 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .upcoming-card {
            flex: 0 0 auto;
            width: 350px;
            min-width: 367px;
            max-width: 378px;
            height: 350px;
            position: relative;
            border: 2px solid;
            border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
            border-radius: 30px;
            background: transparent;
            scroll-snap-align: start;
            margin: 0 10px;
            transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1), transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* .upcoming-card:hover {
            box-shadow: 0 8px 32px 0 rgba(76,185,211,0.18), 0 1.5px 8px 0 rgba(50,238,231,0.10);
            transform: translateY(-6px) scale(1);
        } */

        .upcoming-image {
            width: 100%;
            height: 450px;
            border-radius: 24px;
            overflow: hidden;
            transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .upcoming-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 24px;
            padding: 2px;
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* .upcoming-card:hover .upcoming-image img {
            transform: scale(1.04);
        } */

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
            transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
            transition: color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* .upcoming-card:hover .upcoming-title {
            color: #32EEE7;
        } */

        .upcoming-locations {
            font-size: 12px;
            color: white;
            margin: 1px 12px;
            text-overflow: ellipsis;
            white-space: nowrap;
            transition: color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* .upcoming-card:hover .upcoming-locations {
            color: #b2f7f7;
        } */

        .upcoming-price-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 0px 35px 17px 12px;
            flex-grow: 1;
        }

        .upcoming-dates {
            display: flex;
            align-items: center;
            background-color: #fff;
            color: #333;
            padding: 5px 8px;
            border-radius: 19px;
            font-size: 8px;
            box-shadow: 0px 2px 4px 0px #00000040, 1px -1px 6px 0px #00000047 inset;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            transition: background 0.3s cubic-bezier(0.4, 0, 0.2, 1), color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* .upcoming-card:hover .upcoming-dates {
            background: #4CB9D3;
            color: #fff;
        } */

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
            transition: color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* .upcoming-card:hover .upcoming-price {
            color: #32EEE7;
        } */

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
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            padding: 8px 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .upcoming-view:hover,
        .upcoming-view:focus {
            background: #4CB9D3;
            color: #fff;
            box-shadow: 0 8px 32px 0 rgba(76, 185, 211, 0.18), 0 1.5px 8px 0 rgba(50, 238, 231, 0.10);
            transform: scale(1.05) translateX(-50%);
        }

        .upcoming-header {
            margin: 0px 0px 30px 0px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .upcoming-header-icon {
            color: #4CB9D3;
            font-size: 30px;
        }

        .upcoming-slider-wrapper {
            position: relative;
            width: 100%;
            padding: 0 40px;
            overflow: visible;
            contain: content;
        }

        .upcoming-slider {
            display: flex;
            gap: 20px;
            padding: 0px 0px 30px 0px;
            overflow-x: auto;
            overflow-y: visible;
            scroll-snap-type: x mandatory;
            scroll-padding: 15px;
            scrollbar-width: none;
            -ms-overflow-style: none;
            -webkit-overflow-scrolling: touch;
            will-change: scroll-position;
            scroll-behavior: smooth;
            transition: gap 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .upcoming-slider::-webkit-scrollbar {
            display: none;
        }

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
            transition: background 0.2s, box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1), color 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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

        .upcoming-slider-arrow:hover:not(:disabled) {
            background: #4CB9D3;
            color: #fff;
            box-shadow: 0 4px 16px 0 rgba(76, 185, 211, 0.18);
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
                min-width: 350px;
                max-width: 350px;
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
</head>

<style>
    * {
        font-family: 'Manrope', sans-serif;
    }

    html,


    .event-card {
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        /* Smoother easing curve (ease-out-back like) */
        will-change: transform, box-shadow;
        /* Prepares for smooth GPU rendering */
        backface-visibility: hidden;
        /* Prevents flickering on some browsers */
    }

    .event-card-content {
        margin-top: 210px;
    }

    @media (max-width: 768px) {
        .event-card-content {
            margin-top: 140px;
        }
    }

    @media (max-width: 480px) {
        .event-card-content {
            margin-top: 210px;
        }
    }

    /* Optional: Reduce motion for users who prefer it */
    @media (prefers-reduced-motion: reduce) {
        .event-card {
            transition: none;
        }

        .event-card:hover {
            transform: none;
            box-shadow: none;
        }
    }

    .event-container {
        position: relative;
        /* max-width: 1500px; */
        margin: 0 auto;
        padding: 0 15px;
        overflow: visible !important;
    }

    .event-card {
        flex: 0 0 auto;
        width: 350px;
        min-width: 300px;
        max-width: 378px;
        height: 350px;
        position: relative;
        border: 2px solid;
        border-image-source: linear-gradient(193.16deg, rgba(255, 255, 255, 0) 9.46%, #32EEE7 90.51%);
        border-radius: 30px;
        background: transparent;
        scroll-snap-align: start;
        margin: 0 10px;
        overflow: visible !important;
    }

    .event-image {
        width: 100%;
        height: 450px;
        border-radius: 24px;
        overflow: visible !important;
    }

    .event-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 24px;
        padding: 2px;
    }

    @media (max-width: 600px) {
        .event-image {
            height: 500px !important;
            max-height: 100vw;
        }
    }

    @media (max-width: 400px) {
        .event-image {
            height: 320px !important;
            max-height: 100vw;
        }
    }

    .event-content {
        background: white;
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
        overflow: visible;
    }

    @media (max-width: 600px) {
        .event-content {
            padding: 0px;
        }
    }

    @media (max-width: 400px) {
        .event-content {
            padding: 0px;
        }
    }

    .event-card-flex {
        display: flex;
        justify-content: space-between;
        /* margin: 5px 15px 3px 10px; */
        flex-wrap: wrap;
    }

    .event-duration {
        display: flex;
        align-items: center;
        background-color: #FFFFFF;
        color: #292929;
        padding: 2px 6px;
        border-radius: 30px;
        font-size: 10px;
        font-weight: bold;
    }

    .event-duration .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
        color: #7dd3e7;
    }

    .event-duration .icon img {
        width: 12px !important;
    }

    .event-from {
        display: flex;
        align-items: center;
        background-color: #4CB9D3;
        border-radius: 30px;
        padding: 3px 7px;
        font-size: 11px;
        color: #FFFFFF;
    }

    .event-from .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
    }

    .event-from .icon img {
        width: 6px !important;
    }

    .event-title {
        font-size: 15px;
        text-transform: uppercase;
        color: white;
        text-align: start;
        margin: 5px 0px 0px 12px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    .event-locations {
        font-size: 12px;
        color: black;
        margin: 1px 12px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    .event-price-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 0px 35px 07px 12px;
        flex-grow: 1;
        color: black;
    }

    .event-dates {
        display: flex;
        align-items: center;
        /* background-color: #fff; */
        color: white;
        padding: 5px 8px;
        border: 1px solid white;
        border-radius: 19px;
        font-size: 8px;
        box-shadow: 0px 2px 4px 0px #00000040, 1px -1px 6px 0px #00000047 inset;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .event-dates .icon {
        display: flex;
        align-items: center;
        margin-right: 5px;
    }

    .event-dates .icon img {
        width: 16px !important;
    }

    .event-starts {
        font-size: 12px;
        font-weight: 800;
    }

    .event-price {
        font-weight: bold;
        text-align: right;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .event-view {
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

    .event-slider-wrapper {
        position: relative;
        width: 100%;
        /* padding: 0 40px; */
        overflow: visible;
        contain: content;
    }

    .event-slider {
        display: flex;
        justify-content: space-evenly;
        gap: 0px;
        padding: 0px 0px 30px 0px;
        overflow-x: hidden;
        overflow-y: visible;
        scroll-snap-type: x mandatory;
        scroll-padding: 15px;
        scrollbar-width: none;
        -ms-overflow-style: none;
        -webkit-overflow-scrolling: touch;
        will-change: scroll-position;
        flex-wrap: nowrap;
    }

    .event-slider::-webkit-scrollbar {
        display: none;
    }

    /* Drag cursor feedback */
    /* .event-slider {
        cursor: grab;
    }

    .event-slider.dragging {
        cursor: grabbing;
    } */

    .event-slider-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: #ffffff46;
        border: none;
        color: #4ec0db;
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

    .event-slider-arrow.left {
        left: 0;
    }

    .event-slider-arrow.right {
        right: 0;
    }

    .event-slider-arrow:disabled {
        /* opacity: 0.4; */
        /* cursor: not-allowed; */
        z-index: 999;
    }

    @media (max-width: 900px) {
        .event-container {
            padding: 0 10px;
        }

        .event-card {
            width: 320px;
            min-width: 320px;
            max-width: 320px;
            height: 330px;
        }

        .event-image {
            height: 180px;
        }

        .event-title {
            font-size: 16px;
        }

        .event-locations {
            font-size: 11px;
        }

        .event-price-section {
            flex-direction: row;
            gap: 10px;
        }

        .event-slider-wrapper {
            padding: 0 32px;
        }

        .event-view {
            bottom: -18px;
        }
    }

    @media (max-width: 600px) {
        .event-container {
            padding: 0 5px;
        }

        .event-slider-wrapper {
            padding: 0;
        }

        .event-slider {
            -webkit-overflow-scrolling: touch;
        }

        .event-card {
            width: 350px;
            min-width: 350px;
            max-width: 350px;
            height: 325px !important;
            margin: 0;
            scroll-snap-align: center;
        }

        .event-title {
            font-size: 14px;
        }

        .event-locations {
            font-size: 10px;
        }

        .event-price-section {
            margin: 0px 18px 10px 12px;
            gap: 8px;
            padding: auto;
        }

        .event-dates {
            font-size: 7px;
            padding: 4px 6px;
            max-width: 60%;
        }

        .event-starts {
            font-size: 10px;
        }

        .event-price {
            font-size: 16px;
        }

        .event-view {
            width: 110px;
            height: 36px;
            font-size: 9px !important;
            padding: 6px 12px;
            bottom: -37px;
        }

        .event-slider-arrow {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }

        .event-slider-arrow.left {
            left: 5px;
        }

        .event-slider-arrow.right {
            right: 5px;
        }
    }

    @media (max-width: 400px) {
        .event-card {
            width: calc(92vw - 16px);
            min-width: calc(92vw - 16px);
            max-width: calc(92vw - 16px);
            height: 280px;
        }

        .event-title {
            font-size: 13px;
            margin: 10px 12px 0px 12px;
        }

        .event-locations {
            font-size: 9px;
            margin: 0px 12px 0px 12px;
        }

        .event-dates {
            font-size: 6px;
            padding: 3px 5px;
            max-width: 65%;
        }

        .event-starts {
            font-size: 9px;
        }

        .event-price {
            font-size: 14px;
        }

        .event-view {
            width: 100px;
            height: 32px;
            font-size: 12px;
            padding: 5px 10px;
            bottom: -16px;
        }

        .event-slider-wrapper {
            padding: 0;
        }
    }
</style>
<style>
    /* Responsive slot badge for event cards */
    .event-slot-badge {
        position: absolute;
        top: 15px;
        right: 18px;
        z-index: 3;
        background-color: white;
        border: none;
        border-radius: 20px;
        padding: 4px 8px;
        display: flex;
        align-items: center;
        /* box-shadow: 0 1px 4px rgba(0, 0, 0, 0.07); */
        min-width: 70px;
    }

    .event-slot-badge .event-dates-text {
        font-weight: 700;
        font-size: 10px;
        color: #4ec0db;
        display: flex;
        align-items: center;
    }

    @media (max-width: 768px) {
        .event-slot-badge {
            top: 10px;
            right: 10px;
            padding: 3px 7px;
            min-width: 60px;
        }

        .event-slot-badge .event-dates-text {
            font-size: 9px;
        }
    }

    @media (max-width: 480px) {
        .event-slot-badge {
            top: unset;
            bottom: 287px;
            right: 18px;
            left: unset;
            padding: 2px 6px;
            min-width: 54px;
        }

        .event-slot-badge .event-dates-text {
            font-size: 8px;
        }
    }
</style>

<div class="event-container">
    <div class="event-slider-wrapper" id="event-slider-wrapper">
        <button class="event-slider-arrow left" aria-label="Scroll to previous trip" type="button"
            id="event-slider-prev">
            <i class="fa fa-chevron-left"></i>
        </button>

        <div class="event-slider" id="event-slider-august">
            
            <!-- Event Card 1 -->
            <!-- <div class="event-card">
                <div class="event-content" style="position: relative;">
                    <div class="event-image">
                        <img src="assets/img/event/cards/event-card-11.avif" alt="DINE WITH Strangers">
                    </div>
                    <div class="event-slot-badge">
                        <span class="event-dates-text" style="color: black;">
                            <i class="fa-solid fa-users me-1" style=" margin-right: 4px;"></i>
                            Slot: 12
                        </span>
                    </div>
                    <div class="event-card-content"
                        style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; ">
                        <div class="event-card-flex" style="padding: 10px 20px;"></div>
                        <div>
                            <h1 class="event-title event-title-responsive-on-event"
                                style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; word-spacing: 1px;">
                                DINE WITH Strangers
                                <p class="mt-1"
                                    style="font-size: 10px;  margin-bottom: 0px; color: #FFFFFF; text-transform: none;  word-spacing: 1px;">
                                    Share a meal, swap stories, make new friends</p>
                            </h1>
                        </div>
                        <div class="event-price-section" style="margin: 0; padding:10px 20px 10px 20px;">
                            <div class="event-dates">
                                <span class="event-dates-text" style="font-weight:700">
                                    <i class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i>
                                    11th Oct 2025
                                </span>
                            </div>
                            <div class="event-dates">
                                <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                <span class="event-dates-text" style="font-weight:700"> ECR, Chennai</span>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="event-view">Closed</a>
                </div>
            </div> -->

            <!-- Event Card 2 -->
            <div onclick="window.open('events-nov-1.php','target:_blank')" style="cursor: pointer;" class="event-card">
                <div class="event-content" style="position: relative;">
                    <div class="event-image">
                        <img src="assets/img/event/cards/event-card-11.avif" alt="Pottery WORK SHOP">
                    </div>
                    <!-- Slot at top right, responsive -->
                    <div class="event-slot-badge">
                        <span class="event-dates-text" style="color: black;">
                            <i class="fa-solid fa-users me-1" style=" margin-right: 4px;"></i>
                            Slot: 30
                        </span>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 210px; ">
                        <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                        <h1 class="event-title event-title-responsive-on-event"
                            style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; color: #fff; word-spacing: 1px;">
                            Strangers Fun meetup
                            <p class="mt-1"
                                style="font-size: 10px; margin-bottom: 0px; color: #FFFFFF; text-transform: none;  word-spacing: 1px;">
                                Games, icebreakers, laughs, future buddies</p>

                        </h1>
                        <div class="event-price-section " style=" margin: 0;  padding: 10px 20px 20px 20px;">
                            <div class="event-dates">
                                <span class="event-dates-text" style="font-weight:700"><i
                                        class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i> 1st Nov
                                    2025</span>
                            </div>
                            <div class="event-dates">
                                <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                <span class="event-dates-text" style="font-weight:700">Chennai
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="events-sep-21.php" target="_blank" class="event-view">Register</a> -->
                    <a href="events-nov-1.php" target="_blank" class="event-view">Register</a>
                </div>
            </div>

            <!-- Event Card 3 -->
            <div class="event-card">
                <div class="event-content" style="position: relative;">
                    <div class="event-image">
                        <img src="assets/img/event/cards/event-card-13.avif" alt="Pottery WORK SHOP">
                    </div>
                    <!-- Slot at top right, responsive -->
                    <div class="event-slot-badge">
                        <span class="event-dates-text" style="color: black;">
                            <i class="fa-solid fa-users me-1" style=" margin-right: 4px;"></i>
                            Slot: 15
                        </span>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 210px; ">
                        <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                        <h1 class="event-title event-title-responsive-on-event"
                            style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; color: #fff; word-spacing: 1px;">
                            Mystery Movie Night
                            <p class="mt-1" style="font-size: 10px; margin-bottom: 0px;color: #FFFFFF; text-transform: none;  
                            word-spacing: 1px;">Watch a surprise film, popcorn, laughs, discussions</p>

                        </h1>
                        <div class="event-price-section " style=" margin: 0;  padding: 10px 20px 20px 20px;">
                            <div class="event-dates">
                                <span class="event-dates-text" style="font-weight:700"><i
                                        class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i> 14th Nov
                                    2025</span>
                            </div>
                            <div class="event-dates">
                                <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                <span class="event-dates-text" style="font-weight:700">Coimbatore
                                </span>
                            </div>
                        </div>
                    </div>
                    <a href="components\events\event-pages\events-nov-1.php" class="event-view">Soon !</a>
                </div>
            </div>
            <!-- Event Card 4 -->

            <div class="event-card">
                <div class="event-content" style="position: relative;">
                    <div class="event-image">
                        <img src="assets/img/event/cards/event-card-14.avif" alt="Pottery WORK SHOP">
                    </div>
                    <!-- Slot at top right, responsive  #C0C0C0;-->
                    <div class="event-slot-badge">
                        <span class="event-dates-text" style="color: black;">
                            <i class="fa-solid fa-users me-1" style="color:black; margin-right: 4px;"></i>
                            Slot: 16
                        </span>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 210px; ">
                        <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                        <h1 class="event-title event-title-responsive-on-event mt-1"
                            style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; color: #fff; word-spacing: 1px;">
                            Coffee & Conversations
                            <p class="mt-1" style="font-size: 11px; margin-bottom: 0px; color: #FFFFFF; text-transform: none;
                             word-spacing: 1px; ">Sip, chat, share stories, meet like-minded people</p>

                        </h1>
                        <div class="event-price-section " style=" margin: 0;  padding: 10px 20px 20px 20px;">
                            <div class="event-dates">
                                <span class="event-dates-text" style="font-weight:700"><i
                                        class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i> 21st Nov
                                    2025</span>
                            </div>
                            <div class="event-dates">
                                <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                <span class="event-dates-text" style="font-weight:700">Bangalore
                                </span>
                            </div>
                        </div>
                    </div>
                    <a href="components\events\event-pages\events-nov-1.php" class="event-view">Soon !</a>
                </div>
            </div>
            <!-- Event Card 5 -->

            <div onclick="window.open('events-nov-26.php','target:_blank')" style="cursor: pointer;" class="event-card">
                <div class="event-content" style="position: relative;">
                    <div class="event-image">
                        <img src="assets/img/event/cards/event-card-12.avif" alt="Pottery WORK SHOP">
                    </div>
                    <!-- Slot at top right, responsive -->
                    <div class="event-slot-badge">
                        <span class="event-dates-text" style="color: black;">
                            <i class="fa-solid fa-users me-1" style=" margin-right: 4px;"></i>
                            Slot: 15
                        </span>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 2; margin-top: 210px; ">
                        <div class="event-card-flex" style=" padding: 10px 20px;"></div>
                        <h1 class="event-title event-title-responsive-on-event"
                            style="padding: 0px 10px 0px 10px; font-size: 15px; font-weight: bold; word-spacing: 1px;">
                            Pottery WORK SHOP
                            <p class="mt-1"
                                style="font-size: 10px; margin-bottom: 0px; color: #FFFFFF; text-transform: none;  word-spacing: 1px;">
                                Shape, mold, Heal, create, laugh together</p>

                        </h1>
                        <div class="event-price-section " style=" margin: 0;  padding: 10px 20px 20px 20px;">
                            <div class="event-dates">
                                <span class="event-dates-text" style="font-weight:700"><i
                                        class="fa-solid fa-calendar me-1" style="color: #4ec0db;"></i> 26th Nov
                                    2025</span>
                            </div>
                            <div class="event-dates">
                                <i class="fa fa-map-marker-alt me-1" style="color: #4ec0db;"></i>
                                <span class="event-dates-text" style="font-weight:700">Chennai
                                </span>
                            </div>
                        </div>
                    </div>
                    <a href="events-nov-26.php" target="_blank" class="event-view">Register</a>
                </div>
            </div>

        </div>
        <button class="event-slider-arrow right" aria-label="Scroll to next trip" type="button" id="event-slider-next">
            <i class="fa fa-chevron-right"></i>
        </button>
    </div>

    <!-- <div style="display: flex; justify-content: center; margin: 30px 0;">
        <a href="events"><button class="btn btn-primary" style="
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
    </div> -->
    <style>
        @media (max-width:600px) {
            .btn.btn-primary {
                font-size: 0.98rem !important;
                padding: 8px 18px !important;
                border-radius: 17px !important;
                min-width: 120px;
                width: 90vw;
                max-width: 400px;
            }

            .event-slider-wrapper+div {
                margin: 18px 0 !important;
            }
        }
    </style>
</div>

<script>
    // Touch slider: swipe smoothly moves to next/prev card (like a carousel)
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.getElementById('event-slider-august');
        const leftBtn = document.getElementById('event-slider-prev');
        const rightBtn = document.getElementById('event-slider-next');
        const cards = slider ? Array.from(slider.getElementsByClassName('event-card')) : [];

        // Helper to get the current centered card index
        function getCurrentIndex() {
            if (!slider || cards.length === 0) return 0;
            const scrollLeft = slider.scrollLeft;
            const sliderCenter = scrollLeft + slider.offsetWidth / 2;
            let closestIdx = 0;
            let closestDist = Infinity;
            cards.forEach((card, idx) => {
                const cardCenter = card.offsetLeft + card.offsetWidth / 2;
                const dist = Math.abs(cardCenter - sliderCenter);
                if (dist < closestDist) {
                    closestDist = dist;
                    closestIdx = idx;
                }
            });
            return closestIdx;
        }

        // Helper to scroll to a card by index, centering it
        function scrollToCard(idx, instant = false) {
            if (!slider || cards.length === 0) return;
            const card = cards[idx];
            const cardLeft = card.offsetLeft;
            const containerWidth = slider.offsetWidth;
            const cardWidth = card.offsetWidth;
            const scrollPosition = cardLeft - (containerWidth - cardWidth) / 2;
            slider.scrollTo({
                left: scrollPosition,
                behavior: instant ? 'auto' : 'smooth'
            });
        }

        // Update arrow disabled state
        function updateArrows() {
            if (!slider || cards.length === 0) return;
            leftBtn.disabled = slider.scrollLeft <= 10;
            rightBtn.disabled = slider.scrollLeft + slider.offsetWidth >= slider.scrollWidth - 10;
        }

        // Button click handlers
        if (leftBtn && rightBtn && slider && cards.length > 0) {
            leftBtn.addEventListener('click', function() {
                const idx = getCurrentIndex();
                if (idx > 0) scrollToCard(idx - 1);
            });
            rightBtn.addEventListener('click', function() {
                const idx = getCurrentIndex();
                if (idx < cards.length - 1) scrollToCard(idx + 1);
            });
            slider.addEventListener('scroll', updateArrows);
            window.addEventListener('resize', updateArrows);
            // Initial state
            setTimeout(() => {
                updateArrows();
                if (window.innerWidth <= 600) scrollToCard(0, true);
            }, 100);
        }

        // Touch swipe: snap to next/prev card based on swipe direction and distance
        if (slider) {
            let isTouching = false;
            let startX = 0;
            let scrollLeftStart = 0;
            let touchStartTime = 0;
            let lastX = 0;
            let lastMove = 0;
            let velocity = 0;
            let rafId = null;

            slider.style.overflowX = 'auto';
            slider.style.webkitOverflowScrolling = 'touch';

            // For smoother touchmove, use requestAnimationFrame
            function onTouchMove(e) {
                if (!isTouching) return;
                const x = e.touches[0].pageX;
                const walk = startX - x;
                slider.scrollLeft = scrollLeftStart + walk;
                // For velocity
                velocity = x - lastX;
                lastX = x;
                lastMove = Date.now();
            }

            slider.addEventListener('touchstart', function(e) {
                isTouching = true;
                startX = e.touches[0].pageX;
                scrollLeftStart = slider.scrollLeft;
                touchStartTime = Date.now();
                lastX = startX;
                velocity = 0;
                if (rafId) {
                    cancelAnimationFrame(rafId);
                    rafId = null;
                }
            }, {
                passive: true
            });

            // Use rAF for touchmove to avoid lag
            let scheduled = false;

            function rafTouchMove(e) {
                if (!scheduled) {
                    scheduled = true;
                    rafId = requestAnimationFrame(() => {
                        onTouchMove(e);
                        scheduled = false;
                    });
                }
            }
            slider.addEventListener('touchmove', rafTouchMove, {
                passive: false
            });

            slider.addEventListener('touchend', function(e) {
                if (!isTouching) return;
                isTouching = false;
                if (rafId) {
                    cancelAnimationFrame(rafId);
                    rafId = null;
                }
                const endX = lastX;
                const deltaX = endX - startX;
                const elapsed = Date.now() - touchStartTime;
                const threshold = 40; // px
                const fastSwipe = Math.abs(deltaX) > threshold && elapsed < 350;

                let idx = getCurrentIndex();

                // If swipe is fast and long enough, go to next/prev card
                if (fastSwipe) {
                    if (deltaX < 0 && idx < cards.length - 1) {
                        idx += 1;
                    } else if (deltaX > 0 && idx > 0) {
                        idx -= 1;
                    }
                }
                scrollToCard(idx);
            });

            // Mouse drag for desktop (unchanged)
            let isDragging = false;
            let mouseStartX = 0;
            let mouseScrollLeft = 0;

            slider.addEventListener('mousedown', function(e) {
                isDragging = true;
                mouseStartX = e.pageX;
                mouseScrollLeft = slider.scrollLeft;
                slider.classList.add('dragging');
            });

            slider.addEventListener('mousemove', function(e) {
                if (!isDragging) return;
                e.preventDefault();
                const x = e.pageX;
                const walk = mouseStartX - x;
                slider.scrollLeft = mouseScrollLeft + walk;
            });

            slider.addEventListener('mouseup', function(e) {
                if (isDragging) {
                    isDragging = false;
                    slider.classList.remove('dragging');
                    // Snap to next/prev card if swipe is big enough
                    const endX = e.pageX;
                    const deltaX = endX - mouseStartX;
                    const threshold = 40;
                    let idx = getCurrentIndex();
                    if (Math.abs(deltaX) > threshold) {
                        if (deltaX < 0 && idx < cards.length - 1) {
                            idx += 1;
                        } else if (deltaX > 0 && idx > 0) {
                            idx -= 1;
                        }
                    }
                    scrollToCard(idx);
                }
            });

            slider.addEventListener('mouseleave', function(e) {
                if (isDragging) {
                    isDragging = false;
                    slider.classList.remove('dragging');
                    const idx = getCurrentIndex();
                    scrollToCard(idx);
                }
            });

            // Performance: use will-change for smoother scroll on mobile
            slider.style.willChange = 'scroll-position, transform';
        }
    });
</script>