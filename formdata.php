<style>
    .dbresult,
    .dbresult td,
    .dbresult th {
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
<form action="index.php" method="GET">
    <table class="dbresult">
        <thead>
            <tr>
                <th colspan="2">Product Entry</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Product name</td>
                <td><input type="text" name="pname" required=""></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="number" name="quantity" required=""></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="number" name="price" required=""></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" name="submitvalue" value="insert">
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