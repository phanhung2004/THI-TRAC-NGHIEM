<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI LOẠI CÂU HỎI</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addcauhoi" method="POST" enctype="multipart/form-data">

          <div class="row2 mb10 form_content_container">
           <label> Tên chuyên đề </label> <br>
            <select name="idcd" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                        foreach($listchuyende as $cd){
                            extract($cd);
                            echo '<option value="'.$id.'">'.$tenchuyende.'</option>';
                        }
                    ?>
            </select>
           </div>
           <div class="row2 mb10 form_content_container">
           <label> Nội dung </label> <br>
            <input type="text" name="noidung" placeholder="Nhập vào tên nội dung">
           </div>
           <div class="row2 mb10 form_content_container">
           <label> Câu đúng </label> <br>
            <input type="text" name="caudung" placeholder="Nhập vào tên nội dung">
           </div>

           <div class="row mb10 ">
         <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=cauhoi"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
          </form>
         </div>
        </div>