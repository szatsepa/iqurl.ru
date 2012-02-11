<?php

/*
 * created by arcady.1254@gmail.com 11/2/2012
 */
?>
<div>
    <table width="1010" border="0">
         <tr>
            <td>
                
            </td>
            <td colspan="3">
                <strong>Выберите аудиодорожку.</strong> 
            </td>
        </tr>
       <?php 
        
        
        foreach ($sound_array as $value) {
            
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
                <form id="f_<?php echo $value[id];?>">
                    <input id="snd_<?php echo $value[id];?>" type="text" size="64" name="url" value="<?php echo $comment;?>"/>
                    <input type="hidden" name="snd_id" value="<?php echo $value[id];?>"/>
                    <input type="hidden" name="row_id" value="<?php echo $attributes[id];?>"/>
                    <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
                    <input type="submit" value="Прикрепить" onclick="javascript:attachS('f_<?php echo $value[id];?>')"/>   
                </form>
            </td>
        </tr>
        
     <?php   }
 ?>
    </table>
</div>
<script language="JavaScript">
function attachS(cod) {
    
    var obj = document.getElementById(cod);
    
    var name_id = obj.name_id.value;
      
    var row = obj.row_id.value;
    
    var id = obj.snd_id.value;  
	
    document.write ('<form action="index.php?act=attachsound" method="post"><input type="hidden" name="id" value="'+id+'"/><input name="row" type="hidden" value="'+row+'"/><input name="name_id" type="hidden" value="'+name_id+'"/></form>');
    document.forms[0].submit();
	
return;
}
</script>