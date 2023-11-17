<?php
include "header.php";
include "../model/chuyende.php";
include "../model/pdo.php";
include "../model/cauhoi.php";
include "../model/thanhvien.php";
include "../model/dethi.php";
include "../model/lichthi.php";
include "../model/dapan.php";

if (isset($_GET['act']) && ($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
        case "viewdapan":
            $listdapan =viewdapan($_GET['idch']);
            include "cautraloi/viewdapan.php";
            break;
        case "adddapan":
            if(isset($_POST['adddapan']) && ($_POST['adddapan'])){
                $id=$_POST['id'];
                $dapan=$_POST['dapan'];
                $type=$_POST['type'];
                $dapan2=$_POST['dapan2'];
                $type2=$_POST['type2'];
                $dapan3=$_POST['dapan3'];
                $type3=$_POST['type3'];
                $dapan4=$_POST['dapan4'];
                $type4=$_POST['type4'];
                echo $id;
                insert_dapan($id,$dapan, $type, $dapan2, $type2, $dapan3, $type3, $dapan4, $type4);

            }
            $listdapan =loadall_dapan();
            $listcauhoi = load_all_cauhoi();
            include "cautraloi/adddapan.php";
            break;
        case "dapan":
            $listdapan = loadall_dapan();
            include "cautraloi/cautraloi.php";
            break;
        case "deletelichthi":
            if(isset($_GET['idlt']) && ($_GET['idlt']>0)){
                delete_lichthi($_GET['idlt']);
                // echo "haha";
            }
            $listlichthi=loadall_lichthi();
            include "lichthi/lichthi.php";
            break;
        case "lichthi":
            $listlichthi=loadall_lichthi();
            include "lichthi/lichthi.php";
            break;
        case "deletedethi":
            if(isset($_GET['iddt']) && ($_GET['iddt']>0)){
                delete_dethi($_GET['iddt']);
                // echo "haha";
            }
            $listdethi=loadall_dethi();
            include "dethi/dethi.php";
            break;
        case "dethi":
            $listdethi=loadall_dethi();
            include "dethi/dethi.php";
            break;
        case "addcauhoi":
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $idcd=$_POST['idcd'];
                $noidung=$_POST['noidung'];
                $caudung=$_POST['caudung'];
                insert_cauhoi($idcd, $noidung, $caudung);
            }
            $listchuyende=load_all_chuyende();
            include "./cauhoi/addcauhoi.php";

            break;
        case "deletecauhoi":
            if(isset($_GET['idch']) && ($_GET['idch']>0)){
                deletecauhoi($_GET['idch']);
            }
            $listcauhoi=load_all_cauhoi();
            include "cauhoi/cauhoi.php";
            break;
        case"cauhoi":
            $listcauhoi=load_all_cauhoi();
            include "cauhoi/cauhoi.php";
            break;
        case"cautraloi":
            include "cautraloi/cautraloi.php";
            break;
            
        case "deletechuyende":
            if(isset($_GET['idcd']) && ($_GET['idcd']>0)){
                delete($_GET['idcd']);
            }
            $listchuyende=load_all_chuyende();
            include "chuyende/chuyende.php";
            break;
        case "addchuyende":
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenchuyende=$_POST['tenchuyende'];
                insert_chuyende($tenchuyende);

            }
            include "chuyende/addchuyende.php";
            break;
        case"suacd":
            if(isset($_GET['idcd']) && ($_GET['idcd'] > 0 )){
                $suacd=load_one_chuyende($_GET['idcd']);
            }
            include "chuyende/editcd.php";
            break; 
        // case "suacd":
        //     if(isset($_GET['idcd']) && ($_GET['idcd'] > 0) ){
        //         $suacd=load_one_chuyende($_GET['idcd']);
        //     }
        //     include "chuyende/editcd.php";
        //     break; 
        case "updatecd":
            if(isset($_POST['capnhatcd']) && ($_POST['capnhatcd'])){
                $id=$_POST['id'];
                $tenchuyende=$_POST['tencd'];

                updatecd($id, $tenchuyende);
                header("locaiton: index.php?act=chuyende");
            }
            include "chuyende/editcd.php";
            break;
        case"chuyende":
            $listchuyende=load_all_chuyende();
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

        case "addnguoidung":
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $username=$_POST['username'];
                $password=$_POST['password'];
                $diachi=$_POST['diachi'];
                $sodienthoai=$_POST['sodienthoai'];
                $quyen=$_POST['quyen'];
                insert_nguoidung($username, $password, $diachi, $sodienthoai, $quyen);
    
            }
            include "./thanhvien/addnguoidung.php";
            break;
        case "suanguoidung":
            if(isset($_GET['idnd']) && ($_GET['idnd'] > 0) ){
                    $taikhoan=load_one_nguoidung($_GET['idnd']);
            }
            include "thanhvien/updatenguoidung.php";
            break;
        case "updatend":
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $id=$_POST['id'];
                $username=$_POST['username'];
                $password=$_POST['password'];
                $hinhanh=$_POST['hinhanh'];
                $diachi=$_POST['diachi'];
                $sodienthoai=$_POST['sodienthoai'];
                $quyen=$_POST['quyen'];

                update_nguoidung($id,$username, $password, $hinhanh, $diachi, $sodienthoai, $quyen);
                header("locaiton: index.php?act=thanhvien");
            }
            include "thanhvien/updatenguoidung.php";
            break;
        case "xoanguoidung":
            if(isset($_GET['idnd']) && ($_GET['idnd']>0)){
                delete_nguoidung($_GET['idnd']);
            }
            $listnguoidung=load_all_nguoidung();
            include "thanhvien/thanhvien.php";
            break;
        case"thanhvien":
            $listnguoidung=load_all_nguoidung();
            include "thanhvien/thanhvien.php";
            break;   
    }
}else{
    include "admin.php";
}
include "footer.php";
?>