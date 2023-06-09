<?php

require_once 'connect.php';

// check id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // fetch data based on room_id
  $q = $conn->query("SELECT * FROM roomrental WHERE room_id = '$id'");

  foreach ($q as $dt) :
  ?>

  <h2>Data Change Page</h2>

  <form action="update_process.php" method="post">
    <input type="text" name="room_id" value="<?= $dt['room_id'] ?>">
    <input type="text" name="room_label" value="<?= $dt['room_label'] ?>">
    <input type="text" name="room_location" value="<?= $dt['room_location'] ?>">
    <input type="text" name="room_window" value="<?= $dt['room_window'] ?>">
    <input type="text" name="room_monthly_price" value="<?= $dt['room_monthly_price'] ?>">
    <input type="text" name="room_availability" value="<?= $dt['room_availability'] ?>">
    <input type="text" name="room_description" value="<?= $dt['room_description'] ?>">
    <input type="text" name="room_gender" value="<?= $dt['room_gender'] ?>">
    <input type="submit" name="submit" value="Edit Data">
  </form>

  <?php
  endforeach;
}