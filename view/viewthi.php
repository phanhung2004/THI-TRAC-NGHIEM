<?php
    include "header.php";
?>

<main class="catalog mb">
    <h3>Câu Hỏi</h3>
          <div class="items">
            
                <form action="">
                    <?php
                    $stt = 0;
                        foreach($listcauhoi as $ch){
                            extract($ch);
                            $stt+=1;
                    ?>
                    
                    <label for=""><?=$stt?>:<?=$noidung?></label><br>

                    <input type="radio" id="option1" name="answer" value="A">
                    <label for="option1">Đáp án A</label><br>
                    
                    <input type="radio" id="option2" name="answer" value="B">
                    <label for="option2">Đáp án B</label><br>
                    
                    <input type="radio" id="option3" name="answer" value="C">
                    <label for="option3">Đáp án C</label><br>
                    
                    <input type="radio" id="option4" name="answer" value="D">
                    <label for="option4">Đáp án D</label><br>
                    <?php
                        }
                    ?>
                </form>
        
            </div>
</main> 