<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Monitoring</title>
<style type="text/css">
table{
	border-collapse: collapse;
	width: 80%;
	font-size: 11pt;
	}
	table,th,td{
border:10px solid rgd(0,0,0);

	}
	th{
background: rgba(70,129,147,1.00);
color: white;
font-size: 15pt;
      }
	  tr:nth-child(odd){
		  background: rgba(227,227,227,1.00);
		  }
	  </style>
     

</head>

<body>
<center>
  <table border="1">
  <caption><h1><strong>Таблица мониторинга заболеваний рыб</strong></h1></caption>
<tr><th>id</th><th>Location</th><th>Fish to research</th><th>Date</th><th>Results</th><th>Doctor</th><th>Comments</th></tr>

<?php
header("Content-Type: text/html; charset=UTF-8");
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
</body>
</html>