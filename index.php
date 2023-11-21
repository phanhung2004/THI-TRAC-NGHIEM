<?php
    session_start();
    include "model/pdo.php";
    include "model/lichthi.php";
    include "model/thanhvien.php";

$lichthi=loadall_lichthi();

    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "login":
                if(isset($_POST['login']) && ($_POST['login'])){
                    $username =$_POST['username'];
                    $password=$_POST['password'];
                    $checkuser=check_user($username, $password);
                    if(is_array($checkuser)){
                        $_SESSION['username']=$checkuser;
                        // header("location: index.php");
                    }else{
                        $thongbao="Tài khoản không tồn tại";
                    }
                }
                include "view/taikhoan/login.php";
                break;
            case "register":
                if(isset($_POST['register']) && ($_POST['register'])){
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $hinhanh=$_POST['hinhanh'];
                    $diachi=$_POST['sodienthoai'];
                    $sodienthoai=$_POST['sodienthoai'];

                    insert_nguoidung($username, $password, $hinhanh, $diachi, $sodienthoai);
                }
                include "view/taikhoan/register.php";
                break;
            case "login":
                include "view/login.php";
                break;
            case "dethi":
                include "dethi.html";
                break;
            case "home":
                include "view/home.php";
                break;
            case "register":
                include "register.html";
                break;
            case "login":
                include "login.html";
                break;
            case "home":
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }

    include "view/footer.php";
?>