<?php
    $push = 'SELECT l.id_list ,u.name1, u.name2, u.name3, u.login, a.number, l.day, l.time1, l.time2, l.status, l.id_us_fk FROM list_au l JOIN user u ON l.id_us_fk = u.id_us JOIN auditorium a ON a.id_a = l.id_a_fk WHERE l.status = "Ожидание" LIMIT 1';
    $res = mysqli_query($journal, $push); 
    while($row = mysqli_fetch_array($res)){
?>     
<div class="nav_form">
    <h1>Подтверждение аудитории</h1>
    <form action="#" method="post" class="input">
        <p>Преподователь: <?php echo $row['name1']; ?> <?php echo $row['name2']; ?> <?php echo $row['name3']; ?>(<?php echo $row['login']; ?>)</p>
        <p>Номер аудитории: <?php echo $row['number']; ?></p>
        <p>День: <?php echo $row['day']; ?></p>
        <p>Время получения: <?php echo $row['time1']; ?></p>
        <p>Время возрата: <?php echo $row['time2']; ?></p>
        <select class="info_input" placeholder="Пользователь" name="aud" >
            <option value="Подтверждено" >Подтвердить</option>
            <option value="Отклонено" >Отклонить</option>
        </select>
        <?php
        if($_POST['aud']){
            $pus = 'UPDATE `list_au` SET `status` = "'.$_POST['aud'].'" WHERE `list_au`.`id_list` = '.$row['id_list'].';';
            $wer = mysqli_query($journal, $pus); 
            echo "Решение принято";
            echo "<script>window.location.href='res.php'</script>";
        }
        ?>
        <button type="submit" class="info_input info_input_button">Утвердить</button>
    </form>
</div>
<?php
    }
?>
<a class="new_pass" href="aut.php"><div class="pass_bl nav_form"><p>Подтвердить возращенние ключа</p></div></a>