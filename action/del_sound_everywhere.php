<?php

/*
 * created by arcady.1254@gmail.com 15/2/2012
 */
 
$id = intval($attributes[id]);

$name_id = intval($attributes[name_id]);

$query_string = $attributes[action]."&name_id=".$name_id;

$query = "SELECT name FROM `sounds` WHERE id = $id";

$result = mysql_query($query) or die ($query);

$row = mysql_fetch_assoc($result);

$name = $row[name];

unset ($row);

mysql_free_result($result);

$name = $document_root . '/sound/' . $name;

echo "$name";

if(unlink($name)){
    
    $query = "DELETE FROM `sounds` WHERE id = $id";
    
    $result = mysql_query($query) or die($query);
    
    $query = "UPDATE `presentation` SET `sound` = '' WHERE `sound` = $id";
    
    $result = mysql_query($query) or die($query);
}

header("location:index.php?act=$query_string");
?>
