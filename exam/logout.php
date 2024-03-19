<?php
session_start();
$_SESSION['auth'] = "";
header("Location: index.php");
?>