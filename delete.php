<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Удаление данных</title>
</head>

<body>
<?php 
require 'connect.php'; 

$id = $_REQUEST['user']; 
$delete_sql = "DELETE FROM monitoring WHERE id=$id";
  
 mysqli_query($db, $delete_sql) or die("<p>При удалении произошла ошибка</p>" . mysql_error());
 
  echo '<p>Запись была успешно удалена!</p>'; 
  ?> 
  
  <a href="index.php">Вернуться к таблице</a><br/><br/> 
  <a href="select_delete.php">Вернуться к выбору данных для удаления</a><br/><br/>


      
</body>
</html>