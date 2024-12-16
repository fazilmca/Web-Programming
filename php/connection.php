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

    $sql = "DROP TABLE IF EXISTS MyGuests";
    $conn ->query($sql);

    $sql = "CREATE TABLE MyGuests ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),

    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if($conn->query($sql)=== TRUE){
        echo "Table MyGuests created successfully";
    }else{
        echo"Error Creating Table:". $conn->error;
    }
    $ins="INSERT INTO 
    MyGuests(firstname,lastname,email)values('reshmi','k','abc@gmail.com')";
    if($conn->query($sql)=== TRUE){
        echo "Values Inserted Successfully";
    }
    $conn->close();
?>    

