<?php

/*
 * created by arcady.1254@gmail.com 16/2/2012
 */

$id = intval($attributes[id]);

$name = quote_smart($attributes[name]);

$query = "UPDATE `sites` SET `name` = $name WHERE id = $id";

$result = mysql_query($query) or die($query);

echo $query;

header("location:index.php?act=lred&id=$id");
?>
