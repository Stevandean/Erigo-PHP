<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Directory to save the uploaded file
    $target_dir = "../../uploads/";
    $target_file = $target_dir . basename($_FILES["pict"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["pict"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["pict"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["pict"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["pict"]["name"])) . " has been uploaded.";

            // Collect other form data
            $name = $_POST['name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];

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
            $sql = "INSERT INTO users (pict, `name`, `address`, phone, email, password, `role`) VALUES ('$target_file', '$name', '$address', '$phone', '$email', '$password', '$role')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Created successfully!'); window.location.href='../../admin/user/user.php'</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
