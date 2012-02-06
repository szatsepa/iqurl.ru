<?php

/*
 * created by arcady.1254@gmail.com 6/2/2012
 */
?>
<br/>
<br/>
<div class="images">
    <img src="<?php echo $image[name];?>" width="600" alt="images"/>
</div>
<div>
    <br/>
    <br/>
</div>
<div class="img_red">
    <table>
        <tr>
<form enctype="multipart/form-data" action="index.php?act=chgi" method="post">
    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td>
        
        <input type="hidden" name="id" value="<?php echo $image[id];?>"/>
        <input type="hidden" name="MAX_FILE_SIZE" value="1248575"/>        
        <input name="imgfile" size="50" accept="image/*" type="file" size="20" required/>
       
    </td>
    <td colspan="2">
        <input type="submit" value="Заменить изображениe"/>&nbsp;&nbsp;
    </td>
</form>
</tr>
<tr>
    <td colspan="3">
        <small>Размер загружаемого файла не должен превышать 1.2МБ</small> 
    </td>
</tr>
    </table>
</div>