<?php
    $mysqli = new mysqli('localhost', 'a30016677_user', 'archieandmax', 'a30016677_location')
    or die(mysqli_error($mysqli));

    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        $location = $_POST['location'];

        $mysqli->query("insert into data(name, location) values('$name', '$location')")
        or die($mysqli->error);

        header("Location: index.php");
    }

    // Select data from db
    $result = $mysqli->query("select * from data") or die($mysqli->error);

    // delete data from db
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        $mysqli->query("delete from data where id=$id") or die($mysqli->error);

        //redirect to index.php
        header("Location: index.php");
    }



?>