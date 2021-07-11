<?php




if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    
    include_once("config.php");

    
    $result = mysqli_query($mysqli, "INSERT INTO manusia(name) VALUES('$name')");
    
  
    header('location: index.php', true, 301);
}
