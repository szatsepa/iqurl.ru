<?php

/*
 * created by arcady.1254@gmail.com 6/2/2012
 */
$id = intval($attributes[id]);

$name_id = intval($attributes[name_id]);

$action = $attributes[action];
?>
<script language="javascript">if(confirm("Вы правда желаете удалить страницу.")){
    document.write ('<form action="index.php?act=ddels" method="post"><input type="hidden" name="id" value="<?php echo $id;?>"/><input name="action" type="hidden" value="<?php echo $action;?>"/><input name="name_id" type="hidden" value="<?php echo $name_id;?>"/></form>');
    document.forms[0].submit();
}else{
    document.write ('<form action="index.php?act=pres" method="post"></form>');
    document.forms[0].submit();
}</script> 