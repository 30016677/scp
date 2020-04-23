<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="stylesheet.css">

    <title>SCP Database.</title>
  </head>
<body>
<?php include 'connection.php'; ?>

<div class="main">

<!-- Eyes only banner -->
<div class="container-fluid banner">
    <div class="row">
        <span class="col-3 text-center">||  EYES ONLY  ||</span>
        <span class="col-3 text-center">||  EYES ONLY  ||</span>
        <span class="col-3 text-center">||  EYES ONLY  ||</span>
        <span class="col-3 text-center">||  EYES ONLY  ||</span>
    </div>
</div>

<!-- SCP logo -->
<img src="images/scp-logo.png" width="300" height="300" class="img-fluid rounded mx-auto d-block m-3">

<!-- nav -->
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Create New File</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="read.php">Read Existing File</a>
  </li>
</ul>

<!-- read record nav -->
<div class="container mt-3">
    <h3>Read Database files:</h3>
    <div class="row">        

        <div class="col">        
        <ul class="nav">
        <?php 
            foreach($result as $menu_item):
        ?>
        <li class="nav-item">
            <a href="read.php?subject='<?php echo $menu_item['item_no']; ?>'" class="nav-link active">
                <?php echo $menu_item['item_no']; ?>
            </a>
        </li>
        <li class="nav-item"></li>


        <?php endforeach; ?>
        </ul>

        </div>   
    </div>

    <!-- display record in div below -->
    <div class="row">
        <div class="col">

        <?php
            // check if the subject get value exists
            if(isset($_GET['subject']))
            {
                //remove single quotes from subject get value
                $item_number = trim($_GET['subject'], "'");

                //run sql command to selct record based on get value
                $record = $connection->query("select * from subject where item_no='$item_number'") or die($connection->error());

                //convert record into an array to echo out on screen
                $row = $record->fetch_assoc();

                $item = $row['item_no'];
                $object_class = $row['object_class'];
                $subject_image_link = $row['subject_image_link'];
                $procedures = $row['procedures'];
                $description = $row['description'];

                //replace /n with line breaks

                $procedures = str_replace('\n', '<br><br>', $procedures);
                $description = str_replace('\n', '<br><br>', $description);

                //display db subject record to the screen

                echo "
                <h2>Item: {$item}</h2><br>
                <h3>Class: {$object_class}</h3><br>
                <img src='{$subject_image_link}'><br>
                <h3>Procedures:</h3><br>
                <p>{$procedures}</p>
                <h3>Description</h3><br>
                <p>{$description}</p>            
                ";
    
            }
        ?>

    </div>   
</div>

</div>


<!-- footer -->
<div class="container-fluid footer">
    <p class="text-right">This page created by Kris Boyte.</p>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>