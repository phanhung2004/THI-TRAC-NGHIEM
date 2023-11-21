<?php
    if(is_array($suacd)){
        extract($suacd);
    }
  
?>
<div class="row2">
         <div class="row2 font_title">
          <h1>Cập nhật chuyên đề</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatecd" method="POST" enctype="multipart/form-data">

           <div class="row2 mb10 form_content_container">
           <label> Tên chuyên đề</label> <br>
            <input type="text" name="tencd"  placeholder="Nhập vào tên chuyên đề" value="<?=$tenchuyende?>">
           </div>
           <div class="row mb10 ">
           <input type="hidden" name="id" value="<?=$id?>">
         <input class="mr20" name="capnhatcd" type="submit" value="CẬP NHẬT">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=chuyende"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
          </form>
         </div>
        </div>