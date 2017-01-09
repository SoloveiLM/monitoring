<!doctype html>
<html>
<head>
<meta http-equive="content-type" content="text/html" charset="utf-8">
<link rel="stylesheet" type="text/css" href="../style.css">
<link href="reset.css" rel="stylesheet" type="text/css">
<link href="style1.css" rel="stylesheet" type="text/css">
<title>Мониторинг заболеваний рыб</title>
</head>

<body>


<?php
   include("connect.php");
?>

<div id="block-dody">
<?php
    include("block-header.php");
?>

<div id="block-right">
<?php
    include("block-category.php");
	include("block-parameter.php");
?>
</div>

</div>


<div id="block-content">

<?php
 include("block-content.php");

?>
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
#header("Content-Type: text/html; charset=UTF-8");
$db = mysqli_connect("192.168.1.34","user","user", "user") or die ("Error");
$db->query( "SET CHARSET utf8" );
$query = "SELECT * FROM monitoring";
$result = mysqli_query($db, $query);
while($row = mysqli_fetch_array($result)){
	echo "<tr><td>".$row["id"]."</td><td>".$row["Location"]."</td><td>".$row["Fish_to_research"]."</td><td>".$row["Date"]."</td><td>".$row["Results"]."</td><td>".$row["Doctor"]."</td><td>".$row["Comments"]."</td></tr>";
}    


mysqli_free_result($result);
mysqli_close($db);

?>
</div>

</div> 
 
</head>

<body>
  
</body>