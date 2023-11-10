
<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI LOẠI THANH VIEN</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addnguoidung" method="POST" enctype="multipart/form-data">

           <div class="row2 mb10 form_content_container">
           <label> Ten </label> <br>
            <input type="text" name="username" placeholder="nhập vào tên nguoi dung">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> mat khau </label> <br>
            <input type="text" name="password" placeholder="nhập vào mat khua">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> dia chi </label> <br>
            <input type="text" name="diachi" placeholder="nhập vào tên dia chi">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> sdt </label> <br>
            <input type="text" name="sodienthoai" placeholder="nhập vào sdt">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> quyen </label> <br>
            <input type="text" name="quyen" placeholder="nhập vào quyen">
           </div>

           <div class="row mb10 ">
         <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=thanhvien"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
          </form>
         </div>
        </div>