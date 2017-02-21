<?php
$cities = $class_cities->getCities();
?>
<div>
<form action="index.php">
<input type="hidden" name="action" value="paieska" />
<select name="city_id">
<? foreach ($cities as $city): ?>
<option value="<?=$city['id'];?>"
<? if (isset($_GET['city_id']) 
&& $_GET['city_id'] == $city['id']) echo ' selected="selected"'; ?>
><?=$city['title'];?></option>
<? endforeach; ?>
</select>
<input type="text" name="address" />
<input type="submit" name="search" value="Ieškoti" />
</form>
</div>