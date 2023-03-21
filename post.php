<?php
include_once "navbar.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="assets/css/post.css">

</head>

<body>

</body>

</html>
<?php
$title = "Hello this is a text of how long i can strecht this text";
$description = "This is another test but i know i can strecht this very good long bear with me though this is a affiliiateee marketing";
$link = "https://google.com";
$img_path = "assets/css/img/photo.png";




?>

<div class="container">
  <?php
  for ($x = 0; $x <= 100; $x += 1) {
    echo "<figure>";
    echo "<img src='" . $img_path . "'></img>";
    echo "<figcaption>" . "<h1>" . $title . "</h1>" . "<p>" . $description . "</p>" . $x .  "</figcaption>";
    echo "<div class='centerUrlLink'><a href='".$link . "'>Click me </a></div>" ;
    echo "</figure>";
  }
  ?>
</div>