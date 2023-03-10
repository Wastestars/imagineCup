<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="style.css">

  <title>Schedule Pickup</title>
<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>
<body>
  
<header id="header" class="header d-flex align-items-center">

<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <!-- Uncomment the line below if you also wish to use an image logo -->
    <!-- <img src="assets/img/logo.png" alt=""> -->
    <h1>All Waste<span>.</span></h1>
  </a>
  <nav id="navbar" class="navbar">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#team">Testimonies</a></li>

      <li><a href="#portfolio">Waste Type</a></li>
      <li><a href="login.php">Login</a></li>

      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav><!-- .navbar -->

  <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
  <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

</div>
</header><!-- End Header -->
<!-- End Header -->

  <div class="recyclableFrm" style="height:80vh;">
      <form action="adminSchedulePickup.php" method="POST" enctype="multipart/form-data" class="form">

        <h1 class="title">Schedule Garbage Pickup</h1>

        <br>
        <div class="inputContainer">
              <input type="text" name="pickupLocation" class="input" placeholder="Enter the location" required>
            <label for="" class="label">Location</label><br><br>
        </div>
        <br>

        <div class="inputContainer">
          <input type="datetime-local" name="pickupDateTime" class="input" placeholder="Enter the dateTime" required>
          <label for="" class="label">Date and Time</label>
        </div>
        <br>

        <div id = "paypal-button"></div>

            <script src="https://www.paypal.com/sdk/js?client-id=AcvwnX_kxulOFO9pjZk7bfrNGOChCFCerQLfeuQCY3zJNQ3wnAWqlPuhmtNMcQir6KI5u8JwXiiGQLM0&disable-funding=credit,card"></script>
            <script>
              paypal.Buttons({
              style: {
                color: 'black',
                shape:'pill',
                label: 'pay'

              },
              createOrder: function(data, actions){
                return actions.order.create({
                  purchase_units: [{
                    amount: {
                      value: "1"
                    }
                  }]
                });
              },
              onApprove: function(data, actions){
                return actions.order.capture().then(function(details){

                    var id = details.id;
                    var status = details.status;

                    $.ajax({
                        url: "DBController.php",
                        type: "get",
                        // data: {id: id, status:status},
                        success: function(res){
                          window.location.replace("paypal/success.php")
                        }
                    })
                })
              },
              onCancel: function(data){
                window.location.replace("paypal/onCancel.php")
              }

            }).render("#paypal-button");
          </script>
      </form>
    </div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>All Waste</span>
          </a>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Waste Type</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Waste Collection</a></li>
            <li><a href="#">Recyling</a></li>
            <li><a href="#">Inceneration</a></li>
            
          </ul>
        </div>


      </div>
    </div>

    
  </footer><!-- End Footer -->
  <!-- End Footer -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    </body>
    </html>


