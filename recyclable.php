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



  <title>Recyclable Waste Products</title>

</head>
<body>
  <div class="recyclableFrm">
      <form action="adminRecyclable.php" method="POST" enctype="multipart/form-data" class="form">

        <h1 class="title">Post your recyclable waste products</h1>

        <br>
        <div class="inputContainer">
              <input type="text" name="wasteName" class="input" placeholder="Enter the name" required>
            <label for="" class="label">Name</label><br><br>
        </div>
        <br>

        <div class="inputContainer">
          <input type="text" name="wasteDescription" class="input" placeholder="Enter the description" required>
          <label for="" class="label">Description</label>
        </div>


        <br>
        <div style="text-align:center;">
            <label>Upload Waste Product</label><br>
            <input type="file"  name="wasteImage" value="" />
        </div>
        <br>
        <div class="button">
                <input type="submit" name="uploadWasteProduct" class="btn" value="Submit">
        </div>
      </form>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    </body>
    </html>


