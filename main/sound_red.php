<?php

/*
 * created by arcady.1254@gmail.com
 */
$this_sound = "http://".$_SERVER[SERVER_NAME]."/sound/".$sound[name];

$comment = str_replace('"', "'", $sound[comment]);

?>
<br/>
<br/>
<div class="images">
    <object width="290" height="24" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0">
    <param name="allowScriptAccess" value="sameDomain" />
    <param name="movie" value="http://www.yapfiles.ru/files/148503/player.swf" />
    <param name="wmode" value="opaque" />
    <param name="bgcolor" value="#FFFFFF" />
    <param name="scale" value="showall" />
    <param name="quality" value="autohigh" />
    <param name="align" value="l" />
    <param name="FlashVars" value="autostart=no&loop=no&soundFile=<?php echo $this_sound;?>" />
    <embed width="290" height="24" swliveconnect="default" src="http://www.yapfiles.ru/files/148503/player.swf" wmode="opaque" bgcolor="#FFFFFF" scale="showall" quality="autohigh" loop="false" menu="false" play="false" name="" base="" salign="tl" FlashVars="autostart=no&loop=no&soundFile=<?php echo $this_sound;?>" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
    </embed>
</object>
</div>
<div>
<br/>
    <br/>
</div>
<div class="img_red">
    <table>
        <tr>
<form enctype="multipart/form-data" action="index.php?act=chgsnd" method="post">
    <td>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    </td>
    <td>
        <input type="hidden" name="name" value="<?php echo $sound[name];?>"/>
        <input type="hidden" name="id" value="<?php echo $sound[id];?>"/>
        <input name="soundfile" size="50" accept="multimedia/*.mp3" type="file" required/>
       
    </td>
    <td colspan="2">
        <input type="submit" value="Заменить&nbsp;&nbsp; аудиофайл"/>&nbsp;&nbsp;
    </td>
</form>
</tr>
<tr>
    <td colspan="3">
        <small>Формат загружаемого файла должен быть исключительно mp3</small> 
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
    <td colspan="3">
        <small>Комментарий к звуковому файлу.</small> 
    </td>
</tr>
    </table>
</div>