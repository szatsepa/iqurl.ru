<?php

/*
 * created by arcady.1254@gmail.com 4/2/2012
 */
?>
<div>
    <table width="1004" border="0"> 
        <tr> 
            <td colspan="2" align="left">
                <p>
                    <strong>
                        Название презентации.
                    </strong>
                </p>
            </td>
        </tr>
        <tr>
            <form action="index.php?act=ename" method="post">
            <td colspan="2">
                <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
                <input type="text" size="72" name="name" value="<?php echo $name[name];?>"/>
                &nbsp;&nbsp;<input type="submit" value="Сохранить изменения"/>
            </td>
             </form>
        </tr>
       
        <tr>
            <td>
    <table border='0'> 
        
        <tr>
            <td colspan="3">
                &nbsp;
             </td>
        </tr>
        <?php
        $slide = 1;
foreach ($presentation_array as $value) {
?>
<tr>
            <td colspan="3" align="left">
                <p>
                    <strong>
                        Слайд <?php echo $slide;?>.
                    </strong>
                </p>
            </td>
        </tr>

<tr>

    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
    </td>
    <td>
    <form action="index.php?act=edit" method="post">
        <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
        <input type="hidden" name="id" value="<?php echo $value[id];?>"/>
        <p><input type="text" size="42" name="url" value="<?php echo $value[p_url];?>" onclick="this.select();"/></p>
        <p align="right"><input type="text" size="3" name="times" value="<?php echo $value[time];?>"/>&nbsp;sec.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Сохранить изменения"/>
        &nbsp;&nbsp;<input type="submit" value="Удалить" onclick="javascript:delRow('dels','red',<?php echo $value[id];?>,<?php echo $attributes[name_id];?>);"/></p>
      </form>  
    </td>

</tr>
<tr>
    <td colspan="3">
        &nbsp;
    </td>
</tr>
<?php 
$slide++;
} 
?>
</table>
                </td>
                <td>

                      <table border='0'> 
        
        <tr>
            <td colspan="3">
                &nbsp;
             </td>
        </tr>
        <?php
        $slide = 1;
foreach ($sound_array as $value) {
?>
<tr>
            <td colspan="3" align="left">
                <p>
                    <strong>
                        Звуковая дорожка <?php echo $slide;?>.
                    </strong>
                </p>
            </td>
        </tr>

<tr>

    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
    </td>
    <td>
    <form action="index.php?act=sedit" method="post">
        <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
        <input type="hidden" name="id" value="<?php echo $value[id];?>"/>
        <p><input type="text" size="42" name="url" value="<?php echo $value[sound];?>"  onclick="this.select();"/></p>
        <p align="right">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Сохранить изменения"/>
        &nbsp;&nbsp;<input type="submit" value="Удалить" onclick="javascript:delRow('dels','red',<?php echo $value[id];?>,<?php echo $attributes[name_id];?>);"/></p>
      </form>  
    </td>

</tr>

<?php 
$slide++;
} 
?>


</table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p align="left">
                    <strong>
                        Добавить слайд(изображение).
                    </strong>
                </p>
                <p>
                <form action="index.php?act=str" method="post">
                    <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
                    <input type="text" required size="64" name="url" value=""/>
                    <input type="text" required size="4" name="times" value=""/>&nbsp;sec.
                    <input type="submit" value="&nbsp;Добавить&nbsp; &nbsp;адрес&nbsp;"/>
                </form>
                </p>
                <p>
                  <small>Вставте в это поле URL вашего слайда и укажите время демонстрации.</small>   
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p align="left">
                    <strong>
                        Добавить слайд(веб-страницу).
                    </strong>
                </p>
                <p>
                <form action="index.php?act=wstr" method="post">
                    <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
                    <input type="text" required size="64" name="url" value=""/>
                    <input type="text" required size="4" name="times" value=""/>&nbsp;sec.
                    <input type="submit" value="&nbsp;Добавить&nbsp; &nbsp;адрес&nbsp;"/>
                </form>
                </p>
                <p>
                  <small>Вставте в это поле URL вашего слайда и укажите время демонстрации.</small>   
                </p>
            </td>
        </tr>
         <tr>
            <td colspan="2">
                <p align="left">
                    <strong>
                        Добавить звуковой файл.
                    </strong>
                </p>
                <p>
                <form action="index.php?act=asnd" method="post">
                    <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
                    <input type="text" required size="70" name="url" value=""/>
                    <input type="submit" value="&nbsp;Добавить&nbsp; &nbsp;адрес&nbsp;"/>
                </form>
                </p>
                <p>
                  <small>Вставте в это поле скопированое имя звукового файла.</small>   
                </p>
            </td>
        </tr>
 
    </table>
</div>
<script language="javascript">
function delRow(act,action,id,name_id){
    
    if(confirm("Действительно удалить?")){
     document.write ('<form action="index.php?act='+act+'" method="post"><input type="hidden" name="id" value="'+id+'"/><input name="action" type="hidden" value="'+action+'"/><input name="name_id" type="hidden" value="'+name_id+'"/></form>');
    document.forms[0].submit();
}
    
}
</script>
