<?php
    include "header.php";
?>
<div class="contens">
          <h2>Đề Thi</h2>
        </div>
        <main class="catalog mb">
            <div class="items">
              <?php
                foreach($lichthi as $lt){
                  extract($lt);
                  $link="index.php?act=dethi&idlt=".$id;
              ?>
                <div class="box_items">
                  <div class="box_items_img">
                      <img src="img/sp1.jpg" alt="" style="width: 200px;">
                      <div class="add" href=""><?=$tenkithi?></div>
                  </div>
                    <a class="item_name" href="<?=$link?>">Vào Thi</a>
                    <p class="chuyende">Thoi gian thi:<?=$thoigianthi?></p>
                </div>
              <?php
                }
              ?>
                <!-- <div class="box_items">
                  <div class="box_items_img">
                      <img src="img/sp1.jpg" alt="" style="width: 200px;">
                      <div class="add" href="">Đề Thi</div>
                  </div>
                    <a class="item_name" href="">Vào Thi</a>
                    <p class="chuyende">Chuyên Đề</p>
                </div>
                <div class="box_items">
                  <div class="box_items_img">
                      <img src="img/sp1.jpg" alt="" style="width: 200px;">
                      <div class="add" href="">Đề Thi</div>
                  </div>
                    <a class="item_name" href="">Vào Thi</a>
                    <p class="chuyende">Chuyên Đề</p>
                </div>
                <div class="box_items">
                  <div class="box_items_img">
                      <img src="img/sp1.jpg" alt="" style="width: 200px;">
                      <div class="add" href="">Đề Thi</div>
                  </div>
                    <a class="item_name" href="">Vào Thi</a>
                    <p class="chuyende">Chuyên Đề</p>
                </div>
                <div class="box_items">
                  <div class="box_items_img">
                      <img src="img/sp1.jpg" alt="" style="width: 200px;">
                      <div class="add" href="">Đề Thi</div>
                  </div>
                    <a class="item_name" href="">Vào Thi</a>
                    <p class="chuyende">Chuyên Đề</p>
                </div>
                <div class="box_items">
                  <div class="box_items_img">
                      <img src="img/sp1.jpg" alt="" style="width: 200px;">
                      <div class="add" href="">Đề Thi</div>
                  </div>
                    <a class="item_name" href="">Vào Thi</a>
                    <p class="chuyende">Chuyên Đề</p>
                </div>
                <div class="box_items">
                  <div class="box_items_img">
                      <img src="img/sp1.jpg" alt="" style="width: 200px;">
                      <div class="add" href="">Đề Thi</div>
                  </div>
                    <a class="item_name" href="">Vào Thi</a>
                    <p class="chuyende">Chuyên Đề</p>
                </div>
                <div class="box_items">
                  <div class="box_items_img">
                      <img src="img/sp1.jpg" alt="" style="width: 200px;">
                      <div class="add" href="">Đề Thi</div>
                  </div>    
                    <a class="item_name" href="">Vào Thi</a>
                    <p class="chuyende">Chuyên Đề</p>
                </div>
                <div class="box_items">
                  <div class="box_items_img">
                      <img src="img/sp1.jpg" alt="" style="width: 200px;">
                      <div class="add" href="">Đề Thi</div>
                  </div>
                    <a class="item_name" href="">Vào Thi</a>
                    <p class="chuyende">Chuyên Đề</p>
                </div> -->
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
<?php

?>