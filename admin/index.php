<?php
include "header.php";

if (isset($_GET['act']) && ($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
        case"cauhoi":
            include "cauhoi/cauhoi.php";
            break;
        case"cautraloi":
            include "cautraloi/cautraloi.php";
            break;
        case"chuyende":
            include "chuyende/chuyende.php";
            break;
        case"dethi":
            include "dethi/dethi.php";
            break;
        case"ketqua":
            include "ketqua/ketqua.php";
            break;
        case"lichthi":
            include "lichthi/lichthi.php";
            break;
        case"thanhvien":
            include "thanhvien/thanhvien.php";
            break;   
        case"suacd":
            $title = "cap nhat chuyen de";
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $chuyende = load_one_chuyende($id);
                include "chuyende/edit.php";
            }
            break; 
    }
}else{
    include "admin.php";
}
include "footer.php";
?>