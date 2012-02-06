<?php

/*
 * created by arcady.1254@gmail.com 3/2/2012
 */

$key = 0;


if(isset ($attributes[frame]))$key = intval($attributes[frame]);

if($key == count($presentation_array))$key = 0;

?>
<script>
var min = 0;
var sec = <?php echo $presentation_array[$key][time];?>;
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

     <iframe src="<?php echo $presentation_array[$key][p_url];?>" width="100%" height="1050" align="center">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>
</div>