  <div>
    <a href="index.php?action=admin&function=courts">Courts</a> | 
    <a href="index.php?action=admin&function=cities">Cities</a> | 
    <a href="logout.php">Logout</a> 
  </div>  
<?php

if (isset($_POST['login'])) {
  if (isset($_POST['name']) && $_POST['name'] == 'admin' && isset($_POST['password']) && $_POST['password'] == 'krepsinis') {
    $_SESSION['username'] = 'admin';
  }
}

if (isset($_SESSION['username'])) {
  
  $function = (isset($_GET['function'])) ? $_GET['function'] : '';
  if ($function == 'cities') include('views/cities/cities.php');
  if ($function == 'courts') include('views/courts/courts.php');

?>
  <?php
} else {
  ?>
  <br />
  <form action="" method="post">
    Name:
    <br />
    <input type="text" name="name" />
    <br /><br />
    Password:
    <br />
    <input type="password" name="password" />
    <br /><br />
    <input type="submit" name="login" value=" go " />  
  </form>
  <?php
}