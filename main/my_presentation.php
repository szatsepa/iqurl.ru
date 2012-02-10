<?php

/*
 * created by arcady.1254@gmail.com 4/2/2012
 */
?>
<div>
    <table border="0">
        <?php if($attributes[act] == "arch"){
            
            $tmp_arr = $img_pres_array;
            
            
            ?>
         <tr>
            <td>
                
            </td>
            <td colspan="4">
                <strong>Презентации содержащие изображения</strong>
            </td>
        </tr>
        <?php
        }else{
            $tmp_arr = $allpres_array;
        }
        
        
?>
       
        
        <?php 
        
        
        foreach ($tmp_arr as $value) {
            $name = $value[name];
          if($attributes[act] == "arch"){  
            $len = strlen($value[name]);
            
            if($len < 48){
                for($i=$len;$i<48;$i++){
                    $name .= "&nbsp;";
                }
            }
          }
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
                <form action="index.php?act=del" method="post">
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