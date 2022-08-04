<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>
</head>

<body>
    <div class="button-container">
            <a class="product-btn"  href="products.php">Add Product</a>
    </div>

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Product Name</th>
            <th>Sku Number</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Size</th>
            <th>Color</th>
            <th>Available</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM `products`";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // Fetch the data from the databse
                while ($row = mysqli_fetch_assoc($result)) {
                    $id =  $row['id'];
                    $productName =  $row['productName'];
                    $skuNumber =  $row['skuNumber'];
                    $price =  $row['price'];
                    $quantity =  $row['quantity'];
                    $size =  $row['size'];
                    $color =  $row['color'];
                    $available =  $row['available'];

                    //print the data on the table
                    echo '
                        <tr>
                            <td data-lable="ID">' . $id . '</td>
                            <td data-lable="Product-Name">' . $productName . '</td>
                            <td data-lable="sku-Number">' . $skuNumber . '</td>
                            <td data-lable="Price">' . $price . '</td>
                            <td data-lable="Quantity">' . $quantity . '</td>
                            <td data-lable="Size">' . $size . '</td>
                            <td data-lable="Color">' . $color . '</td>
                            <td data-lable="Available">' . $available . '</td>
                            <td data-lable="Update"> 
                                <a href = "update.php?updateid=' . $id . '" class = "update-btn">Update</a>
            
                            </td>
                            <td data-lable="Delete">
                             <a href = "delete.php?delete=' . $id . '" class = "delete-btn">Delete</a></td>
                        </tr>
                        
                        ';
                }
            }
            ?>

        </tbody>
    </table>
</body>

</html>