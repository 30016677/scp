<?php

//create database creds
$user = "a3001667_user";
$password = "300166773721421996";
$db = "a3001667_scp";

//create php db  connection object
$connection = new mysqli('localhost', $user, $password, $db) or die(mysqli_error($connection));

//get all data from the table and save in a var for use on our page application
$result = $connection->query("select * from subject") or die($connection->error());

//If form has been filled out, then insert values into 
if(isset($_POST['item_no'])){

    //save values of the form to variables
    $item_no = $_POST['item_no'];
    $object_class = $_POST['object_class'];
    $subject_image_link = $_POST['subject_image_link'];
    $description = $_POST['description'];
    $procedures = $_POST['procedures'];

    //insert command
    $sql = "insert into subject(item_no, object_class, subject_image_link, description, procedures) values('$item_no', '$object_class', '$subject_image_link', '$description', '$procedures')";

    if ($connection->query($sql) === TRUE) {
        echo "<h1>Record created successfully</h1>
            <br><a href='index.php'>Back to SCP App</a>";        
       } 
    else 
       {        
        echo "<h1>Error creating record: {$connection->error}</h1>
            <br><a href='index.php'>Back to form</a>";        
       }
    

}



?>