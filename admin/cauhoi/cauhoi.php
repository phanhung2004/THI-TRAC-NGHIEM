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
                <th scope="col">câu hỏi</th>
                <th scope="col">chuyên đề</th>
                <th scope="col">tác giả</th>
                
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            <?php
                  foreach($listcauhoi as $ch){
                    extract($ch);
                    $deletecauhoi = "index.php?act=deletecauhoi&idch=".$id;

                ?>
              <tr>
                <th scope="row"><?=$id?></th>
                <td><a href="index.php?act=dapan"><?=$noidung?></a></td><br>
                <td><?=$tenchuyende?></td>
                <td>adimn a</td>
              
                <td><a href=""><input type="button" value="Sửa"></a>   
              </tr>
              <?php
                  }
                ?>
              <!-- <tr>
                <th scope="row">1</th>
                <td>đây là gì</td>
                <td>abc</td>
                <td>adimn a</td>
              
                <td><a href="http://">sua</a><a href="http://">xoa</a></td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>đây là gì</td>
                <td>abc</td>
                <td>adimn a</td>
              
                <td><a href="http://">sua</a><a href="http://">xoa</a></td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>đây là gì</td>
                <td>abc</td>
                <td>adimn a</td>
              
                <td><a href="http://">sua</a><a href="http://">xoa</a></td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>đây là gì</td>
                <td>abc</td>
                <td>adimn a</td>
              
                <td><a href="http://">sua</a><a href="http://">xoa</a></td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>đây là gì</td>
                <td>abc</td>
                <td>adimn a</td>
              
                <td><a href="http://">sua</a><a href="http://">xoa</a></td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>đây là gì</td>
                <td>abc</td>
                <td>adimn a</td>
              
                <td><a href="http://">sua</a><a href="http://">xoa</a></td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>đây là gì</td>
                <td>abc</td>
                <td>adimn a</td>
              
                <td><a href="http://">sua</a><a href="http://">xoa</a></td>
              </tr> -->
            </tbody>
          </table>
<br>
<button><a href="index.php?act=addcauhoi">Thêm câu hỏi</a></button>
