<?php

/*
 * created by arcady.1254@gmail.com 24/2/2012
 */
$name_id = intval($attributes[name_id]);

$id = intval($attributes[id]);

$row = intval($attributes[row]);

$query = "UPDATE names SET sound = $id WHERE id = $name_id";

$result = mysql_query($query) or die ($query);

header("location:index.php?act=red&name_id=$name_id");
?>
