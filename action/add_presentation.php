<?php

/*
 * created by arcady.1254@gmail.com 2/2/2012
 */
$slide = intval($attributes[slide]);

$user_id = intval($_SESSION[id]);

//$attributes[action] = trim($attributes[action]);

if(isset ($attributes[action]) && $attributes[action] == "Сохранить"){
    

    $name_id = quote_smart($attributes[name_id]);

    $url = quote_smart ($attributes[url]);
       
    $time = intval($attributes[times]); 
        
        $query = "INSERT INTO presentation (name_id, user_id, p_url, time) VALUES ($name_id, $user_id, $url, $time)";

        $result = mysql_query($query) or die($query);
    
    header("location:index.php?act=red&name_id=$attributes[name_id]");

   

}else if(isset ($attributes[action]) && $attributes[action] == "Вернутся"){
    
 header("location:index.php?act=look");
    
}else if(isset ($attributes[action]) && $attributes[action] == "Добавить слайд"){
   
    $str_out = "location:index.php?act=new&slide=1";
    
    unset($attributes[act]);
    
    unset ($attributes[action]);
   
    foreach ($attributes as $key => $value) {
        
        $str_out = $str_out."&".$key."=".$value;
        
    }
    
   header("$str_out");
    
}else if(isset ($attributes[action]) && $attributes[action] == "Изменить"){
    
    $name = quote_smart($attributes[name]);

    $url = quote_smart ($attributes[url]);
       
    $time = intval($attributes[times]); 
    
    $id = intval($attributes[id]);
        
     $query = "UPDATE presentation SET p_url = $url, time = $time WHERE id = $id";

    $result = mysql_query($query) or die($query);
    
    header("location:index.php?act=new&select=1&name_id=$attributes[name_id]");
   
}
    
    
    
 ?>

