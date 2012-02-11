<?php

/*
 * created by arcady.1254@gmail.com 9/2/2012
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
            $tmp_arr = $links_array;
        }
?>
       
        
        <?php 
        
        
        foreach ($tmp_arr as $value) {
            $name = $value[name];
          
            $comment = str_replace('"', "'", $value[comment]);
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
                <form action="index.php?act=lred" method="post">
                    <input id="link_<?php echo $value[id];?>"type="text" size="64" name="url" value="<?php echo $comment;?>"/>
                    <input type="hidden" name="id" value="<?php echo $value[id];?>"/>
                    <input type="submit" value="Редактировать"/>
                    <input type="submit" value="Удалить" onclick="document:location='index.php?act=ldel&action=<?php echo $attributes[act];?>&id=<?php echo $value[id];?>'"/>
                </form>
            </td>
        </tr>
        
     <?php   }
     
        ?>
         <tr>
            <td colspan="3">
                <p align="left">
                    <strong>
                        Добавить слайд.
                    </strong>
                </p>
                <p>
                <form action="index.php?act=alnk" method="post">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION[id];?>"/>
                    <input type="text" required size="64" name="url" value=""/>
                    <p><small>Добавте комментарий.</small></p>
                    <input type="text" required size="64" name="comment" value=""/>
                    <input type="submit" value="&nbsp;Добавить&nbsp; &nbsp;адрес&nbsp;"/>
                </form>
                </p>
                <p>
                  <small>Вставте в это поле URL вашего слайда.</small>   
                </p>
            </td>
        </tr>
    </table>
</div>
<script language="javascript">
function attachData(cod, str) {
    
    var obj = document.getElementById(cod);
	
    alert(obj.value+'\n'+str);
	
return;
}

</script>