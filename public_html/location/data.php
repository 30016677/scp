<?php

    $mysqli = new mysqli('localhost', 'a3001667_user', 'egb0Os@1GvDU', 'a3001667_location')
    or die(mysqli_error($mysqli));

    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        $location = $_POST['location'];

        $mysqli->query("INSERT INTO `data` (`id`, `name`, `location`) VALUES (NULL, '$name', '$location')") or die($mysqli->error);

        header("Location: index.php");
    }

    // select data from db
    $result = $mysqli->query("select * from data") or die($mysqli->error);

    // delete data from database.
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        $mysqli->query("delete from data where id=$id") or die($mysqli->error);

        // redirect back to index.php
        header("Location: index.php");
    }


?>