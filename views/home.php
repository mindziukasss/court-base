<?php
  
  $courts = $class_courts->getNewestCourts();

?>
<h2>New Courts</h2>
<ul>
<? foreach ($courts as $court): ?>
<li>
<b><?=$court['addres'];?>, <?=$court['city'];?></b>
<div style="margin:5px 0 10px 0"><?=$court['description'];?></div>
</li>
<? endforeach; ?>
</ul>

<!-- <a href="views/courts/courts.php">All courts</a> -->



<?php  include('views/courts/courts.php'); ?>