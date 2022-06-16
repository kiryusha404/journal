<div class="nav_form">
    <h1>Авторизация</h1>
    <form action="#" method="post" class="input">
        <input type="text" tabindex="1" required name="login" class="info_input" placeholder="Логин" value="<?php echo $_POST['login'] ?>"> 
        <div class="password">
	        <input type="password" tabindex="2" id="password-input3" required placeholder="Пароль" name="pass" class="info_input" >
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input3');"></a>
        </div>
        <?php 
        if(!empty($_POST['login']) && !empty($_POST['pass'])){
            $push = 'SELECT u.id_us, u.pass, r.role, priority_fk FROM user u join role r ON u.role_fk = r.id_role  WHERE login="'.$_POST["login"].'"';
            $input = mysqli_query($journal, $push);
            $row = mysqli_fetch_array($input);
                if(password_verify($_POST['pass'], $row['pass'])){
                   $_SESSION['role'] = $row['role']; 
                   $_SESSION['id_us'] = $row['id_us'];
                   $_SESSION['pri'] = $row['priority_fk'];
                   echo "<script>window.location.href='index.php'</script>";








                }
                else{
                    echo "<p class='error'>Неверный логин или пароль.</p>";
                }
        }
        ?>

        <button type="submit" class="info_input info_input_button">Войти</button>
    </form>
</div>
<script src="js/pass.js"></script>
