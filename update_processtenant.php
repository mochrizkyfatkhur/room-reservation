<?php

require_once 'connect.php';

if (isset($_POST['submit'])) {
    $tenant_id = $_POST['tenant_id'];
    $tenant_name = $_POST['tenant_name'];
    $tenant_address = $_POST['tenant_address'];
    $tenant_ktp_no = $_POST['tenant_ktp_no'];
    $tenant_phone = $_POST['tenant_phone'];
    $tenant_email = $_POST['tenant_email'];
    $tenant_emergcp = $_POST['tenant_emergcp'];
    $tenant_emergcp_phone = $_POST['tenant_emergcp_phone'];
    $tenant_emergcp_email = $_POST['tenant_emergcp_email'];
    $tenant_bankaccount = $_POST['tenant_bankaccount'];
    $tenant_bankaccount_no = $_POST['tenant_bankaccount_no'];
  
  // update data based on the tenant_id that was sent
  $q = $conn->query("UPDATE tenant SET tenant_id = '$tenant_id', tenant_name = '$tenant_name', tenant_address = '$tenant_address', tenant_ktp_no ='$tenant_ktp_no', tenant_phone ='$tenant_phone', tenant_email = '$tenant_email', tenant_emergcp = '$tenant_emergcp', tenant_emergcp_phone = '$tenant_emergcp_phone', tenant_emergcp_email = '$tenant_emergcp_email', tenant_bankaccount = '$tenant_bankaccount', tenant_bankaccount_no = '$tenant_bankaccount_no' WHERE tenant_id = '$tenant_id'");

  if ($q) {
    // message if data changes
    echo "<script>alert('Room data changed successfully'); window.location.href='indextenant.php'</script>";
  } else {
    // message if data failed to change
    echo "<script>alert('Room data failed to add'); window.location.href='indextenant.php'</script>";
  }
} else {
  // if you try to access directly this page will be redirected to the index page
  header('Location: indextenant.php');
}