<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Say Hi to your new travel squad – your undiscovered Besties! Whether you join solo or in a group, you’re all set for an epic adventure!">
  <title>Roamers - Discover Amazing Travel Destinations and Experiences</title>
  <!-- SEO Meta Description -->
  <meta name="description" content="Explore the world with Roamers. Find amazing travel
    destinations, tips, and experiences. Plan your perfect getaway with expert travel guides and
    inspiring stories." />
  <meta name="keywords" content="travel, travel destinations, travel tips, travel guides,
    vacation, explore, adventure, travel experiences, travel inspiration, Roamers">
  <meta name="author" content="Themeland" />
  <meta property="og:image" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png" />
  <meta property="og:image:secure_url" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png" />
  <meta property="og:image:width" content="700" />
  <meta property="og:image:height" content="500" />
  <!-- Title  -->

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- slider css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Favicon  -->
  <!-- <link rel="icon" href="assets/img/Logo/Logo mark-01.png" sizes="192x192" /> -->

  <link rel="shortcut icon" href="./assets/img/icon/fav-icon.png" type="image/x-icon" sizes="192x192" />

  <!-- ***** All CSS Files ***** -->
  <!-- ***** Font Asesome cdn ***** -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Style css -->

  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- Responsive css -->
  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="shortcut icon" href="asstes/img/icon/fav-icon.png" type="image/x-icon">

  <!-- script For SEO -->

  <script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "Product",
    "name": "Example Product",
    "image": "https://www.roamers.in/path-to-product-image.jpg",
    "description": "Example product description.",
    "sku": "EX12345",
    "brand": {
    "@type": "Brand",
    "name": "Example Brand"
    },
    "offers": {
    "@type": "Offer",
    "url": "https://www.roamers.in/product-page",
    "priceCurrency": "USD",
    "price": "99.99",
    "itemCondition": "http://schema.org/NewCondition",
    "availability": "http://schema.org/InStock"
    },
    
    ]
    }
  </script>
  <script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
    {
    "@type": "Question",
    "name": "What is the return policy?",
    "acceptedAnswer": {
    "@type": "Answer",
    "text": "You can return the product within 30 days of purchase."
    }
    },
    {
    "@type": "Question",
    "name": "Does this product come with a warranty?",
    "acceptedAnswer": {
    "@type": "Answer",
    "text": "Yes, it comes with a 1-year warranty."
    }
    }
    ]
    }
  </script>
  <script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "WebPage",
    "mainEntity": {
    "@type": "Article",
    "headline": "How to Use the Example Product",
    "description": "A comprehensive guide on how to use the Example Product.",
    "author": {
    "@type": "Person",
    "name": "Alex Johnson"
    },
    "datePublished": "2024-07-09",
    "mainEntityOfPage": "https://www.roamers.in/how-to-use-example-product"
    }
    }
  </script>
  <!-- Google Analytics Code: -->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0MSFD4117B"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-0MSFD4117B');
  </script>

  <style>
    .available-box {
      padding: 20px;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
      border-radius: 10px;
      height: 330px;
      overflow-y: scroll;
    }

    .available-box h3 {
      margin-bottom: 20px;
      text-align: center;
    }

    .cost-col {
      height: 330px;
    }

    .cost-col h3 {
      margin-bottom: 20px;
      text-align: center;
    }

    .details-box {
      padding: 15px 30px;
      background: #4ec0db;
      color: #fff !important;
      border-radius: 10px;
      justify-content: space-between;
    }

    .details-head h4 {
      color: #fff !important;
    }

    .price-box {
      border: 1px solid #4ec0db;
      border-radius: 10px;
    }

    .price-box h4 {
      font-size: 18px
    }

    .price-box .col {
      place-content: center !important;
    }

    .costing-table {
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
    }

    .costing-table th,
    .costing-table td {
      text-align: center;
      vertical-align: middle;
    }

    .costing-table th {
      background-color: #4ec0db;
      font-weight: bold;
    }

    .starting-price {
      margin-top: 20px;
      font-size: 22px;
      font-weight: bold;
      color: #4ec0db;
    }

    .cost-col {
      padding: 20px;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
      border-radius: 10px;
    }

    .book-btn {
      border: none;
      padding: 10px 20px;
      background: #4ec0db;
      border-radius: 5px;
      color: #fff;
      font-size: 20px;
    }

    thead {
      background: #4ec0db;
      color: #fff;
    }

    .date h5 {
      font-size: 18px;
    }

    .price-col h4 {
      font-size: 16px;
    }

    .price-col {
      align-items: center
    }

    .price-box .row {
      margin-bottom: 10px;
    }

    .price-box {
      padding: 10px 0px;
    }

    .price-box h5,
    p,
    h4 {
      margin-bottom: 0px !important;
    }

    .details-box {
      cursor: pointer;
    }

    .payment-banner {
      margin-top: 100px
    }

    .price-col {
      display: flex;
      gap: 5px;
    }

    .starting-price-box {
      display: flex;
      gap: 20px;
    }

    .glowing-text {
      color: green;
      font-size: 15px;
      font-weight: 600;
      text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00, 0 0 10px #00ff00;
      animation: glow 1.5s infinite alternate;
    }

    @keyframes glow {
      0% {
        text-shadow: 0 0 10px #00ff00, 0 0 20px #00ff00, 0 0 30px #00ff00;
      }

      100% {
        text-shadow: 0 0 20px #00ff00, 0 0 30px #00ff00, 0 0 40px #00ff00;
      }
    }


    @media (max-width: 600px) {
      .payment-banner {
        margin-top: 60px !important;
      }

      .starting-price-box {
        display: flex;
        flex-direction: column !important;
        gap: 10px;
        text-align: center !important;
      }

      .starting-price {
        font-size: 16px !important;
      }


      .cost-col {
        height: 360px !important;
      }

      .cost-col h3 {
        text-align: center !important;
      }

      .available-box h3 {
        text-align: center !important;
      }

      .available-box {
        padding: 20px 10px !important;
      }

      .price-box {
        padding: 10px 10px !important;
      }

      .price-col p {
        font-size: 12px !important;
      }

      .price-box h5 {
        font-size: 16px !important;
      }

      .price-col h4 {
        font-size: 16px !important;
      }

      .price-box .col {
        padding: 0px !important;
        place-content: center !important;
      }

      .price-col {
        display: block !important;
      }

      .table>:not(:last-child)>:last-child>* {
        font-size: 13px !important;
      }
    }

    .details-box {
      cursor: pointer;
    }
  </style>
</head>

<body>

  <!--====== Preloader Area End ======-->
  <!--====== whatapp Area Start ======-->


  <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1"><img src="assets/img/icon/whatsapp.svg" alt=""></a>

  <!--====== whatapp Area End ======-->
  <!-- ***** Header Start ***** -->
  <?php include('includes/header.php'); ?>
  <!-- ***** Header End ***** -->
  <!-- ***** Welcome Area Start ***** -->

  <section class="py-5 payment-banner">
  <div class="container">
    <h2 class="head">Dates & Costing</h2>
    <div class="row gy-4">
      <div class="col">
        <div class="available-box">
          <h3>Available Dates</h3>
          <div id="monthly-data-container">
            <!-- Dynamic content will be inserted here -->
          </div>
        </div>
      </div>

      <script>
        document.addEventListener("DOMContentLoaded", function () {
          fetch("./dynamic/varkala-data.json")
            .then(response => response.json())
            .then(data => {
              const locationKey = "varkala"; // Change to "ooty" if needed
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
                monthHeader.innerHTML = `<div class="icon"><i class="fa-solid fa-calendar-days"></i></div><h4>${month}</h4>`;

                monthBox.appendChild(monthHeader);

                const priceBox = document.createElement("div");
                priceBox.className = "price-box mt-3";
                priceBox.style.display = firstMonth ? "block" : "none";

                details.forEach(detail => {
                  const row = document.createElement("div");
                  row.className = "row";
                  row.innerHTML = `
                    <div class="col text-center"><h5>${detail.date}</h5></div>
                    <div class="col text-center">
                      <p style="color:${detail.statusColor};">${detail.status}</p>
                      ${detail.special ? `<p class="glowing-text">${detail.special}</p>` : ""}
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
          priceBox.style.display = isVisible ? 'none' : 'block';
        }
      </script>

      <div class="col">
        <div class="row">
          <div class="cost-col">
            <h3>Costing</h3>
            <table class="table table-bordered costing-table">
              <thead>
                <tr>
                  <th>Room Sharing</th>
                  <th>From Chennai</th>
                  <th id="dynamic-location"></th>
                </tr>
              </thead>
              <tbody id="costing-table-body"></tbody>
            </table>
            <div class="justify-content-center starting-price-box px-3">
              <p id="starting-price" class="starting-price"></p>
              <button class="book-btn">Book Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    fetch("./dynamic/varkala-data.json")
      .then(response => response.json())
      .then(data => {
        const locationKey = "varkala"; // Change to "ooty" if needed
        const locationData = data[locationKey];

        if (!locationData || !locationData.costing) {
          console.error("No costing data found for the selected location.");
          return;
        }

        document.getElementById("starting-price").textContent = `Starting Price: ${locationData.costing.startingPrice}`;
        
        const tableBody = document.getElementById("costing-table-body");
        const secondColumn = document.getElementById("dynamic-location");

        // Set correct column name
        secondColumn.textContent = locationKey === "varkala" ? "From Trivandrum" : "From Coimbatore";

        locationData.costing.prices.forEach(price => {
          const secondPrice = locationKey === "varkala" ? price.trivandrum : price.coimbatore;

          const row = `<tr>
            <td>${price.sharing}</td>
            <td>${price.chennai}</td>
            <td>${secondPrice}</td>
          </tr>`;
          tableBody.innerHTML += row;
        });
      })
      .catch(error => console.error("Error loading costing data:", error));
  });
</script>


  <script src="index.js"></script>

  <?php include('includes/footer.php'); ?>
  <!-- ***** All jQuery Plugins ***** -->
  <!-- jQuery(necessary for all JavaScript plugins) -->

  <script src="assets/js/dates.js"></script>
  <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  <!-- Bootstrap js -->
  <script src="assets/js/bootstrap/popper.min.js"></script>
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>
  <!-- Plugins js -->
  <script src="assets/js/plugins/plugins.min.js"></script>

  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>

  <!-- Active js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- <script src="assets/js/main.js"></script> -->
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="assets/js/active.js"></script>

</body>


</html>