<?php

/*
 * created by arcady.1254@gmail.com 8/2/2012
 */
$id = intval($attributes[id]);

$query = "SELECT * FROM sounds WHERE id = $id";

$result = mysql_query($query) or die ($query);

$sound = mysql_fetch_assoc($result);

mysql_free_result($result);
?>
