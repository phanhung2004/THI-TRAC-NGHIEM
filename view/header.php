<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="stylesheet" href="js/main.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="img/logothi.jpg" alt="">
            </div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php?act=home">Trang Chủ</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Chuyên Đề</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?act=dethi">Đề Thi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Tài Khoản</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Đáp Án</a>
                      </li>
                    </ul>
                    <form class="d-flex m-1" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <form class="d-flex m-1" role="login">
                        <button class="btn btn-outline-success" type="submit"><a style="text-decoration: none;" href="register.html">Register</a></button>
                    </form>
                    <form class="d-flex m-1" role="sigin">
                        <button class="btn btn-outline-success" type="submit"><a style="text-decoration: none;" href="index.php?act=login">Login</a></button>
                    </form>
                  </div>
                </div>
              </nav>
        </div>
        <!-- //banner  -->
        <div id="carouselExampleIndicators" class="carousel slide slide-show">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/banner.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/banner1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/banner2.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>