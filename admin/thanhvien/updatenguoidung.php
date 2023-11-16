<div class="row2">
         <div class="row2 font_title">
          <h1>Cập nhật người dùng</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addnguoidung" method="POST" enctype="multipart/form-data">

           <div class="row2 mb10 form_content_container">
           <label> Tên </label> <br>
            <input type="text" name="username" placeholder="Nhập vào tên người dùng" value="<?=$username?>">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Mật khẩu </label> <br>
            <input type="text" name="password" placeholder="Nhập vào mật khẩu" value="<?=$password?>">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Hình ảnh </label> <br>
            <input type="text" name="hinhanh" placeholder="Nhập vào mật khẩu">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Địa chỉ </label> <br>
            <input type="text" name="diachi" placeholder="Nhập vào tên địa chỉ" value="<?=$diachi?>">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Số điện thoại </label> <br>
            <input type="text" name="sodienthoai" placeholder="Nhập vào số điện thoại" value="<?=$sodienthoai?>">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Quyen </label> <br>
            <input type="text" name="quyen" placeholder="Nhập vào quyen" value="<?=$quyen?>">
           </div>

           <div class="row mb10 ">
           <input type="hidden" name="id" value="<?=$id?>">
         <input class="mr20" name="capnhat" type="submit" value="CẬP NHẬT">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=thanhvien"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
          </form>
         </div>
        </div>