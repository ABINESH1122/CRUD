<style>
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

</style>
<?php
 $con = mysqli_connect('localhost', 'root', '', 'sam');

 if (!$con) {
     die('connection errorr' . mysqli_connect_error());
 }
$query = "SELECT id,pname,quantity,price FROM product";
$result = mysqli_query($con, $query);
$numrow = mysqli_num_rows($result);
if ($numrow > 0) {
    echo '<table class="dbresult" >';
    echo '<tr> <th colspan="6"><a href="formdata.php">Go back</a></th></tr>';
    echo '<tr>';
    echo '<th>Delete</th>';
    echo '<th>Update</th>';
    echo '<th>id</th>';
    echo '<th>pname</th>';
    echo '<th>quantity</th>';
    echo '<th>price</th>';
    echo '</tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $id= $row["id"];
        echo '<tr>';
        echo '<td><a href="del.php?id='.$id.'" onclick="return confirm(\'Are You Sure To Delete this Record?\')">Delete</a></td>';
        echo '<td><a href="update.php?id='.$id.'">Update</a></td>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["pname"] . '</td>';
        echo '<td>' . $row["quantity"] . '</td>';
        echo '<td>' . $row["price"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'Record Not Found <a href="formdata.php">Back to Home </a>';
}

// if($numrow>0){
//     echo $numrow.'Records Found';
// }
//  else{
//    echo 'Records Not found!';
// }