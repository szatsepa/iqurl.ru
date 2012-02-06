<?php

/*
 * created by arcady.1254@gmail.com 4/2/2012
 */
?>
<div>
    <table border='0'> 
        <tr> 
            <td colspan="3" align="left">
                <p>
                    <strong>
                        Название презентации.
                    </strong>
                </p>
            </td>
        </tr>
        <tr>
            <form action="index.php?act=ename" method="post">
            <td>
                 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            </td>
        
            <td colspan="1">
                <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
                <input type="text" size="72" name="name" value="<?php echo $name[name];?>"/>
            </td>
            <td>
                &nbsp;&nbsp;<input type="submit" value="Сохранить изменения"/>
            </td>
        </tr>
        </form>
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
    <td >
    <form action="index.php?act=edit" method="post">
        <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
        <input type="hidden" name="id" value="<?php echo $value[id];?>"/>
        <input type="text" size="64" name="url" value="<?php echo $value[p_url];?>"/>
        <input type="text" size="4" name="times" value="<?php echo $value[time];?>"/>&nbsp;sec.
    </td>
    <td>
           
        &nbsp;&nbsp;<input type="submit" value="Сохранить изменения"/></form>&nbsp;&nbsp;<input type="submit" value="Удалить" onclick="document.location='index.php?act=dels&id=<?php echo $value[id];?>&name_id=<?php echo $attributes[name_id];?>&action=red'"/>
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
<tr>
            <td colspan="3" align="left">
                <p>
                    <strong>
                        Добавить слайд.
                    </strong>
                </p>
            </td>
        </tr>
<tr>
<form action="index.php?act=str" method="post">
    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td>
        
        <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
        <input type="text" required size="64" name="url" value=""/>
        <input type="text" required size="4" name="times" value=""/>&nbsp;sec.
        
    </td>
    <td>
        &nbsp;&nbsp;<input type="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Добавить&nbsp; &nbsp;адрес&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"/> 
    </td>   
</form>
</tr>
<tr>
    <td colspan="3">
        <small>Вставте в это поле URL вашего слайда и укажите время демонстрации.</small> 
    </td> 
</tr>
<?php
//include 'main/upload_images.php'; 

echo "</table></div>";?>

