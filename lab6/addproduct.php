
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <fieldset>
        <legend><h3>Add Product</h3></legend>
        <form action="addproducts.php" method="post">
            <table>
                <tr>
                    <td>Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Buying Price</td>
                </tr>
                <tr>
                    <td><input type="text" name="buyingprice"></td>
                </tr>
                <tr>
                    <td>Selling Price</td>
                </tr>
                <tr>
                    <td><input type="text" name="sellingprice"></td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="display" value="true"> Display</td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="submit" name="save" value="SAVE"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>