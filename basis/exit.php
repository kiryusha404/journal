<?php
session_start();
unset($_SESSION['role']);
unset($_SESSION['id_us']);
unset($_SESSION['pri']);
header('Location: ../index.php')
?>