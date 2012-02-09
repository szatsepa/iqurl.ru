<?php

/*
 * created by arcady.1254@gmail.com 2/2/2012
 */

?>
<div class="selector">&nbsp;
<?php 

if (!isset ($_SESSION[id])) {
    ?>
    <span class="selector2">
        <form action="index.php?act=auth" method="post">
            <input type="password" name="code" size="18" style='font-size:8pt;'  />
            <input type="submit" value="&gt;&gt;" class='submit3' style='color:green' />
        </form>
    </span>
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