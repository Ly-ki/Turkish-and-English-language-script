<?php
    $servername="localhost";
    $database="id15365051_db";
    $username="id15365051_vt";
    $password="RVzT}Vaf@Z59mXa)";
    
    $conn = mysqli_connect($servername, $username,$password,$database);
    
    if(!$conn){
        die("Failed Connected". mysqli_connect_error());
    }
   
?>