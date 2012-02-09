<?php

/*
 * created by arcady.1254@gmail.com 8/2/2012
 */

$soundfile_b   = $document_root . '/sound/' . basename($_FILES['soundfile']['name']);

$user_id = intval($_SESSION[id]);

if (!move_uploaded_file($_FILES['soundfile']['tmp_name'], $soundfile_b)) {
  
    ?>
<script language="javascript">alert('Ошибка при копировании файла')</script>
<?php
} else {
            
             $flnm = "snd".time().'.mp3';
            
             $new_soundfile = $document_root."/sound/". $flnm;

             $url = quote_smart($flnm);
            
            // Переименуем загруженный файл
           if(rename ($soundfile_b, $new_soundfile)){
            
            $query = "INSERT INTO sounds (user_id, name) VALUES ($user_id, $url)";
            
            $result = mysql_query($query) or die($query);
            
            $insid = mysql_insert_id();
            
           if($insid != 0){
            
            ?>

<form action="index.php?act=snd" method="post">
    <script language="javascript">
    document.write ('<input name="id" type="hidden" value="<?php echo $insid;?>"/></form>');
    document.forms[0].submit();
    </script>
<?php
 }
           }
  } 

?>
