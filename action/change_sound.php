<?php

/*
 * created by arcady.1254@gmail.com 8/2/2012
 */
$soundfile_b   = $document_root . '/sound/' . basename($_FILES['soundfile']['name']);

$tmp_name =  basename($_FILES['soundfile']['tmp_name']); 

$user_id = intval($_SESSION[id]);

$id = intval($attributes[id]);

$name = $attributes[name];

$flnm = "snd". time().'.mp3';

$new_soundfile = $document_root ."/sound/". $flnm;

$del_file = $document_root."/sound/".$name;

//echo "to sho dell $del_file<br/>";
if (!move_uploaded_file($_FILES['soundfile']['tmp_name'], $new_soundfile)) {
  
    ?>
<script language="javascript">alert('Ошибка при копировании файла')</script>
<?php
} else {
             
$url = quote_smart($flnm);

$query = "UPDATE sounds SET name = $url WHERE id = $id";

$result = mysql_query($query) or die($query);

if($result){
    
    unlink($del_file);
}
                
  ?>

<script language="javascript">alert('Файл загружен');</script>
<form action="index.php?act=sred" method="post">
    <script language="javascript">
    document.write ('<input name="id" type="hidden" value="<?php echo $id;?>"/></form>');
    document.forms[0].submit();
    </script>

<?php } ?>
