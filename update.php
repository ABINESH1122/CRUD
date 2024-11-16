<?php
if (isset($_GET['id'])) {
?>
<style>
    .dbresult,
    .dbresult td, .dbresult th {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 8px;
    }

    .dbresult {
        width: 400px;
        margin: auto;
    }

    .dbresult tr:nth-child(odd) {
        background-color: #b2d0d6;
    }

    .dbresult tr:nth-child(even) {
        background-color: lightcyan;
    }

    .dbresult input {
        padding: 10px 20px;
        font-weight: bold;
    }
</style>
<?php
$con = mysqli_connect('localhost', 'root', '', 'sam');

if (!$con) {
    die('connection errorr' . mysqli_connect_error());
}
$id = $_GET['id'];
$query = "SELECT id,pname,quantity,price FROM product WHERE id=$id";
$result = mysqli_query($con, $query);
$numrow = mysqli_num_rows($result);

if ($numrow == 1) {
    $row = mysqli_fetch_assoc($result);
?>
    <form action="index.php" method="GET">
        <input type="hidden" name="id" value="<?=$id?>">
        <table class="dbresult">
            <thead>
                <tr>
                    <th colspan="2">Update Product</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Product name</td>
                    <td><input type="text" name="pname" required="" value="<?= $row['pname'] ?>"></td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td><input type="number" name="quantity" required="" value="<?= $row['quantity'] ?>"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="number" name="price" required="" value="<?= $row['price'] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="submitvalue" value="update">
                    </td>
                </tr>
                <tr>
                    <th colspan="4">
                        <a href="dbcon.php">View Records</a>
                    </th>
                </tr>
            </tbody>
        </table>
    </form>
<?php } else {
    echo '<h1 style="text-align:center;color:red; font-family:sans-serif; text-transform:uppercase;"> oops! Record Not Found</h1>';
}

}else{
    echo '<h1 style="text-align:center;color:red; font-family:sans-serif; text-transform:uppercase;">YOU ARE NOT ALLOWED</h1> ';
}
?>