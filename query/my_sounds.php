<?php

/*
 * created by arcady.1254@gmail.com 8/2/2012
 */

$user_id = intval($_SESSION[id]);

$query = "SELECT * FROM sounds WHERE user_id = $user_id";

$result = mysql_query($query) or die($query);

$sound_array = array();

while ($var = mysql_fetch_assoc($result)){
    
    array_push($sound_array, $var);
    
}

mysql_free_result($result);
?>
