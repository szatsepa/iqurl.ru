<?php

/*
 * creation by arcady.1254@gmail.com 6/2/2012
 */
$id = intval($attributes[id]);

$name_id = intval($attributes[name_id]);

$query_string = $attributes[action]."&name_id=".$name_id;

mysql_query("DELETE FROM presentation WHERE id = $id") or die("DELETE FROM presentation WHERE id = $id");


header("location:index.php?act=$query_string");
?>
