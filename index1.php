<!doctype html>
<html>
<head>
<meta http-equive="content-type" content="text/html" charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href="../css/reset.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<title>Мониторинг заболеваний рыб</title>
</head>

<body>
<?php
   include("../connect.php");
?>

<div id="block-dody">
<?php
    include("../block-header.php");
?>
<div id="block-right">
<?php
    include("../include/block-category.php");
	include("../include/block-parameter.php");
?>
</div>


<div id="block-content">
<div id="block-sorting">
<p id="nav-breadcrumbs"><a href="../index.php">Главная страница</a> \ <span>Все товары</span></p>

<ul id="options-list">
<li>Вид:</li>
<li><img id="style-grid" src="file:///D|/images/icon-grid1.png"></li>
<li><img id="style-list" src="file:///D|/images/icon-list.png"></li>
<li>Сортировать:</li>
<li><a id="select-sort">Без сортировки</a>

<ul id="sorting-list">
<li a href="">От дешовых к дорогим</li>
<li a href="">От дорогих к дешовым</li>
<li a href="">От А до Я</li>
<li a href="">От Я до А</li>
</ul>

</li>
</ul>
</div>
<ul id="block-tovar-grid">
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = mysqli_connect("192.168.1.34","lilia","password", "db_shop") or die ("Error");
$db->query( "SET CHARSET utf8" );
$query = "SELECT * FROM table_products";
$result = mysqli_query($db, $query);
$row_cnt = mysqli_num_rows($result);

if ($row_cnt > 0):
{
	$row =mysqli_fetch_array($result);	
	do
	{

	if ($row["image"] != "" && file_exists(" ./uploads_images/".$row["image"])):
	{
		$img_path ='./uploads_images/'.$row["image"];        
		$max_width=150;
	    $max_height=150;
	    list($width, $height) = getimagesize($img_path);
	    $ratioh=$max_height/$height;
	    $ratiow=$max_width/$width;
	    $ratio=min($ratioh, $ratiow);
	    $width=intval($ratio*$width);
	    $height=intval($ratio*$height);

	}
	else:
		{	
		$img_path="../images/no-image.jpg";
		$width=163;
	    $height=163;
		}
	endif;
		echo '<li>
	<div class="block-images-grid">
	<img src=" '.$img_path.' " width="'.$width.'" height="'.$height.'" />
	
	</div>
	<p class="style-title-grid"><a href="">'.$row["title"].'</a></p>
	<ul class="reviews-and-counts-grid">
	<li><img src="../images/eye-icon.png" /><p>0</p></li>
	</ul>
	<p class="style-price-grid"><strong>'.$row["price"].'</strong> грн.</p>
	<div class="mini-features">'.$row["mini_features"].'</div>
	</li>';

	
	}
	while ($row =mysqli_fetch_array($result));	
}

    include("../include/block-footer.php");
endif;
?>
</ul>

</div>
</div>
</body>
</html><!doctype html>
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
  </center>
  
<a href="../info_form.html"><input id="submit" type="submit" value="Добавить данные"></a>
<a href="../select.php"><input id="submit" type="submit" value="Редактировать данные"></a>
<a href="../select_delete.php"><input id="submit" type="submit" value="Удалить данные"></a>

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