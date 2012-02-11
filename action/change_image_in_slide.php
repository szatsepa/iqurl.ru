<?php

/*
 * created by arcady.1254@gmail.com 11/2/2012
 */

$name_id = intval($attributes[name_id]);

$row = intval($attributes[row]);

$id = intval($attributes[id]);

$type = intval($attributes[type]);

$query = "UPDATE presentation SET p_url = $id, type = $type WHERE id = $row";

mysql_query($query) or die($query);

echo $query;

header("location:index.php?act=red&name_id=$name_id");
?>
