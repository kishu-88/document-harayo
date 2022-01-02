<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records of Docharayo</title>
</head>
<body>
 <table border="4">
<tr>
    <th>ID</th>
    <th>photo</th>
    <th>Phone</th>
</tr>
<?php
error_reporting(0);
include("database.php");
$query = "SELECT * FROM DOCHARAYO_TABLE";
$data =mysqli_query($con,$query);
$total= mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
if($total!=0)
{
    $result=mysqli_fetch_assoc($data);
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <th>".$result["ID"]."</th>
        <th>".$result["photo"]."</th>
        <th>".$result["phone"]."</th>
        </tr>
        ";
    }
         
}
?>
 </table>   
</body>
</html>