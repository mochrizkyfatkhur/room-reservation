<?php

require_once 'connect.php';

// check id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // command delete data based on the id sent
  $q = $conn->query("DELETE FROM roomrental WHERE room_id = '$id'");

  // check command
  if ($q) {
    // message if delete is successful
    echo "<script>alert('Data deleted successfully'); window.location.href='indexroom.php'</script>";
  } else {
    // message if delete failed
    echo "<script>alert('Failed to delete data'); window.location.href='indexroom.php'</script>";
  }
} else {
  // if trying direct access to this file will be redirected to the index page
  header('Location:indexroom.php');
}