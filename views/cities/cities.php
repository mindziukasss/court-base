<?php


if (isset($_POST['insert_submit'])) $class_cities->addCity($_POST['title']);
if (isset($_POST['update_submit'])) $class_cities->updateCity($_POST['id'], $_POST['title']);
if (isset($_GET['delete'])) $class_cities->deleteCity($_GET['delete']);
if (isset($_GET['edit'])) {
  $city = $class_cities->getCity($_GET['edit']);
  // .... redagavimo forma
} else {
  // .... miestų sąrašas
}
?>
<h2>Cities</h2>
<table border="1" cellpadding="2" cellspacing="0">
  <tr>
    <th>Cities</th>
    <th>Action</th>
  </tr>
  <?php if (isset($cities) && count($cities) > 0): ?>
    <?php foreach ($cities as $city): ?>
    <tr>
      <td><?php echo $city['title'];?></td>
      <td><?php echo $city['title'];?></td>
      <td><a href="index.php?action=admin&function=cities&edit=<?=$city['id'];?>">Edit</a></td>
      <td><a href="index.php?action=admin&function=cities&delete=<?=$city['id'];?>"
        onclick="return confirm('Are you sure?')">Delete</a></td>
      </td>
    </tr>
    <?php endforeach; ?>
  <?php else: ?>
    <tr>
      <td colspan="2">Cites is not.</td>
    </tr>
  <?php endif; ?>
</table>

<hr />
<form action="" method="post">
  New cities:
  <br />
  <input type="text" name="title" />
  <input type="submit" name="insert_submit" value=" Save " />
</form>