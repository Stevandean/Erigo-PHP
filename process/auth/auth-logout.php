<?php
session_start();

session_destroy();
header("location: ../../page/member/index.php");
exit();
