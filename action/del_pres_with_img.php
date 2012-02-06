<?php

/*
 * created by arcady.1254@gmail.com 5/2/2012
 */

$id = intval($attributes[name_id]);

$query_string = $attributes[action];

$query = "SELECT p_url FROM presentation WHERE name_id = $id AND type = 1";

$result = mysql_query($query) or die($query);

while ($var = mysql_fetch_assoc($result)){
        
//    $url = substr($var[p_url], 7);
    
    $url = $document_root.substr($var[p_url], -20);
    
    unlink($url);
}

mysql_query("DELETE FROM presentation WHERE name_id = $id") or die("DELETE FROM presentation WHERE name_id = $id");

mysql_query("DELETE FROM names WHERE id = $id") or die("DELETE FROM names WHERE id = $id");

header("location:index.php?act=$query_string");
?>
