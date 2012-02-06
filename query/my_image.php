<?php

/*
 * created by arcady.1254@gmail.com 6/2/2012
 */

$id = intval($attributes[id]);

$query = "SELECT * FROM images WHERE id = $id";

$result = mysql_query($query) or die ($query);

$image = mysql_fetch_assoc($result);

mysql_free_result($result);
?>
