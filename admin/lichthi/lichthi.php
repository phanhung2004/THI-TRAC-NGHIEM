<br>
        <br>
        <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
          </div>
          <br>
          <br>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Kỳ thi</th>
                <th scope="col">Thời gian bắt đầu</th>
                <th scope="col">Thời gian kết thúc</th>
                <th scope="col">Thời gian thi</th>
                
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                  foreach($listlichthi as $lt){
                    extract($lt);
                    $editlichthi="index.php?act=editlichthi&idlt=".$id;
                    $deletelichthi = "index.php?act=deletelichthi&idlt=".$id;
                ?>
                <th scope="row"><?=$id?></th>
                <td><?=$tenkithi?></td>
                <td><?=$batdau?></td>
                <td><?=$ketthuc?></td>
                <td><?=$thoigianthi?></td>        
                <td><a href="<?=$editlichthi?>"><input type="button" value="Sửa"></a>   
                <td><a href="<?=$deletelichthi?>"><input type="button" onclick="return confirm('Bạn có muốn xóa không?')" value="Xóa"></a>
                <?php
                }
                ?>
              </tr>

            </tbody>
          </table>
<br>
    <a href="index.php?act=addlichthi"><input type="button" value="Thêm lịch thi"></a>

