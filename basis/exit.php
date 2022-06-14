<?php
session_start();
unset($_SESSION['role']);
unset($_SESSION['id_us']);
header('Location: ../index.php')
?>