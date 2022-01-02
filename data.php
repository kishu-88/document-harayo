<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 2px solid black;
}
</style>
</head>
<body>
<?php
$servername = "sql309.epizy.com";
$username = "epiz_28285503";
$password = "4h1P2poMHKkjWgd";
$dbname = "epiz_28285503_docharayo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, phone, Address FROM docharayo_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Phone</th><th>Address</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["phone"]. " </td><td>" . $row["Address"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>