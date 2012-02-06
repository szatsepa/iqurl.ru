<?php

/*
 * created by arcady.1254@gmail.com 5/2/2012
 */

$user_id = intval($_SESSION[id]);

$query = "SELECT n.id, n.name 
            FROM `names` AS n, presentation AS p 
            WHERE n.user = $user_id 
            AND n.id = p.name_id 
            AND p.type<>0 
            GROUP BY n.id 
            ORDER BY n.id";

$img_pres_array = array();

$result = mysql_query($query) or die($query);

while ($var = mysql_fetch_assoc($result)){
    
    array_push($img_pres_array, $var);
    
}

mysql_free_result($result);
?>
