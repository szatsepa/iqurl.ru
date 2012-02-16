<?php

/*
 * created by arcady.1254@gmail.com 16/2/2012
 */

 $id = intval($attributes[id]);

$name_id = intval($attributes[name_id]);

$query_string = $attributes[action];

?>
<script language="javascript">
    
    if(confirm("Вы действительно хотите удалить ссылку?")){
      
      document.location = "index.php?act=dellink&action=<?php echo $query_string;?>&id=<?php echo $id;?>";
      
    }else{
        
        document.write ('<form action="index.php?act=<?php echo $query_string;?>" method="post"></form>');
        document.forms[0].submit();
    }

 
</script>