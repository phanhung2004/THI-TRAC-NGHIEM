<?php
    function loadall_dethi(){
        $sql="SELECT * FROM `dethi`";
        $listdethi=pdo_query($sql);
        return $listdethi;
    }
    function delete_dethi($id) {
        $sql = "DELETE FROM `dethi` WHERE `dethi`.`id` = '{$id}'";
        pdo_execute($sql);
    }

    function add_dethi($socau, $bodethi, $id_lichthi){
        $sql="INSERT INTO `dethi` (`socau`, `bodethi`, `id_lichthi`) VALUES ('{$socau}', '{$bodethi}', '{$id_lichthi}')";
        pdo_execute($sql);
    }

    function load_one_dethi($id){
        $sql = "select * from dethi where `id` = $id";
        $result = pdo_query_one($sql);
        return $result;
    }

    function update_dethi($id, $socau, $bodethi, $id_lichthi){
        $sql="UPDATE `dethi` SET `socau` = '$socau', `bodethi` = '$bodethi', `id_lichthi` = '$id_lichthi' WHERE `dethi`.`id` = $id";
        pdo_execute($sql);
    }
?>