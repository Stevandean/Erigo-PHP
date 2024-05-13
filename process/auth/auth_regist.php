<?php
require_once "../../db/connection.php";

if ($_POST) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($name)) {
        echo "<script>swal({ title: 'Success!', text: 'Login Success!', icon: 'success', duration: 1000, buttons: false, }); location.href='../../register.php';</script>";
    } else if (empty($address)) {
        echo "<script>alert('Address field can\\'t empty! Please fill Address field!'); location.href='../../register.php';</script>";
    } else if (empty($phone)) {
        echo "<script>alert('Phone field can\\'t empty! Please fill Phone field!'); location.href=../..'/register.php';</script>";
    } else if (empty($email)) {
        echo "<script>alert('Email field can\\'t empty! Please fill Email field!'); location.href='../../register.php';</script>";
    } else if (empty($password)) {
        echo "<script>alert('Password field can\\'t empty! Please fill Password field!'); location.href='../../register.php';</script>";
    } else if ($password !== $confirm_password) {
        echo "<script>alert('Password isn\\'t same! Please check your Password again!'); location.href='../../register.php';</script>";
    } else {
        $insert = mysqli_query($conn, "insert into user (name, address, phone, role, email, password) value ('" . $name . "','" . $address . "','" . $phone . "', 'member','" . $email . "','" . md5($password) . "')");
        if ($insert) {
            echo "<script>alert('Sukses menambahkan user'); location.href='../../login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan user'); location.href='../../register.php';</script>";
        };
    };
}
