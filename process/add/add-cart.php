<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['id'])) {
        $users_id = $_SESSION['id'];
    } else {
        die("User not logged in");
    }

    $product_id = $_POST['id'];
    $quantity = $_POST['quantity'];
    $size = $_POST['size'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_erigo";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `order` (product_id, users_id, quantity, `size`) VALUES ('$product_id', '$users_id', '$quantity', '$size')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Created successfully!'); window.location.href='../../page/member/shopping-cart.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
