<?php

/*
 * created by arcady.1254@gmail.com 6/2/2012
 * 
 */
?>
<div>
    <table width="86%" border="0">
        
         <tr>
            <td>
                
            </td>
            <td colspan="4">
                <strong>Архив изображений.</strong>
            </td>
        </tr>
 <?php 
        
        
        foreach ($images_array as $value) {
            $name = $value[name];
          if($attributes[act] == "images"){  
            $len = strlen($value[name]);
            
            if($len < 48){
                for($i=$len;$i<48;$i++){
                    $name .= "&nbsp;";
                }
            }
          }
          ?>
        <tr>
            <td colspan="2">
                &nbsp;
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            
                
           
            <td align="left"> 
                <form action="index.php?act=imgred" method="post">
                       <input id="img_<?php echo $value[id];?>" type="text" size="64" name="url" value="<?php echo $value[comment];?>"/>
                       <input type="hidden" name="id" value="<?php echo $value[id];?>"/>
                       <input type="submit" value="Редактировать"/>
                       <input type="button" value="Удалить" onclick="dokument:location='index.php?act=imgdel&action=<?php echo $attributes[act];?>&id=<?php echo $value[id];?>'"/>
                   </form>
             </td>
<?php   }
     include 'main/upload_images.php'; 
        ?>
    </table>
</div>
