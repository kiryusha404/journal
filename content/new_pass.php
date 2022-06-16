<div class="nav_form">
<h1>Сменить пароль</h1>
    <form action="#" method="POST" class="input">
        <div class="password">
	        <input type="password" tabindex="1" id="password-input10" required placeholder="Введите старый пароль" name="pass1" class="info_input" >
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input10');"></a>
        </div>
        <div class="password">
	        <input type="password" tabindex="2" id="password-input11" required placeholder="Введите новый пароль" name="pass2" class="info_input" >
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input11');"></a>
        </div>
        <div class="password">
	        <input type="password" tabindex="2" id="password-input12" required placeholder="Повторите пароль" name="pass3" class="info_input" >
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input12');"></a>
        </div>
        <?php 
        if(!empty($_POST['pass1']) && !empty($_POST['pass2']) && !empty($_POST['pass3'])){
            $push = 'SELECT pass FROM user WHERE id_us="'.$_SESSION['id_us'].'"';
            $input = mysqli_query($journal, $push);
            $row = mysqli_fetch_array($input);
                if(password_verify($_POST['pass1'], $row['pass'])){
                   if($_POST['pass2']!=$_POST['pass3']){
                    echo "<p class='error'>Пароли не совпадают.</p>";
                   }
                   else{
                    $pass_h = password_hash($_POST['pass2'], PASSWORD_DEFAULT);
                    $push = 'UPDATE `user` SET `pass` = "'.$pass_h.'" WHERE `user`.`id_us` = '.$_SESSION['id_us'].';';
                    $res_pass = mysqli_query($journal, $push);
                    echo "<p class='error good';'>Пароль успешно сменен.</p>";
                   }




                }
                else{
                    echo "<p class='error'>Пароль не верный.</p>";
                }
        }
        ?>
        <button type="submit" class="info_input info_input_button">Изменить пароль</button>
    </form>
</div>
<a class="new_pass" href="personal_account.php"><div class="pass_bl nav_form"><p>Личный кабинет</p></div></a>
<script src="js/pass.js"></script>