<?php
$mysqli = new mysqli("localhost","root","123456789","shoesecommerce");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// else {
//   echo "Connect successfully: " ;

// }

?>