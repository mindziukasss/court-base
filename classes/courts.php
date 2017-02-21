<?php
class Courts {

  function getCourts() {
    global $db;
    $stmt = $db->query('SELECT * FROM courts');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  function addCourts($addres, $description) {
    global $db;
    $stmt = $db->prepare("INSERT INTO courts (addres, description) VALUES (:addres, :description)");
    $stmt->execute(array(':addres' => $title, ':description' => $description));
  }

  // function getCourts($id) {
  //   global $db;
  //   $stmt = $db->prepare("SELECT * FROM courts where id = :id");
  //   $stmt->execute(array(':id' => (int)$id));
  //   return $stmt->fetch(PDO::FETCH_ASSOC);
  // }

  // function updateCity($id, $title) {
  //   global $db;
  //   $stmt = $db->prepare("UPDATE cities set title = :title where id = :id");
  //   $stmt->execute(array(':title' => $title, ':id' => (int)$id));
  // }

  // function deleteCity($id) {
  //   global $db;
  //   $stmt = $db->prepare("DELETE FROM cities where id = :id");
  //   $stmt->execute(array(':id' => (int)$id));
  // }
  function getNewestCourts() {
  global $db;
  $stmt = $db->query('SELECT courts.*, cities.title as city FROM courts 
    JOIN cities ON courts.city_id = cities.id
    ORDER BY courts.id desc
    LIMIT 10');
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

$class_courts = new Courts();
