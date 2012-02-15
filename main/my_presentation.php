<?php

/*
 * created by arcady.1254@gmail.com 4/2/2012
 */
?>
<div>
    <table border="0">
        
        <tr>
            <td>
                
            </td>
            <td colspan="4">
                <strong>Мои презентации</strong>
            </td>
        </tr>
 <?php 
        
        
        foreach ($allpres_array as $value) {
            $name = $value[name];
 ?>
        <tr>
            <td colspan="5">
                &nbsp;
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td>
                <a href="index.php?act=view&amp;name_id=<?php echo $value[id];?>&amp;frame=0" target="_blank" <?php echo $disabled;?>><?php echo $name;?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td>
                
                <form action="index.php?act=red" method="post">
                    <input type="hidden" name="name_id" value="<?php echo $value[id];?>"/>
                    <input type="submit" value="Редактировать"/>
                </form>
            </td>
            <td> 
                &nbsp;&nbsp;&nbsp;
            </td>
            <td>
                <form action="index.php?act=delpresentation" method="post">
                    <input type="hidden" name="action" value="<?php echo $attributes[act];?>"/>
                    <input type="hidden" name="name_id" value="<?php echo $value[id];?>"/>
                    <input type="submit" value="Удалить"/>
                </form>
            </td>
        </tr>
     <?php   }
        ?>
    </table>
</div>