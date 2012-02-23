<?php

/*
 * created by arcady.1254@gmail.com 23/2/2012
 */

?>
<script type="text/javascript">
    
    var pres_array = new Array();
    
    var el = new Object();
    
    var sc = new Object();
    
    var sound = new Object();
   
    var out = '';
    
    var sec = 0;
    
    var step = 0;
    
//    var  content_text = '';
    
    <?php 
    foreach ($presentation as $value) {
        ?>
         var presentation = new Object();
         <?php
        foreach ($value as $key => $var) {
         ?>   
             presentation['<?php echo $key;?>'] = '<?php echo $var;?>';
             
<?php
         }
         ?>
             pres_array.push(presentation);
             <?php
    }
    ?>  

sec = pres_array[step]['time'];

var img = pres_array[step]['img_link'];

var lnk = pres_array[step]['lnk_link'];

var snd = pres_array[step]['filename'];

var type = pres_array[step]['type'];

var visual_link = '<iframe id="content" src="'+lnk+'" width="100%" height="1050" align="center">'+lnk+'</iframe>';

if(type == 1){
    
    visual_link = '<img src="'+img+'" width="100%" align="center" alt="image"/>';
 }
 
 
var time_long = sec;

timerid = setInterval(timer,1000); /* запускаем таймер */

function timer() 
{
 if(sec < 0){ 
    window.close();
}  


sc = document.getElementById('seconds');

sc.innerHTML=sec;

if(sec == time_long){
    
//alert(step+" x "+visual_link); 
   
el = document.getElementById('div_id');
    
el.innerHTML =  visual_link;

        sound = document.getElementById('sound');
        
//        sound.innerHTML = '<object type="application/x-shockwave-flash" data="./flash/dewplayer-vol.swf?mp3=./sound/'+snd+'&autostart=yes" width="240" height="20" id="dewplayer-vol"><param name="wmode" value="transparent" /><param name="movie" value="./flash/dewplayer-vol.swf?mp3=./sound/'+snd+'&autostart=yes" /></object>';

}

sec--; /* уменьшаем на одну секунду */  

if (sec == 0)
  { step++;
     time_long =  sec = pres_array[step]['time'];
      
 img = pres_array[step]['img_link'];

 lnk = pres_array[step]['lnk_link'];
 
 snd = pres_array[step]['filename'];
 
 type = pres_array[step]['type'];
 
visual_link = '<iframe id="content" src="'+lnk+'" width="100%" height="1050" align="center">'+lnk+'</iframe>';

if(type == 1){
    
    visual_link = '<img src="'+img+'" width="100%" align="center" alt="image"/>';
 }
     
       }
       

}

</script>
<div>
    <center><span id="seconds" style="font-size: 16px;font-weight: bolder"></span> секунд.</center> 
</div>
<div id="sound">
    
</div>
<div id="div_id">
    
</div>