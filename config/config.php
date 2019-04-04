<?php
  $servername = 'localhost';
  $dbname = 'labelle';
  $username = 'root';
  $password = '';
  $datepost = date("Y-m-d");
  // connection to database
  $conn = mysqli_connect($servername,$username,$password,$dbname);

  if (!$conn) {
    die('Database connexion failed : '.mysqli_connect_error());
  }

?>
