<div class="nav_form">
    <h1>Изменение приоритета пользователя</h1>
    <form action="#" method="post" class="input">

        <select class="info_input" placeholder="Пользователь" name="user" >
        <?php
            $push = 'SELECT id_us, login, name1, name2, name3 FROM user  WHERE role_fk != 1
            ORDER BY `user`.`name1` ASC';
            $acc = mysqli_query($journal, $push); 
            while($row = mysqli_fetch_array($acc)){
        ?>
            <option value="<?php echo $row["id_us"]; ?>" ><?php echo $row["name1"]; ?> <?php echo $row["name2"]; ?> <?php echo $row["name3"]; ?> (<?php echo $row["login"]; ?>)</option>
        <?php 
            }
        ?>
        </select>
        <select class="info_input" placeholder="Приоритет" name="priority" >
        <?php
            $push = 'SELECT * FROM priority';
            $acc = mysqli_query($journal, $push); 
            while($row = mysqli_fetch_array($acc)){
        ?>
            <option value="<?php echo $row["id_p"]; ?>" ><?php if($row["priority"]=="all"){echo "Обычный";} if($row["priority"]=="it"){echo "Компьютерный";} ?></option>
        <?php 
            }
        ?>
        </select>
        <?php
        if($_POST['user'] && $_POST['priority']){
                    $push = 'UPDATE `user` SET `priority_fk` = '.$_POST['priority'].' WHERE `user`.`id_us` = '.$_POST['user'].';';
                    $acc = mysqli_query($journal, $push); 
                    echo "<p class='error good';'>Приоритет пользователя изменена.</p>";
                   
                }
            ?>

        <button type="submit" class="info_input info_input_button">Изменить</button>
    </form>
</div>
<a class="new_pass" href="admin.php"><div class="pass_bl nav_form"><p>Добавить пользователя</p></div></a>
<a class="new_pass" href="moder.php"><div class="pass_bl nav_form"><p>Одобрить кабинет</p></div></a>
<a class="new_pass" href="del_user.php"><div class="pass_bl nav_form"><p>Удалить пользователя</p></div></a>
<a class="new_pass" href="role.php"><div class="pass_bl nav_form"><p>Изменить роль пользователя</p></div></a>
<a class="new_pass" href="phone.php"><div class="pass_bl nav_form"><p>Узнать номер телефона у пользователя</p></div></a>