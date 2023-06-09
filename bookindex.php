<?php

include_once("connect.php");
 

// $result = mysqli_query($mysqli, "SELECT * FROM booking ORDER BY book_id DESC");

?>
 
<html>
<head>    
    <title>booking index</title>
    <link rel="stylesheet" href="bookindex.css">
</head>

 
<body>

<!-- <a href="book.php">
    <button class="button button1">(+) Add New Room</button>
</a><br/><br/>  -->
 <div class="icon">
     <div class="logo">
         <h2>Kiyoomi Booking List</h2>
     </div>
 </div>
<table border="2">
    <tr>
      <th>No</th> 
      <th>Book ID</th> 
      <th>Room ID</th>
      <th>Tenant ID</th> 
      <th>Book Start Date</th>
      <th>Book End Date</th> 
      <th colspan="2">Action</th>
    </tr>

    <?php
    // Show all data
    $q = $conn->query("SELECT * FROM booking");

    $no = 1; // sequence number
    while ($dt = $q->fetch_assoc()) :
    ?>

    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['book_id'] ?></td>
      <td><?= $dt['room_id'] ?></td>
      <td><?= $dt['tenant_id'] ?></td>
      <td><?= $dt['book_start_date'] ?></td>
      <td><?= $dt['book_end_date'] ?></td>
     
      <td><a href="bookdelate.php?id=<?= $dt['book_id'] ?>" onclick="return confirm('Are you sure to delete this data?')">Delete</a></td>
    </tr>

    <?php
    endwhile;
    ?> 

  </table>
  &copy; Copyright Kiyoomi 2022
</body>
</html>
