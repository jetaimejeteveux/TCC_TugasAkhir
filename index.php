<?php

// ============= INI FILE CORE!!! ============== //


// Include file buat masukin  script yang dibutuhin file index ini include_once("namaFile")
include_once("config.php");
include_once('add.php');

// Query buat select All tabel dari database, bisa buat query disini karena udah nge include config.php
$result = mysqli_query($mysqli, "SELECT * FROM manusia ORDER BY id DESC");

?>

<html>

<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="mb-3"></div>
    <div class="row" id="INI FORM INPUT">
        <div class="col-md-6 offset-md-3">
            <form action="add.php" method="post" name="form1">
                <input type="text" class="form-control" name="name" placeholder="isi nama kamu">
    <div class="mb-3"></div>
    <div class="row" id="INI FORM INPUT2">
        <div class="col-md-6 offset-md-3">
            <form action="add.php" method="post" name="form2">
                <input type="text" class="form-control" name="alamat" placeholder="isi alamat kamu">
                <div class="mb-3"></div>
                <input type="submit" name="submit" class="btn btn-primary">
                <input type=button onClick="location.href='index2.php'" value='new page'>
            </form>
        </div>
    </div>

    <div class="mb-3"></div>
    <div class="row" id="INI TABLE DATA">
        <div class="col-md-6 offset-md-3">
            <table class='table table-striped'>
                <thead>
                    <th class='text-center'>Name</th>
                    <th class='text-center'>Action</th>
                </thead>
                <?php
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td class='text-center'>" . $user_data['name'] . "</td>";
                    echo "<td class='text-center'> <a class='btn btn-danger' href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>