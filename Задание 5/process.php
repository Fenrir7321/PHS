<?php
session_start();
$_SESSION["username"] = "admin";

header("location:index.php");
?>