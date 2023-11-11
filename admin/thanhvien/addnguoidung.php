
<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI LOẠI THÀNH VIÊN</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addnguoidung" method="POST" enctype="multipart/form-data">

           <div class="row2 mb10 form_content_container">
           <label> Tên </label> <br>
            <input type="text" name="username" placeholder="Nhập vào tên người dùng">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Mật khẩu </label> <br>
            <input type="text" name="password" placeholder="Nhập vào mật khẩu">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Địa chỉ </label> <br>
            <input type="text" name="diachi" placeholder="Nhập vào tên địa chỉ">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Số điện thoại </label> <br>
            <input type="text" name="sodienthoai" placeholder="Nhập vào số điện thoại">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Quyen </label> <br>
            <input type="text" name="quyen" placeholder="Nhập vào quyen">
           </div>

           <div class="row mb10 ">
         <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=thanhvien"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
          </form>
         </div>
        </div>