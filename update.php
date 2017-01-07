<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Обновление данных</title>
</head>

<body>
<?php 
require 'connect.php'; 
$id = $_REQUEST['id']; 
$Location=trim($_REQUEST['Location']); 
$Fish_to_research=trim($_REQUEST['Fish_to_research']); 
$Date=trim($_REQUEST['Date']); 
$Results=trim($_REQUEST['Results']);
$Doctor=trim($_REQUEST['Doctor']);
$Comments=trim($_REQUEST['Comments']);

 $update_sql = "UPDATE monitoring SET Location='$Location', Fish_to_research='$Fish_to_research', Date='$Date', Results='$Results', Doctor='$Doctor', Comments='$Comments' WHERE id='$id'"; 
 mysqli_query($db, $update_sql) or die("Ошибка вставки" . mysql_error());
 
  echo '<p>Запись успешно обновлена!</p>'; 
  ?> 
  
  <a href="index.php">Вернуться к таблице</a><br/><br/> 
  <a href="select.php">Вернуться к выбору данных для редактирования</a><br/><br/>


      
</body>
</html>