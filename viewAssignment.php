<?php
require 'db.php';
$result = mysqli_query($conn, "SELECT * FROM assignments");
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Assignments</title>
</head>
<body>

<h1>All Assignments</h1>

<a href="home.php">Home</a><br><br>

<table border="1">
<tr>
    <th>ID</th>
    <th>Module</th>
    <th>Title</th>
    <th>Due</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['module_name']."</td>";
    echo "<td>".$row['title']."</td>";
    echo "<td>".$row['due_date']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
