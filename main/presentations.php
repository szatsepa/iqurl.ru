<?php

/*
 * created by arcady.1254@gmail.com 3/2/2012
 */
?>
<table>
    <tr>
        <td>

<select name="select" onchange="document.location='index.php?act=pres&select=1&name_id='+this.options[this.selectedIndex].value">
                     
                     <option value="0">Выберите презентацию</option>
                 <?php
     foreach ($allpres_array as $value) {
          $selected = "";
         if($attributes[name_id] == $value[id])$selected = "selected";
         ?>
                     <option value="<?php echo $value[id];?>" <?php echo $selected;?> ><?php echo $value[name];?></option>
         <?php
     }
     ?>
                 </select>

            </td>
    </tr>
    <tr>
        <td>
            &nbsp;
        </td>
    </tr>
    <tr>
        <td align="right">
            <?php 
            if(isset($attributes[select]) && $attributes[name_id]){
            ?>
            <form action="index.php?act=view" method="post" target="_blank">
                <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
                <input type="hidden" name="frame" value="0"/>
                <input type="submit" value="Смотреть"/>
            </form>
            
            <?php
            }
            ?>
        </td>
    </tr>
</table>