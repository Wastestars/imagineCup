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
              <button style="background-color:black;"><a style="text-decoration:none;color:white;text-align:right;" href="payment.php">Purchase</a></button>

    </div>




<?php } ?>

  </tbody>


  </body>
</html>
