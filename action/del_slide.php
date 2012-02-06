<?php

/*
 * created by arcady.1254@gmail.com 5/2/2012
 */

$id = intval($attributes[id]);

$name_id = intval($attributes[name_id]);

$query = "DELETE FROM presentation WHERE id = $id";

$result = mysql_query($query) or die($query);

header("location:index.php?act=red&name_id=$name_id");

?>
