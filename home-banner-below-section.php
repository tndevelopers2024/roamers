<style>
    /* Apple Liquid Glass Inspired Styles - Medium Size Section - Reduced Height */
    body {
        --liquid-glass-bg: linear-gradient(135deg, #e0e7ef 0%, #f5f7fa 100%);
        --liquid-glass-blur: 28px;
        --liquid-glass-radius: 22px;
        --liquid-glass-border: 1.2px solid rgba(255, 255, 255, 0.45);
        --liquid-glass-shadow: 0 3px 12px 0 rgba(31, 38, 135, 0.10), 0 1px 4px 0 rgba(255, 255, 255, 0.10);
        --liquid-glass-inner-glow: 0 0 0 1px rgba(255, 255, 255, 0.13) inset;
        --liquid-glass-hover-shadow: 0 6px 18px 0 rgba(31, 38, 135, 0.13), 0 1.5px 6px 0 rgba(255, 255, 255, 0.13);
        --liquid-glass-icon-bg: linear-gradient(135deg, #b6e0fe 0%, #f5f7fa 100%);
        --liquid-glass-icon-shadow: 0 2px 8px 0 rgba(78, 192, 219, 0.10);
        --liquid-glass-title: #1a1a1a;
        --liquid-glass-text: #2d4a5a;
    }

    .categories-section-bg {
        position: relative;
        background: #e4bf9e;
        background-size: cover;
        background-position: center center;
        min-height: 260px;
        width: 100%;
        padding: 8px 0 8px 0 !important;
        z-index: 1;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
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
        /* changed from center to space-between for even spacing */
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

    .liquid-glass-card {
        background: rgba(255, 255, 255, 0.49);
        border-radius: var(--liquid-glass-radius);
        box-shadow: var(--liquid-glass-shadow), var(--liquid-glass-inner-glow);
        border: var(--liquid-glass-border);
        backdrop-filter: blur(var(--liquid-glass-blur)) saturate(180%);
        -webkit-backdrop-filter: blur(var(--liquid-glass-blur)) saturate(180%);
        transition: box-shadow 0.35s cubic-bezier(.4, 0, .2, 1), transform 0.35s cubic-bezier(.4, 0, .2, 1);
        position: relative;
        overflow: hidden;
        width: 100%;
        min-height: 110px;
        padding: 0.7rem 0.7rem 0.7rem 0.7rem;
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
        background: linear-gradient(120deg, rgba(78, 192, 219, 0.08) 0%, rgba(255, 255, 255, 0.10) 100%);
        z-index: 0;
        pointer-events: none;
        border-radius: 50%;
        filter: blur(12px);
        opacity: 0.3;
    }

    .liquid-glass-card:hover {
        box-shadow: var(--liquid-glass-hover-shadow), var(--liquid-glass-inner-glow);
        transform: translateY(-3px) scale(1.015);
    }

    .liquid-glass-card>* {
        position: relative;
        z-index: 1;
    }

    .liquid-glass-icon {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: var(--liquid-glass-icon-bg);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.15rem;
        color: #4ec0db;
        box-shadow: var(--liquid-glass-icon-shadow);
        margin-bottom: 0.2rem;
        border: 1px solid rgba(255, 255, 255, 0.45);
        backdrop-filter: blur(6px) saturate(180%);
        -webkit-backdrop-filter: blur(6px) saturate(180%);
        transition: box-shadow 0.3s;
        text-align: center;
    }

    .liquid-glass-card:hover .liquid-glass-icon {
        box-shadow: 0 3px 10px 0 rgba(78, 192, 219, 0.13);
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
        color: var(--liquid-glass-title);
        font-weight: 700;
        letter-spacing: 0.1px;
        margin-bottom: 0.05rem;
        text-shadow: 0 1px 4px rgba(255, 255, 255, 0.10);
        font-size: 0.93rem;
        line-height: 1.12;
        text-align: center;
        width: 100%;
        font-family: 'SF Pro Display', 'Inter', 'Segoe UI', Arial, sans-serif;
        background: linear-gradient(90deg, #1a3a4a 60%, #4ec0db 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .liquid-glass-text {
        color: var(--liquid-glass-text);
        font-size: 0.81rem;
        font-weight: 400;
        text-shadow: 0 1px 4px rgba(255, 255, 255, 0.08);
        line-height: 1.18;
        margin-bottom: 0;
        text-align: center;
        width: 100%;
        font-family: 'SF Pro Text', 'Inter', 'Segoe UI', Arial, sans-serif;
    }
</style>
<!-- Font Awesome CDN for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<section class="categories-section-bg">
    <section class="categories-container">
        <div class="container" style="max-width: 900px; text-align: center;">
            <div class="categories-row-single">
                <div class="categories-col center-on-mobile">
                    <div class="liquid-glass-card  pt-3">
                        <span class="liquid-glass-icon"><i class="fas fa-users"></i></span>
                        <div class="liquid-glass-inner">
                            <h2 class="liquid-glass-title">Travel Buddies United</h2>
                            <p class="liquid-glass-text px-2 py-1 px-md-4 py-md-2">
                                Say Hi to your new travel squad – your undiscovered Besties!
                                Whether you join solo or in a group, you’re all set for an epic adventure!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="categories-col">
                    <div class="liquid-glass-card  pt-3">
                        <span class="liquid-glass-icon"><i class="fas fa-suitcase-rolling"></i></span>
                        <div class="liquid-glass-inner">
                            <h2 class="liquid-glass-title">Everything Included, No Fuss</h2>
                            <p class="liquid-glass-text  px-2 py-1 px-md-4 py-md-2">
                                Forget about transport, hotels, and planning. Just one booking, and we've got everything
                                taken care of for you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="categories-col">
                    <div class="liquid-glass-card  pt-3">
                        <span class="liquid-glass-icon"><i class="fas fa-user-tie"></i></span>
                        <div class="liquid-glass-inner">
                            <h2 class="liquid-glass-title">Led by the Pros</h2>
                            <p class="liquid-glass-text   px-2 py-1 px-md-4 py-md-2">
                                Cool trip leaders and local guides who know their stuff, and they're fun too! They've
                                got the best insights and will help you out whenever you need it.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="categories-col">
                    <div class="liquid-glass-card pt-3">
                        <span class="liquid-glass-icon"><i class="fas fa-mountain-sun"></i></span>
                        <div class="liquid-glass-inner">
                            <h2 class="liquid-glass-title">One-of-a-kind adventure</h2>
                            <p class="liquid-glass-text  px-2 py-1 px-md-4 py-md-2">
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