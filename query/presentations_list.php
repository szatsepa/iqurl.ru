<?php

/*
 * created by arcady.1254@gmail.com 14/2/2012
 */

$user_id = $_SESSION[id];

$query = "SELECT DISTINCT n.id, n.name 
    FROM names AS n, presentation AS p
    WHERE p.name_id = n.id 
    ORDER BY n.name";

$result = mysql_query($query) or die($query);

$allpres_array = array();

while ($var = mysql_fetch_assoc($result)){
    
    array_push($allpres_array, $var);
}

mysql_free_result($result);
?>
