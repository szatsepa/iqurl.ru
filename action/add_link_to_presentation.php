<?php

/*
 * created by arcady.1254@gmail.com 9/2/2012
 */
    $user_id = intval($_SESSION[id]);
    
    $name_id = quote_smart($attributes[name_id]);

    $url = quote_smart ($attributes[url]);
       
    $time = intval($attributes[times]); 
    
    $query = "INSERT INTO presentation (name_id, user_id, p_url, time, type) VALUES ($name_id, $user_id, (SELECT id FROM sites WHERE name = $url), $time, 0)";
        
    $result = mysql_query($query) or die($query);
    
    header("location:index.php?act=red&name_id=$name_id");
?>
