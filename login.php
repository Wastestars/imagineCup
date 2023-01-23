<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="styles.css">

  <title>Login</title>

</head>
<body>
    <div class="loginform">
        <form action="processData.php" method="POST" enctype="multipart/form-data" class="form">

            <h3 class="title">Please Login to Proceed</h3>

            <div class="inputContainer">
              <input type="email" name="email" class="input" placeholder="Enter your email" required>
              <label for="" class="label">Email</label>
            </div>
            <br>
            <div class="inputContainer">
              <input type="password" name="password" class="input" placeholder="Enter your password" required>
              <label for="" class="label">Password</label>
            </div>
            <br>
            <div class="button">
                <input type="submit" name="login" class="btn" value="Sign In">
            </div>
        </form>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  </body>
</html>


