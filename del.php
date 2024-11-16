<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];

$con=mysqli_connect("localhost","root","","sam");
if(!$con){
    die("CONNECTION ERROR:.".mysqli_connect_errno());
}

$query="DELETE FROM product WHERE id=$id";
$res=mysqli_query($con,$query);
if($res){
   header('location:dbcon.php');
}
else{
    echo "ERROR WHILE REMOVE RECORD";
}
}
else{
    echo "value not found";
}