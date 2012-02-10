<?php

/*
 * created by arcady.1254@gmail.com 10/2/2012
 */

$name_id = intval($attributes[name_id]);

$id = intval($attributes[id]);

$user_id = $_SESSION[id];

$obj = $attributes[obj];

$type = 0;

if($obj == "img"){
    
    $type = 1;
    
   $query = "SELECT Count(id) FROM presentation WHERE name_id = $name_id AND p_url = $id AND type = 1";
    
}else if($obj == "snd"){
    
    $query = "SELECT Count(id) FROM presentation WHERE name_id = $name_id AND sound = $id";
}else if($obj == "lnk"){
    
    $query = "SELECT Count(id) FROM presentation WHERE name_id = $name_id AND p_url = $id AND type = 0";
    
}

$result = mysql_query($query) or die($query);

$row = mysql_fetch_row($result);

if($row[0] == 0){
    
    if($obj == "img"){
        
          $query = "INSERT INTO presentation (name_id, user_id, p_url, type) VALUES ($name_id, $user_id, $id, (SELECT id FROM images WHERE id = $id))";
    
        }else if($obj == "lnk"){
    
         $query = "INSERT INTO presentation (name_id, user_id, p_url) VALUES ($name_id, $user_id, $id)";
        }else if($obj == "snd"){
    
         $query = "INSERT INTO presentation (name_id, user_id, sound) VALUES ($name_id, $user_id, $id)";
    }

$result = mysql_query($query) or die ($query);


}  else {
    ?>
<script language="javascript">if(confirm("Такой запиsy вже е - перейдите в редактор?")){
    document.write ('<form action="index.php?act=red" method="post"><input name="name_id" type="hidden" value="<?php echo $name_id;?>"/></form>');
    document.forms[0].submit();
}else{
    document.write ('<form action="index.php?act=pres" method="post"><input name="name_id" type="hidden" value="<?php echo $name_id;?>"/></form>');
    document.forms[0].submit();
}</script>     
<?php
}
?>
