<?php
session_start();
include_once('./class/user.php');
User::logout();
header("Location: index.php");
exit;

?>