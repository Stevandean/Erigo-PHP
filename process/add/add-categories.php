<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input field
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

    // SQL to create a data
    $sql = "INSERT INTO categories (categories_name) VALUES ('$categories_name')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Created successfully!'); window.location.href='../../admin/categories/categories.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
