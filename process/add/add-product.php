<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_erigo";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $stock = $_POST['stock'];
    $categories_id = $_POST['categories_id'];

    $targetDir = "../../assets/product/";
    $fileName = basename($_FILES["pict"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowTypes)) {
        if (move_uploaded_file($_FILES["pict"]["tmp_name"], $targetFilePath)) {

            $sql = "INSERT INTO product (product_name, price, `desc`, stock, pict, categories_id) VALUES ('$product_name', '$price', '$desc', '$stock', '$targetFilePath', '$categories_id')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Created successfully!'); window.location.href='../../page/product/product.php'</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.";
    }
}
$conn->close();
