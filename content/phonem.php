<div class="nav_form">
    <h1>Узнать номер телефона</h1>
    <form action="#" method="post" class="input">

        <select class="info_input" placeholder="Пользователь" name="user" >
        <?php
            $push = 'SELECT id_us, login, name1, name2, name3 FROM user  
            ORDER BY `user`.`name1` ASC';
            $acc = mysqli_query($journal, $push); 
            while($row = mysqli_fetch_array($acc)){
        ?>
            <option value="<?php echo $row["id_us"]; ?>" ><?php echo $row["name1"]; ?> <?php echo $row["name2"]; ?> <?php echo $row["name3"]; ?> (<?php echo $row["login"]; ?>)</option>
        <?php 
            }
                ?>
</select>
        <?php
            if($_POST['user']){
                $push = 'SELECT phone FROM user where id_us="'.$_POST['user'].'"';
                $phone = mysqli_query($journal, $push); 
                $row = mysqli_fetch_array($phone);
                echo $row['phone'];
            }
        ?>
        <button type="submit" class="info_input info_input_button">Узнать</button>
    </form>
</div>
<a class="new_pass" href="maut.php"><div class="pass_bl nav_form"><p>Подтвердить возращенние ключа</p></div></a>
<a class="new_pass" href="moder_panel.php"><div class="pass_bl nav_form"><p>Подтвердить аудитории</p></div></a>