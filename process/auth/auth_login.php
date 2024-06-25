<?php
require_once "../../db/connection.php";

if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        echo "<script>alert('Email field can\\'t empty! Please fill Email field!'); location.href='../../login.php';</script>";
    } else if (empty($password)) {
        echo "<script>alert('Password field can\\'t empty! Please fill Password field!'); location.href='../../login.php';</script>";
    } else {
        $hashed_password = md5($password);

        $qry = mysqli_query($conn, "select * from users where email = '" . $email . "' and password = '" . $hashed_password . "'");

        if (mysqli_num_rows($qry) > 0) {
            $dt = mysqli_fetch_array($qry);
            $_SESSION['user_id'] = $dt['user_id'];
            $_SESSION['email'] = $dt['email'];
            $_SESSION['status_login'] = true;
            echo "<script>alert('Login Sukses!');</script>";
            header("location: ../../index.php");
            exit;
        } else {
            echo "<script>alert('Gagal Login'); location.href='../../login.php';</script>";
        };
    };
};
