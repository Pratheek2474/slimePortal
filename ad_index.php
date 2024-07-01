<?php 
include 'database/database.php';
session_start();

$sql1 = "SELECT usertype FROM users WHERE roll='{$_SESSION['roll']}'";
$result = mysqli_query($conn,$sql1);
$type = mysqli_fetch_all($result,MYSQLI_ASSOC)[0]['usertype'];
if(!isset($_SESSION['roll']) || $type != 'admin'){
  header('Location: login.php');    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Admin Index</title>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top border-bottom border-dark border-2 rounded-bottom-5" style="font-size:21px; font-family:Arial, Helvetica, sans-serif; background-color:black">
    <div class="container-fluid">
        <a class="navbar-brand ms-auto" href="ad_index.php"><img src="images/hello.png" width="150" height="75"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mt-0 mb-lg-0">
            <li class="nav-item ms-4">
            <a class="nav-link active" aria-current="page" href="ad_index.php" style="color:aliceblue">Home</a>
            </li>
            <li class="nav-item ms-4">
            <a class="nav-link" href="addstd.php" aria-current="page" style="color:aliceblue">Register Student</a>
            </li>
            <li class="nav-item ms-4">
            <a class="nav-link" href="view_students.php" style="color:aliceblue">View Students</a>
            </li>
        </ul>
        <a class="d-flex ms-auto mx-5 btn btn-success" href="logout.php">
            Logout
        </a>
        </div>
    </div>
    </nav>
</body>
</html>
