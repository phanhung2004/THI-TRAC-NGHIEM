<?php
    function loadall_dapan(){
        $sql="SELECT * FROM `dapan` INNER JOIN `cauhoi` ON dapan.id_cauhoi = cauhoi.id ";
        $listdapan=pdo_query($sql);
        return $listdapan;
    }
    function insert_dapan($id,$dapan, $type, $dapan2, $type2, $dapan3, $type3, $dapan4, $type4){
        $sql = "INSERT INTO `dapan` (`dapan`, `type`, `id_cauhoi`) VALUES ('$dapan', '$type', '$id'), ('$dapan2', '$type2', '$id'), ('$dapan3', '$type3', '$id'), ('$dapan4', '$type4', '$id')";
        pdo_execute($sql);
    }

?>