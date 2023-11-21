<?php
    if(is_array($editlichthi)){
        extract($editlichthi);
    }
?>
<div>
    <div>
        <h1>Cập nhật lịch thi</h1>
    </div>
    <div>
        <form action="index.php?act=updatelichthi" method="POST" enctype="multipart/form-data">

            <div>
                <label for="">Cập nhật tên kì thi</label>
                <input type="text" name="tenkithi" placeholder="Cập nhật tên kì thi" value="<?=$tenkithi?>">
            </div>

            <div>
                <label for="">Cập nhật thời gian bắt đầu</label>
                <input type="text" name="batdau" placeholder="Cập nhật thời gian bắt đầu" value="<?=$batdau?>">
            </div>

            <div>
                <label for="">Cập nhật thời gian kết thúc</label>
                <input type="text" name="ketthuc" placeholder="Cập nhật thời gian kết thúc" value="<?=$ketthuc?>">
            </div>

            <div>
                <label for="">Cập nhật thời gian thi</label>
                <input type="text" name="thoigianthi" placeholder="Cập nhật thời gian thi" value="<?=$thoigianthi?>">
            </div>

            <div>
                <label for="">Cập nhật số đề thi</label>
                <input type="text" name="sodethi" placeholder="Cập nhật số đề thi" value="<?=$sodethi?>">
            </div>

            <div>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="editlichthi" value="Cập nhật lịch thi">
                <input type="reset" name="" value="Nhập lại">
                <a href="index.php?act=lichthi"><input type="button" value="Danh sách lịch thi"></a>
            </div>
        </form>
    </div>
</div>