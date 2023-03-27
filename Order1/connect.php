<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "order1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $first_name = $_POST['first_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $item_name = $_POST['item_name'];
    $sql = "INSERT INTO ordering (first_name,phone_number,email,address,item_name) VALUES ('$first_name','$phone_number','$email','$address','$item_name')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>
