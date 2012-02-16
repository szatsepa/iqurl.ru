<?php

/*
 * created by arcady.1254@gmail.com 8/2/2012
 */
?>
<tr>
            <td colspan="3">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            </td>
        </tr>
<tr>

    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
    </td>
    <td colspan="2">
      <form enctype="multipart/form-data" action="index.php?act=usnd" method="post">  
        <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
        <input name="soundfile" size="50" accept="multimedia/*.mp3" type="file" required/>
         <p><small>Название аудиофайлa.</small></p> 
        <input type="text" required size="64" name="comment" value="Введите название" onclick="this.select();"/>
        <input type="submit" value="Загрузить файл"/>
        </form>
    </td>

</tr>
<tr>
    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td colspan="2">
        <small>Формат загружаемого файла должен быть исключительно</small><strong>  mp3</strong>
    </td>
</tr>
