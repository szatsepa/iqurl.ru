<?php

/*
 * created by arcady.1254@gmail.com 4/2/2012
 */
//print_r($presentation);
?>
<div>
    <table width="1004" border="0"> 
        <tr> 
            <td colspan="2" align="left">
                <p>
                    <strong>
                        Название презентации.
                    </strong>
                </p>
            </td>
        </tr> 
        <tr> 
            <form action="index.php?act=ename" method="post">
            <td colspan="2">
                <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
                <input type="text" size="72" name="name" value="<?php echo $name;?>"/>
                &nbsp;&nbsp;<input type="submit" value="Сохранить изменения"/>
            </td>
             </form>
        </tr>
        <td>
 <tr>
            <td colspan="2">
                &nbsp;
             </td>
        </tr>
        <?php
        $slide = 1;
foreach ($presentation as $value) {
    
    $count = count($presentation);
    
    $snd = str_replace('"', "'", $value[sound]);
    
    $string_out = "$value[img]$value[lnk]";
    
    $string_out = str_replace('"', "'", $string_out);
    
    $size = strlen($value[priority]);
?>
<tr>
            <td colspan="2" align="left">
                <p>
                <form id="fpr_<?php echo $slide;?>">
                    <input type="hidden" name="row" value="<?php echo $value[row];?>"/>
                    <strong>
                        Слайд - <input id="tpr_<?php echo $slide;?>" size="<?php echo $size;?>" type="text" name="priority" value="<?php echo $value[priority];?>"/>
                    </strong> 
                    </form>
                </p>
            </td>
        </tr>

<tr>
<td>
    <form id="f_<?php echo $slide;?>">
        <input type="hidden" name="name_id" value="<?php echo $name_id;?>"/>
        <input type="hidden" name="id" value="<?php echo $value[row];?>"/>
        <p><input type="text" size="96" name="url" value="<?php echo "$string_out";?>" onclick="this.select();"/>
        <input type="text" size="3" name="times" value="<?php echo $value[time];?>"/>&nbsp;sec.</p>
        <?php if(!$value[sound]){?>
        <input type="submit" value="Прикрепить звук" onclick="javascript:attachSound('f_<?php echo $slide;?>')"/>
        <?php }else{?>
        <p>
            <input type="text" size="96" name="sound" value="<?php echo $snd;?>" onclick="this.select();"/>
        </p>
        <input type="submit" value="&nbsp;Изменить&nbsp;аудиофайл.&nbsp;" onclick="javascript:attachSound('f_<?php echo $slide;?>');"/>
        <?php }?>
        <input type="submit" value="&nbsp;Изменить&nbsp;слайд.&nbsp;" onclick="javascript:changeImg('f_<?php echo $slide;?>','changeimg');"/>
        
        <input type="submit" value="&nbsp;Установить&nbsp;время.&nbsp;" onclick="javascript:setTime('f_<?php echo $slide;?>');"/>
                    
         &nbsp;&nbsp;<input type="submit" value="Удалить слайд." onclick="javascript:delRow('dels','red',<?php echo $slide;?>,<?php echo $attributes[name_id];?>);"/>
      </form>  
    </td>
</tr>
<tr>
    <td colspan="2">
        &nbsp;
    </td>
</tr>
<?php 
$slide++;
} 
?>

        <?php
//        $slide = 1;

?>
<tr>
            <td colspan="2">
                <p align="left">
                    <strong>
                        Добавить слайд(веб-страницу).
                    </strong>
                </p>
                <p>
                <form id="add">
                    <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
                    <input type="submit" value="&nbsp;Добавить&nbsp;слайд.&nbsp;"  onclick="javascript:changeImg('add','addimg');"/>
                    <input type="submit" value="&nbsp;Изменить&nbsp;очередность.&nbsp;"  onclick="javascript:setPriority('<?php echo $count;?>','<?php echo $attributes[name_id];?>');"/>
                </form>
                </p>
          </tr>
    </table>
</div>
<script language="JavaScript">
function delRow(act,action,id,name_id){
    
    if(confirm("Действительно удалить?")){
     document.write ('<form action="index.php?act='+act+'" method="post"><input type="hidden" name="id" value="'+id+'"/><input name="action" type="hidden" value="'+action+'"/><input name="name_id" type="hidden" value="'+name_id+'"/></form>');
    document.forms[0].submit();
}
    
}

function attachSound(cod) { 
    
    var obj = document.getElementById(cod);
    
    var name_id = obj.name_id.value;
    
    var id = obj.id.value;
    
    document.write ('<form action="index.php?act=atsnd" method="post"><input type="hidden" name="name_id" value="'+name_id+'"/><input name="id" type="hidden" value="'+id+'"/></form>');
    document.forms[0].submit();
	
return;
}
function changeImg(id, action){  
    
    var obj = document.getElementById(id);
    
    var name_id = obj.name_id.value;
    
    var id = obj.id.value;
    
    var action = action;
    
    document.write ('<form action="index.php?act=selimg&action='+action+'" method="post"><input type="hidden" name="name_id" value="'+name_id+'"/><input name="id" type="hidden" value="'+id+'"/></form>');
    document.forms[0].submit();
 return   
}
function setTime(id){
    
    var obj = document.getElementById(id);
    
    var name_id = obj.name_id.value;
    
    var id = obj.id.value;
    
    var t = obj.times.value;
    
    document.write ('<form action="index.php?act=setime&time='+t+'" method="post"><input type="hidden" name="name_id" value="'+name_id+'"/><input name="id" type="hidden" value="'+id+'"/></form>');
    document.forms[0].submit();
 return 
    
}
function setPriority(count, name_id){
    
    var rows = count;
    
    var string_priority = "";
    
    var string_row = "";
    
    for(var i = 1; i <= rows; i++){
        
                var obj = document.getElementById("fpr_"+i);
                
                var val = obj.priority.value;
                
                var row = obj.row.value;
                
               string_priority = string_priority +"&prt_"+i+"="+val; 
               
               string_row = string_row +"&row_"+i+"="+row; 
    } 
//    alert('<form action="index.php?act=changepriority&name_id='+name_id+string_priority+string_row+'" method="post">');
    document.write ('<form action="index.php?act=changepriority&name_id='+name_id+string_priority+string_row+'" method="post"><inpyt type="hidden" name="joppa" value="100"/></form>');
    document.forms[0].submit();
    return;
}
</script>