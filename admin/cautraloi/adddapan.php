<form action="index.php?act=adddapan" method="POST">
        <div class="row2 mb10 form_content_container">
           <label> Nội dung câu hỏi</label> <br>
            <select name="idcd" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                        foreach($listcauhoi as $da){
                            extract($da);
                            echo '<option value="'.$id.'">'.$noidung.'</option>';
                        }
                    ?>
            </select>
           </div>
    <label for="">nhập đáp án 1</label><br>
    <input type="text" name="dapan" placeholder="nhập đáp án"><br>
    <label for="">câu đúng(1) câu sai(0) type</label><br>
    <input type="text" name="type" placeholder="câu đúng(1) câu sai(0)"><br>

    <label for="">nhập đáp án 2</label><br>
    <input type="text" name="dapan2" placeholder="nhập đáp án"><br>
    <label for="">câu đúng(1) câu sai(0) type</label><br>
    <input type="text" name="type2" placeholder="câu đúng(1) câu sai(0)"><br>
    
    <label for="">nhập đáp án 3</label><br>
    <input type="text" name="dapan3" placeholder="nhập đáp án"><br>
    <label for="">câu đúng(1) câu sai(0) type</label><br>
    <input type="text" name="type3" placeholder="câu đúng(1) câu sai(0)"><br>

    <label for="">nhập đáp án 4</label><br>
    <input type="text" name="dapan4" placeholder="nhập đáp án"><br>
    <label for="">câu đúng(1) câu sai(0) type</label><br>
    <input type="text" name="type4" placeholder="câu đúng(1) câu sai(0)"><br>

    <input type="hidden" name="id" value="<?=$id_cauhoi?>">
    <input type="submit" name="adddapan" value="Thêm đáp án"><br>
</form>