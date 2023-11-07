<?php
    session_start();
    include "model/pdo.php";

    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "login":
                include "view/login.php";
                break;
            case "home":
                include "view/home.php";
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