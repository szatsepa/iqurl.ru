<?php

/*
 * created by arcady.1254@gmail.com 9/2/2012
 */

$user_id = intval($_SESSION[id]);

$url = quote_smart($attributes[url]);

$query = "INSERT INTO sites (user_id, name) VALUES ($user_id, $url)";

$result = mysql_query($query) or die ($query);

header("location:index.php?act=alink");  
?>
