<?php
  $servername= "localhost";
  $username="root";
  $password="";
  $dbname="Personal_Finder";

  $conn=mysqli_connect($servername, $username, $password, $dbname);
  if ($conn==TRUE) {
    // echo "connection successful";
  }else {
    echo mysqli_error($conn);
  }
?>
