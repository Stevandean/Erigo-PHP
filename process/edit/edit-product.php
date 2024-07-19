<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $stock = $_POST['stock'];
    $categories_id = $_POST['categories_id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_erigo";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "UPDATE product SET product_name='$product_name', price='$price', `desc`='$desc', stock='$stock', categories_id='$categories_id' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Updated successfully!'); window.location.href='../../page/product/product.php'</script>";
    } else {
        echo "Error updating: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
