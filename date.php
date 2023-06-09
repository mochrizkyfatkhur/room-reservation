<!DOCTYPE html>
<html>
<head>
	<title>How to Select MySQL Table Between Two Dates in PHP </title>
</head>
<body>
	<h2>Login Table</h2>
<div>
	<table border = "1">
		<thead>
			<th>Book ID</th>
			<th>Room ID</th>
			<th>Tenant ID</th>
            <th>Book Start Date</th>
            <th>Book End Date</th>
		</thead>
		<tbody>
		<?php
			include('connect.php');

			$query = $conn->query("select * from `booking`");
			while($row = $query->fetch_array()) {
				?>
				<tr>
					<td><?php echo $row['book_id']; ?></td>
					<td><?php echo $row['room_id']; ?></td>
                    <td><?php echo $row['tenant_id']; ?></td>
					<td><?php echo $row['book_start_date']; ?></td>
                    <td><?php echo $row['book_end_date']; ?></td>
				</tr>
				<?php
			}
		?>
		</tbody>
	</table>
</div><br>
<div>
	<form method = "POST">
		<label>From: </label><input type = "date" name = "from">
		<label>To: </label><input type = "date" name = "to">
		<input type = "submit" value = "Get Data" name = "submit">
	</form>
</div>
<h2>Data Between Selected Dates</h2>
<div>
	<table border="1">
		<thead>
        <th>Book ID</th>
			<th>Room ID</th>
			<th>Tenant ID</th>
            <th>Book Start Date</th>
            <th>Book End Date</th>
		</thead>
		<tbody>
		<?php
			if (isset($_POST['submit'])) {
				include('connect.php');
				$from=date('Y-m-d', strtotime($_POST['from']));
				$to=date('Y-m-d', strtotime($_POST['to']));

				$oquery=$conn->query("select * from `booking` where book_start_date and book_end_date between '$from' and '$to'");
					while($orow = $oquery->fetch_array()) {
						?>
						<tr>
                        <td><?php echo $row['book_id'];?></td>
					    <td><?php echo $row['room_id'];?></td>
                        <td><?php echo $row['tenant_id'];?></td>
					    <td><?php echo $row['book_start_date'];?></td>
                        <td><?php echo $row['book_end_date'];?></td>
						</tr>
						<?php
					}
			}
		?>
		</tbody>
	</table>
</div>
</body>
</html>