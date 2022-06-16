<div class="nav_form">
<h1>Сменить телефон</h1>
    <form action="#" method="POST" class="input">
	        <input type="text" tabindex="1" required placeholder="Введите новый телефон" name="phone" class="info_input" >
        <?php 
        if(!empty($_POST['phone'])){
                    $push = 'UPDATE `user` SET `phone` = "'.$_POST['phone'].'" WHERE `user`.`id_us` = '.$_SESSION['id_us'].';';
                    $res_pass = mysqli_query($journal, $push);
                    echo "<p class='error good';'>Телефон успешно сменен.</p>";
        }
        ?>
        <button type="submit" class="info_input info_input_button">Изменить телефон</button>
    </form>
</div>
<a class="new_pass" href="personal_account.php"><div class="pass_bl nav_form"><p>Личный кабинет</p></div></a>