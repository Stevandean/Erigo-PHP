<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
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

    $pict = $_FILES['pict']['name'];
    $target_dir = "../../assets/user/";
    $target_file = $target_dir . basename($pict);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["pict"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($_FILES["pict"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["pict"]["tmp_name"], $target_file)) {
            // echo "The file " . htmlspecialchars(basename($pict)) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    if ($uploadOk == 1) {
        $sql = "UPDATE users SET pict='$target_file', `name`='$name', `address`='$address', phone='$phone', email='$email', `role`='$role' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Updated successfully!'); window.location.href='../../page/user/user.php'</script>";
        } else {
            echo "Error updating: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}
