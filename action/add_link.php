<?php

/*
 * created by arcady.1254@gmail.com 9/2/2012
 */

$user_id = intval($_SESSION[id]);

$url = quote_smart($attributes[url]);

$comment = quote_smart($attributes[comment]);

$query = "INSERT INTO sites (user_id, name, comment) VALUES ($user_id, $url, $comment)";

$result = mysql_query($query) or die ($query);

header("location:index.php?act=alink");  
?>
