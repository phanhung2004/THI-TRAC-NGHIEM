<br>
        <br>
        <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">Search</button>
          </div>
          <br>
          <br>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Số thứ tự</th>
                <th scope="col">Tên</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Quyen</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                  foreach($listnguoidung as $nd){
                    extract($nd);
                    $suanguoidung="index.php?act=suanguoidung&idnd=".$id;
                    $xoanguoidung = "index.php?act=xoanguoidung&idnd=".$id;
                ?>
                <th scope="row"><?=$id?></th>
                <td><?=$username?></td>
                <td><?=$password?></td>
                <td><?=$hinhanh?></td>
                <td><?=$diachi?></td>
                <td><?=$sodienthoai?></td>
                <td><?=$quyen?></td>
                <td><a href="<?=$suanguoidung?>"><input type="button" value="Sửa"></a>   
                <td><a href="<?=$xoanguoidung?>"><input type="button" onclick="return confirm('Bạn có muốn xóa không?')" value="Xóa"></a>
              </tr>
              <?php
                  }
              ?>
            </tbody>
          </table>
<br>
<button><a href="index.php?act=addnguoidung">Thêm người dùng</a></button>