<?php

/*
 * created by arcady.1254@gmail.com 8/2/2012
 */

    $user_id = intval($_SESSION[id]);
    
    $name_id = quote_smart($attributes[name_id]);

    $url = quote_smart ($attributes[url]);
       
    $query = "INSERT INTO presentation (name_id, user_id, sound) VALUES ($name_id, $user_id, (SELECT id FROM sounds WHERE name = $url))";

    $result = mysql_query($query) or die($query);
    
    header("location:index.php?act=red&name_id=$name_id");
?>
