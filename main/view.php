<?php

/*
 * created by arcady.1254@gmail.com 23/2/2012
 */

?>
<script type="text/javascript">
    
    var pres_array = new Array();
    
    var el = new Object();
    
    var step = 0;
    
    var repeat = <?php echo $repeat;?>;
    
    var all_sound = "<?php echo $sound_0;?>";
    
    var pr_snd_yes = false;
    
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
        
var sec = get_string_content(pres_array, step)['time'];

var time_long = get_string_content(pres_array, step)['time'];

timerid = setInterval(timer,1000); /* запускаем таймер */

function timer()  
{
 
 if(!pr_snd_yes){
     pr_snd_yes = true;
     if(all_sound){
         
           el = document.getElementById("presentation_snd");
           el.innerHTML = '<object type="application/x-shockwave-flash" data="./flash/dewplayer-vol.swf?mp3=./sound/'+all_sound+'&autostart=yes" width="240" height="20" id="dewplayer-vol"><param name="wmode" value="transparent" /><param name="movie" value="./flash/dewplayer-vol.swf?mp3=./sound/'+all_sound+'&autostart=yes" /></object>';
    }

  }
 if(sec < 0){ 
     if(repeat == 1){
         step = 0;
time_long =  sec = get_string_content(pres_array, step)['time'];
 
     }else{
         window.close();
//        clearInterval(timerid); /* останавливаем таймер */
     }
   
}  

el = document.getElementById('seconds');

el.innerHTML= sec;

if(sec == time_long){

var this_obj = get_string_content(pres_array, step);
    
el = document.getElementById('div_id');
    
el.innerHTML =  this_obj['image'];

el = document.getElementById('sound');
        
el.innerHTML = this_obj['sound'];

//alert(this_obj['fast']);

if(this_obj['fast']){
    
   el = document.getElementById('fast');  
   
   el.innerHTML = this_obj['fast'];
}

sec--; /* уменьшаем на одну секунду */  

if (sec == 0)
  { step++;
     time_long =  sec = get_string_content(pres_array, step)['time'];
    }
       

}
return false;
}
function get_string_content(arr, pos){

    var pres_obj = new Object();
     
     var img = arr[pos]['img_link'];
     
     var img_comment = arr[pos]['img'];

     var lnk = arr[pos]['lnk_link'];

    var type = arr[pos]['type'];
    
    var snd_name = arr[pos]['filename'];
    
    var fust = arr[pos]['fast'];
    
    pres_obj['image'] = '<iframe id="content" src="'+lnk+'" width="100%" height="1050" align="center">'+lnk+'</iframe>';

    if(type == 1){
    
        pres_obj['image'] = '<div><center><p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>'+img_comment+'</strong></p></center></div><img src="'+img+'" width="100%" align="center" alt="image"/>';
     }
    
    if(snd_name){
        pres_obj['sound'] = '<object type="application/x-shockwave-flash" data="./flash/dewplayer-vol.swf?mp3=./sound/'+snd_name+'&autostart=yes" width="240" height="20" id="dewplayer-vol"><param name="wmode" value="transparent" /><param name="movie" value="./flash/dewplayer-vol.swf?mp3=./sound/'+snd_name+'&autostart=yes" /></object>';
    }else{
        pres_obj['sound'] = '';
    }
    
    pres_obj['time'] =  arr[pos]['time']; 
    if(arr[pos]['fast'] != 0){
        pres_obj['fast'] = '<input type="image" src="./images/quick_btn.png" width="27" height="27" align="center" alt="button"/>';
    }else{
        pres_obj['fast']=null;
    }
    
    
 return pres_obj;
}
</script> 
<div class="hohee"></div>
<div class="hoh">
<div class="seconds"> <center><span id="seconds"></span></center></div>   
<div id="fast"></div>     
<div id="presentation_snd"></div>   
<div id="sound"></div>      
</div>
<div id="div_id">
    
</div>