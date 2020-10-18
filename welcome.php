<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
require_once "config.php";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; background-image : url('SE1.jpg');
            background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover; }
    </style>
</head>
<body>
    
    <center>
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>! Welcome to cultural club admin page.</h1>
    </center></div>

    <p>

    <div class="container">

        <div class="btn-group" style="float:right;">
        <a href="reset.php" class="btn btn-warning" >Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger" >Sign Out of Your Account</a>
        </div>

        <div class="btn-group" style="float:right;">
        <button type="button" class="btn btn-success">VIEW</button>
        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
        <li><a href="viewevents.php" >Events</a></li>
        <li><a href="members.php" >Members</a></li>
        <li><a href="mentors.php" >Mentor details</a></li>
        <li><a href="viewach.php" >Achievements</a></li>
        <li><a href="viewsugg.php" >Suggestions</a></li>
        <li><a href="viewcomp.php" >Complaints</a></li>
        </ul>
        </div>


        <div class="btn-group" style="float:right;">
        <button type="button" class="btn btn-primary">ADD</button>
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
        <li><a href="addevents.php">Events</a></li>
        <li><a href="addachievements.php">Achievements</a></li>
        </ul>
        </div>

        

    </p>

</body>
</html>
