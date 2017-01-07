<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Вывод данных</title>
</head>

<body>
<fieldset>
<form action="edit.php" method="post" name="forma">
<label for="Location">Ввести название места отлова для поиска:</label><br/> <input type="text" name="Location" size="30"><br/> 
<label for="Results">Ввести результат исследования для поиска:</label><br/> <input type="text" name="Results" size="30"><br/>
<input id="submit" type="submit" value="Найти и вывести"><br/> 
</form> 
</fieldset>

<fieldset> <form method="post" action="index.php"> <input id="submit" type="submit" value="Вывести все данные"><br/> 
</form>
</fieldset> 
<a href="info_form.html">Добавить данные</a>



      
</body>
</html>