<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI ĐỀ THI</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=adddethi" method="POST" enctype="multipart/form-data">

           <div class="row2 mb10 form_content_container">
           <label> Số câu </label> <br>
            <input type="text" name="socau" placeholder="Nhập vào sô câu">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Bộ đề thi </label> <br>
            <input type="text" name="bodethi" placeholder="Nhập vào bộ đề thi">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Id_lichthi </label> <br>
            <input type="text" name="id_lichthi" placeholder="Nhập vào id_lichthi">
           </div>

           <div class="row mb10 ">
         <input class="mr20" name="adddethi" type="submit" value="THÊM  MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=dethi"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
          </form>
         </div>
        </div>