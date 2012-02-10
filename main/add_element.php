<?php

/*
 * created by arcady.1254@gmail.com 10/2/2012
 */

?>

<div>
    <table>
        
    
<?php
if($allpres_array){

    foreach ($allpres_array as $value) {
        
        ?>
        <tr>
            <td>
                <form id="f_<?php echo $value[id];?>">
                    <input type="checkbox" name="name_id" value="<?php echo $value[id];?>" onchange="javascript:addObj('f_<?php echo $value[id];?>');"/>
                    <input type="text" size="64" name="pres" value="<?php echo $value[name];?>"/>
                </form>
            </td>
        </tr>
<?php
    
    }

}   
?> 

    </table>
</div>
<script language="javascript"> 
    function addObj(id){ 
        
            var my_obj = document.getElementById(id);
            
//            alert(my_obj.pres.value+" & "+my_obj.name_id.value);
             document.write ('<form action="index.php?act=addel" method="post">\n\
<input type="hidden" name="name_id" value="'+my_obj.name_id.value+'"/>\n\
<input type="hidden" name="obj" value="<?php echo $attributes[obj];?>"/>\n\
<input name="id" type="hidden" value="<?php echo $attributes[id];?>"/></form>');
             document.forms[0].submit();
    }
</script>