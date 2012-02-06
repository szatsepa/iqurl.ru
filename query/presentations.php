<?php

/*
 * created by arcady.1254@gmail.com 3/2/2012
 */
$user_id = $_SESSION[id];

$query = "SELECT n.id, n.name 
    FROM names AS n 
    WHERE n.user = $user_id 
    ORDER BY n.name";

$result = mysql_query($query) or die($query);

$allpres_array = array();

while ($var = mysql_fetch_assoc($result)){
    
    array_push($allpres_array, $var);
}

mysql_free_result($result);
?>
