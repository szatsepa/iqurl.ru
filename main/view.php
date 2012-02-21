<?php

/*
 * created by arcady.1254@gmail.com 3/2/2012
 */

$key = 0;

$cnt = count($presentation);

if(isset ($attributes[frame]))$key = intval($attributes[frame]);

if($key == $cnt){
    
    $key = 0;

    if($repeat != 0){
        
?> 
<script language="javascript">

   document.location = "index.php?act=view&frame=0&name_id=<?php echo $attributes[name_id];?>";

</script>
  <?php  
     }  else {
         
        
echo '<script language="javascript">window.close();</script>';

     }
    }

$this_sound = "./sound/".$presentation[$key][filename];



if($cnt == 0){
    ?>
<script language="javascript">
    if(confirm("ПРЕЗЕНТАЦИЯ НЕ ГОТОВА К ПОКАЗУ.\n                  ВЕРНУТЬСЯ?")){
        window.close();
    }
</script>

    <?php
}

?>
<script>
    
var min = 0;
var sec = <?php echo $presentation[$key][time];?>;
//var checked = "0";
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
<?php 
if($presentation[$key][sound]){  
?>
<br/>
<div id="players">
 <object type="application/x-shockwave-flash" data="./flash/dewplayer-vol.swf?mp3=<?php echo $this_sound;?>&autostart=yes" width="240" height="20" id="dewplayer-vol"><param name="wmode" value="transparent" /><param name="movie" value="./flash/dewplayer-vol.swf?mp3=<?php echo $this_sound;?>&autostart=yes" /></object>   
<!--        <object type="application/x-shockwave-flash" data="./flash/audio_player.swf" id="audioplayer1" height="24" width="288">  
        <param name="movie" value="./flash/audio_player.swf"></param>  
        <param name="FlashVars" value="playerID=1&autostart=yes&loop=no&bg=0xffffff&loader=0xcccccc&border=0xcccccc&text=0x8c8c8c&leftbg=0xcccccc&lefticon=0xffffff&righticon=0xffffff&slider=0xcccccc&rightbg=0xcccccc&soundFile=<?php echo $this_sound;?>"></param>  
        <param name="quality" value="high"></param>  
        <param name="menu" value="false"></param>  
        <param name="wmode" value="transparent"></param>  
    </object>  -->
</div>
<?php }?>
<div>
    <?php if($presentation[$key][lnk_link] && $presentation[$key][type] == 0){?>
     <iframe src="<?php echo $presentation[$key][lnk_link];?>" width="100%" height="1050" align="center">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>
 <?php }else{ ?>
 <center><p>&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $presentation[$key][img];?></strong></p></center>
    <img src="<?php echo $presentation[$key][img_link];?>" width="100%" align="center" alt="image"/>
 <?php }?>
</div>