<?php

/*
 * created by arcady.1254@gmail.com 6/2/2012
 */
$id = intval($attributes[id]);

$query_string = $attributes[action];

$query = "SELECT name FROM images WHERE id=$id";

$result = mysql_query($query) or die($query);

while ($var = mysql_fetch_assoc($result)){
        
//    $url = substr($var[p_url], 7);
    
    $url = $document_root.substr($var[name], -20);
    
    unlink($url);
}

mysql_query("DELETE FROM images WHERE id = $id") or die("DELETE FROM images WHERE id = $id");

header("location:index.php?act=$query_string");
?>
