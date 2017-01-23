<div id="block-parameter">
<p class="title-filter">Сортировка</p>
<form method="GET" action="search-filter.php">

<ul class="checkbox-size">
<li><input type="checkbox" id="checkbox1"/><label fot="checkbox1">От ранних данных до поздних</label></li>
<li><input type="checkbox" id="checkbox2"/><label fot="checkbox2">От поздних данных до ранних</label></li>
<li><input type="checkbox" id="checkbox3"/><label fot="checkbox3">От А до Я</label></li>
<li><input type="checkbox" id="checkbox4"/><label fot="checkbox4">От Я до А</label></li>

</ul>
<form action="select.php" method="POST"><p><select size='3'name="">
<option disabled>Без сортировки</option>
<option value="">По возростанию цены</option>
<option value="">По убыванию цены</option>
<option value="">По алфавиту</option>
</select></p></form>
<center><input type="submit" name="submit" id="button-param-search" value="" />Найти</center>
</form>


</div>
