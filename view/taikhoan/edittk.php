<main>
    <div>
        <div>Cập nhật tài khoản</div>
        <div>
            <?php
                if(isset($_SESSION['username']) && (is_array($_SESSION['username']))){
                    extract($_SESSION['username']);
                }
            ?>

            <form action="index.php?act=edittk" medthod="POST">
                
                <div>
                    <p>Tên đăng nhập</p>
                    <input type="text" name="username" value=<?=$username?>>
                </div>

                <div>
                    <p>Mật khẩu đăng nhập</p>
                    <input type="text" name="password" value=<?=$password?>>
                </div>

                <div>
                    <p>Hình ảnh</p>
                    <input type="text" name="hinhanh" value=<?=$hinhanh?>>
                </div>

                <div>
                    <p>Địa chỉ</p>
                    <input type="text" name="diachi" value=<?=$diachi?>>
                </div>

                <div>
                    <p>Số điện thoại</p>
                    <input type="text" name="sodienthoai" value=<?=$sodienthoai?>>
                </div>

                <div>
                    <input type="hidden" name="id" value<?=$id?>>
                    <input type="submit" name="capnhat"value="Cập nhật tài khoản">
                    <input type="reset" value="Nhập lại">
                </div>
            </form>
            <?php
                if(isset($capnhat) && ($capnhat!= "")){
                    echo $capnhat;
                }
            ?>
        </div>
    </div>
</main>