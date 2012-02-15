<?php

/*
 * created by arcady.1254@gmail.com 4/2/2012
 */

$id = intval($attributes[name_id]);

$query_string = $attributes[action];

if(isset ($attributes[todo]) && $attributes[todo] == "kirdyck"){

mysql_query("DELETE FROM presentation WHERE name_id = $id") or die("DELETE FROM presentation WHERE name_id = $id");

mysql_query("DELETE FROM `names` WHERE id = $id");
?>
<script language="javascript">
    document.write ('<form action="index.php?act=pres" method="post"></form>');
    document.forms[0].submit();
</script> 
<?php

}
?>
<script language="javascript">
if(confirm("Вы правда желаете удалить презентацию.")){
    document.write ('<form action="index.php?act=delpresentation" method="post"><input type="hidden" name="todo" value="kirdyck"/><input name="action" type="hidden" value="<?php echo $action;?>"/><input name="name_id" type="hidden" value="<?php echo $id;?>"/></form>');
    document.forms[0].submit();
}else{
    document.write ('<form action="index.php?act=pres" method="post"></form>');
    document.forms[0].submit();
}</script>
