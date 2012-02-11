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
                <strong>Выберите изображение или веб-страницу.</strong> 
            </td>
        </tr>
       <?php 
        
$rows = 0;        
        foreach ($images_array as $value) { 
            
            $name = $value[name];
            
            $len = strlen($value[name]);
            
            $comment = str_replace('"', "'", $value[comment]);
            
            if($value[type] == 1){
                $sho = "Изображение - ";
            }  else {
                $sho = "Веб-страница - ";
            }
         
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
                <form id="f_<?php echo $rows;?>">
                    <?php echo $sho;?>
                    <input id="snd_<?php echo $value[id];?>" type="text" size="64" name="url" value="<?php echo $comment;?>"/>
                    <input type="hidden" name="snd_id" value="<?php echo $value[id];?>"/>
                    <input type="hidden" name="action" value="<?php echo $attributes[action];?>"/>
                    <input type="hidden" name="images" value="<?php echo $value[type];?>"/>
                    <input type="hidden" name="row_id" value="<?php echo $attributes[id];?>"/>
                    <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
                    <input type="submit" value="Прикрепить" onclick="javascript:changeImg('f_<?php echo $rows;?>')"/>   
                </form>
            </td>
        </tr>
        
     <?php $rows++;
     }
 ?>
    </table>
</div>
<script language="JavaScript">
function changeImg(cod) {
    
    var obj = document.getElementById(cod);
    
    var name_id = obj.name_id.value;
      
    var row = obj.row_id.value;
    
    var id = obj.snd_id.value; 
    
    var images = obj.images.value;
    
    var action = obj.action.value;
    
    
	
//    alert("names "+name_id+'\n'+"rows "+row+"\n"+"id "+id+"\n"+"type "+images+"\n"+"action "+action); 
    document.write ('<form action="index.php?act='+action+'" method="post">\n\
<input type="hidden" name="type" value="'+images+'"/>\n\
<input type="hidden" name="id" value="'+id+'"/>\n\
<input type="hidden" name="row" value="'+row+'"/>\n\
<input type="hidden" name="name_id" value="'+name_id+'"/>\n\
</form>');
    document.forms[0].submit();
	
return;
}
</script> 