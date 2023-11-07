<?php
    session_start();
    include "model/pdo.php";

    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
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