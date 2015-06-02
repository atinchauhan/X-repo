<html>
<body>
<?php 
$namex = $_POST["name1"];
$age = $_POST["age"];
$Std = $_POST["standard"];
$server = "127.0.0.1";
$name = "root";
$pwd = "admin";
// Connection creating
$connect = mysqli_connect($server,$name);
// Let's Check
if (!$connect) { echo "Connection Failed!!!!";}
else {echo "Connection Established!!!!";};
$db = mysqli_select_db($connect,"mydb1");
if (!$db) {echo "<br> Can't Select DB";} 
else  {echo "<br>Selected Db";};
$sql = "INSERT INTO school (Name, Age, Standard)
VALUES ('$namex', '$age', '$Std')";
if ($connect->query($sql) === TRUE) { echo "<br>Created Record";}
 else {
    echo "<br>Error: " . $sql . "<br>" . $connect->error;
}
$Lastid = $connect->insert_id;
echo "<br> $Lastid<br>";
$stl = "SELECT * FROM school";
$result = mysqli_query($connect, $stl);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["Name"]. " " . $row["Age"]. "<br>";
    }
} else {
    echo "0 results";
};
$del = mysqli_query($connect,"DELETE FROM school WHERE id=11");
$up = mysqli_query($connect, "UPDATE school SET name='Zoomba' WHERE id='38'");


$connect->close();
?>
</body>
</html>