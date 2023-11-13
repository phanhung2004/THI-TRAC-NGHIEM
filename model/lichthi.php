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
?>