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
                <th scope="col">Tên chuyên đề</th>
                <!-- <th scope="col">số lượng câu hỏi</th> -->
                
                <th scope="col"></th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                  foreach($listchuyende as $cd){
                    extract($cd);
                    $suacd="index.php?act=suacd&idcd=".$id;
                    $deletechuyende = "index.php?act=deletechuyende&idcd=".$id;
                ?>
                <th scope="row"><?=$id?></th>
                <td><?=$tenchuyende?></td>
                <!-- <td>75</td> -->
              
                <td><a href="<?=$suacd ?>"><input type="button" value="Sửa"></a>   
                <td><a href="<?=$deletechuyende?>"><input type="button" onclick="return confirm('ban co muon xoa khong')" value="Xóa"></a>
                <?php
                  }
                ?>
              </tr>

            </tbody>
          </table>
<br>
     <button><a href="index.php?act=addchuyende">Thêm chuyên đề</a></button>