<?php 

function connect()
{
  $servername = "localhost";
  $user = "root";
  $password = "";
  $database = "allwaste";
  
  $connection = new mysqli($servername, $user, $password, $database) or die("Not connected".$connection->error);

  return $connection;
}
function setData($sql)
{
  $connection = connect();

  if($connection->query($sql))
  {
    return true; 
  }
  else{
    return false;
  }
}
function getData($sql)
{
  $connection = connect();
  $result = $connection->query($sql);
  
  while($rows = $result->fetch_assoc())
  {
    $row[] = $rows;
  }
  return $row??null;
}

?>