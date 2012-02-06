<?php

/*
 * created by arcady.1254@gmail.com 4/2/2012
 */

$p_id = intval($attributes[name_id]);

$query = "SELECT * FROM names WHERE id = $p_id";

$result = mysql_query($query) or die($query);

$name = mysql_fetch_assoc($result);

mysql_free_result($result);

?>
