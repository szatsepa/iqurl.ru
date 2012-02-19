<?php

/*
 * create by arcady.1254@gmail.com 4/2/2012
 */

$name_id = intval($attributes[name_id]);

$name = quote_smart($attributes[name]);

$repeat = intval($attributes[repeat]);

if(!$repeat)$repeat = 0;

$query = "UPDATE `names` SET `name` = $name, `repeat` = $repeat WHERE `id` = $name_id";

mysql_query($query) or die($query);

header("location:index.php?act=red&name_id=$name_id");

?>
