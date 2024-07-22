<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_erigo";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "DELETE FROM product WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Deleted successfully!'); window.location.href='../../page/product/product.php'</script>";
    } else {
        echo "Error deleting: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
