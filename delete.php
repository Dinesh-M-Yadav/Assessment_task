<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <title>Delete</title>
</head>
<header class="bg-primary text-white text-center py-3">
    <h1>Task Deleted</h1>
</header>

<body>

</body>

</html>
<footer class="text-center mt-4">
    <a href="index.php" class="btn btn-secondary">Return to Task List</a>
</footer>



<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include("connect.php");
    $sql = "DELETE FROM tasks WHERE id=$id";
    if (mysqli_query($conn, $sql)) {

    }
}

?>