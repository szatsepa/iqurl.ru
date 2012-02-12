<?php

/*
 * creation by arcady.1254@gmail.com 12/2/2012
 */

$priority_array = array();

$row_array = array();

foreach ($_GET as $key => $value) {
    
    if(strstr($key, 'prt_')){
        
        array_push($priority_array, $value);
        }
    if(strstr($key, 'row_')){
        
        array_push($row_array, $value);
        }
}

$tmp_array =  array_combine($row_array, $priority_array);

foreach ($tmp_array as $key => $value) {
    
    $query = "UPDATE presentation SET priority = $value WHERE id = $key";
    
    $result = mysql_query($query) or die($query);
    
}
?>
<script language="javascript">
        document.write ('<form action="index.php?act=red" method="post">\n\
<input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>\n\
</form>');
        document.forms[0].submit();
</script>