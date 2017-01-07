<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Monitoring</title>
</head>

<body>

<?php

$db = mysqli_connect("192.168.1.34","user","user", "user") or die ("Error");

$query = "SELECT * FROM monitoring";
$result = mysqli_query($db, $query);
$db = dbase_open('/tmp/test.dbf', 2);
while($row = mysqli_fetch_array($result)){
	echo "<tr><td>".$row["id"]."</td><td>".$row["Location"]."</td><td>".$row["Fish_to_research"]."</td><td>".$row["Date"]."</td><td>".$row["Results"]."</td><td>".$row["Doctor"]."</td><td>".$row["Comments"]."</td></tr>";
}
mysqli_free_result($result);
mysqli_close($db);
?>
</body>
</html>