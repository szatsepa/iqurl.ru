<?php

/*
 * created by arcady.1254@gmail.com 5/2/2012
 */


?>
<tr>
            <td colspan="3">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
        </tr>
<tr>
<form enctype="multipart/form-data" action="index.php?act=uimg" method="post">
    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td colspan="2">
        
        <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
        <input type="hidden" name="MAX_FILE_SIZE" value="1248575"/>        
        <input name="imgfile" size="50" accept="image/*" type="file" size="20" required/>
        <p><small>Название изображения.</small></p>
        <input type="text" size="64" required name="comment" value="" onclick="this.select();"/>
        <input type="submit" value="Загрузить изображениe"/>
    </td>
<!--    <td>
        &nbsp;&nbsp;
    </td>-->
</form>
</tr>
<tr>
    <td>
        &nbsp;
    </td>
    <td colspan="3">
        <small>Размер загружаемого файла не должен превышать 1.2МБ</small> 
    </td>
</tr>