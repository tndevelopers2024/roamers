<style>
    /* Apple Liquid Glass Inspired Styles - Enhanced Glassmorphism */
    body {
        --liquid-glass-bg: linear-gradient(135deg, #e0e7ef 0%, #f5f7fa 100%);
        --liquid-glass-blur: 38px;
        --liquid-glass-radius: 26px;
        --liquid-glass-border: 1.5px solid rgba(255, 255, 255, 0.55);
        --liquid-glass-shadow: 0 6px 24px 0 rgba(31, 38, 135, 0.13), 0 2px 8px 0 rgba(255, 255, 255, 0.13);
        --liquid-glass-inner-glow: 0 0 0 2px rgba(255, 255, 255, 0.18) inset;
        --liquid-glass-icon-bg: white;
        --liquid-glass-icon-shadow: 0 2px 8px 0 rgba(78, 192, 219, 0.10);
        --liquid-glass-title: #1a1a1a;
        --liquid-glass-text: #2d4a5a;
    }

    .categories-section-bg {
        position: relative;
        background: #ddac81;
        background-size: cover;
        background-position: center center;
        min-height: 260px;
        width: 100%;
        padding: 8px 0 30px 0 !important;
        z-index: 1;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    @media (max-width: 900px) {
        .categories-section-bg {
            min-height: 200px;
            padding: 6px 0 6px 0 !important;
        }
    }

    @media (max-width: 600px) {
        .categories-section-bg {
            min-height: 80px;
            padding: 1px 0 1px 0 !important;
            flex-direction: column;
        }
    }

    /* iPhone specific tweaks using device-width and device-pixel-ratio */
    @media only screen and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {
        .categories-section-bg {
            min-height: 60px;
            padding: 0 !important;
        }

        .categories-row-single {
            gap: 0.4rem;
        }

        .liquid-glass-card {
            min-height: 28px;
            padding: 7px;
            gap: 0.05rem;
            max-width: 180px;
            width: 92vw;
        }

        .liquid-glass-title {
            font-size: 0.54rem;
            line-height: 1.01;
        }

        .liquid-glass-text {
            font-size: 0.41rem;
            line-height: 1.01;
            padding-left: 1px !important;
            padding-right: 1px !important;
        }

        .liquid-glass-icon {
            width: 18px;
            height: 18px;
            font-size: 0.6rem;
            margin-bottom: 0.03rem;
        }

        .liquid-glass-icon img {
            width: 12px !important;
            height: 12px !important;
        }
    }

    .categories-section-bg::before,
    .categories-section-bg::after {
        content: "";
        position: absolute;
        z-index: 0;
        pointer-events: none;
        border-radius: 50%;
        filter: blur(32px);
        opacity: 0.22;
    }

    .categories-section-bg::before {
        width: 180px;
        height: 16px;
        left: -40px;
        top: -40px;
        background: radial-gradient(circle at 30% 30%, #b6e0fe 0%, #f5f7fa 100%);
    }

    .categories-section-bg::after {
        width: 120px;
        height: 120px;
        right: -20px;
        bottom: -20px;
        background: radial-gradient(circle at 70% 70%, #fbc2eb 0%, #f5f7fa 100%);
    }

    .categories-container {
        position: relative;
        z-index: 2;
        width: 100%;
        text-align: center;
    }

    .categories-row-single {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: stretch;
        gap: 1rem;
        text-align: center;
    }

    .categories-col {
        flex: 1 1 0;
        max-width: 25%;
        min-width: 0;
        display: flex;
        align-items: stretch;
        margin-bottom: 0 !important;
        text-align: center;
        box-sizing: border-box;
    }

    @media (max-width: 991.98px) {
        .categories-row-single {
            gap: 0.7rem;
        }

        .categories-col {
            max-width: 44%;
            min-width: 120px;
        }
    }

    @media (max-width: 767.98px) {
        .categories-row-single {
            flex-direction: row;
            gap: 0.7rem;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            flex-wrap: nowrap;
            padding-bottom: 4px;
            text-align: center;
        }

        .categories-col {
            min-width: 54vw;
            max-width: 54vw;
            flex: 0 0 80vw;
        }

        .categories-section-bg {
            padding: 0px 0 0px 0;
        }

        .categories-col.center-on-mobile {
            margin-left: auto !important;
            margin-right: auto !important;
        }
    }

    /* Hide scrollbar on mobile for .categories-row-single */
    @media (max-width: 767.98px) {
        .categories-row-single {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .categories-row-single::-webkit-scrollbar {
            display: none;
        }
    }

    .liquid-glass-card {
        border-radius: var(--liquid-glass-radius);
        border: var(--liquid-glass-border);
        -webkit-backdrop-filter: blur(var(--liquid-glass-blur));
        backdrop-filter: blur(var(--liquid-glass-blur));
        transition: box-shadow 0.35s cubic-bezier(.4, 0, .2, 1), transform 0.35s cubic-bezier(.4, 0, .2, 1);
        position: relative;
        overflow: hidden;
        width: 100%;
        min-height: 110px;
        padding: 0.7rem;
        margin-left: auto;
        margin-right: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        gap: 0.5rem;
        box-sizing: border-box;
        isolation: isolate;
        text-align: center;
        height: 100%;
    }

    .liquid-glass-card::before {
        content: "";
        position: absolute;
        top: -30%;
        left: -30%;
        width: 120%;
        height: 120%;
        z-index: 0;
        pointer-events: none;
        border-radius: 50%;
        filter: blur(18px);
        opacity: 0.38;
    }

    .liquid-glass-card::after {
        content: "";
        position: absolute;
        top: 8px;
        left: 18px;
        width: 60%;
        height: 18px;
        border-radius: 12px;
        opacity: 0.55;
        pointer-events: none;
        z-index: 1;
        filter: blur(2px);
    }



    .liquid-glass-card>* {
        position: relative;
        z-index: 2;
    }

    @media (max-width: 991.98px) {
        .liquid-glass-card {
            min-height: 90px;
            padding: 0.6rem;
            gap: 0.4rem;
        }
    }

    @media (max-width: 767.98px) {
        .liquid-glass-card {
            min-height: 70px;
            padding: 0.5rem;
            gap: 0.3rem;
        }

        .liquid-glass-card::after {
            top: 4px;
            left: 10px;
            width: 70%;
            height: 12px;
        }
    }

    @media (max-width: 480px) {
        .liquid-glass-card {
            min-height: 36px;
            padding: 11px;
            gap: 0.1rem;
            max-width: 220px;
            width: 90vw;
        }

        .liquid-glass-card::after {
            top: 1px;
            left: 3px;
            width: 80%;
            height: 4px;
        }
    }

    .liquid-glass-icon {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: var(--liquid-glass-icon-bg);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        color: #4ec0db;
        box-shadow: var(--liquid-glass-icon-shadow);
        margin-bottom: 0.2rem;
        border: 1.2px solid rgba(255, 255, 255, 0.55);
        backdrop-filter: blur(8px) saturate(180%);
        -webkit-backdrop-filter: blur(8px) saturate(180%);
        transition: box-shadow 0.3s;
        text-align: center;
    }

    @media (max-width: 480px) {
        .liquid-glass-icon {
            width: 22px;
            height: 22px;
            font-size: 0.7rem;
            margin-bottom: 0.05rem;
        }

        .liquid-glass-icon img {
            width: 14px !important;
            height: 14px !important;
        }
    }

    .liquid-glass-inner {
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        gap: 0.1rem;
        text-align: center;
    }

    .liquid-glass-title {
        color: #FFFFFF !important;
        font-weight: 700;
        letter-spacing: 0.1px;
        margin-bottom: 0.05rem;
        text-shadow: 0 1px 4px rgba(255, 255, 255, 0.13);
        font-size: 1.01rem;
        line-height: 1.15;
        text-align: center;
        width: 100%;
        background: none !important;
        -webkit-background-clip: unset !important;
        -webkit-text-fill-color: unset !important;
        background-clip: unset !important;
    }

    @media (max-width: 480px) {
        .liquid-glass-title {
            font-size: 0.62rem;
            line-height: 1.05;
        }
    }

    .liquid-glass-text {
        color: #000 !important;
        font-size: 0.87rem;
        font-weight: 400;
        text-shadow: 0 1px 4px rgba(255, 255, 255, 0.10);
        line-height: 1.22;
        margin-bottom: 0;
        text-align: center;
        width: 100%;
    }

    @media (max-width: 480px) {
        .liquid-glass-text {
            font-size: 0.48rem;
            line-height: 1.05;
            padding-left: 2px !important;
            padding-right: 2px !important;
        }
    }
</style>
<section class="categories-section-bg">
    <section class="categories-container">
        <div class="container" style="max-width: 900px; text-align: center;">
            <div class="categories-row-single">
                <div class="categories-col center-on-mobile">
                    <div class="liquid-glass-card  pt-3">
                        <span class="liquid-glass-icon"><img src="assets/img/icon/travelbuddies-01.png" alt=""
                                style="width:100%;height:auto;max-width:32px;max-height:32px;"></span>
                        <div class="liquid-glass-inner">
                            <h2 class="liquid-glass-title">Travel Buddies United</h2>
                            <p class="liquid-glass-text px-2 py-1 px-md-4 py-md-2 text-white">
                                Say Hi to your new travel squad – your undiscovered Besties!
                                Whether you join solo or in a group, you’re all set for an epic adventure!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="categories-col">
                    <div class="liquid-glass-card  pt-3">
                        <span class="liquid-glass-icon"><img src="assets/img/icon/Inclusions-01.png" alt=""
                                style="width:100%;height:auto;max-width:32px;max-height:32px;"></span>
                        <div class="liquid-glass-inner">
                            <h2 class="liquid-glass-title">Everything Included, No Fuss</h2>
                            <p class="liquid-glass-text  px-2 py-1 px-md-4 py-md-2 text-white">
                                Forget about transport, hotels, and planning. Just one booking, and we've got everything
                                taken care of for you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="categories-col">
                    <div class="liquid-glass-card  pt-3">
                        <span class="liquid-glass-icon"><img src="assets/img/icon/Expertguide-01.png" alt=""
                                style="width:100%;height:auto;max-width:32px;max-height:32px;"></span>
                        <div class="liquid-glass-inner">
                            <h2 class="liquid-glass-title">Led by the Pros</h2>
                            <p class="liquid-glass-text   px-2 py-1 px-md-4 py-md-2 text-white">
                                Cool trip leaders and local guides who know their stuff, and they're fun too! They've
                                got the best insights and will help you out whenever you need it.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="categories-col">
                    <div class="liquid-glass-card pt-3">
                        <span class="liquid-glass-icon"><img src="assets/img/icon/transportation.png" alt=""
                                style="width:100%;height:auto;max-width:20px;max-height:20px;"></span>
                        <div class="liquid-glass-inner">
                            <h2 class="liquid-glass-title">One-of-a-kind adventure</h2>
                            <p class="liquid-glass-text  px-2 py-1 px-md-4 py-md-2 text-white">
                                Unique experiences selected by those in the know. Whether local grub, must-see spots,
                                and totally cool one-of-a-kind stuff, we've handpicked it all for you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>