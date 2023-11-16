<form action="index.php?act=adddapan" method="POST">
        <div class="row2 mb10 form_content_container">
           <label> Nội dung câu hỏi</label> <br>
            <select name="idcd" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                        foreach($listdapan as $da){
                            extract($da);
                            echo '<option value="'.$id.'">'.$dapan.'</option>';
                        }
                    ?>
            </select>
           </div>

    <input type="hidden" name="id" value="<?=$id?>">
    <input type="submit" name="adddapan" value="Thêm đáp án"><br>
</form>