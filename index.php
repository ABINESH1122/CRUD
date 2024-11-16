<!-- <style>
    .dbresult,.dbresult td,.dbresult th{
        border:1px solid black;
        border-collapse:collapse;
        padding: 8px;
    }
    .dbresult{
        width: 800px;
        margin: auto;
    }
    .dbresult tr:nth-child(odd){
        background-color: #b2d0d6;
    }
    .dbresult tr:nth-child(even){
        background-color: lightcyan;
    }

</style> -->
<?php

$con = mysqli_connect('localhost', 'root', '', 'sam');
if (!$con) {
    die('connection errorr' . mysqli_connect_error());
}

if (isset($_GET['submitvalue']) && $_GET['submitvalue']=='insert') {
    $pname = $_GET['pname'];
    $quantity = $_GET['quantity'];
    $price = $_GET['price'];



    $query = "INSERT INTO product(pname,quantity,price) VALUES ('$pname','$quantity','$price')";

    $result = mysqli_query($con, $query);

    if ($result) {
        header('location:formdata.php');
    } else {
        echo 'Error While Inserting Record';
    }
}
elseif (isset($_GET['submitvalue']) && $_GET['submitvalue']=='update'){
    $id=$_GET['id'];
    $pname = $_GET['pname'];
    $quantity = $_GET['quantity'];
    $price = $_GET['price'];


    $qry ="UPDATE product SET pname='$pname',quantity='$quantity',price='$price' WHERE id=$id";
    $res=mysqli_query($con,$qry);
    if($res){
        header('location:dbcon.php');
    }else{
        echo  '<h1 style="text-align:center;color:red; font-family:sans-serif; text-transform:uppercase;"> oops!</h1>';
    }
}