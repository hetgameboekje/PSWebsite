<?php

require_once 'pdo.php';
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the name input from the form
    $title = $_POST["title"];
    $description = $_POST["description"];
    $url = $_POST["url"];
    $img = $_POST["img"];

    // Upload file

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
    // Insert the new name into the tb_test table
    $sql = "INSERT INTO tb_post (title, description, url, img) VALUES ('$title', '$description', '$url' , '$target_file')";
    if ($conn->query($sql) === TRUE) {
        echo "New name added successfully <br>";
        // Use PRG to redirect to the same page
        header("Location:index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>