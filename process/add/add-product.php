<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_erigo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName = $_POST['product_name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $size = $_POST['size'];
    $stock = $_POST['stock'];
    $categories_id = $_POST['categories_id'];

    // Handle file upload
    $targetDir = "../../uploads/";
    $fileName = basename($_FILES["pict"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["pict"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            $sql = "INSERT INTO product (product_name, price, `desc`, size, stock, pict, categories_id) VALUES ('$productName', '$price', '$desc', '$size', '$stock', '$targetFilePath', '$categories_id')";

            if ($conn->query($sql) === TRUE) {
                header("location: ../../admin/product/product.php");
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
?>
