<?php
    include "header.php";
?>

<main class="catalog mb">
          <div class="items">
          <?php
    foreach($listlichthi as $lt){
      extract($lt);
    
  ?>
              <div class="box_items">
                <div class="box_items_img">
                    <img src="img/sp1.jpg" alt="" style="width: 200px;">
                    <div class="add" href=""><?=$tenkithi?></div>
                </div>
                  <a class="item_name" href="">Vào Thi</a>
                  <!-- <p class="chuyende">Chuyên Đề</p> -->
                  <ul>
                    <li>Số lượng đề thi:<?=$sodethi?> </li>
                    <li>Thơi gian làm bài: <?=$batdau?></li>
                    <li>Thơi gian kết thúc: <?=$ketthuc?></li>
                  </ul>
              </div>
              <?php
    }
            ?>
            </div>

      </main>