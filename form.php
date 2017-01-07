<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
</head>

<body>
<?php 
require 'connect.php';

 $Location = $_REQUEST['Location'];
 $Fish_to_research = $_REQUEST['Fish_to_research']; 
 $Date = $_REQUEST['Date']; 
 $Results = $_REQUEST['Results'];
 $Doctor = $_REQUEST['Doctor'];
 $Comments = $_REQUEST['Comments'];
 
 mysqli_set_charset($db, "utf8");

 $insert_sql = "INSERT INTO monitoring (Location, Fish_to_research, Date, Results, Doctor, Comments)" . "VALUES('{$Location}', '{$Fish_to_research}', '{$Date}', '{$Results}', '{$Doctor}','{$Comments}');";
 
 mysqli_query($db, $insert_sql);
 
 include "index.php";
 ?>
  


</body>
</html>