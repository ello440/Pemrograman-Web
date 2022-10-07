<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login-page.php');
}
?>

<!DOCTYPE html>
<html>
    <head lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>E-Commerece Anglo</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(146, 212, 250);">
              <div class="container-fluid">
                
                <a class="navbar-brand" href="#">
                  <img src="img/LOGO3.png" width="70px" height="50px">
                  ANGLO (Angkringan Ello)</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Menu-Menu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Saya</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href='logout.php'>Logout</a>
                    </li>
                  </ul>
                  <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-2" type="search" placeholder="Cari Naon??" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Golek</button>
                  </form>
                </div>
              </div>
            </nav>
        </header>
<div><br></div>
        <div id="myCarousel" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="bd-placeholder-img" width="100%" height="100%" src="img/bg1.png"
                  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777"></rect></img>
    
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="img/bg2.jpg"
                  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777"></rect></img>
    
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="img/bg5.jpg"
                  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777"></rect></img>
    
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>

          </div>

          <script src="js/bootstrap.min.js"></script>
          <div><br></div>

        <div class="container">
            <div class="row" style="text-align-last: center;">
                <div class="col ">
                    <img src="img/mie2.jpg" height="100px" width="100px"><br>Mie Instan
                </div>
                <div class="col ">
                    <img src="img/magelangan.webp" height="100px" width="100px"><br>Magelangan
                </div>
                <div class="col ">
                    <img src="img/gorengan2.jpg" height="100px" width="100px"><br>Gorengan
                </div>
                <div class="col ">
                    <img src="img/gooday.jpg" height="100px" width="100px"><br>Es Gooday
                </div>
                
            </div>
        </div>
        <div class="container">
          <div class="row" style="text-align-last: center;">
            <div class="col ">
              <img src="img/french fries.webp" height="100px" width="100px"><br>French Fries
          </div>
          <div class="col ">
            <img src="img/dimsum.jpeg" height="100px" width="100px"><br>Dimsum
        </div>
        <div class="col ">
          <img src="img/esteh.webp" height="100px" width="100px"><br>Ice Tea
      </div>
            </div>
            </div>
            <div class="container px-4 px-lg-5 mt-5">
              <div class="row row-cols-1 row-cols-md-3 g-8">
                <div class="col">
                  <div class="card">
                    <img src="img/mie2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Indomie</h5>
                      <p class="card-text">Rp 5000 </p>
                      <p class="card-text">+telur + Rp 1.500 </p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="img/magelangan.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Magelangan</h5>
                      <p class="card-text">Rp 7000</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="img/gooday.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Es Gooday</h5>
                      <p class="card-text">Rp 3000</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="img/esteh.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Ice Tea</h5>
                      <p class="card-text">Rp 2.500</p>
                    </div>
                  </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                  <div class="col">
                    <div class="card">
                      <img src="img/french fries.webp" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">French Fries</h5>
                        <p class="card-text">Rp 8000</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/gorengan.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Aneka Gorengan</h5>
                        <p class="card-text">Rp 2000 = 3</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/dimsum.jpeg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Dimsum</h5>
                        <p class="card-text">Rp 15000 = 3</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </body>
</html>