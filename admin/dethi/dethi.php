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
                <th scope="col">Id_lichthi</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            <?php
                $stt=0;
                  foreach($listdethi as $dt){
                    extract($dt);
                    $stt+=1;
                    $suadethi="index.php?act=suadethi&iddt=".$id;
                    $deletedethi="index.php?act=deletedethi&iddt=".$id;
            
                ?>
              <tr>
                <th scope="row"><?=$stt?></th>
                <td><?=$socau?></td>
                <td><?=$bodethi?></td>
                <td><?=$id_lichthi?></td>
                <td><a href="<?=$suadethi?>"><input type="button" value="Sửa"></a>   
                <td><a href="<?=$deletedethi?>"><input type="button" onclick="return confirm('ban co muon xoa khong')" value="Xóa"></a>
              </tr>
              <?php
                  }
                ?>

            </tbody>
          </table>
<br>
     <a href="index.php?act=adddethi"><input type="button" name="" id="" value="Thêm đề thi"></a>