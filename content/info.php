<?php 
    $push = 'SELECT * FROM user WHERE id_us = '.$_SESSION['id_us'].'';
    $info = mysqli_query($journal, $push);
    $row = mysqli_fetch_array($info);
?>
<div class="user nav_form">
    <p>ФИО: <?php echo $row['name2']; echo " "; echo $row['name1']; echo " "; echo $row['name3']; ?></P>
    <p>Логин: <?php echo $row['login'];?></p>
    <p>Должность: <?php if($row['role_fk']==1){echo "Администратор";}if($row['role_fk']==2){echo "Модератор";}if($row['role_fk']==3){echo "Преподователь";}?></p>
    <p>Телефон: <?php echo $row['phone'];?></p>
</div>
<a class="new_pass" href="pass.php"><div class="pass_bl nav_form"><p>Изменить пароль</p></div></a>