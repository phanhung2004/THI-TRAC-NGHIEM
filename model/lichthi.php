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

    function load_one_lichthi($id){
        $sql="SELECT * FROM lichthi where id =$id";
        $result = pdo_query_one($sql);
        return $result;
    }

    function update_lichthi($id, $tenkithi, $batdau, $ketthuc, $thoigianthi, $sodethi){
        $sql="UPDATE `lichthi` SET `tenkithi` = {'$tenkithi}', `batdau` = '{$batdau}', `ketthuc` = '{$ketthuc}', `thoigianthi` = '{$thoigianthi}', `sodethi` = '{$sodethi}' WHERE `lichthi`.`id` = '{$id}'";
        pdo_execute($sql);
    }
?>