<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "api";
 
 $conn = mysqli_connect($servername,$username,$password,$dbname);


 if($conn)
 {
    echo "ok";
 }
 else
 {
     echo "connection failed",mysqli_connect_error();
 
 }
 ?>