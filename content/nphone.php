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
<a class="new_pass" href="admin.php"><div class="pass_bl nav_form"><p>Добавить пользователя</p></div></a>
<a class="new_pass" href="moder.php"><div class="pass_bl nav_form"><p>Одобрить кабинет</p></div></a>
<a class="new_pass" href="del_user.php"><div class="pass_bl nav_form"><p>Удалить пользователя</p></div></a>
<a class="new_pass" href="priority.php"><div class="pass_bl nav_form"><p>Изменить приоритет пользователя</p></div></a>
<a class="new_pass" href="role.php"><div class="pass_bl nav_form"><p>Изменить роль пользователя</p></div></a>