<?php

/*
 * created by arcady.1254@gmail.com 4/2/2012
 */
    $user_id = intval($_SESSION[id]);

    $url = quote_smart ($attributes[url]);
       
    $time = intval($attributes[times]); 
    
    $id = intval($attributes[id]);
    
    $name_id = intval($attributes[name_id]);
        
    $query = "UPDATE presentation SET p_url = $url, time = $time WHERE id = $id";

    $result = mysql_query($query) or die($query);
    
    header("location:index.php?act=red&name_id=$name_id");
?>
