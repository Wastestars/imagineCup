<?php
require("connect.php");
$sql="SELECT * FROM recyclable";
$results=$conn->query($sql);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">

  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Montserrat:wght@300&family=Scope+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Concert+One&family=PT+Sans&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Jomhuria&family=PT+Sans&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">

<title>Recyclable</title>

  </head>
<h3 style="text-align:center;">Recyclable Waste Products</h3>



  <thead>

  </thead>
  <tbody>
    <?php while($row=$results->fetch_assoc())  { ?>

    <div>
    <div>Waste Name: <?=$row['wasteName']?></div>
     <div>Waste Description: <?=$row['wasteDescription']?></div>

        <div  style="padding-left:5rem;"><img src="recyclableproducts/<?=$row['wasteImage']?>" style="width:15rem; height:15rem; object-fit:cover; "/></div>
         <div style="margin-left:10rem;text-align:center;">
            <b><hr style="color:black;"></b>
            </div>
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



    </div>
<?php } ?>

  </tbody>


  </body>
</html>
