<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <style>
        .slider-container {
            overflow-x: auto;
            white-space: nowrap;
            cursor: grab;
            user-select: none;
        }

        .slider-container:active {
            cursor: grabbing;
        }

        .slider-container span {
            display: inline-block;
            font-weight: 500;
            padding-right: 50px;
            color: #fff;
        }

        :root {
            --main-text-color: #094067;
        }

        body {
            color: var(--main-text-color);
        }

        .text-color-from-envoto {
            color: #1ca8cb;
        }

        .text-color-from-envoto-2 {
            color: #daf1f7;
        }

        .background-color-from-envoto-2 {
            background-color: #daf1f7;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-radius: 15px !important;
        }

        .tour-card {
            border-radius: 15px !important;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
            color: var(--main-text-color);
        }

        .tour-card:hover {
            transform: translateY(-5px);
        }

        .icon-circle {
            background-color: #f0f4f8;
            border-radius: 50%;
            padding: 6px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .rating-badge {
            background-color: #daf1f7;
            color: var(--main-text-color);
            font-size: 10px;
            padding: 5px 10px;
            border-radius: 1rem;
        }

        .heart-icon {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #ffffffcc;
            padding: 8px;
            border-radius: 50%;
        }

        .btn-book,
        .text-indigo {
            background-color: #e6f2fc;
            color: var(--main-text-color) !important;
            font-weight: 500;
            border-radius: 25px;
            text-decoration: none;
        }

        .btn-book:hover,
        .text-indigo:hover {
            background-color: #cce4fa;
            color: var(--main-text-color);
        }

        .price-text {
            font-weight: 600;
            font-size: 1rem;
            color: var(--main-text-color);
        }

        .text-muted {
            color: #6c757d !important;
        }

        h6,
        small,
        .card-body,
        .card-body a,
        .card-body i {
            color: var(--main-text-color);
        }

        .slider-container {
            padding: 0px !important;
        }
    </style>

</head>

<body>

    <div class="container py-5 ">
        <div class="row g-4">
            <!-- Card START -->
            <div class="col-md-3">
                <div class="card tour-card position-relative">
                    <img src="assets/img/valley-of-flowers/vally-of-flowers-image (1).webp" class="card-img-top"
                        alt="..." />
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <small class="text-dark fw-bold">5 Days - 6 Nights</small>
                            <div class="rating-badge mb-2 ">Ex : Rishikesh</div>
                        </div>
                        <h6 class="fw-bold mb-3 manrope" style="color: #094067;">Valley Of Flowers</h6>
                        <div class="d-flex justify-content-between align-items-center text-muted small mb-3">
                            <small class="manrope"><i class="fa-solid fa-location-dot me-2"></i> Rishikesh, Joshimath,
                                Pulna</small> <span class="price-text fw-bold "><i class="fas fa-rupee-sign"></i>
                                9,990<span class="text-muted"> /-</span></span>
                        </div>
                        <p class=" rounded-2 background-color-from-envoto-2 overflow-hidden">
                        <div class="slider-container background-color-from-envoto-2 p-2 rounded-3" id="slider">
                            <span class="kodai1-dates card__description">

                            </span>
                        </div>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card END -->

            <!-- Duplicate this card to add more slides -->
        </div>
    </div>

    <script>
        const slider = document.getElementById('slider');
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 5; // scroll speed
            slider.scrollLeft = scrollLeft - walk;
        });

        // Touch support
        slider.addEventListener('touchstart', (e) => {
            isDown = true;
            startX = e.touches[0].pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('touchend', () => {
            isDown = false;
        });

        slider.addEventListener('touchmove', (e) => {
            if (!isDown) return;
            const x = e.touches[0].pageX - slider.offsetLeft;
            const walk = (x - startX) * 2;
            slider.scrollLeft = scrollLeft - walk;
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>