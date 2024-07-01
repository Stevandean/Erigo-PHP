<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input field
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $size = $_POST['size'];
    $stock = $_POST['stock'];
    $pict = $_POST['pict'];
    $categories_id = $_POST['categories_id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_erigo";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL to update a data
    $sql = "UPDATE product SET product_name='$product_name', price='$price', `desc`='$desc', `size`='$size', stock='$stock', pict='$pict', categories_id='$categories_id'  WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Updated successfully!'); window.location.href='../../admin/categories/categories.php'</script>";
    } else {
        echo "Error updating: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
