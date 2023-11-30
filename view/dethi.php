<?php
    include "header.php";
?>
<div class="contens">
          <h2>Bộ Đề Thi</h2>
        </div>
        <main class="catalog mb">
            <div class="items">
            <?php
              foreach($listdethi as $dt){
                extract($dt);
                $link = "index.php?act=viewthi";
            ?>
                <div class="box_items">
                  <div class="box_items_img">
                      <img src="img/sp1.jpg" alt="" style="width: 200px;">
                      <div class="add" href="">Số Câu: <?=$socau?></div>
                  </div>
                    <a class="item_name" href="<?=$link?>">Vào Thi Ngay</a>
                    <p class="chuyende">Bộ đề thi: <?=$bodethi?></p>
                </div>
                <?php
                }
                ?>
              </div>

        </main>

        <!-- //phan trang -->
        <div class="trang">
          <ul>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
          </ul>
        </div>