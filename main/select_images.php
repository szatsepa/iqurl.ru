<?php

/*
 * created by arcady.1254@gmail.com 11/2/2012
 */
//print_r($images_array);
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
                    <input type="hidden" name="type" value="<?php echo $value[type];?>"/>
                    <input type="hidden" name="row_id" value="<?php echo $attributes[row];?>"/>
                    <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
                    <input type="Button" value="Прикрепить" onclick="javascript:insertLink('f_<?php echo $rows;?>')"/>   
                </form>
            </td>
        </tr>
        
     <?php $rows++;
     }
 ?>
    </table>
</div>
<script language="JavaScript">
function insertLink(cod) {
    
    var obj = document.getElementById(cod);
    
    var name_id = obj.name_id.value;
      
    var row = obj.row_id.value;
    
    if(!row){row = 0;}
    
    var id = obj.snd_id.value; 
    
    var images = obj.images.value;
    
    var action = obj.action.value;
    
   var out_string = "index.php?act="+action+"&id="+id+"&row="+row+"&name_id="+name_id+"&type="+images;
    
    document.location.href = out_string;
	
return false;
}
</script> 