<div class="nav_form">
<h1>Взять кабинет сейчас</h1>
    <form action="#" method="POST" class="input">
        <select class="info_input" placeholder="Пользователь" name="cab" >
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
        <?php
            $day = date('Y-m-d');
            $time = date ('H:i:s');
            if($_POST['cab']){
                $push = 'INSERT INTO `list_au` (`id_list`, `id_us_fk`, `id_a_fk`, `day`, `time1`, `time2`, `status`) VALUES (NULL, "'.$_SESSION['id_us'].'", "'.$_POST['cab'].'", "'.$day.'", "'.$time.'", NULL, "Ожидание");';
                $inpu = mysqli_query($journal, $push);
            }
        ?>
        <button type="submit" class="info_input info_input_button">Взять кабинет</button>
    </form>
</div>
<a class="new_pass" href="#"><div class="pass_bl nav_form"><p>Забранировать кабинет</p></div></a>

<table>
	<tr>
		<th>Аудитория</th>
		<th>День</th>
		<th>Время получения</th>
        <th>Время возрата</th>
        <th>Статус</th>
	</tr>
	<?php
		$push = 'SELECT a.number, l.day, l.time1, l.time2, l.status FROM list_au l JOIN auditorium a ON a.id_a = l.id_a_fk WHERE l.id_us_fk ="'.$_SESSION['id_us'].'"';
		$res = mysqli_query($journal, $push);

		while($row = mysqli_fetch_array($res)){
			echo "<tr>";
			echo "<td>".$row['number']."</td>";
			echo "<td>".$row['day']."</td>";
			echo "<td>".$row['time1']."</td>";
            echo "<td>".$row['time2']."</td>";
            echo "<td>".$row['status']."</td>";
			echo "</tr>";
		}
	?>
</table>
