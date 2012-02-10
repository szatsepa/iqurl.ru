<?php

/*
 * created by arcady.1254@gmail.com 10/2/2012 
 */
$id = intval($attributes[id]);

$comment = quote_smart($attributes[comment]);

$query = "UPDATE sounds SET comment = $comment WHERE id = $id";

$result = mysql_query($query) or die($query);

//echo $query;

header("location:index.php?act=sred&id=$id");
?>
