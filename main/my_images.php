<?php

/*
 * created by arcady.1254@gmail.com 6/2/2012
 * 
 */
?>
<div>
    <table width="86%" border="0">
        <?php if($attributes[act] == "arch"){
            
            $tmp_arr = $images_array;
            ?>
         <tr>
            <td>
                
            </td>
            <td colspan="4">
                <strong>Архив изображений.</strong>
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
            <td colspan="4">
                &nbsp;
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td>
<!--                <a href="index.php?act=arch&amp;name_id=<?php echo $value[id];?>&amp;frame=0" target="_blank"><?php echo $name;?></a> -->
                <input type="text" size="64" name="url" value="<?php echo $name;?>" onclick="this.select();"/>
            </td>
            <td align="left"> 
                <form action="index.php?act=ired" method="post">
                    <input type="hidden" name="id" value="<?php echo $value[id];?>"/>
                    <input type="submit" value="Редактировать"/>
                </form>
            </td>
           
            <td align="left">
                <form action="index.php?act=idel" method="post">
                    <input type="hidden" name="action" value="<?php echo $attributes[act];?>"/>
                    <input type="hidden" name="id" value="<?php echo $value[id];?>"/>
                    <input type="submit" value="Удалить"/>
                </form>
            </td>
        </tr>
        
     <?php   }
     include 'main/upload_images.php'; 
        ?>
    </table>
</div>