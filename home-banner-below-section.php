<style>
    /* Apple Liquid Glass Inspired Styles - Medium Size Section */
    body {
        --liquid-glass-bg: linear-gradient(135deg, #e0e7ef 0%, #f5f7fa 100%);
        --liquid-glass-blur: 32px;
        --liquid-glass-radius: 28px;
        --liquid-glass-border: 1.5px solid rgba(255, 255, 255, 0.45);
        --liquid-glass-shadow: 0 6px 24px 0 rgba(31, 38, 135, 0.14), 0 1.5px 8px 0 rgba(255, 255, 255, 0.13);
        --liquid-glass-inner-glow: 0 0 0 1.5px rgba(255, 255, 255, 0.18) inset;
        --liquid-glass-hover-shadow: 0 10px 32px 0 rgba(31, 38, 135, 0.18), 0 2px 10px 0 rgba(255, 255, 255, 0.18);
        --liquid-glass-icon-bg: linear-gradient(135deg, #b6e0fe 0%, #f5f7fa 100%);
        --liquid-glass-icon-shadow: 0 3px 12px 0 rgba(78, 192, 219, 0.13);
        --liquid-glass-title: #1a1a1a;
        --liquid-glass-text: #2d4a5a;
    }

    .categories-section-bg {
        position: relative;
        background:
            linear-gradient(135deg, rgba(224, 231, 239, 0.55) 0%, rgba(245, 247, 250, 0.55) 100%),
            url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1500&q=80');
        background-size: cover;
        background-position: center center;
        min-height: 420px;
        width: 100%;
        padding: 36px 0 36px 0;
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
        filter: blur(40px);
        opacity: 0.32;
    }

    .categories-section-bg::before {
        width: 260px;
        height: 260px;
        left: -60px;
        top: -60px;
        background: radial-gradient(circle at 30% 30%, #b6e0fe 0%, #f5f7fa 100%);
    }

    .categories-section-bg::after {
        width: 180px;
        height: 180px;
        right: -40px;
        bottom: -40px;
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
        justify-content: center;
        align-items: stretch;
        gap: 1.5rem;
        text-align: center;
    }

    .categories-col {
        flex: 1 1 180px;
        max-width: 260px;
        min-width: 180px;
        display: flex;
        align-items: stretch;
        margin-bottom: 0 !important;
        text-align: center;
    }

    @media (max-width: 991.98px) {
        .categories-row-single {
            gap: 1rem;
        }

        .categories-col {
            max-width: 48%;
            min-width: 160px;
        }
    }

    @media (max-width: 767.98px) {
        .categories-row-single {
            flex-direction: row;
            gap: 1rem;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            flex-wrap: nowrap;
            padding-bottom: 8px;
            text-align: center;
        }

        .categories-col {
            /* Show one card fully on mobile */
            min-width: 60vw;
            max-width: 60vw;
            flex: 0 0 90vw;
        }

        .categories-section-bg {
            padding: 0px 0 0px 0;
        }

        /* Center the first card on mobile */
        .categories-col.center-on-mobile {
            margin-left: auto !important;
            margin-right: auto !important;
        }
    }

    .liquid-glass-card {
        background: rgba(255, 255, 255, 0.18);
        border-radius: var(--liquid-glass-radius);
        box-shadow: var(--liquid-glass-shadow), var(--liquid-glass-inner-glow);
        border: var(--liquid-glass-border);
        backdrop-filter: blur(var(--liquid-glass-blur)) saturate(180%);
        -webkit-backdrop-filter: blur(var(--liquid-glass-blur)) saturate(180%);
        transition: box-shadow 0.35s cubic-bezier(.4, 0, .2, 1), transform 0.35s cubic-bezier(.4, 0, .2, 1);
        position: relative;
        overflow: hidden;
        width: 100%;
        min-height: 170px;
        padding: 1.3rem 1.1rem 1.1rem 1.1rem;
        margin-left: auto;
        margin-right: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        gap: 1rem;
        box-sizing: border-box;
        isolation: isolate;
        text-align: center;
    }

    .liquid-glass-card::before {
        content: "";
        position: absolute;
        top: -30%;
        left: -30%;
        width: 160%;
        height: 160%;
        background: linear-gradient(120deg, rgba(78, 192, 219, 0.10) 0%, rgba(255, 255, 255, 0.13) 100%);
        z-index: 0;
        pointer-events: none;
        border-radius: 50%;
        filter: blur(18px);
        opacity: 0.4;
    }

    .liquid-glass-card:hover {
        box-shadow: var(--liquid-glass-hover-shadow), var(--liquid-glass-inner-glow);
        transform: translateY(-5px) scale(1.025);
    }

    .liquid-glass-card>* {
        position: relative;
        z-index: 1;
    }

    .liquid-glass-icon {
        width: 54px;
        height: 54px;
        border-radius: 50%;
        background: var(--liquid-glass-icon-bg);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.7rem;
        color: #4ec0db;
        box-shadow: var(--liquid-glass-icon-shadow);
        margin-bottom: 0.5rem;
        border: 1.5px solid rgba(255, 255, 255, 0.45);
        backdrop-filter: blur(8px) saturate(180%);
        -webkit-backdrop-filter: blur(8px) saturate(180%);
        transition: box-shadow 0.3s;
        text-align: center;
    }

    .liquid-glass-card:hover .liquid-glass-icon {
        box-shadow: 0 6px 18px 0 rgba(78, 192, 219, 0.18);
    }

    .liquid-glass-inner {
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        gap: 0.2rem;
        text-align: center;
    }

    .liquid-glass-title {
        color: var(--liquid-glass-title);
        font-weight: 700;
        letter-spacing: 0.2px;
        margin-bottom: 0.1rem;
        text-shadow: 0 2px 8px rgba(255, 255, 255, 0.13);
        font-size: 1.01rem;
        line-height: 1.18;
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
        font-size: 0.93rem;
        font-weight: 400;
        text-shadow: 0 1px 6px rgba(255, 255, 255, 0.10);
        line-height: 1.32;
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
        <div class="container" style="max-width: 980px; text-align: center;">
            <div class="categories-row-single">
                <div class="categories-col center-on-mobile">
                    <div class="liquid-glass-card">
                        <span class="liquid-glass-icon"><i class="fas fa-users"></i></span>
                        <div class="liquid-glass-inner">
                            <h2 class="liquid-glass-title">Travel Buddies United</h2>
                            <p class="liquid-glass-text">
                                Say Hi to your new travel squad – your undiscovered Besties!
                                Whether you join solo or in a group, you’re all set for an epic adventure!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="categories-col">
                    <div class="liquid-glass-card">
                        <span class="liquid-glass-icon"><i class="fas fa-suitcase-rolling"></i></span>
                        <div class="liquid-glass-inner">
                            <h2 class="liquid-glass-title">Everything Included, No Fuss</h2>
                            <p class="liquid-glass-text">
                                Forget about transport, hotels, and planning. Just one booking, and we've got everything
                                taken care of for you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="categories-col">
                    <div class="liquid-glass-card">
                        <span class="liquid-glass-icon"><i class="fas fa-user-tie"></i></span>
                        <div class="liquid-glass-inner">
                            <h2 class="liquid-glass-title">Led by the Pros</h2>
                            <p class="liquid-glass-text">
                                Cool trip leaders and local guides who know their stuff, and they're fun too! They've
                                got the best insights and will help you out whenever you need it.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="categories-col">
                    <div class="liquid-glass-card">
                        <span class="liquid-glass-icon"><i class="fas fa-mountain-sun"></i></span>
                        <div class="liquid-glass-inner">
                            <h2 class="liquid-glass-title">One-of-a-kind adventure</h2>
                            <p class="liquid-glass-text">
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