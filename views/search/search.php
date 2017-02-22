<?php

$courts = $class_courts->searchCourts($_GET['city_id'], $_GET['addres']);
?>

<h2>Courts rezult</h2>

<ul>
<? foreach ($courts as $court): ?>
<li>
<b><?=$court['address'];?>, <?=$court['city'];?></b>
<div style="margin:5px 0 10px 0"><?=$court['description'];?></div>
</li>
<? endforeach; ?>
</ul>