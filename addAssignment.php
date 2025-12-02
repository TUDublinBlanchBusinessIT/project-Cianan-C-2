<?php
require 'db.php';

$message = "";

if (isset($_POST['save'])) {

    $m = $_POST['module'];
    $t = $_POST['title'];
    $d = $_POST['date'];

    $sql = "INSERT INTO assignments (module_name, title, due_date)
            VALUES ('$m', '$t', '$d')";

    if (mysqli_query($conn, $sql)) {
        $message = "Assignment added successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Assignment</title>
</head>
<body>

<h1>Add Assignment</h1>

<?php
if ($message != "") {
    echo "<p style='color: green; font-weight: bold;'>$message</p>";
}
?>


<form method="post">
    <p>Module Name:<br>
       <input type="text" name="module"></p>

    <p>Assignment Title:<br>
       <input type="text" name="title"></p>

    <p>Due Date:<br>
       <input type="date" name="date"></p>

    <p><button type="submit" name="save">Save</button></p>
</form>

<p><a href="home.php">Home</a></p>
<p><a href="viewAssignment.php">View Assignments</a></p>

</body>
</html>
