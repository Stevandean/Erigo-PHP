<?php

// echo "test";

session_start(); // Mulai session
session_destroy(); // Menghapus session

// Redirect ke halaman login atau halaman lain jika perlu
header("location.href='../../login.php';");
exit;
