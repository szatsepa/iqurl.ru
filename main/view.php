<?php

/*
 * created by arcady.1254@gmail.com 23/2/2012
 */

?>
<script type="text/javascript">
    
    var pres_array = new Array();
    
    var el = new Object();
    
    var step_on = 0;
    
    var repeat = <?php echo $repeat;?>;
    
    var all_sound = "<?php echo $sound_0;?>";
    
    var pr_snd_yes = false;
    
    var timerid = 0;
    
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


_start(step_on, false);



function _start(stp, nbtn){

    var step = stp;
   
    var sec = get_string_content(pres_array, step)['time'];
    
    var time_long = sec;
    
    if(nbtn){
       timer(true);
//       alert(sc+' '+stp) ; 
    }

timerid = setInterval(timer,1000); /* запускаем таймер */

function timer(what)
{
 if(what){
    step = step_on;
 }   
if(sec < 0 || step == pres_array.length){
if(repeat == 1){
step_on = step = 0;
time_long = sec = get_string_content(pres_array, step)['time'];
}else{
window.close();
}
}
if(!pr_snd_yes){
pr_snd_yes = true;
if(all_sound){
el = document.getElementById("presentation_snd");
el.innerHTML = '<object type="application/x-shockwave-flash" data="./flash/dewplayer-vol.swf?mp3=./sound/'+all_sound+'&autostart=yes" width="240" height="20" id="dewplayer-vol"><param name="wmode" value="transparent" /><param name="movie" value="./flash/dewplayer-vol.swf?mp3=./sound/'+all_sound+'&autostart=yes" /></object>';
}

}


el = document.getElementById('seconds');

el.innerHTML= sec+' s.';

if(sec == time_long){
el = document.getElementById('div_id');
el.innerHTML = get_string_content(pres_array, step)['image'];

el = document.getElementById('sound');
el.innerHTML = get_string_content(pres_array, step)['sound'];

el = document.getElementById('fast');

if(!get_string_content(pres_array, step)['fast']){

el.style.display = "none"; 

}else{
 
 el.style.display = "block";
 
}

}

sec--; /* уменьшаем на одну секунду */

if (sec == 0)
{ 
step++;
step_on = step;
time_long = sec = get_string_content(pres_array, step)['time'];
}

}
return true;
}

function get_string_content(arr, pos){

var pres_obj = new Object();
var img = arr[pos]['img_link'];
var img_comment = arr[pos]['img'];

var lnk = arr[pos]['lnk_link'];

var type = arr[pos]['type'];
var snd_name = arr[pos]['filename'];
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
        pres_obj['fast'] = true;
    }else{
        pres_obj['fast']=false;
    }
   
    
return pres_obj;
}
function _next(){
step_on++;
var nstp = step_on;
var nsc = get_string_content(pres_array, nstp)['time'];
_start(nstp,true);
}
</script> 
<div class="hohee"></div>
<div class="hoh">
<div class="seconds"> <center><span id="seconds"></span></center></div>   
<div id="fast"><input type="image" src="./images/quick_btn.png" width="27" height="27" align="center" alt="button" onclick="javascript:_next();"/></div>     
<div id="presentation_snd"></div>   
<div id="sound"></div>      
</div>
<div id="div_id">
    
</div>