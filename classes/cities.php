<?php
class Cities {

  function getCities() {
    global $db;
    $stmt = $db->query('SELECT * FROM cities');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  function addCity($title) {
    global $db;
    $stmt = $db->prepare("INSERT INTO cities (title) VALUES (:title)");
    $stmt->execute(array(':title' => $title));
  }

  function getCity($id) {
    global $db;
    $stmt = $db->prepare("SELECT * FROM cities where id = :id");
    $stmt->execute(array(':id' => (int)$id));
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  function updateCity($id, $title) {
    global $db;
    $stmt = $db->prepare("UPDATE cities set title = :title where id = :id");
    $stmt->execute(array(':title' => $title, ':id' => (int)$id));
  }

  function deleteCity($id) {
    global $db;
    $stmt = $db->prepare("DELETE FROM cities where id = :id");
    $stmt->execute(array(':id' => (int)$id));
  }

}

$class_cities = new Cities();