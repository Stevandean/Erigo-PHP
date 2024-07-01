<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input field
    $id = $_POST['id'];
    $categories_name = $_POST['categories_name'];

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
    $sql = "UPDATE categories SET categories_name='$categories_name' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo 'berhasil';
        // echo "<script>alert('Updated successfully!'); window.location.href='../../page/categories/categories.php'</script>";
    } else {
        echo "Error updating: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
