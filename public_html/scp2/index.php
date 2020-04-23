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

<!-- create new record form -->
<div class="container mt-3">

    <div class="row">
        <div  class="col">
            <h3>Create new file:</h3>
            <form name="insert" method="POST" action="connection.php" class="form-group">
                <label>Subject Number:</label>
                <br>
                <input type="text" name="item_no" class="form-control" placeholder="SCP-###" required>
                <br>
                <label>Subject Class Type:</label>
                <br>
                <input type="text" name="object_class" class="form-control" required>
                <br>
                <label>Image Link:</label>
                <br>
                <input type="text" name="subject_image_link" class="form-control" placeholder="images/[image name].[file type]">
                <br>
                <label>Subject Description:</label>
                <br>
                <textarea name="description" rows="4" class="form-control" placeholder="Separate Paragraphs with \n" required> </textarea>
                <br>
                <label>Containment Procedures:</label>
                <br>
                <textarea name="procedures" rows="4" class="form-control" placeholder="Separate Paragraphs with \n" requried> </textarea>
                <br>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

</div>

<!-- footer -->
<div class="container-fluid footer">
    <p class="text-right">This page created by Kris Boyte. Agent number: 30016677</p>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>