<?php
    if(is_array($suadethi)){
        extract($suadethi);
    }
  
?>
<div class="row2">
         <div class="row2 font_title">
          <h1>Cập nhật đề thi</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatedethi" method="POST" enctype="multipart/form-data">

           <div class="row2 mb10 form_content_container">
           <label> Cập nhật số câu </label> <br>
            <input type="text" name="socau" placeholder="Cập nhập vào sô câu" value="<?=$socau?>">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Cập nhật bộ đề thi </label> <br>
            <input type="text" name="bodethi" placeholder="Cập nhập vào bộ đề thi" value="<?=$bodethi?>">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Cập nhật Id_lichthi </label> <br>
            <input type="text" name="id_lichthi" placeholder="Cập nhập vào id_lichthi" value="<?=$id_lichthi?>">
           </div>

           <div class="row mb10 ">
            <input type="hiden" name="id" value="<?=$id?>">
         <input class="mr20" name="editdethi" type="submit" value="Cập nhật đề thi">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=dethi"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
          </form>
         </div>
        </div>