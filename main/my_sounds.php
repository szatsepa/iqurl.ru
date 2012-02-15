<?php

/*
 * created by arcady.1254@gmail.com 8/2/2012
 */
?>
<div>
    <table width="1010" border="0">
       <?php            
            $tmp_arr = $sound_array;
            ?>
         <tr>
            <td>
                
            </td>
            <td colspan="3">
                <strong>Архив звуковых файлов.</strong>
            </td>
        </tr>
       <?php 
        
        
        foreach ($tmp_arr as $value) {
            
            $name = $value[name];
            
            $len = strlen($value[name]);
            
            $comment = str_replace('"', "'", $value[comment]);
         
          ?>
        <tr>
            <td colspan="3">
                &nbsp;
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>

            <td align="left" colspan="2">
                <table>
                    <tr>
                        <td>
                           <form action="index.php?act=sred" method="post">
                             <input id="snd_<?php echo $value[id];?>" required type="text" size="64" name="url" value="<?php echo $comment;?>"/>
                             <input type="hidden" name="id" value="<?php echo $value[id];?>"/>
                             <input type="submit" value="Редактировать"/>
                           </form>  
                        </td>
                        <td>
                           <input type="submit" value="Удалить" onclick="document.location='index.php?act=sounddel&id=<?php echo $value[id];?>&action=<?php echo $attributes[act];?>'"/>   
                 
                        </td>
                    </tr>
                </table>
                
            </td>
        </tr>
        
     <?php   }
     include 'main/upload_sound.php'; 
        ?>
    </table>
</div>
<script language="JavaScript">
function attachData(cod, str) {
    
    var obj = document.getElementById(cod);
	
    alert(obj.value+'\n'+str);
	
return;
}
</script>