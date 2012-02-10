<?php

/*
 * created by arcady.1254@gmail.com 10/2/2012
 */

$id = intval($attributes[id]);

$query = "SELECT * FROM sites WHERE id = $id";

$result = mysql_query($query) or die ($query);

$site = mysql_fetch_assoc($result);

print_r($site);

mysql_free_result($result);

?>
