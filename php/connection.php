<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    $conn = new mysqli($servername ,$username , $password , $dbname);

    if ($conn -> connect_error){
        die("Connection FAILED :".$CONN -> connect_error);
    }else{
        echo "CONNECTED";
    }
?>    
