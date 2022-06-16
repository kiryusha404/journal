<div class="nav_form">
    <h1>Удаление пользователя</h1>
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
            <?php
                if($_POST['user']){
                    $push = 'DELETE FROM `user` WHERE `user`.`id_us` = '.$_POST['user'].'';
                    $acc = mysqli_query($journal, $push); 
                    echo "<p class='error good';'>Пользователь удалён.</p>";
                   
                }
            ?>

        <button type="submit" class="info_input info_input_button">Удалить</button>
    </form>
</div>
<a class="new_pass" href="admin.php"><div class="pass_bl nav_form"><p>Добавить пользователя</p></div></a>
<a class="new_pass" href="#"><div class="pass_bl nav_form"><p>Одобрить кабинет</p></div></a>
<a class="new_pass" href="role.php"><div class="pass_bl nav_form"><p>Изменить роль пользователя</p></div></a>