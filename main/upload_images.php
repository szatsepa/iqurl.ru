<?php

/*
 * created by arcady.1254@gmail.com 5/2/2012
 */


?>
<tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
        </tr>
<tr>
<form enctype="multipart/form-data" action="index.php?act=uimg" method="post">
    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td>
        
        <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
        <input type="hidden" name="MAX_FILE_SIZE" value="1248575"/>        
        <input name="imgfile" size="50" accept="image/*" type="file" size="20" required/>
<!--        <input type="text" size="4" required name="times" value=""/>&nbsp;sec.-->
        
    </td>
    <td colspan="2">
        <input type="submit" value="Загрузить изображениe"/>&nbsp;&nbsp;
    </td>
</form>
</tr>
<tr>
    <td colspan="3">
        <small>Размер загружаемого файла не должен превышать 1.2МБ</small> 
    </td>
</tr>