<?php

/*
 * created by arcady.1254@gmail.com 4/2/2012
 */

$id = intval($attributes[name_id]);

mysql_query("DELETE FROM presentation WHERE name_id = $id");

mysql_query("DELETE FROM names WHERE id = $id");

header("location:index.php?act=pres");
?>
