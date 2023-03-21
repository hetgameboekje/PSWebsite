<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend page</title>
    <link rel="stylesheet"href="style.css">
    
</head>

<style>
img {
    width: 40%;
}
</style>
<body>
<form method="post" action="create.php" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="title" name="title" required placeholder="title"> 
    <input type="text" id="description" name="description" required placeholder="write something">
    <input type="text" id="url" name="url" required placeholder="url">
    <input type="file" name="img" >
    <input type="submit" value="Add">
</form>
</body>
</html>

<?php

require_once 'create.php';
?>