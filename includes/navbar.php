<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sharp Tines-Style Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: transparent;
    }

    .logo-img {
      width: 100px;
    }

    .navbar {
      display: flex;
      justify-content: space-evenly !important;
      align-items: center;
      padding: 20px 20px !important;
      position: fixed !important;
      width: 100%;
      top: -0px !important;
      z-index: 1000;
      background-color: transparent;
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      box-shadow: none;
      transition: background-color 0.3s, color 0.3s;
    }

    .navbar.scrolled {
      background-color: #38b6ff !important;
      /* skyblue */
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
      backdrop-filter: none;
      -webkit-backdrop-filter: none;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-weight: bold;
      font-size: 1.4rem;
      color: white;
      transition: color 0.3s;
    }

    .navbar.scrolled .logo {
      color: white;
    }

    .logo-icon {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: white;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .logo-icon::before {
      content: '☰';
      font-size: 16px;
      color: #a88ce0;
    }

    .menu {
      display: flex;
      gap: 1.5rem;
      padding: 0.5rem 1.5rem;
      border-radius: 999px;
      backdrop-filter: none;
      -webkit-backdrop-filter: none;
      transition: background 0.3s;
    }

    .menu a {
      text-decoration: none;
      color: white;
      font-weight: 500;
      font-size: 15px;
      transition: color 0.3s;
    }

    .navbar.scrolled .menu a {
      color: white;
    }

    .search-divider {
      border-left: 1px solid rgba(255, 255, 255, 0.3);
      height: 16px;
      margin: 0 0.5rem;
    }

    .right-buttons {
      display: flex;
      gap: 0.5rem;
    }

    .right-buttons button {
      padding: 0.4rem 1rem;
      border: none;
      border-radius: 0.5rem;
      font-weight: 500;
      font-size: 14px;
      cursor: pointer;
      background: none;
      color: white;
      transition: background 0.3s, color 0.3s;
    }

    .btn-login,
    .btn-signup {
      background-color: rgba(80, 60, 160, 0.0);
      color: white;
    }

    .navbar.scrolled .btn-login,
    .navbar.scrolled .btn-signup {
      color: white;
    }

    .btn-demo {
      background-color: white;
      color: #5c40b5;
      font-weight: 600;
    }

    .btn-demo:hover {
      background-color: #f1f1f1;
    }

    .navbar.scrolled .btn-demo {
      background-color: white;
      color: #5c40b5;
    }

    .navbar.scrolled .btn-demo:hover {
      background-color: #f1f1f1;
    }

    .right-buttons a {
      color: white;
      text-decoration: none;
      transition: color 0.3s;
    }

    .navbar.scrolled .right-buttons a {
      color: white;
    }

    /* Filler content */
    section {
      height: 100vh;
      padding-top: 6rem;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar" id="mainNavbar">
    <div class="logo">
      <div>
        <img src="assets/img/Logo/Roamers.png" alt="" class="logo-img">
      </div>
    </div>
    <div class="menu">
      <a href="#">Upcoming Trips</a>
      <a href="#">International Trips</a>
      <a href="#">Domestic Trips</a>
      <a href="#">Corporate Trips</a>
      <a href="#">Weekend Trips</a>
    </div>
    <div class="right-buttons">
      <button class="btn-login">Log in</button>
      <button class="btn-signup">Sign up</button>
      <button class="">
        <a href="tel:+91 8122121066"><i class="fa-solid fa-phone btn-demo "></i>+91 8122121066</a>
      </button>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Add .scrolled class to navbar when banner is crossed
    function checkBannerCrossed() {
      const navbar = document.getElementById('mainNavbar');
      // Assume banner is the first element after body, or has id="banner"
      const banner = document.getElementById('banner');
      let bannerHeight = 0;
      if (banner) {
        // Get bottom position of banner relative to viewport
        const rect = banner.getBoundingClientRect();
        bannerHeight = rect.bottom + window.scrollY;
      } else {
        // Fallback: use a default height if banner not found
        bannerHeight = 500;
      }
      if (window.scrollY >= bannerHeight) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    }

    window.addEventListener('scroll', checkBannerCrossed);
    window.addEventListener('DOMContentLoaded', checkBannerCrossed);
  </script>

</body>

</html>