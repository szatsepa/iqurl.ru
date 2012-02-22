<?php

/*
 * created by arcady.1254@gmail.com
 */
$this_sound = "http://".$_SERVER[SERVER_NAME]."/sound/".$sound[name];

$comment = str_replace('"', "'", $sound[comment]);

?>
<br/>
<br/>
<div id="players">
 <object type="application/x-shockwave-flash" data="./flash/dewplayer-vol.swf?mp3=<?php echo $this_sound;?>" width="240" height="20" id="dewplayer-vol"><param name="wmode" value="transparent" /><param name="movie" value="./flash/dewplayer-vol.swf?mp3=<?php echo $this_sound;?>" /></object>   
</div>
<div>
<br/>
    <br/>
</div>
<div class="img_red">
    <table>
        <tr>

    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td>
        <form enctype="multipart/form-data" action="index.php?act=chgsnd" method="post">
        <input type="hidden" name="name" value="<?php echo $sound[name];?>"/>
        <input type="hidden" name="id" value="<?php echo $sound[id];?>"/>
        <input name="soundfile" size="50" accept="multimedia/*.mp3" type="file" required/>
       &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <input type="image" name="prelo" id="pld" style="display: none;" src="images/circle.gif" disabled/> 
        
    </td>
    <td colspan="2">
        <input type="submit" value="Заменить&nbsp;&nbsp; аудиофайл" onclick="javascript:preload('pld');"/>&nbsp;&nbsp;
    </td>
</form>
</tr>
<tr><td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td colspan="2">
        <p><small>Формат загружаемого файла должен быть исключительно mp3</small></p> 
    </td>
</tr>
 <tr>
<form action="index.php?act=chcoms" method="post"> 
    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td>
        
        <input type="hidden" name="id" value="<?php echo $sound[id];?>"/>
        <input name="comment" size="62" type="text" value="<?php echo $comment;?>" required/>
       
    </td>
    <td colspan="2">
        <input type="submit" value="Изменить комментарий"/>&nbsp;&nbsp;
    </td>
</form>
</tr>
<tr>
    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td colspan="2">
        <p><small>Комментарий к звуковому файлу.</small> </p>
    </td>
</tr>
    </table>
</div>