<?php

/*
 * created by arcady.1254@gmail.com 26/2/2012
 */
$name_id = intval($attributes[name_id]);

$id = intval($attributes[id]);

$fast = 0;

if(isset ($attributes[fast]))$fast = intval($attributes[fast]);

$query = "UPDATE presentation SET fast_btn = $fast WHERE id = $id";

mysql_query($query) or die($query);

header("location:index.php?act=red&name_id=$name_id");
?>
<!--<script type="text/javascript">
    window.close();
</script>-->