<?php

/*
 * created by arcady.1254@gmail.com 2/2/2012
 */

$name_id = intval($attributes[name_id]);

$query = "SELECT * FROM presentation WHERE name_id = $name_id";

$result = mysql_query($query) or die($query);

$presentation_array = array();

while ($var = mysql_fetch_assoc($result)){
    
    array_push($presentation_array, $var);
}

mysql_free_result($result);

?>
