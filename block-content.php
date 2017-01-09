<div id="block-content">

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
background: rgba(34,34,10,1.00);
color: white;
font-size: 15pt;
      }
	  tr:nth-child(odd){
		  background: rgba(227,227,227,1.00);
		  }
	  </style>
 
      
       <center>
    <table border="1">
    <caption><h1><strong></strong></h1></caption>
    <tr><th>id</th><th>Место отлова</th><th>Объект исследования</th><th>Дата</th><th>Результат</th><th>Врач</th><th>Комментарии</th></tr>
  </center>
  <?php

header("Content-Type: text/html; charset=UTF-8");
$db = mysqli_connect("192.168.1.34","user","user", "user") or die ("Error");
$db->query( "SET CHARSET utf8" );
$query = "SELECT * FROM monitoring";
$result = mysqli_query($db, $query);
while($row = mysqli_fetch_array($result)){
	echo "<tr><td>".$row["id"]."</td><td>".$row["Location"]."</td><td>".$row["Fish_to_research"]."</td><td>".$row["Date"]."</td><td>".$row["Results"]."</td><td>".$row["Doctor"]."</td><td>".$row["Comments"]."</td></tr>";
}



?>