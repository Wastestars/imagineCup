<?php
define("db_server", "localhost");
define("db_user", "root");
define("db_password", "");
define("db_database", "wastestars");

$conn = mysqli_connect(db_server, db_user, db_password, db_database);
//
// if($conn -> connect_error){
//     die("Not connected successfully". $conn -> connect_error);
// }
// else {
//     echo "Connected Successfully";
// }
?>