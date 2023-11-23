<?php
 include "header.php";
?>
<h5>Chọn Chuyên Đề</h5>
<main class="catalog mb">
          <div class="items">
          <?php
    foreach($listchuyende as $cd){
      extract($cd);
    
  ?>
              <div class="box_items">
                <div class="box_items_img">
                    <img src="img/sp1.jpg" alt="" style="width: 200px;">
                    <div class="add" href=""><?=$tenchuyende?></div>
                </div>
                  <a class="item_name" href="">Vào Thi</a>
                  <!-- <p class="chuyende">Chuyên Đề</p> -->

              </div>
              <?php
    }
            ?>
            </div>
      </main>