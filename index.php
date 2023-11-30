<?php
    session_start();
    include "model/pdo.php";
    include "model/lichthi.php";
    include "model/thanhvien.php";
    include "model/chuyende.php";
    include "model/cauhoi.php";
    include "model/dethi.php";

$lichthi=loadall_lichthi();

    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            
            case "viewthi":
                $listthi = loadallcauhoi_dapan();
                // var_dump($listthi);
                foreach($listthi as $key=>$val){

                }
                // foreach($bodethi as $index=>$cauhoi){
                //     $bodethi[$index]['dapan'] =  [
                //         1 =>'Đáp án 1'  ,
                //         2 => "Đáp án 2",
                //         3 => "Đáp án 3"  ,
                //         4 => "Đáp án 4"
                        
                //     ];
                // }
                // //Chuyển sang chuỗi JSON
                // $bodethi = json_encode($bodethi);
                
                // var_dump($bodethi);
                
                
                // //chuyển lại bộ đề thi sang array
                // $bodethi = json_decode($bodethi, false);
                // var_dump($bodethi);
                include "view/viewthi.php";
                break;
            case "login":
                if(isset($_POST['login']) && ($_POST['login'])){
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $checkuser=checkuser($username, $password);
                    if(is_array($checkuser)){
                        $_SESSION['username']=$checkuser;
                        // header("location: index.php");
                        echo $dangnhap="Đăng nhập thành công";
                    }else{
                        echo $thongbao="Tài khoản không tồn tại";
                    }
                }
                include "view/taikhoan/login.php";
                break;
            case "logout":
                logout();
                echo $logout="Đã đăng xuất";
                include "trangchu.html";
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
            case "edittk":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $hinhanh=$_POST['hinhanh'];
                    $diachi=$_POST['diachi'];
                    $sodienthoai=$_POST['sodienthoai'];

                    update_nguoidung($id, $username, $password, $hinhanh, $diachi, $sodienthoai);
                    $capnhat="Cập nhật thành công";
                    $_SESSION['username']=checkuser($username, $password);
                }
                include "view/taikhoan/edittk.php";
                break;
            case "chonchuyende":
                $listchuyende=load_all_chuyende();
                include "view/chonchuyende.php";
                break;
            case "dethi":
                $listdethi = loadall_dethi();
                include "view/dethi.php";
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