<?php

/*
 * created by arcady.1254@gmail.com 11/2/2012
 */
$name_id = intval($attributes[name_id]);

$time = intval($attributes[time]);

$id = intval($attributes[id]);

$query = "UPDATE presentation SET time = $time WHERE id = $id";

mysql_query($query) or die($query);

header("location:index.php?act=red&name_id=$name_id"); 
?>
