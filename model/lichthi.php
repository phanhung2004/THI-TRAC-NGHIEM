<?php
    function loadall_lichthi(){
        $sql="SELECT * FROM `lichthi`";
        $listlichthi=pdo_query($sql);
        return $listlichthi;
    }
    function delete_lichthi($id) {
        $sql = "DELETE FROM `lichthi` WHERE `lichthi`.`id` = '{$id}'";
        pdo_execute($sql);
    }

    function add_lichthi($tenkithi, $batdau, $ketthuc, $thoigianthi, $sodethi){
        $sql="INSERT INTO `lichthi` (`tenkithi`, `batdau`, `ketthuc`, `thoigianthi`, `sodethi`) VALUES ('$tenkithi', '$batdau', '$ketthuc', '$thoigianthi', '$sodethi')";
        pdo_execute($sql);
    }
?>