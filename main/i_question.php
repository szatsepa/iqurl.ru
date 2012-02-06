<?php

/*
 * created by arcady.1254@gmail.com 6/2/2012
 */
$id = intval($attributes[id]);

$action = $attributes[action];
?>
<script language="javascript">if(confirm("Вы правда желаете удалить изображение.")){
    document.write ('<form action="index.php?act=ddeli" method="post"><input type="hidden" name="id" value="<?php echo $id;?>"/><input name="action" type="hidden" value="<?php echo $action;?>"/></form>');
    document.forms[0].submit();
}else{
    document.write ('<form action="index.php?act=arch" method="post"></form>');
    document.forms[0].submit();
}</script> 