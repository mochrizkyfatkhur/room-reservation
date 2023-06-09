<?php

require_once 'connect.php';

if (isset($_POST['submit'])) {
  $room_id = $_POST['room_id'];
  $room_label = $_POST['room_label'];
  $room_location = $_POST['room_location'];
  $room_window = $_POST['room_window'];
  $room_monthly_price = $_POST['room_monthly_price'];
  $room_availability = $_POST['room_availability'];
  $room_description = $_POST['room_description'];
  $room_gender = $_POST['room_gender'];

  $q = $conn->query("INSERT INTO roomrental VALUES ('$room_id', '$room_label', '$room_location', '$room_window', '$room_monthly_price', '$room_availability', '$room_description', '$room_gender')");

  if ($q) {
    // message if data is saved
    echo "<script>alert('Room data successfully added'); window.location.href='indexroom.php'</script>";
  } else {
    // message if data failed to save
    echo "<script>alert('Room data failed to add'); window.location.href='indexroom.php'</script>";
  }
} else {
  // if you try to access directly this page will redirect to the index page
  header('Location: indexroom.php');
}