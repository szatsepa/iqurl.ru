<?php

/*
 * created by arcady.1254@gmail.com 2/2/2012
 */

class User{
    
    var $data;
    
    function _constract(){
        $this->data = array();
    }
    
    function setUser($id){  
        
        $query = "SELECT * FROM users WHERE id = $id";
        
        $result = mysql_query($query) or die ($query);
        
        $row = mysql_fetch_assoc($result);
        
        $this->data = $row; 
        
        unset($row);
        
        mysql_free_result($result);
    }
 
}
?>
