<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Вносим изменения</title>
</head>

<body>
<?php 
require 'connect.php'; 
$id = $_REQUEST['user']; 
$select_sql = "SELECT * FROM monitoring WHERE id= $id"; 
mysqli_set_charset($db, "utf8");
$result = mysqli_query($db, $select_sql); 
$row = mysqli_fetch_array($result); 

printf("<form action='update.php' method='POST' name='forma'> 
        <fieldset> 
		      <input type='hidden' name='id' value='%s'><br/> 
		          <label for='Location'>Место отлова:</label><br/> <input type='text' name='Location' size='30' value='%s'><br/> 
				  <label for='Fish_to_research'>Объект исследования:</label><br/> <input type='text' name='Fish_to_research' size='30' value='%s'><br/> 
				  <label for='Date'>Дата исследования:</label><br/> <input type='datetime' name='Date' size='30' value='%s'><br/> 
		          <label for='Results'>Результаты исследования:</label><br/> <input type='text' name='Results' size='30' value='%s'><br/>
				  <label for='Doctor'>Врач:</label><br/> <input name='Doctor' type='text' size='30' value='%s'> <br/> 
		          <label for='Comments'>Комментарии:</label><br/> <input type='text' name='Comments' size='30' value='%s'> 
				  
		</fieldset> 
		<br/> 
		
		<fieldset>
		  <input id='submit' type='submit' value='Редактировать запись'><br/>
	    </fieldset> 
		  </form>", $row['id'], $row['Location'], $row['Fish_to_research'], $row['Date'], $row['Results'], $row['Doctor'], $row['Comments']); 
?> 
<a href="info_form.html">Добавить данные</a><br/><br/> 
<a href="index.php">Вернуться к таблице</a><br/><br/> 
<a href="select.php">Вернуться к выбору записей для редактирования</a><br/><br/>


      
</body>
</html>