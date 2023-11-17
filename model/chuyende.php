<?php
    function load_all_chuyende(){
        $sql="select * from chuyende where 1 order by id asc limit 0,9";
        $listchuyende=pdo_query($sql);
        return $listchuyende;
    }
    function insert_chuyende($tenchuyende){
        $sql = "INSERT INTO `chuyende` (`tenchuyende`) VALUES ('$tenchuyende');";
        pdo_execute($sql);
    }
    function delete($id) {
        $sql = "DELETE FROM chuyende WHERE `chuyende`.`id` = '{$id}'";
        pdo_execute($sql);
    }
    function updatecd($id){
        $sql="UPDATE `chuyende` SET `tenchuyende` = 'JavaScripts' WHERE `chuyende`.`id` = '{$id}'";
        pdo_execute($sql);
    }
    function load_one_chuyende($id){
        $sql = "select * from chuyende where `id` = $id";
        $result = pdo_query_one($sql);
        return $result;
    }
?>