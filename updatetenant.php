<?php

require_once 'connect.php';

// check id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // fetch data based on room_id
  $q = $conn->query("SELECT * FROM tenant WHERE tenant_id = '$id'");

  foreach ($q as $dt) :
  ?>

  <h2>Data Change Page</h2>

  <form action="update_processtenant.php" method="post">
    <input type="text" name="tenant_id" value="<?= $dt['tenant_id'] ?>">
    <input type="text" name="tenant_name" value="<?= $dt['tenant_name'] ?>">
    <input type="text" name="tenant_address" value="<?= $dt['tenant_address'] ?>">
    <input type="text" name="tenant_ktp_no" value="<?= $dt['tenant_ktp_no'] ?>">
    <input type="text" name="tenant_phone" value="<?= $dt['tenant_phone'] ?>">
    <input type="text" name="tenant_email" value="<?= $dt['tenant_email'] ?>">
    <input type="text" name="tenant_bankaccount" value="<?= $dt['tenant_bankaccount'] ?>">
    <input type="text" name="tenant_bankaccount_no" value="<?= $dt['tenant_bankaccount_no'] ?>">
    <input type="text" name="tenant_emergcp" value="<?= $dt['tenant_emergcp'] ?>">
    <input type="text" name="tenant_emergcp_phone" value="<?= $dt['tenant_emergcp_phone'] ?>">
    <input type="text" name="tenant_emergcp_email" value="<?= $dt['tenant_emergcp_email'] ?>">
    <input type="submit" name="submit" value="Edit Data">
  </form>

  <?php
  endforeach;
}