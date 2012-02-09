<?php

/*
 * created by arcady.1254@gmail.com 8/2/2012
 */


$name_id = intval($attributes[name_id]);

$query = "SELECT p.id, 
                 s.name AS sound
            FROM presentation AS p, 
                 sounds AS s 
            WHERE p.name_id =$name_id 
              AND p.sound = s.id";

$result = mysql_query($query) or die($query);

$sound_array = array();

while ($var = mysql_fetch_assoc($result)){
    
    if($var[sound])array_push($sound_array, $var);
}

mysql_free_result($result);

?>
