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
    <table border="0">
<tr>
<form enctype="multipart/form-data" action="index.php?act=changeimage" method="post">
    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td colspan="2">
        
        <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
        <input type="hidden" name="MAX_FILE_SIZE" value="1248575"/>        
        <input name="imgfile" size="50" accept="image/*" type="file" size="20" required/>
        <input type="hidden" name="id" value="<?php echo $image[id];?>"/>
        <p><small>Название изображения.</small></p>
        <input type="text" size="64" required name="comment" value="<?php echo $image[comment];?>" onclick="this.select();"/>
        <input type="submit" value="Загрузить изображениe"/>
    </td>
</form>
</tr>
<tr>
    <td>
        &nbsp;&nbsp;
    </td>
    <td colspan="2">
        <small>Размер загружаемого файла не должен превышать 1.2МБ</small> 
    </td>
</tr>
<!--        <tr>

    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td>
     <form action="index.php?act=chcomi" method="post">   
        
        <input name="comment" size="64" type="text" value="<?php echo $image[comment];?>" required/>
       <input type="submit" value="Изменить комментарий"/>&nbsp;&nbsp;
     </form>  
    </td>
    <td colspan="2">
        
    </td>

</tr>-->
<!--<tr> <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td colspan="2">
        <small>Комментарий к изображению.</small> 
    </td>
</tr>-->
    </table>
</div>