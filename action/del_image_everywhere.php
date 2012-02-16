<?php

/*
 * created by arcady.1254@gmail.com 15/2/2012 
 */

 $id = intval($attributes[id]);

$name_id = intval($attributes[name_id]);

$query_string = $attributes[action]."&name_id=".$name_id;


$query = "SELECT name FROM `images` WHERE id = $id";

$result = mysql_query($query) or die ($query);

$row = mysql_fetch_assoc($result);

$name = $row[name];

unset ($row);

mysql_free_result($result);

$tmp_arr = explode('/', $name);

$tmp_arr = array_reverse($tmp_arr);

$name = $tmp_arr[0];

unset ($tmp_arr);

$name = $document_root . '/images/' . $name;

if(unlink($name)){
    
    $query = "DELETE FROM `images` WHERE id = $id";
    
    $result = mysql_query($query) or die($query);
    
    $query = "DELETE FROM `presentation` WHERE `p_url` = $id AND type = 1";
    
    $result = mysql_query($query) or die($query);
}

header("location:index.php?act=$query_string");
?>

