<?php




include_once("config.php");


$id = $_GET['id'];


$result = mysqli_query($mysqli2, "DELETE FROM user WHERE id=$id");


header('location: index.php', true, 301);
exit();
