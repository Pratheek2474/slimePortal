<?php 
session_start();

if(!isset($_SESSION['roll'])){
    header('Location: login.php');    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Student: Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/slime-logo-vector.png" width="150" height="75"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            
            <a class="nav-link mx-1" aria-current="page" href="#"><h3>Home</h3></a>
            <a class="nav-link mx-1" aria-current="page" href="profile.php"><h3>Profile</h3></a>
            <a class="nav-link mx-1" aria-current="page" href="#"><h3>Payment Portal</h3></a>
            <a class="nav-link mx-1" aria-current="page" href="#"><h3></h3></a>
        </div>
        </div>
    </div>
    </nav>
    <main>
        <div class="container">
            <div class="row">
                <div id="news" class="carousel slide" >
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/slime-logo-vector.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/h3.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="images/hi1.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#news" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#news" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
            </div>
            <div class="row">

            </div>
        </div>
    </main>
    
</body>
</html>