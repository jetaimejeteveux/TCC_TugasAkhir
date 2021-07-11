<?php





if (isset($_POST['submit'])) {
    $name = $_POST['name'];

   
    include_once("config.php");

    
    $result = mysqli_query($mysqli2, "INSERT INTO user(name) VALUES('$name')");
    
    
    header('location: index2.php', true, 301);
}
