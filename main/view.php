<?php

/*
 * created by arcady.1254@gmail.com 3/2/2012
 */

$key = 0;


if(isset ($attributes[frame]))$key = intval($attributes[frame]);

if($key == count($presentation))$key = 0;

$this_sound = "http://".$_SERVER[SERVER_NAME]."/sound/".$presentation[$key][filename];

if(!$presentation[$key][filename]){
    ?>
<script language="javascript">
    if(confirm("ПРЕЗЕНТАЦИЯ НЕ ГОТОВА К ПОКАЗУ.\n                  ВЕРНУТЬСЯ?")){
        document.location = "index.php?act=pres";
    }
</script>

    <?php
}

?>
<script>
var min = 0;
var sec = <?php echo $presentation[$key][time];?>;
var timerid;
function timer()
{
  sec--; /* уменьшаем на одну секунду */
  if (sec<0) /* следующая минута */
  {
    sec = 59;
    min--;
  }
if (min==0 && sec==0)
  {
    clearInterval(timerid); /* останавливаем таймер */

document.location = "index.php?act=view&frame=<?php echo ($key+1);?>&name_id=<?php echo $attributes[name_id];?>";

   
  }
}
 
timerid = setInterval(timer,1000); /* запускаем таймер */

</script>
<object width="290" height="24" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0">
    <param name="allowScriptAccess" value="sameDomain" />
    <param name="movie" value="http://www.yapfiles.ru/files/148503/player.swf" />
    <param name="wmode" value="opaque" />
    <param name="bgcolor" value="#FFFFFF" />
    <param name="scale" value="showall" />
    <param name="quality" value="autohigh" />
    <param name="align" value="l" />
    <param name="FlashVars" value="autostart=yes&loop=no&soundFile=<?php echo $this_sound;?>" />
    <embed width="290" height="24" swliveconnect="default" src="http://www.yapfiles.ru/files/148503/player.swf" wmode="opaque" bgcolor="#FFFFFF" scale="showall" quality="autohigh" loop="false" menu="false" play="false" name="" base="" salign="tl" FlashVars="autostart=yes&loop=no&soundFile=<?php echo $this_sound;?>" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
    </embed>
</object>

<div>
    <?php if($presentation[$key][lnk_link] && $presentation[$key][type] == 0){?>
     <iframe src="<?php echo $presentation[$key][lnk_link];?>" width="100%" height="1050" align="center">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>
 <?php }else{ ?>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $presentation[$key][img];?></strong></p>
    <img src="<?php echo $presentation[$key][img_link];?>" width="100%" align="center" alt="image"/>
 <?php }?>
</div>