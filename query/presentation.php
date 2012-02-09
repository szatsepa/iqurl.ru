<?php

/*
 * created by arcady.1254@gmail.com 2/2/2012
 */

$name_id = intval($attributes[name_id]);

$query = "SELECT p.id, 
                 i.name AS p_url,
                 p.time
            FROM presentation AS p, 
                 images AS i 
            WHERE p.name_id =$name_id 
              AND p.p_url = i.id
              AND p.type = 1";

$result = mysql_query($query) or die($query);

$presentation_array = array();

while ($var = mysql_fetch_assoc($result)){
   
    array_push($presentation_array, $var);
}

$query = "SELECT p.id, 
                 s.name AS p_url,
                 p.time
            FROM presentation AS p, 
                 sites AS s 
            WHERE p.name_id =$name_id 
              AND p.p_url = s.id
              AND p.type = 0";

$result = mysql_query($query) or die($query);

while ($var = mysql_fetch_assoc($result)){
   
    array_push($presentation_array, $var);
}

mysql_free_result($result);

?>
