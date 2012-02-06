<?php

/*
 * create by arcady.1254@gmail.com 4/2/2012
 */

$name_id = intval($attributes[name_id]);

$name = quote_smart($attributes[name]);

$query = "UPDATE names SET name = $name WHERE id = $name_id";

mysql_query($query) or die($query);

header("location:index.php?act=red&name_id=$name_id");

?>
