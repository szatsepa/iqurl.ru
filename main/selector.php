<?php

/*
 * created by arcady.1254@gmail.com 2/2/2012
 */

?>
<div class="selector">&nbsp;
<?php 

if (!isset ($_SESSION[id])) {
    ?>
    <div class="selector2">
        <form id="13">
            <input id="psw" type="password" name="code" size="18" value="" style='font-size:8pt;'  />
            <input type="submit" value="Войти" class='submit3' style='color:green' onclick="javascript:userAuth('psw');"/>
          </form>   
    </div>
    <div class="selector2">
        <input type="submit" value="Регистрация" class='submit3' style='color:green' onclick="document.location='http://iqurl.ru/index.php?act=registration'"/>
            
         
    </div>
<?php } else { 
    // To Do Если имя и фамилия очень длинные, то выводить только фамилию
    ?>
    
<span class="selector3">
    
<form action='index.php?act=logout' method='post'>
    <?php echo $user->data[name]." ". $user->data[surname];?>  
    <input type='submit' class='submit3' value='X' style='color:red'/>
</form>
</span>
   

<?php
if(isset($_SESSION[auth])){
    ?>
<div>
    <table>
        <tr>
            <td>
              <form action="index.php?act=pres" method="post">
                 <input type="submit" value="Мои презентации" class="zakaz" />
             </form> 
            </td>
             <td>
              <form action="index.php?act=new" method="post">
                  <input type="submit" value="&nbsp;Создать&nbsp;&nbsp;новую&nbsp;" class="zakaz" />
             </form>
            </td>
            <td>
              <form action="index.php?act=arch" method="post">
                  <input type="submit" value="Архив изображений" class="zakaz" />
             </form>
               
            </td>
            <td>
              <form action="index.php?act=alink" method="post">
                  <input type="submit" value="Архив ссылок" class="zakaz" />
             </form>
               
            </td>
            <td>
                 <form action="index.php?act=snd" method="post">
                     <input type="submit" value="&nbsp;Архив&nbsp;звуков&nbsp;" class="zakaz" />
                </form>
            </td>
        </tr>
    </table>
    <span class="selector">
        
       
    </span>
</div>
<?php }


?></div>
<div>
    <br/><br/>
<?php if ($title != '') echo "<h2>".""."</h2>"; }?>
</div>
<script type="text/javascript" language="JavaScript">
    function userAuth(id){
        
        var obj = document.getElementById(id);
        
        var passw = obj.value;
        
        document.write ('<form action="index.php?act=auth" method="post"><input type="hidden" name="code" value="'+passw+'"/></form>');
        document.forms[0].submit();
        
        return false;
        
    }
    function userReg(url){
//      alert(url);  
//      document.location.href = url;
        document.write ('<form action="'+url+'" method="post"></form>');
        document.forms[0].submit();
        return false;
    }

</script>