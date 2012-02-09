<?php

/*
 * created by arcady.1254@gmail.com 9/2/2012
 */

$user_id = intval($_SESSION[id]);

$query = "SELECT * FROM sites WHERE user_id = $user_id";

$result = mysql_query($query) or die($query);

$links_array = array();

while ($var = mysql_fetch_assoc($result)){
    
    array_push($links_array, $var);
    
}

mysql_free_result($result);
?>
