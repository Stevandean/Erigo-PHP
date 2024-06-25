<?php
session_start();
session_destroy();

// Redirect ke halaman login atau halaman lain jika perlu
header("location: ../../login.php");
exit;
?>