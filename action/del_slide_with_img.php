<?php

/*
 * creation by arcady.1254@gmail.com 6/2/2012
 */
$id = intval($attributes[id]);

$name_id = intval($attributes[name_id]);

$query_string = $attributes[action]."&name_id=".$name_id;

$query = "DELETE FROM `sites` WHERE id = $id";

$result = mysql_query($query) or die ($query);

mysql_query("DELETE FROM presentation WHERE p_url = $id  AND `type`=0") or die("DELETE FROM presentation WHERE p_url = $id  AND `type`=0");


header("location:index.php?act=$query_string");
?>
