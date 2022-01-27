<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Registration form</title>
        <link rel = "icon" href = "images/icon.jpeg" >
        <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href = "indexsps.css" rel = "stylesheet" >
        
    </head>

    <body>
        <!--<div class = "header">
            <h2>Fill up the details</h2>
        </div>v
        <!-<p id='head1' class='header'>Awesome designs</p>
        <p id='head2' class='header'>Just</p>
        <p id='head3' class='header'>For you</p>
        <p id='head4' class='header'>simple and awesome all the time</p>
        <p id='head5' class='header'>Welcome to BA designs</p>-->
        
        <div class = "container">
            <div class = "header">
                <h2>Fill up the details</h2>
            </div>


            <?php


if ($_SERVER['REQUEST_METHOD']=='POST'){
    $team=$_POST['team'];
    $nam=$_POST['nam'];
    $regno=$_POST['regno'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $memberonename=$_POST['memberonename'];
    $memberonephn=$_POST['memberonephn'];
    $memberoneemail=$_POST['memberoneemail'];
    $membertwoname=$_POST['membertwoname'];
    $membertwophn=$_POST['membertwophn'];
    $membertwoemail=$_POST['membertwoemail'];
    





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
$sql = "INSERT INTO `submission` (`team`, `nam`, `regno`, `email`, `phone`, `memberonename`, `memberonephn`, `memberoneemail`, `membertwoname`, `membertwophn`, `membertwoemail`) VALUES ('$team', '$nam', '$regno', '$email', '$phone', '$memberonename', '$memberonephn', '$memberoneemail', '$membertwoname', '$membertwophnn', '$membertwoemail')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo '<div class="alert alert-primary" role="alert">
    Submission from ' . $team.' has been recorded successfully.
  </div>';
}
else{
    //echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    echo '<div class="alert alert-danger" role="alert">
    Submission from ' . $team.' has not been recorded successfully.
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

<form method ="post" autocomplete = "on" class = "form" id = "form" action ="/tempora2/registration.php">
            <div class = "form-control">
            <label for = "nam"><span class = "mandatory">*</span></label>
            <input type = "text" required="true" name = "team" id = "team" placeholder = "Team Name" ><br>
            <i class = " fa-check-circle"></i>
            <i class = "fa-exclamation-cirlce"></i>
            <small>Error message</small>
            </div>
            <br>
            <div class = "form-control">
            <label for = "regno"><span class = "mandatory">*</span></label>
            <input type="text" name="nam" id = "nam" required="true" placeholder = "Leader's Name" ><br>
            <i class = "fas fa-check-circle"></i>
            <i class = "fas fa-check-circle"></i>
            <small>Error message</small>
            </div>
            <br>
            <div class = "form-control">
            <label for = "regno1"><span class = "mandatory">*</span></label>
            <input type="text" name="regno" id = "regno" required="true" placeholder = "Leader's RegNo" ><br>
            <i class = "fas fa-check-circle"></i>
            <i class = "fas fa-check-circle"></i>
            <small>Error message</small>
            </div>
            <br>
            
            <!--<div class = "form-control">
            <label for = "dept">Your department<span class = "mandatory">*</span></label>
            <input type = "text" name = "dept" id = "dept" ><br>
            <i class = "fas fa-check-circle"></i>
            <i class = "fas fa-check-circle"></i>
            <small>Error message</small>
            </div>-->
            <div class = "form-control">
            <label for="email"><span class="mandatory">*</span></label>
            <input type = "email" id="email" name="email" required aria-required="true" placeholder="Leader's email" > <br>
            <i class = "fas fa-check-circle"></i>
            <i class = "fas fa-check-circle"></i>
            <small>Error message</small>
            </div>
            <br>
            <div class = "form-control">
            <label for = "phone"><span class = "mandatory">*</span></label>
            <input type = "number" id = "phone" name = "phone" required="true" placeholder = "Leader's phone number"><br>
            <i class = "fas fa-check-circle"></i>
            <i class = "fas fa-check-circle"></i>
            <small>Error message</small>
            </div>
            <br>
            <div class = "form-control">
                No. of Team Members
                <select id = "Noofteam" required="true">
                    <option value = "">Select</option>
                    <option value = "zero">0</option>
                    <option value = "one">1</option>
                    <option value = "two">2</option>
                    <option value = "three">3</option>
                </select>
            </div>
            <!--<label for "sub">Enter Submit</label>
            <input type= "submit" />-->
            <div class = "form-control1" >
                <div id = "teamno">
                    <label for = "phone"><span class = "mandatory">*</span></label>
                    <input type = "text" value = "" placeholder="Name" name="memberonename"><br>
                    <label for = "phone"><span class = "mandatory">*</span></label>
                    <input type = "number" value = " " placeholder = "Phone Number" name="memberonephn"><br>
                    <label for = "phone"><span class = "mandatory">*</span></label>
                    <input type = "email" value = " " placeholder = "xyz@gmail.com" name="memberoneemail"><br>
                </div>
            </div>
            <div class = "form-control2" >
                <div id = "teamno">
                    <label for = "phone"><span class = "mandatory">*</span></label>
                    <input type = "text" value = "" placeholder="Name" name="membertwoname"><br>
                    <label for = "phone"><span class = "mandatory">*</span></label>
                    <input type = "number" value = " " placeholder = "Phone Number" name="membertwophn"><br>
                    <label for = "phone"><span class = "mandatory">*</span></label>
                    <input type = "email" value = " " placeholder = "xyz@gmail.com" name="membertwoemail"><br>
                </div>
                <div id = "teamno">
                    <label for = "phone"><span class = "mandatory">*</span></label>
                    <input type = "text" value = "" placeholder="Name"><br>
                    <label for = "phone"><span class = "mandatory">*</span></label>
                    <input type = "number" value = " " placeholder = "Phone Number"><br>
                    <label for = "phone"><span class = "mandatory">*</span></label>
                    <input type = "email" value = " " placeholder = "xyz@gmail.com"><br>
                </div>
            </div>
            <!--<div class = "form-control3">
                <div id = "team">
                    <input type = "text" value = "" placeholder="Name">
                    <input type = "number" value = " " placeholder = "Phone Number">
                    <input type = "email" value = " " placeholder = "xyz@gmail.com">
                </div>
                <div id = "team">
                    <input type = "text" value = "" placeholder="Name">
                    <input type = "number" value = " " placeholder = "Phone Number">
                    <input type = "email" value = " " placeholder = "xyz@gmail.com">
                </div>
                <div id = "team">
                    <input type = "text" value = "" placeholder="Name">
                    <input type = "number" value = " " placeholder = "Phone Number">
                    <input type = "email" value = " " placeholder = "xyz@gmail.com">
                </div>
            </div>-->
            <div class = "footer">
            <button type="submit">submit</button>
            </div>
            <div class='light x1'></div>
            <div class='light x2'></div> 
             <div class='light x3'></div>
            <div class='light x4'></div> 
            <div class='light x5'></div>
            <div class='light x6'></div>
            <div class='light x7'></div>
            <div class='light x8'></div>
            <div class='light x9'></div>
            </form>
        </div>
        
        <script src = "indexsps.js" ></script>
        <!--<script src = "indexjsss.js" ></script>-->
    </body>
</html>