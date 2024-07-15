<?php
session_start(); // Mulai sesi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan user sudah login dan ada user ID di sesi
    if (isset($_SESSION['id'])) {
        $users_id = $_SESSION['id'];    
    } else {
        die("User not logged in");
    }

    // Collect value of input field
    $product_id = $_POST['id'];
    $quantity = $_POST['quantity'];
    $size = $_POST['size'];

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
    $sql = "INSERT INTO `order` (product_id, users_id, quantity, `size`) VALUES ('$product_id', '$users_id', '$quantity', '$size')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Created successfully!'); window.location.href='../../page/member/shopping-cart.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
