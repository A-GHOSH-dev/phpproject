<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="m-5">
    <h1>Submission</h1>
    
    <?php


if ($_SERVER['REQUEST_METHOD']=='POST'){
    $teamname=$_POST['teamname'];
    $title=$_POST['title'];
    $objective=$_POST['objective'];
    $novelty=$_POST['novelty'];
    $techstack=$_POST['techstack'];
    $blockdiag=$_POST['blockdiag'];
    $hardware=$_POST['hardware'];
    $domain=$_POST['domain'];
    





  // Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "ananya1234!";
$database = "tempora2spsdb";


// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";


//insert values to db
// Variables to be inserted into the table
//$name = "Vikrant";
//$destination = "Russia";

// Sql query to be executed
//$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$sql = "INSERT INTO `submission` (`teamname`, `title`, `objective`, `novelty`, `techstack`, `blockdiag`, `hardware`, `domain`) VALUES ('$teamname', '$title', '$objective', '$novelty', '$techstack', '$blockdiag', '$hardware', '$domain')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo '<div class="alert alert-primary" role="alert">
    Submission from ' . $teamname.' has been recorded successfully.
  </div>';
}
else{
    //echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    echo '<div class="alert alert-danger" role="alert">
    Submission from ' . $teamname.' has not been recorded successfully.
  </div>';
}


}
/*
// Create a db
$sql = "CREATE DATABASE temporadb";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}*/
/*
//Create table in db
// Create a table in the db (Here Table Name is submissionfinal )
$sql = "CREATE TABLE `submissionfinal` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}
*/






}

?>
<form action="/tempora2/submission.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Team Name</label>
    <input type="text" class="form-control" id="teamname" aria-describedby="emailHelp" name="teamname">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Objective</label>
    <input type="text" class="form-control" id="objective" name="objective">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Novelty</label>
    <input type="text" class="form-control" id="novelty" name="novelty">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">TechStack</label>
    <input type="text" class="form-control" id="techstack" name="techstack">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Circuit diagram</label>
    <input type="url" class="form-control" id="blockdiag" name="blockdiag">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Hardware</label>
    <input type="text" class="form-control" id="hardware" name="hardware">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Domain</label>
    <input type="text" class="form-control" id="domain" name="domain">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>






