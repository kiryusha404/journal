<div class="nav_form">
    <h1>Выбрать кабинет</h1>
    <form action="#" method="POST" class="input">
    <select class="info_input" placeholder="Пользователь" name="aud" >
        <option value="0" >Все</option>
        <?php
            $push = 'SELECT * FROM `auditorium`';
            $acc = mysqli_query($journal, $push); 
            while($row = mysqli_fetch_array($acc)){
        ?>
            <option value="<?php echo $row["id_a"]; ?>" ><?php echo $row["number"]; ?></option>
        <?php 
            }
        ?>
        </select>
        <button type="submit" class="info_input info_input_button">Найти</button>
    </form>
</div>
<?php
if($_POST['aud']==0){
    $push='SELECT u.name1, u.name2, u.name3, u.login, a.number, l.day, l.time1, l.time2 FROM list_au l JOIN user u ON l.id_us_fk = u.id_us JOIN auditorium a ON a.id_a = l.id_a_fk WHERE l.status = "Подтверждено" OR l.status = "Завершено"';
}else{
    $push='SELECT u.name1, u.name2, u.name3, u.login, a.number, l.day, l.time1, l.time2 FROM list_au l JOIN user u ON l.id_us_fk = u.id_us JOIN auditorium a ON a.id_a = l.id_a_fk WHERE l.status != "Отклонено" AND l.status != "Ожидание" AND l.id_a_fk = '.$_POST['aud'].' ';
}
$res = mysqli_query($journal, $push); 
?>
<table>
	<tr>
		<th>Пользователь</th>
		<th>Аудитория</th>
        <th>День</th>
		<th>Время получения</th>
        <th>Время возрата</th>
	</tr>
	<?php


		while($row = mysqli_fetch_array($res)){
			echo "<tr>";
			echo "<td>".$row['name1']." ".$row['name2']." ".$row['name3']."(".$row['login'].")</td>";
            echo "<td>".$row['number']."</td>";
			echo "<td>".$row['day']."</td>";
			echo "<td>".$row['time1']."</td>";
            echo "<td>".$row['time2']."</td>";
			echo "</tr>";
		}
	?>
</table>
