<form action="index.php?act=adddapan" method="POST">

<?php
$stt = 0;
    foreach($listdapan as $da){
        $stt+=1;
        extract($da);
?>
    <label for="">Dap an <?=$stt?></label><br>
    <input type="text" name="dapan1" value="<?=$dapan?>"><br>
<?php
}
?>

    <input type="hidden" name="id" value="<?=$id?>"><br>
    <input type="submit" name="adddapan" value="Sua đáp án"><br>
</form>