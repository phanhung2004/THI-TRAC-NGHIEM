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
                <th scope="col">Số điện thoại</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                  foreach($listnguoidung as $nd){
                    extract($nd);
                    $delete_nguoidung = "index.php?act=deletenguoidung&idnd=".$id;
                ?>
                <th scope="row"><?=$id?></th>
                <td><?=$username?></td>
                <td><?=$sodienthoai?></td>
                <td><?=$password?></td>
                <td><a href=""><input type="button" value="Sửa"></a>   
                <td><a href="<?=$delete_nguoidung?>"><input type="button" onclick="return confirm('Bạn có muốn xóa không?')" value="Xóa"></a>
              </tr>
              <?php
                  }
              ?>
              <!-- <tr>
                <th scope="row">1</th>
                <td>b</td>
                <td>@mdàdsfsdef</td>
                <td>học sinh</td>
                <td><a href="http://">sua</a><a href="http://">xoa</a></td>
              </tr> 
              <tr>
                <th scope="row">1</th>
                <td>c</td>
                <td>@mddsfseo</td>
                <td>admin</td>
                <td><a href="http://">sua</a><a href="http://">xoa</a></td>
              </tr> -->
            </tbody>
          </table>
<br>
<button><a href="index.php?act=addnguoidung">Thêm người dùng</a></button>