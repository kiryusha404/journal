<div class="nav_form">
    <h1>Изменение роли пользователя</h1>
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
        <select class="info_input" placeholder="Роль" name="role" >
        <?php
            $push = 'SELECT * FROM `role` where id_role != 1';
            $acc = mysqli_query($journal, $push); 
            while($row = mysqli_fetch_array($acc)){
        ?>
            <option value="<?php echo $row["id_role"]; ?>" ><?php if($row["role"]=="authorized"){echo "Преподователь";} if($row["role"]=="moderator"){echo "Модератор";} ?></option>
        <?php 
            }
        ?>
        </select>
        <?php
        if($_POST['user'] && $_POST['role']){
                    $push = 'UPDATE `user` SET `role_fk` = '.$_POST['role'].' WHERE `user`.`id_us` = '.$_POST['user'].';';
                    $acc = mysqli_query($journal, $push); 
                    echo "<p class='error good';'>Роль пользователя изменена.</p>";
                   
                }
            ?>

        <button type="submit" class="info_input info_input_button">Изменить</button>
    </form>
</div>
<a class="new_pass" href="admin.php"><div class="pass_bl nav_form"><p>Добавить пользователя</p></div></a>
<a class="new_pass" href="#"><div class="pass_bl nav_form"><p>Одобрить кабинет</p></div></a>
<a class="new_pass" href="del_user.php"><div class="pass_bl nav_form"><p>Удалить пользователя</p></div></a>