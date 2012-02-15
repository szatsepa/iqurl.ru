<?php

/*
 * created by arcady.1254@gmail.com 6/2/2012
 */

$imgfile_b   = $document_root . '/images/' . basename($_FILES['imgfile']['name']);

$user_id = intval($_SESSION[id]);

$id = intval($attributes[id]);

$server = $_SERVER[SERVER_NAME];

$size = intval($attributes[MAX_FILE_SIZE]);

$query = "SELECT name FROM images WHERE id = $id";

$result = mysql_query($query) or die($query);

$row = mysql_fetch_row($result);

$old_url = quote_smart($row[0]);

unset($row);

mysql_free_result($result);

if($size > $_FILES['imgfile']['size']){
    
    $filetype = $_FILES['imgfile']['name'];
    
    $tmp_arr = explode(".",$filetype);
    
    $filetype = $tmp_arr[1];
    
    unset ($tmp_arr);
    
    $type = 1;
    
    if($filetype == 'swf') $type = 2;
    
       
if (!move_uploaded_file($_FILES['imgfile']['tmp_name'], $imgfile_b)) {
    
           $javascript = "javascript:alert('Ошибка при копировании файла');";
           
        } else {
            
             $flnm = time().'.';
            
             $new_imgfile = $document_root."/images/img". $flnm.$filetype;
             
             $url = "http://".$server."/images/img". $flnm.$filetype;
             
             $url = quote_smart($url);
             
             $attributes[type] = $type;
             
            // Убьем старый файл
            if (file_exists($new_imgfile)) {
                unlink ($new_imgfile);
            }
            
            // Переименуем загруженный файл
            rename ($imgfile_b, $new_imgfile);
            
            $query = "UPDATE images SET name = $url WHERE id = $id";
            
            $result = mysql_query($query) or die($query);
            
            $query = "UPDATE presentation SET p_url = $url WHERE p_url = $old_url";
                
             $result = mysql_query($query) or die($query);
                
  ?>

<form action="index.php?act=ired" method="post">
    <script language="javascript">
    document.write ('<input name="id" type="hidden" value="<?php echo $id;?>"/></form>');
    document.forms[0].submit();
    </script>
<?php

  } 
        
}  else {
                ?>
<script lenguich="javascript">alert('Файл слишком велик.')</script>
<?php
   
}
?>
