<?php

/*
 * created by arcady.1254@gmail.com 2/2/2012
 */
function qry_user ($arg) {
    
    $tmp_array = array();
    
    $query = "SELECT *
    FROM customer
    WHERE id=$arg";

$qry_user = mysql_query($query) or die($query);

while ($var = mysql_fetch_assoc($qry_user)){
    
    array_push($tmp_array, $var);
    
}

return  $tmp_array;
}
?>
