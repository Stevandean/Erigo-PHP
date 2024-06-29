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

    // SQL to create a data
    $sql = "INSERT INTO product (product_name, price, `desc`, `size`, stock, pict, categories_id) VALUES ('$product_name', '$price', '$desc', '$size', '$stock', '$pict', '$categories_id')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Created successfully!'); window.location.href='../../admin/product/product.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
