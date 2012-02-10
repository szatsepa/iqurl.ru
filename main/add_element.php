<?php

/*
 * created by arcady.1254@gmail.com 10/2/2012
 */
print_r($allpres_array);
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
                    <input type="checkbox" name="name_id" value="<?php echo $value[id];?>"/>
                    <input type="text" name="pres" value="<?php echo $value[name];?>"/>
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
            
            alert(my_obj.text.value);
    }
</script>