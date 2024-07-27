<?php
session_start();

session_destroy();
header("location: ../../page/admin/login.php");
exit();
