<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app";
// Create connection by passing these connection parameters
$conn = new mysqli($servername, $username, $password, $dbname);
echo "<h1>"; echo "Like operator demo: "; echo"</h1>";
echo "<br>";
echo "Name contains il:";
echo "<br>";
echo "<br>";
//sql query
$sql = "SELECT * from student_address WHERE sname LIKE '%il%' ";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
echo " STUDENT-ID : ". $row['sid'], " -- NAME : ". $row['sname'] ,
" -- ADDRESS : ". $row['saddress'] ;
echo "<br>";
}
echo "<br>";
echo "Address starts with M and ends with i ";
echo "<br>";
echo "<br>";
//sql query
$sql1 = "SELECT * from student_address WHERE saddress LIKE 'M%i'";
$result1 = $conn->query($sql1);
//display data on web page
while($row = mysqli_fetch_array($result1)){
echo " STUDENT-ID : ". $row['sid'], " -- NAME : ". $row['sname'] ,
" -- ADDRESS : ". $row['saddress'] ;
echo "<br>";
}
//close the connection
$conn->close();
?>
</body>
</html>