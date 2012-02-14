<?php

/*
 * created by arcady.1254@gmail.com 14/2/2012
 */

foreach ($allpres_array as $value) {
    
    ?>
<div>
    <table>
        <tr>
            <td colspan="2">
                
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;
            </td>
            <td><p>
                <form action="index.php?act=view" method="post" target="_blank">
                    <input type="hidden" name="name_id" value="<?php echo $value[id];?>"/>
                    <input type="hidden" name="frame" value="0"/>
                    <input class="list" type="text" size="64" value="<?php echo $value[name];?>" disabled/>
                    <input type="submit" value="Смотреть"/>
                 </form>
           </p> </td>
        </tr>
    </table>
    
</div>
    <?php
}
?>
