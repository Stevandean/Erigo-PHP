<?php
require_once "../../db/connection.php";

if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        echo "<script>alert('Email field can\'t be empty! Please fill in the email field!'); location.href='../../page/member/login.php';</script>";
    } else if (empty($password)) {
        echo "<script>alert('Password field can\'t be empty! Please fill in the password field!'); location.href='../../page/member/login.php';</script>";
    } else {
        $hashed_password = md5($password);
        $qry = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email . "' AND password = '" . $hashed_password . "'");
        if (mysqli_num_rows($qry) > 0) {
            $dt = mysqli_fetch_array($qry);
            session_start();
            $_SESSION['id'] = $dt['id'];
            $_SESSION['email'] = $dt['email'];
            $_SESSION['status_login'] = true;
            echo "<script>alert('Login Successful!'); location.href='../../page/member/index.php';</script>";
            exit;
        } else {
            echo "<script>alert('Login Failed'); location.href='../../page/member/login.php';</script>";
        }
    }
}
