<?php 
    session_start();
    include_once('basis/session.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Электронный журнал</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php 
    $journal = mysqli_connect("localhost", "root", "root", "journal");
?>
<header>
    <div class="header">
        <a href="<?php if(empty($_SESSION['role'])){echo "index.php";} else{echo"schedule.php";} ?>"><img src="img/logo.png" alt="logo" class="logo"></a>
    </div>
</header>
<div class="main">
    <div class="content">
        

    

