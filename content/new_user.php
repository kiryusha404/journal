<div class="nav_form">
    <h1>Добовления пользователя</h1>
    <form action="#" method="post" class="input">
        <input type="text" tabindex="1" required name="name2" class="info_input" placeholder="Фамилия" > 
        <input type="text" tabindex="2" required name="name" class="info_input" placeholder="Имя" > 
        <input type="text" tabindex="3" required name="name3" class="info_input" placeholder="Отчество" > 
        <input type="text" tabindex="4" required name="login" class="info_input" placeholder="Логин" >
        <input type="text" tabindex="5" required id="phone" name="tel" class="info_input" placeholder="Телефон" > 
        <div class="password">
	        <input type="password" tabindex="6" id="password-input" required placeholder="Пароль" name="pass" class="info_input" >
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input');"></a>
        </div>
        <div class="password">
	        <input type="password" tabindex="7" id="password-input2" required placeholder="Повтор пароль" name="pass2" class="info_input" >
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input2');"></a>
        </div>
        <p class="black">Тип пользователя:</p>
        <select class="info_input" placeholder="Роль" name="role" >
        <?php 
            $push = 'SELECT * FROM `role` ORDER BY `role`.`id_role` DESC LIMIT 2';
            $role = mysqli_query($journal, $push);
            while($row = mysqli_fetch_array($role)){
        ?>
            <option value="<?php echo $row["id_role"]; ?>" ><?php if($row["role"]=="authorized"){echo "Преподователь";} if($row["role"]=="moderator"){echo "Модератор";} ?></option>
        <?php 
        }
        ?>
        </select>
        <p class="black">Возможность брать кабинеты:</p>
        <select class="info_input" placeholder="Приоритет" name="pri" >
        <?php
            $push = 'SELECT * FROM `priority`';
            $pri = mysqli_query($journal, $push); 
            while($row = mysqli_fetch_array($pri)){
        ?>
            <option value="<?php echo $row["id_p"]; ?>" ><?php if($row["priority"]=="all"){echo "Обычный";} if($row["priority"]=="it"){echo "Компьютерный";} ?></option>
        <?php 
            }
        ?>
        </select>



        <?php 
            if(!empty($_POST['name2']) && !empty($_POST['name']) && !empty($_POST['name3']) && !empty($_POST['login']) && !empty($_POST['tel']) && !empty($_POST['pass']) && !empty($_POST['pass2']) && !empty($_POST['pri']) && !empty($_POST['role'])){
                $push = 'SELECT login FROM user WHERE login="'.$_POST['login'].'"';
                $input = mysqli_query($journal, $push);
                $row = mysqli_fetch_array($input);
                if($row['login']==$_POST['login']){
                    echo "<p class='error'>Этот логин уже занят.</p>";
                }
                else{
                    if($_POST['pass'] == $_POST['pass2']){
                        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                        $pushdb = 'INSERT INTO `user` ( `name2`, `name1`, `name3`, `login`, `pass`, `phone`, `role_fk`, `priority_fk`) VALUES ( "'.$_POST['name'].'", "'.$_POST['name2'].'", "'.$_POST['name3'].'", "'.$_POST['login'].'", "'.$pass.'", "'.$_POST['tel'].'", "'.$_POST['role'].'", "'.$_POST['pri'].'" );';
                        $inpu = mysqli_query($journal, $pushdb);
                        echo "<p class='error good';'>Пользователь добавлен.</p>";






                    }
                    else{
                        echo "<p class='error'>Пароли не совпадают.</p>";
                    }
                }
            }    
        ?>
        <button type="submit" class="info_input info_input_button">Добавить</button>
    </form>
</div>
<a class="new_pass" href="del_user.php"><div class="pass_bl nav_form"><p>Удалить пользователя</p></div></a>
<a class="new_pass" href="#"><div class="pass_bl nav_form"><p>Одобрить кабинет</p></div></a>
<a class="new_pass" href="role.php"><div class="pass_bl nav_form"><p>Изменить роль пользователя</p></div></a>
<a class="new_pass" href="priority.php"><div class="pass_bl nav_form"><p>Изменить приоритет пользователя</p></div></a>
<a class="new_pass" href="phone.php"><div class="pass_bl nav_form"><p>Узнать номер телефона у пользователя</p></div></a>
<script src="js/pass.js"></script>

