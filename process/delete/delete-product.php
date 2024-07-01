<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Collect value of input field
    $id = $_GET['id'];

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

    // SQL to delete a data
    $sql = "DELETE FROM product WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Deleted successfully!'); window.location.href='../../page/product/product.php'</script>";
    } else {
        echo "Error deleting: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
