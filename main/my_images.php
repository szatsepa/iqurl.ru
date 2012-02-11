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
                <input id="img_<?php echo $value[id];?>" type="text" size="64" name="url" value="<?php echo $value[comment];?>"/>
            </td>
            <td align="left"> 
                <form action="index.php?act=ired" method="post">
                    <input type="hidden" name="id" value="<?php echo $value[id];?>"/>
                    <input type="submit" value="Редактировать"/>
                    <input type="submit" value="Удалить" onclick="dokument:location='index.php?act=idel&action=<?php echo $attributes[act];?>&id=<?php echo $value[id];?>'"/>
                </form>
            </td>
           
<!--            <td align="left">
                <form action="index.php?act=idel" method="post">
                    <input type="hidden" name="action" value="<?php echo $attributes[act];?>"/>
                    <input type="hidden" name="id" value="<?php echo $value[id];?>"/>
                    <input type="submit" value="Удалить" onclick="dokument:location='index.php?act=idel&action=<?php echo $attributes[act];?>&id=<?php echo $value[id];?>'"/>
                </form>
            </td>
        </tr>-->
        
     <?php   }
     include 'main/upload_images.php'; 
        ?>
    </table>
</div>
<!--<script type="text/JavaScript"> 
function attachData(cod, str, id) { 
    
    var obj = document.getElementById(cod);
    document.write ('<form action="index.php?act=select" method="post"><input type="hidden" name="obj" value="'+str+'"/><input name="id" type="hidden" value="'+id+'"/></form>');
    document.forms[0].submit();
	
return;
}
</script>-->