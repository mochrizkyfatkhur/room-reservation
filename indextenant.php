<?php
// call the connection
require_once 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="tenant.css">
</head>
<body>
  <!-- 
  Create or add new data
  The data will be sent to addtenant.php for processing
  -->
  <h2>Kiyoomi Tenant Control</h2>
  <form method="post" action="addtenant.php">
    <input type="text" name="tenant_id" placeholder="Tenant ID">
    <input type="text" name="tenant_name" placeholder="Name">
    <input type="text" name="tenant_address" placeholder="Address">
    <input type="text" name="tenant_ktp_no" placeholder="No. KTP">
    <input type="text" name="tenant_phone" placeholder="Phone">
    <input type="text" name="tenant_email" placeholder="Email">
    <input type="text" name="tenant_bankaccount" placeholder="Bank Account">
    <input type="text" name="tenant_bankaccount_no" placeholder="Bank Account Number">
    <input type="text" name="tenant_emergcp" placeholder="Emergency CP">
    <input type="text" name="tenant_emergcp_phone" placeholder="Emergency CP Phone">
    <input type="text" name="tenant_emergcp_email" placeholder="Emergency CP Email">
    <input type="submit" name="submit" value="Add Data">
  </form><br/>

  <!-- Read or display data from database -->
  <table border="2">
    <tr>
      <th>No.</th> <th>Tenant ID</th>
      <th>Name</th> <th>Address</th>
      <th>No. KTP</th> <th>Phone</th>
      <th>Email</th> <th>Bank Account</th>
      <th>Bank Account Number</th> <th>Emergency CP</th>
      <th>Emergency CP Phone</th> <th>Emergency CP Email</th>
      <th colspan="2">Action</th>
    </tr>

    <?php
    // Show all data
    $q = $conn->query("SELECT * FROM tenant");

    $no = 1; // sequence number
    while ($dt = $q->fetch_assoc()) :
    ?>

    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['tenant_id'] ?></td>
      <td><?= $dt['tenant_name'] ?></td>
      <td><?= $dt['tenant_address'] ?></td>
      <td><?= $dt['tenant_ktp_no'] ?></td>
      <td><?= $dt['tenant_phone'] ?></td>
      <td><?= $dt['tenant_email'] ?></td>
      <td><?= $dt['tenant_bankaccount'] ?></td>
      <td><?= $dt['tenant_bankaccount_no'] ?></td>
      <td><?= $dt['tenant_emergcp'] ?></td>
      <td><?= $dt['tenant_emergcp_phone'] ?></td>
      <td><?= $dt['tenant_emergcp_email'] ?></td>
      <td><a href="updatetenant.php?id=<?= $dt['tenant_id'] ?>">Edit</a></td>
      <td><a href="deletetenant.php?id=<?= $dt['tenant_id'] ?>" onclick="return confirm('Are you sure to delete this data?')">Delete</a></td>
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
