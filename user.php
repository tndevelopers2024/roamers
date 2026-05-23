<?php
// Start the session if it's not already started
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) { // Assuming you set 'user_id' in session after login
  header("Location: login.php");
  exit(); // Stop further execution
}

// Database connection
$host = "localhost";
$dbname = "dante_db";
$username = "root";
$password = "";

try {
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Database connection failed: " . $e->getMessage());
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ========== Meta Tags ========== -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Why Choose Dante Gonzales">

  <!-- ========== Page Title ========== -->
  <title> Dante Gonzales Admin</title>

  <!-- ========== Favicon Icon ========== -->
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

  <!-- ========== Start Stylesheet ========== -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/css/flaticon-set.css" rel="stylesheet" />
  <link href="assets/css/elegant-icons.css" rel="stylesheet" />
  <link href="assets/css/magnific-popup.css" rel="stylesheet" />
  <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
  <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
  <link href="assets/css/animate.css" rel="stylesheet" />
  <link href="assets/css/bootsnav.css" rel="stylesheet" />
  <link href="style.css" rel="stylesheet">
  <link href="assets/css/responsive.css" rel="stylesheet" />
  <link rel="canonical" href="https://www.drdantegonzales.com/user.php" />

  <!-- ========== End Stylesheet ========== -->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

  <!-- ========== Google Fonts ========== -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600,700,800" rel="stylesheet">


  <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>


</head>
<style>
  .dashboard {
    padding: 40px 100px;
  }

  .dashboard h2 {
    font-size: 36px;
  }

  .form-group input {
    width: 100%;
    padding: 15px 20px;
  }

  .form-group textarea {
    width: 100%;
    padding: 20px 20px;
  }

  textarea {
    border: 1px solid #e7e7e7;
    border-radius: inherit;
    box-shadow: inherit;
    min-height: 200px;
  }

  .add {
    padding: 10px 40px;
    color: #fff;
    background-color: #f89f3c;
    border: none;
    border-radius: 8px;
  }

  @media(max-width:600px) {
    .dashboard {
      padding: 40px 20px;
    }
  }
</style>

<body>

  <?php include "includes/header.php" ?>

  <div class="container dashboard">
    <div class="row">
      <h2 class="text-center">Admin</h2>
    </div>

    <form action="add_blog.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <input type="number" placeholder="Blog Number" min="0" name="blogid" id="blogid" required>
      </div>
      <div class="form-group">
        <input type="text" placeholder="Meta Title" name="metaTitle" id="metaTitle" required>
      </div>
      <div class="form-group">
        <input type="text" placeholder="Meta Description" name="metaDescription" id="metaDescription" required>
      </div>
      <div class="form-group">
        <input type="text" placeholder="Enter Blog Title" name="blogName" id="blogName" required>
      </div>
      <div class="form-group">
        <input type="text" placeholder="Enter Blog Description" name="blogDescription" id="blogDescription" required>
      </div>
      <div class="form-group">
        <textarea aria-required="true" placeholder="Enter Blog Content" name="blogContent" id="blogContent"
          required></textarea>
      </div>

      <!-- Image Upload Fields -->
      <div class="form-group">
        <label for="blogMainimage">Main Image:</label>
        <input style="border: none;" type="file" name="blogMainimage" id="blogMainimage" accept="image/*" required>
      </div>
      <div class="form-group">
        <label for="blogSubimage">Additional Image:</label>
        <input style="border: none;" type="file" name="blogSubimage" id="blogSubimage" accept="image/*" required>
      </div>
      <div class="form-group">
        <label for="blogSub1image">Additional Image:</label>
        <input style="border: none;" type="file" name="blogSub1image" id="blogSub1image" accept="image/*" required>
      </div>
      <div class="form-group">
        <input type="date" name="blogDate" id="blogDate" required>
      </div>

      <button class="add" type="submit" name="submit">Add Blog</button>
    </form>
  </div>





  <!-- End Testimonials -->

  <!-- Start Footer 
    ============================================= -->
  <?php include "includes/footer.php" ?>
  <!-- End Footer -->


  <!-- jQuery Frameworks
    ============================================= -->
  <script src="assets/js/jquery-1.12.4.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/equal-height.min.js"></script>
  <script src="assets/js/jquery.appear.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/modernizr.custom.13711.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/count-to.js"></script>
  <script src="assets/js/YTPlayer.min.js"></script>
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <script src="assets/js/bootsnav.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    function certificate() {
      window.location.href = "assets/img/pdf/Dr-Gonzales-Smile-Certification.pdf";
    }
  </script>
</body>

</html>