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
                <th scope="col">Đáp án câu</th>
                <th scope="col">câu hỏi</th>
                <th scope="col">đáp án</th>
                <!-- <th scope="col">chuyên đề</th> -->
                <th scope="col">Câu đúng(y-1:n-0)</th>
                
                <th scope="col">trạng thái</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php
                $previousContent = '';
                $displayedQuestions = []; // Mảng lưu trữ các câu hỏi đã được hiển thị
                foreach($listdapan as $da){
                  extract($da);
                  if(!in_array($id_cauhoi, $displayedQuestions)){ // Kiểm tra xem câu hỏi đã được hiển thị chưa
              ?>
                  <tr>
                    <th scope="row"><?= $id_cauhoi ?></th>
                    <td><a href="index.php?act=viewdapan"><?= $noidung ?></a></td>
                    <td><?= $dapan ?></td>
                    <td><?= $type ?></td>
                    <td><a href="http://">Sửa</a><a href="http://">Xóa</a></td>
                  </tr>
              <?php
                    $displayedQuestions[] = $id_cauhoi; // Thêm câu hỏi vào danh sách đã hiển thị
                  }
                }
              ?>
            </tbody>
          </table>
<br>
<button><a href="index.php?act=adddapan">Thêm đáp án</a></button>
