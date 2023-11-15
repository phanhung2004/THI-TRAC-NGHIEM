<?php
    function load_all_nguoidung(){
        $sql="select * from nguoidung";
        $listnguoidung=pdo_query($sql);
        return $listnguoidung;
    }
    function insert_nguoidung($username, $password, $diachi, $sodienthoai, $quyen){
        $sql = "INSERT INTO `nguoidung` (`username`, `password`, `diachi`, `sodienthoai`, `quyen`) VALUES ('$username', '$password','$diachi', '$sodienthoai', '$quyen');";
        pdo_execute($sql);
    }
    function update_nguoidung($username, $password, $hinhanh, $diachi, $sodienthoai, $quyen){
        $sql="UPDATE `nguoidung` SET `username` = '{$username}', `password` = '{$password}', `hinhanh` = '{$hinhanh}', `diachi` = '{$diachi}', `sodienthoai` = '{$sodienthoai}', `quyen` = '{$quyen}' WHERE `nguoidung`.`id` = $id";
        pdo_execute($sql);
    }
    function delete_nguoidung($id) {
        $sql = "DELETE FROM nguoidung WHERE `nguoidung`.`id` = '{$id}'";
        pdo_execute($sql);
    }
?>