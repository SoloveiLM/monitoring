<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Выбор пользователя для редактирования</title>
</head>

<body>
   <form action="edit.php" method="POST" name="forma"> 
     <fieldset> 
<?php 
require 'connect.php'; 
$select_sql = "SELECT id, Location, Results FROM monitoring"; 
$result = mysqli_query($db, $select_sql); 
$row = mysqli_fetch_array($result); 
do 
  {
	 printf("<input type='radio' name='user' value='%s'<br>%s<br>%s<br/>", $row['id'], $row['Location'], $row['Results']); 
	 } 
	 while($row = mysqli_fetch_array($result));
	 
	 ?>
     </fieldset> 
     
     <fieldset> 
        <input type="submit" value="Выбрать данные"> 
     </fieldset> 
      </form> 
   
  <a href="index.php">Вернуться к таблице</a><br/><br/> 


      
</body>
</html>