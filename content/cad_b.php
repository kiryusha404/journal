<div class="nav_form">
<h1>Взять кабинет сейчас</h1>
    <form action="#" method="POST" class="input">
        <select class="info_input" placeholder="Пользователь" name="user" >
        <?php
        if($_SESSION['pri']=='it'){
            $push = 'SELECT * FROM `auditorium`';
            }else{
                $push = 'SELECT * FROM `auditorium` where type="all"';
            }
            $acc = mysqli_query($journal, $push); 
            while($row = mysqli_fetch_array($acc)){
        ?>
            <option value="<?php echo $row["id_a"]; ?>" ><?php echo $row["number"]; ?></option>
        <?php 
            }
        ?>
        </select>

        <button type="submit" class="info_input info_input_button">Взять кабинет</button>
    </form>
</div>
<a class="new_pass" href="#"><div class="pass_bl nav_form"><p>Забранировать кабинет</p></div></a>