<div class="nav_form">
    <h1>Подтвердить возрат аудитории</h1>
    <form action="#" method="post" class="input">
    <select class="info_input" placeholder="Пользователь" name="user" >
        <?php
            $push = 'SELECT * FROM `user`';
            $acc = mysqli_query($journal, $push); 
            while($row = mysqli_fetch_array($acc)){
        ?>
            <option value="<?php echo $row["id_us"]; ?>" ><?php echo $row["name1"]; ?> <?php echo $row["name2"]; ?> <?php echo $row["name3"]; ?>(<?php echo $row["login"]; ?>)</option>
        <?php 
            }
        ?>
        </select>
        <select class="info_input" placeholder="Пользователь" name="aud" >
        <?php
            $push = 'SELECT * FROM `auditorium` ORDER BY `auditorium`.`number` ASC';
            $acr = mysqli_query($journal, $push); 
            while($row = mysqli_fetch_array($acr)){
        ?>
            <option value="<?php echo $row["id_a"]; ?>" ><?php echo $row["number"]; ?></option>
        <?php 
            }
        ?>
        </select>
        <?php 
            if($_POST['user'] && $_POST['aud']){
                $id = 'SELECT id_list FROM `list_au` WHERE id_us_fk = '.$_POST['user'].' AND id_a_fk = '.$_POST['aud'].' AND status = "Подтверждено"';
                $id_list = mysqli_query($journal, $id); 
                $id_l = mysqli_fetch_array($id_list);
                $time = date ('H:i:s');
                $du = 'UPDATE `list_au` SET `time2` = "'.$time.'", `status` = "Завершено" WHERE `list_au`.`id_list` = "'.$id_l['id_list'].'"';
                $voz = mysqli_query($journal, $du); 
                echo "Возрат осуществлён";
            }
        ?>
        <button type="submit" class="info_input info_input_button">Подтвердить</button>
    </form>
</div>

<a class="new_pass" href="moder.php"><div class="pass_bl nav_form"><p>Подтвердить аудитории</p></div></a>