<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>Make Payment</title>
  <style>
      #paypal-button{
        width: 50%;
      }
  </style>
</head>
<body>
    <h1>Proceed to Payment</h1>
    <p> Incomplete. Insert page content that redirects to payment. Include the paypal button for functionality.</p>
    <p>Payment works fine as it is</p>
    <div id = "paypal-button"></div>

    <script src="https://www.paypal.com/sdk/js?client-id=AcvwnX_kxulOFO9pjZk7bfrNGOChCFCerQLfeuQCY3zJNQ3wnAWqlPuhmtNMcQir6KI5u8JwXiiGQLM0&disable-funding=credit,card"></script>
    <script>
      paypal.Buttons({
      style: {
        // color: 'blue',
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
                url: "../DBController.php",
                type: "get",
                // data: {id: id, status:status},
                success: function(res){
                    window.location.href = "success.php";
                }
            })
        })
      },
      onCancel: function(data){
        window.location.replace("onCancel.php")
      }

    }).render("#paypal-button");
  </script>
</body>
</html>