<?php

/*
 * created by arcady.1254@gmail.com 16/2/2012
 */

 $id = intval($attributes[id]);

$query_string = $attributes[action];


    
    $query = "DELETE FROM `sites` WHERE id = $id";
    
    $result = mysql_query($query) or die($query);
    
    $query = "DELETE FROM `presentation` WHERE `p_url` = $id AND type = 0";
    
    $result = mysql_query($query) or die($query);

header("location:index.php?act=$query_string");
?>
