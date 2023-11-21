
<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI LỊCH THI</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addlichthi" method="POST" enctype="multipart/form-data">

           <div class="row2 mb10 form_content_container">
           <label> Kỳ thi </label> <br>
            <input type="text" name="tenkithi" placeholder="Nhập tên kỳ thi">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Thời gian bắt đầu </label> <br>
            <input type="date" name="batdau" placeholder="Nhập thời gian bắt đầu">

           </div>

           <div class="row2 mb10 form_content_container">
           <label> Thời gian kết thúc </label> <br>
            <input type="date" name="ketthuc" placeholder="Nhập thời gian kết thúc">

           </div>

           <div class="row2 mb10 form_content_container">
           <label> Thời gian thi </label> <br>
            <input type="time" name="thoigianthi" placeholder="Nhập thời gian thi">
           </div>

           <div class="row2 mb10 form_content_container">
           <label> Số đề thi </label> <br>
            <input type="text" name="sodethi" placeholder="Nhập số đề thi">
           </div>

           <div class="row mb10 ">
         <input class="mr20" name="addlichthi" type="submit" value="THÊM MỚI LỊCH THI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=lichthi"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
          </form>
         </div>
        </div>