<?php

include 'connection.php';
session_start();

if(!$_SESSION ['username']){
    header("Location: login.php");
}

$query = mysqli_query($connection, "SELECT * FROM customer");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    
<button class="btn btn-danger">
<a href="pros_logout.php">Logout</a></button>

<form action="list_agent_search.php" method="post">
    <div class ="input-group mb-3 pt-5">
        <input type="text" class="form-control" name="search"
        placeholder="Masukkan Data Yang Ingin Dicari">
        <button class="btn btn-primary">Cari</button>
    </div>

</body>
</html>