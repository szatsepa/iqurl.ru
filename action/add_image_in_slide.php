<?php

/*
 * created by arcady.1254@gmail.com 11/2/2012
 */

$name_id = intval($attributes[name_id]);

$row = intval($attributes[row]);

$id = intval($attributes[id]);

$type = intval($attributes[type]);

$query = "SELECT Count(id) FROM presentation WHERE name_id = $name_id";

$result = mysql_query($query) or die($query);
 
$row = mysql_fetch_row($result);
    
$priority=$row[0] + 1;


mysql_free_result($result);

$query = "INSERT presentation (name_id, p_url,type, priority) VALUES ($name_id,$id,$type,$priority)";

mysql_query($query) or die($query);

header("location:index.php?act=red&name_id=$name_id");
?>
