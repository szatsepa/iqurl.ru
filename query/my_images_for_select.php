<?php

/*
 * created by arcady.1254@gmail.com 11/2/2012
 */
$images_array = array();

$user_id = intval($_SESSION[id]);

$query = "SELECT * FROM images WHERE user_id = $user_id";

$result = mysql_query($query) or die($query);


while ($var = mysql_fetch_assoc($result)){
    
    array_push($images_array, $var);
    
}

$query = "SELECT * FROM sites WHERE user_id = $user_id";

$result = mysql_query($query) or die($query);


while ($var = mysql_fetch_assoc($result)){
    
    array_push($images_array, $var);
    
}

mysql_free_result($result);
?>
