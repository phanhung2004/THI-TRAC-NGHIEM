<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/trangchu.css">
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
                  <a class="navbar-brand" href="trangchu.html">Trang Chủ</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Chuyên Đề</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="dethi.html">Đề Thi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Tài Khoản</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                      </li>
                    </ul>
                    <form class="d-flex m-1" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <form class="d-flex m-1" role="login">
                        <button class="btn btn-outline-success" type="submit"><a href="index.php?act=register">Register</a></button>
                    </form>
                    <form class="d-flex m-1" role="sigin">
                        <button class="btn btn-outline-success" type="submit"><a href="include.php?act=login">Login</a></button>
                    </form>
                  </div>
                </div>
              </nav>
        </div>

        <!-- end header  -->
        <div>
              <h1>Login</h1>
              <?php
                if(isset($_SESSION['username'])){
                  extract($_SESSION['username']);
              ?>
                <p>Xin chào <?=$username?></p>
                <button type="button" class="btn btn-danger"><a href="index.php?act=logout">Đăng xuất</a></button>
                <?php
                  if($quyen==0){
                ?>
                  <button><a href="admin/index.php">Quản trị viên</a></button>
                <?php
                  }
                ?>
                <button><a href="index.php?act=edittk">Cập nhật tài khoản</a></button>
              <?php
                }else{
              ?>
              <div class="login">
              <form action="" method="POST">
                <span>Nhập Tên người dùng</span>
                <input type="text" name="username" ><br>
                <span>Nhập mật khẩu</span>
                <input type="password" name="password" ><br>

                <input type="submit" name="login" value="Login">
              </form>
              <div class="title-item">
                <img src="img/sp2.jpg" alt="">
                <img src="img/sp3.jpg" alt="">
              </div>
              <?php
                }
              ?>

              <?php
                if(isset($dangnhap) && ($dangnhap!= "")){
                  echo $dangnhap;
                }
              ?>
            </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>