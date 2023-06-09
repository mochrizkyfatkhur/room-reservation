<?php
require_once 'connect.php';

$result = mysqli_query($conn, "SELECT tenant_name FROM tenant
ORDER BY  tenant_name");
$result2 = mysqli_query($conn, "SELECT room_label FROM roomrental
ORDER BY  room_label");
?>


<h1>Book a Room</h1>
<form action="list.php" method="post">
<?php
	
	include 'connect.php';
// mengambil data barang dengan kode paling besar
	$query = mysqli_query($conn, "SELECT max(book_id) as kodeauto FROM booking");
	$data1 = mysqli_fetch_array($query);
	$kodeKamar = $data1['kodeauto'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kodeKamar, 3, 3);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
  
	// $huruf = "TR";
	$kodeKamar = sprintf("%03s", $urutan);
?>
    <table>
    <tr>
        <td> Booking ID </td>
        <td> : </td> 
        <td> <input type="int" name="book_id" value="<?php echo $kodeKamar ?>" ></br></td>
    </tr>
    <tr>
        <td> Today's Date </td>
        <td> : </td> 
        <td> <input type="text" name="book_tr_date" value="<?php echo date("M j, Y"); ?>"></br></td>
    </tr>
<!-- form 1 -->
    <tr>
        <td> Tenant Name </td>
        <td>:</td>
        <td><select name="tenant_id">
            <?php
                $i=0;
                while($row = mysqli_fetch_array($result)){
            ?>
                <option value="<?=$row["tenant_name"];?>"><?=$row["tenant_name"];?></option>  
                <!-- option ini, dia bakal langsung otomatis ambil semua data dari kolum countryname untukdijadikan option -->  
            <?php
                $i++;
            }
            ?>
            </select></br> </td>
    </tr>

<!-- form 2 -->
    <tr>
        <td>Room Label </td>
        <td> :</td>
        <td><select name="room_id">
            <?php
                $i=0;
                while($row = mysqli_fetch_array($result2)){
            ?>
                <option value="<?=$row["room_label"];?>"><?=$row["room_label"];?></option> 
            <?php
                $i++;
            }
            ?>
            </select></br></td>
    <tr>
<!-- form 4 -->
    <tr>
        <td> Start Date </td>
        <td> : </td> 
        <td> <input type="date" name="book_start_date"></br></td>
    </tr>
<!-- form 5 -->
    <tr>
        <td> End Date </td>
        <td>: </td>
        <td><input type="date" name="book_end_date"></br></td>
    </tr>
<!-- form submit -->
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="submit" value="Submit"></td>
    </tr>
    </table>
</form>

<?php
require_once 'connect.php';

if(isset($_POST['submit'])){
    $book_id = $_POST['book_id'];
    $book_tr_date = $_POST['book_tr_date'];
    $tenant_id = $_POST['tenant_id'];
    $room_id = $_POST['room_id'];
    $book_start_date = $_POST['book_start_date'];
    $book_end_date = $_POST['book_end_date'];

    $q = $conn->query("INSERT INTO booking VALUES ('$book_id', '$room_id', '$tenant_id', '$book_start_date', '$book_end_date', '$book_tr_date')");

    if ($q) {
        // pesan jika data tersimpan
        echo "<script>alert('Added Successfull'); window.location.href='list.php'</script>";
      } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Added Failed'); window.location.href='list.php'</script>";
      }
}
?>

<?php
mysqli_close($conn);
?>