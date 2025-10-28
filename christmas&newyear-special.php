<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christmas & Newyear</title>
    <link rel="shortcut icon" href="assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192">

    <!-- Bootstrap CSS (fix: add for card/layout support) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            /* Add a dimmed linear-gradient overlay over the image (darken with rgba black) */
            background:
                linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)),
                url('https://images.pexels.com/photos/1303098/pexels-photo-1303098.jpeg') center center/cover no-repeat,
                rgba(248, 249, 250, 0.06);
            background-color: rgba(248, 249, 250, 0.05);
            /* fallback color */
            background-attachment: fixed;
        }

        .card {
            border: 1.5px solid #4ec0db !important;
            transition: transform 0.12s, box-shadow 0.12s;
            padding: 10px;
            border-radius: 19px;
            background: rgba(255, 255, 255, 0.95);
            /* add slight glassy look */
            box-shadow: 0 2px 14px #00000016;
        }

        .card:hover {
            transform: translateY(-6px) scale(1.008);
            border-color: #4ec0db !important;
        }

        .square-img-container {
            width: 100%;
            aspect-ratio: 1 / 0.8;
            overflow: hidden;
            border-radius: 10px 10px 0 0;
            position: relative;
        }

        .square-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 10px 10px 0 0;
        }

        .card-title {
            font-weight: 600;
        }

        .badge.bg-success {
            font-weight: 500;
            font-size: 1rem;
            border-radius: 24px;
            padding: 0.45em 1em;
        }

        .btn-primary {
            border-radius: 24px;
            font-weight: 500;
            letter-spacing: 0.02em;
            padding: 0.47em 1.5em;
        }

        .btn-primary:focus,
        .btn-primary:hover {
            box-shadow: 0 2px 8px #4ec0db22;
            outline: none;
        }

        ul {
            margin-bottom: 0.65rem;
        }

        @media (max-width: 767.98px) {
            .card {
                border-radius: 13px;
            }

            .square-img-container,
            .square-img-container img {
                border-radius: 13px 13px 0 0;
            }

            body {
                background-attachment: scroll;
            }
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h2 class="mb-5 text-center fw-bold" style="color:#fff; text-shadow:0 2px 8px #4ec0db90, 0 1px 0 #000;">
            Christmas & New Year Special with
            <span style="color: #4ec0db;">Roamers</span>
        </h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <!-- Trip 1 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="square-img-container">
                        <img src="https://roamers.in/assets/img/kodaikanal/Kodai.jpg" class="card-img-top"
                            alt="Kodaikanal Backpacking" loading="lazy">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <!-- <div class="trip-label">Kodaikanal Backpacking</div> -->
                        <h5 class="card-title">Kodaikanal Backpacking</h5>
                        <p class="card-text mb-2">Get ready for the ultimate Kodaikanal adventure!<br>Thrilling treks
                            &amp; unforgettable moments await.</p>
                        <ul class="list-unstyled small mb-2">
                            <li><strong>Dates:</strong> 24-29 Dec 2025</li>
                            <li><strong>Duration:</strong> 3 Days / 2 Nights</li>
                            <li><strong>Includes:</strong> Beach Resort, Water Sports, Breakfast</li>
                        </ul>
                        <div class="mb-2">
                            <span class="badge bg-success">₹8,990 </span>
                            <span class="text-muted small ms-2">per person</span>
                        </div>
                        <a href="kodaikanal1-christmas-new-year.php" class="btn btn-primary mt-2">View Trip</a>
                    </div>
                </div>
            </div>

            <!-- Trip 2 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="square-img-container">
                        <img src="https://roamers.in/assets/img/megalaya/Front%203.jpg" class="card-img-top"
                            alt="Majestic Meghalaya" loading="lazy">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <!-- <div class="trip-label">North East Escape</div> -->
                        <h5 class="card-title">Majestic Meghalaya</h5>
                        <p class="card-text mb-2">Think Meghalaya is all about those picturesque waterfalls, root
                            bridges, and endless rivers?</p>
                        <ul class="list-unstyled small mb-2">
                            <li><strong>Dates:</strong> 20-23-28 Dec 2025</li>
                            <li><strong>Duration:</strong> 6 Days / 5 Nights</li>
                            <li><strong>Includes:</strong> Flights, Hotels, Trekking Guide, Meals</li>
                        </ul>
                        <div class="mb-2">
                            <span class="badge bg-success">₹19,990 </span>
                            <span class="text-muted small ms-2">per person</span>
                        </div>
                        <a href="meghalaya-christmas-new-year.php" class="btn btn-primary mt-auto " tabindex="-1"
                            aria-disabled="true">View Trip</a>
                    </div>
                </div>
            </div>

            <!-- Trip 3 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="square-img-container">
                        <img src="https://roamers.in/assets/img/pondicherry/Media/Pondy-cover2.jpg" class="card-img-top"
                            alt="Pondicherry & Chill" loading="lazy">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <!-- <div class="trip-label">Quick Getaway</div> -->
                        <h5 class="card-title">Pondicherry &amp; chill</h5>
                        <p class="card-text mb-2">Experience cozy beach vibes and lively streets in a beautiful coastal
                            town!</p>
                        <ul class="list-unstyled small mb-2">
                            <li><strong>Dates:</strong> 20-23-28 Dec 2025</li>
                            <li><strong>Duration:</strong> 2 Days / 1 Nights</li>
                            <li><strong>Includes:</strong> Stays, Local Sightseeing, Meals</li>
                        </ul>
                        <div class="mb-2">
                            <span class="badge bg-success">₹4,990</span>
                            <span class="text-muted small ms-2">per person</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-auto disabled" tabindex="-1" aria-disabled="true"
                            style="pointer-events:none;opacity:.75;">Coming Soon</a>
                    </div>
                </div>
            </div>

            <!-- Trip 4 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="square-img-container">
                        <img src="https://roamers.in/assets/img/wayanad/Chembra-Peak-Wayanad.jpg" class="card-img-top"
                            alt="Pondicherry & Chill" loading="lazy">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <!-- <div class="trip-label">Quick Getaway</div> -->
                        <h5 class="card-title">Wonders of Wayanad</h5>
                        <p class="card-text mb-2">Get ready for an exciting Wayanad adventure, Roamers! Picture trekking
                            to Chembra Peak, where the heart-shaped lake unfolds its magic.
                            town!</p>
                        <ul class="list-unstyled small mb-2">
                            <li><strong>Dates:</strong> 20-23-28 Dec 2025</li>
                            <li><strong>Duration:</strong> 3 Days / 2 Nights</li>
                            <li><strong>Includes:</strong> Stays, Local Sightseeing, Meals</li>
                        </ul>
                        <div class="mb-2">
                            <span class="badge bg-success">8,990/- </span>
                            <span class="text-muted small ms-2">per person</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-auto disabled" tabindex="-1" aria-disabled="true"
                            style="pointer-events:none;opacity:.75;">Coming Soon</a>
                    </div>
                </div>
            </div>

            <!-- Trip 5 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="square-img-container">
                        <img src="https://roamers.in/assets/img/Sirlanka/srilanka-images-by-roamers%20(6).webp"
                            class="card-img-top" alt="Pondicherry & Chill" loading="lazy">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <!-- <div class="trip-label">Quick Getaway</div> -->
                        <h5 class="card-title">Sri Lanka</h5>
                        <p class="card-text mb-2">
                            This isn’t your basic Sri Lanka trip – we’re going all in!

                            <span>Culture, nature, and beaches packed into one epic journey.</span>

                            <span>Join us as we explore temples, wildlife, and vibrant city life.</span>
                        </p>
                        <ul class="list-unstyled small mb-2">
                            <li><strong>Dates:</strong> 20-23-28 Dec 2025</li>
                            <li><strong>Duration:</strong> 7 Days / 6 Nights</li>
                            <li><strong>Includes:</strong> Stays, Local Sightseeing, Meals</li>
                        </ul>
                        <div class="mb-2">
                            <span class="badge bg-success">₹43,990</span>
                            <span class="text-muted small ms-2">per person</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-auto disabled" tabindex="-1" aria-disabled="true"
                            style="pointer-events:none;opacity:.75;">Coming Soon</a>
                    </div>
                </div>
            </div>

            <!-- Trip 5 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="square-img-container">
                        <img src="https://roamers.in/assets/img/Kerala/Kerala-photos.jpg"
                            class="card-img-top" alt="Pondicherry & Chill" loading="lazy">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <!-- <div class="trip-label">Quick Getaway</div> -->
                        <h5 class="card-title">Kerala Unplugged</h5>
                        <p class="card-text mb-2">
                        Hey, folks! Get ready for our Kerala backpacking extravaganza! We'll kick off in the Vagamon Hills with epic paragliding,
                        </p>
                        <ul class="list-unstyled small mb-2">
                            <li><strong>Dates:</strong> 20-23-28 Dec 2025</li>
                            <li><strong>Duration:</strong> 5 Days / 4 Nights</li>
                            <li><strong>Includes:</strong> Stays, Local Sightseeing, Meals</li>
                        </ul>
                        <div class="mb-2">
                            <span class="badge bg-success">₹14,490                            </span>
                            <span class="text-muted small ms-2">per person</span>
                        </div>
                        <a href="#" class="btn btn-primary mt-auto disabled" tabindex="-1" aria-disabled="true"
                            style="pointer-events:none;opacity:.75;">Coming Soon</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Bootstrap JS (Optional, for components that require JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>