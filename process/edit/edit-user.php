<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['address'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_erigo";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "UPDATE users SET `name`='$name', `address`='$address', phone='$phone', email='$email', `role`='$role' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Updated successfully!'); window.location.href='../../page/user/user.php'</script>";
    } else {
        echo "Error updating: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
