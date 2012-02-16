<?php

/*
 * created by arcady.1254@gmail.com 10/2/2012
 */
?>
<br/>
<br/>
<div class="images">
<!--    <img src="<?php echo $site[name];?>" width="600" alt="images"/>-->
</div>
<div>
    <br/>
    <br/>
</div>
<div class="img_red">
    <table border="0">
        <tr>
<form action="index.php?act=chglink" method="post">
    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td>
        
        <input type="hidden" name="id" value="<?php echo $site[id];?>"/>
                
        <input name="name" size="62" type="text" value="<?php echo $site[name];?>" required/>
       
    </td>
    <td colspan="2">
        <input type="submit" value="Заменить ссылку"/>&nbsp;&nbsp;
    </td>
</form>
</tr>
<tr>
    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td colspan="2">
        <small>В формате "http:// адрес веб-страницы."</small> 
    </td>
</tr>
        <tr>
<form action="index.php?act=chcoml" method="post">
    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td>
<!--        <p><?php echo $site[comment];?></p>-->
        <input type="hidden" name="id" value="<?php echo $site[id];?>"/>
        <input name="comment" size="62" type="text" value='<?php echo $site[comment];?>' required/>
       
    </td>
    <td colspan="2">
        <input type="submit" value="Изменить комментарий"/>&nbsp;&nbsp;
    </td>
</form>
</tr>
<tr><td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td colspan="2">
        <small>Комментарий к ссылке.</small> 
    </td>
</tr>
    </table>
</div>
