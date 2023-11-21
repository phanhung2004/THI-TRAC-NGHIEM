<?php
    function load_all_nguoidung(){
        $sql="select * from nguoidung";
        $listnguoidung=pdo_query($sql);
        return $listnguoidung;
    }
    function load_one_nguoidung($id){
        $sql = "select * from nguoidung where `id` = $id";
        $result = pdo_query_one($sql);
        return $result;
    }
    function insert_nguoidung($username, $password, $diachi, $sodienthoai, $quyen){
        $sql = "INSERT INTO `nguoidung` (`username`, `password`, `diachi`, `sodienthoai`, `quyen`) VALUES ('$username', '$password','$diachi', '$sodienthoai', '$quyen');";
        pdo_execute($sql);
    }
    function update_nguoidung($id, $username, $password, $hinhanh, $diachi, $sodienthoai, $quyen){
        $sql="UPDATE `nguoidung` SET `username` = '{$username}', `password` = '{$password}', `hinhanh` = '{$hinhanh}', `diachi` = '{$diachi}', `sodienthoai` = '{$sodienthoai}', `quyen` = '{$quyen}' WHERE `nguoidung`.`id` = '{$id}'";
        pdo_execute($sql);
    }
    function delete_nguoidung($id) {
        $sql = "DELETE FROM nguoidung WHERE `nguoidung`.`id` = '{$id}'";
        pdo_execute($sql);
    }

    function check_user($username, $password){
        $sql="SELECT * FROM nguoidung where `username`='$username' and `password`='$password'";
        $nguoidung=pdo_query_one($sql);
        return $nguoidung;
    }
?>