<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['id'])) {
        $users_id = $_SESSION['id'];
    } else {
        echo "<script>alert('Member not logged in'); window.location.href='../../page/member/login.php'</script>";
    }

    $product_id = $_POST['id'];
    $quantity = $_POST['quantity'];
    $size = $_POST['size'];

    // Log untuk memeriksa data yang diterima
    error_log("Received data: product_id=$product_id, users_id=$users_id, quantity=$quantity, size=$size");

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


    $sql = $conn->prepare("INSERT INTO `order` (product_id, users_id, quantity, `size`) VALUES (?, ?, ?, ?)");
    $sql->bind_param("iiis", $product_id, $users_id, $quantity, $size);

    if ($sql->execute()) {
        echo "<script>alert('Created successfully!'); window.location.href='../../page/member/shopping-cart.php'</script>";
    } else {
        // Tangkap dan tampilkan error secara lebih rinci
        error_log("SQL Error: " . $sql->error);
        echo "Error: " . $sql->error;
    }

    $sql->close();
    $conn->close();
    mysqli_close($conn);

}
