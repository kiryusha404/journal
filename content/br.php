<div class="nav_form">
<h1>Забронировать кабинет</h1>
    <form action="#" method="POST" class="input">
    <p class="black">Выбрать аудиторию:</p>
        <select class="info_input" placeholder="Пользователь" name="cab" >
        <?php
        if($_SESSION['pri']=='it'){
            $push = 'SELECT * FROM `auditorium` ORDER BY `auditorium`.`number` ASC';
            }else{
                $push = 'SELECT * FROM `auditorium` where type="all" ORDER BY `auditorium`.`number` ASC';
            }
            $acc = mysqli_query($journal, $push); 
            while($row = mysqli_fetch_array($acc)){
        ?>
            <option value="<?php echo $row["id_a"]; ?>" ><?php echo $row["number"]; ?></option>
        <?php 
            }
        ?>
        </select>
        <p class="black">Выбрать день:</p>
        <input type="date" required name="day" class="info_input" value="">
        <p class="black">Выбрать время получеия:</p>
        <input type="time" required name="time1" class="info_input" value="">
        <p class="black">Выбрать время возрата:</p>
        <input type="time" required name="time2" class="info_input" value="">
        <?php
            $day = date('Y-m-d');
            $time = date ('H:i:s');
            if($_POST['cab'] && $_POST['day'] && $_POST['time1'] && $_POST['time2']){
                $push = 'INSERT INTO `list_au` (`id_list`, `id_us_fk`, `id_a_fk`, `day`, `time1`, `time2`, `status`) VALUES (NULL, "'.$_SESSION['id_us'].'", "'.$_POST['cab'].'", "'.$_POST['day'].'", "'.$_POST['time1'].':00", "'.$_POST['time2'].':00", "Ожидание");';
                $inpu = mysqli_query($journal, $push);
                echo "<script>window.location.href='office.php'</script>";
            }
        ?>
        <button type="submit" class="info_input info_input_button">Забронировать кабинет</button>
    </form>
        </div>
    <a class="new_pass" href="office.php"><div class="pass_bl nav_form"><p>Взять сейчас кабинет</p></div></a>
    <?php echo $_POST['time2']; ?>