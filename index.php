<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=court;charset=utf8', 'root' , '');

include ('classes/cities.php');
include ('classes/courts.php');
include('header.php');
include('menu.php');
include('views/search/search_form.php');

$action = (isset($_GET['action'])) ? $_GET['action'] : '';
switch ($action) {
  case 'search': include('views/search/search.php'); break;
  case 'about': include('views/about.php'); break;
  case 'court': include('views/courts/courts.php'); break;
  case 'contact': include('views/contact.php'); break;
  case 'admin': include('admin.php'); break;
  default: include('views/home.php'); break;
}

include('footer.php');