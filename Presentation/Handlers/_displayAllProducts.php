<?php

$productAccess = new ProductDataAccess();
$allProducts = $productAccess->getAllProducts();

for ($i = 0; $i < count($allProducts); $i++) {

    $productID = $allProducts[$i]["ID"];
    $productName = $allProducts[$i]["product_name"];
    $productDesc = $allProducts[$i]["product_description"];
    $productSize = $allProducts[$i]["size"];
    $productColor = $allProducts[$i]["color"];
    $productPrice = $allProducts[$i]["price"];
    $isDeleted = $allProducts[$i]["deleted"];

    if($isDeleted == 0) {
        echo <<<AllUsersDisplay
<tr>
    <td>$productID</td>
    <td>$productName</td>
    <td>$productDesc</td>
    <td>$productSize</td>
    <td>$productColor</td>
    <td>$productPrice</td>
    <td><form method="get" action="../EditProduct/editSingleProduct.php"><input type="hidden" name="productID" value="$productID"><input type="submit" class="button is-primary" value="Edit"></form></td>
    <td><form method="get" action="../../Handlers/deleteSingleProduct.php"><input type="hidden" name="productID" value="$productID"><input type="submit" class="button is-danger" value="Delete"></form></td>
</tr>

AllUsersDisplay;

    } //end active check
}

?>