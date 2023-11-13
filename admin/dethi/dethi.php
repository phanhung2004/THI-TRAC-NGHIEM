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
                <th scope="col">So cau</th>
                <th scope="col">bo de thi</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $stt=0;
                  foreach($listdethi as $dt){
                    extract($dt);
                    $stt+=1;
                    $deletedethi="index.php?act=deletedethi&iddt=".$id;
            
                ?>
                <th scope="row"><?=$stt?></th>
                <td><?=$socau?></td>
                <td><?=$bodethi?></td>
                <td><a href="$suasp"><input type="button" value="Sửa"></a>   
                <td><a href="<?=$deletedethi?>"><input type="button" onclick="return confirm('ban co muon xoa khong')" value="Xóa"></a>
                <?php
                  }
                ?>
              </tr>

            </tbody>
          </table>
<br>
     <button>Thêm</button>