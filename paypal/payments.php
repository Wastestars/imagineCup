<?php
session_start() ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../styles.css">

  <title>Payments</title>
<!-- Favicons -->
<link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

 
  
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
    <li><a href="../index.html">Home</a></li>
      <li><a href="../#services">Services</a></li>
      <li><a href="../#portfolio">Waste Type</a></li>
      <li><a href="history.php">My Payments</a></li>
    </ul>
  </nav><!-- .navbar -->

  <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
  <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

</div>
</header><!-- End Header -->
<!-- End Header -->

</head>
<body>
    <div class="loginform" style ="margin-top: 10%">
        <div class="form">

            <h3 class="title">Hello <?php echo $_SESSION['firstName'];?></h3>

            <p>Thank you for scheduling your waste collection with us. </p>
            <p>Kindly click the button below to proceed to payment.</p>

            <h6>Garbage Collection Fee: 1.00 USD</h6>

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
                    window.location.href="success.php";
                })
              },
              onCancel: function(data){
                window.location.replace("onCancel.php")
              }

            }).render("#paypal-button");
          </script>
        </div>
    </div>