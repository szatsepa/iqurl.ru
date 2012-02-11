<?php

/*
 * created by arcady.1254@gmail.com 11/2/2012
 */

$name_id = intval($attributes[name_id]);

$row = intval($attributes[row]);

$id = intval($attributes[id]);

$type = intval($attributes[type]);

$query = "INSERT presentation (name_id, p_url,type) VALUES ($name_id,$id,$type)";

mysql_query($query) or die($query);

header("location:index.php?act=red&name_id=$name_id");
?>
