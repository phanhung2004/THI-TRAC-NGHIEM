<?php
    session_start();
    include "model/pdo.php";

    $act=$_GET['act'] ?? "";
        switch($act){
            case "login":
                include "view/login.php";
                break;
            case "home":
                include "view/home.php";
                break;
            case "dethi":
                include "view/dethi.php";
                break;
            default:
            $view= "404";
        }


    include "view/footer.php";

?>