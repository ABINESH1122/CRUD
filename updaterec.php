<?php

if (isset($_GET['submitvalue'])) {
    $pname = $_GET['pname'];
    $quantity = $_GET['quantity'];
    $price = $_GET['price'];


    $con = mysqli_connect('localhost', 'root', '', 'sam');

    if (!$con) {
        die('connection errorr' . mysqli_connect_error());
    }

    $query = "INSERT INTO product(pname,quantity,price) VALUES ('$pname','$quantity','$price')";

    $result = mysqli_query($con, $query);

    if ($result) {
        header('location:formdata.php');
    } else {
        echo 'Error While Inserting Record';
    }
}