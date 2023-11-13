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

?>