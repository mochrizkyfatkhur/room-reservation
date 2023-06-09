<?php
// call the connection
require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="index.css">
</head>
<body>
  <!-- 
  Create or add new data
  The data will be sent to add.php for processing
  -->
  <h2>Kiyoomi Room Control</h2>
  <form method="post" action="add.php">
    <input type="text" name="room_id" placeholder="Room ID">
    <input type="text" name="room_label" placeholder="Label">
    <input type="text" name="room_location" placeholder="Location">
    <input type="text" name="room_window" placeholder="Window">
    <input type="text" name="room_monthly_price" placeholder="Monthly Price">
    <input type="text" name="room_availability" placeholder="Availability">
    <input type="text" name="room_description" placeholder="Description">
    <input type="text" name="room_gender" placeholder="Gender">
    <input type="submit" name="submit" value="Add Data">
  </form><br/>

  <!-- Read or display data from database -->
  <table border="5" class="table">
    <tr>
      <th>No.</th> <th>Room ID</th>
      <th>Label</th> <th>Location</th>
      <th>Window</th> <th>Monthly Price</th>
      <th>Availability</th> 
      <th>Desc</th>
      <th>Gender</th>
      <th colspan="2">Action</th>
    </tr>

    <?php
    // Show all data
    $q = $conn->query("SELECT * FROM roomrental");

    $no = 1; // sequence number
    while ($dt = $q->fetch_assoc()) :
    ?>

    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['room_id'] ?></td>
      <td><?= $dt['room_label'] ?></td>
      <td><?= $dt['room_location'] ?></td>
      <td><?= $dt['room_window'] ?></td>
      <td><?= $dt['room_monthly_price'] ?></td>
      <td><?= $dt['room_availability'] ?></td>
      <td><?= $dt['room_description'] ?></td>
      <td><?= $dt['room_gender'] ?></td>
      <td><a href="update.php?id=<?= $dt['room_id'] ?>">Edit</a></td>
      <td><a href="delete.php?id=<?= $dt['room_id'] ?>" onclick="return confirm('Are you sure to delete this data?')">Delete</a></td>
    </tr>

    <?php
    endwhile;
    ?> 

  </table>
  &copy; Copyright Kiyoomi 2022
</body>
</html>
<style>
table{
    margin: 2px;
    width: 100%;
    text-align: center;
}
h2 {
    text-align: center;
    justify-content: center;
}
</style>
