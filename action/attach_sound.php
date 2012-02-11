<?php

/*
 * created by arcady.1254@gmail.com 11/2/2012
 */

$name_id = intval($attributes[name_id]);

$id = intval($attributes[id]);

$row = intval($attributes[row]);

$query = "UPDATE presentation SET sound = $id WHERE id = $row";

$result = mysql_query($query) or die ($query);

header("location:index.php?act=red&name_id=$name_id");
?>
