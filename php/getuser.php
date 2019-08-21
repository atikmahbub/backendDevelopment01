<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

echo "$q";

include 'db.php';
 
$sql="SELECT * FROM signup WHERE bloodGroup = '$q'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>Blood Group</th>
<th>Age</th>
<th>Weight</th>
<th>Height</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['bloodGroup'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['weight'] . "</td>";
    echo "<td>" . $row['height'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>