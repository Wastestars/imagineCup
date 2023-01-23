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

</head>
<body>
  <div class="recyclableFrm">
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
                color: 'blue',
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
                            window.location.href = "paypal/success.php";
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


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    </body>
    </html>


