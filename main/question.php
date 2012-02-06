<?php

/*
 * created by arcady.1254@gmail.com 5/2/2012
 */
$name_id = intval($attributes[name_id]);

$action = $attributes[action];
?>
<script language="javascript">if(confirm("Вы правда желаете удалить презентацию.")){
    document.write ('<form action="index.php?act=ddel" method="post"><input name="action" type="hidden" value="<?php echo $action;?>"/><input name="name_id" type="hidden" value="<?php echo $name_id;?>"/></form>');
    document.forms[0].submit();
}else{
    document.write ('<form action="index.php?act=pres" method="post"></form>');
    document.forms[0].submit();
}</script>  