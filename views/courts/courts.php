<?php $courts = $class_courts->getNewestCourts();?>
<?php
  if (isset($_POST['insert_submit'])) $class_courts->addCourts($_POST['title']);
  if (isset($_POST['update_submit'])) $class_courts->updateCourts($_POST['id'], $_POST['title']);
  if (isset($_GET['delete'])) $class_courts->deleteCourts($_GET['delete']);
  if (isset($_GET['edit'])) {
    $courts = $class_courts->getCourts($_GET['edit']);
    // .... redagavimo forma
  } else {
    // .... miestų sąrašas
  }
?>
<h2>Courts</h2>
<table border="1" cellpadding="2" cellspacing="0">
  <tr>
    <th>City</th>
    <th>Addres</th>
    <th>Descriptio</th>
    <th>Create time</th>
  </tr>
    <tr>
    <?php foreach ($cities as $city): ?>
      <?php foreach ($courts as $court): ?>
        <td><?php echo $city['title'];?></td>
        <td><?php echo $court['addres'];?></td>
        <td><?php echo $court['description'];?></td>
        <td><?php echo $court['create_time'];?></td>
        <td><a href="index.php?action=admin&function=cities&edit=<?=$city['id'];?>">Edit</a></td>
        <td><a href="index.php?action=admin&function=cities&delete=<?=$city['id'];?>"
        onclick="return confirm('Are you sure?')">Delete</a></td>
    </tr>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </table>
<hr />
<form action="" method="post">
  New cities:
  <br />
  <input type="text" name="title" />
  <input type="submit" name="insert_submit" value=" Save " />
</form>