<?php
    function load_all_cauhoi(){
        $sql="select * from cauhoi join chuyende on chuyende.id = cauhoi.id_chuyende";
        $listcauhoi=pdo_query($sql);
        return $listcauhoi;
    }
    function deletecauhoi($id) {
        $sql = "DELETE FROM cauhoi WHERE `cauhoi`.`id` = '{$id}'";
        pdo_execute($sql);
    }
    function insert_cauhoi($idcd, $noidung, $caudung){
        $sql = "INSERT INTO `cauhoi` (`noidung`, `caudung`, `id_chuyende`) VALUES ('$noidung', '$caudung','$idcd');";
        pdo_execute($sql);
    }
?>