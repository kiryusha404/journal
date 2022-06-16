<?php 
    session_start();
    if($_SESSION['role']=="moderator" && $_SESSION['role']){
        header('Location: schedule.php');
    }
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
        <div class="navig">
            <nav>
                <div class="topnav" id="myTopnav">
                    <a href="index.php">Расписание кабинетов</a>
                    <?php 
                    if($_SESSION['role']!="moderator"){
                        echo '<a href="office.php">Взять кабинет</a>';}
                    if($_SESSION['role']=="moderator"){
                        echo '<a href="moder_panel.php">Панель модератора</a>';}else
                        if($_SESSION['role']=="administrator"){
                            echo '<a href="admin.php">Панель администратора</a>';}
                    ?>
                    <a href="personal_account.php">Личный кабинет</a>
                    <a href="basis/exit.php">Выйти</a>
                    <a id="menu" href="#" class="icon">&#9776;</a>
                </div>
            </nav>
        </div>
    </div>
</header>
<div class="main">
    <div class="content">