<?php 
    session_start();
    include_once('basis/session.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <title>Электронный журнал</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php 
    $journal = mysqli_connect("localhost", "root", "root", "journal");
?>
<header>
    <div class="header">
        <a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>
    </div>
</header>
<div class="main">
    <div class="content">
        

    

