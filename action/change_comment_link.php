<?php

/*
 * created by arcady.1254@gmail.com 10/2/2012
 */
$id = intval($attributes[id]);

$comment = $attributes[comment];

$comment = str_replace("'", '"', $comment);

$comment = quote_smart($comment);

$query = "UPDATE sites SET comment = $comment WHERE id = $id";

$result = mysql_query($query) or die($query);

header("location:index.php?act=lred&id=$id");
?>
