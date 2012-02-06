<?php

/*
 * created by arcady.1254@gmail.com 2/2/2012
 */
$slide = 1;

//print_r($allpres_array);

?>
<div>
    <table border="0">
        <form action="index.php?act=name" method="post">
             <tr>
            <td>
                <p>Название презентации&nbsp;&nbsp;&nbsp;
                    
                    <?php 
                    if(!isset ($attributes[select])){
                    ?>
                 <input type="text"reqired size="64" name="name" value=""/>
                 
                 <input type="submit" name="action" value="Создать"/>
                 <?php 
                    }
                    
                    if(count($allpres_array)){
                    
                     ?>
<!--                 <select name="select" onchange="document.location='index.php?act=new&select=1&name_id='+this.options[this.selectedIndex].value">
                     
                     <option value="0">Выберите презентацию</option>-->
                 <?php
     foreach ($allpres_array as $value) {
          $selected = "";
         if($attributes[name_id] == $value[id])$selected = "selected";
         ?>
<!--                     <option value="<?php echo $value[id];?>" <?php echo $selected;?> ><?php echo $value[name];?></option>-->
         <?php
     }
     ?>
<!--                 </select>-->
<!--                 <input type="submit" name="action" value="Выбрать"/>-->
       <?php              
                 }?>
                 
                </p> 
            </td>
        </tr>
        </form>
       
        <?php 
 if(isset ($attributes[name_id]) && $attributes[name_id]){       
        if(!isset ($attributes[slide]) or $attributes[slide] != 1){?>
        <form action="index.php?act=add" method="post">
            <input type="hidden" name="user_id" value="<?php echo $_SESSION[id];?>"/>
            <input type="hidden" name="name" value="<?php echo $presentation_array[0][name];?>"/>
        <?php if (!count($presentation_array)){ ?>
        <tr>
            <td>
                       
                               
            </td>
        </tr>
        

        <tr>
            <td>
                <p>Слайд 1</p>
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="id" value="<?php echo $presentation_array[0][id];?>"/>
               <input type="text" size="64" name="url" value="<?php echo $presentation_array[0][p_url];?>"/>                          
            </td>
            <td>
               <input type="text" size="4" name="times" value="<?php echo $presentation_array[0][time];?>"/> min.                         
            </td>
        </tr>
       <tr>
           <td align="right">
               <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
               <input type="submit" name="action" value="Изменить"/> 
           </td>
           
           <?php }else{ 
           
           foreach ($presentation_array as $key => $value) {
         
    ?>
       <form action="index.php?act=add" method="post">
        <tr>
            <td>
                       
                               
            </td>
        </tr>
        

        <tr>
            <td>
                <p>Слайд <?php echo $slide;?></p>
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="id" value="<?php echo $presentation_array[$key][id];?>"/>
               <input type="text" size="64" name="url" value="<?php echo $presentation_array[$key][p_url];?>"/>                          
            </td>
            <td>
               <input type="text" size="4" name="times" value="<?php echo $presentation_array[$key][time];?>"/> min.                         
            </td>
        </tr>
        <tr> 
            <td align="right">
                <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
               <input type="submit" name="action" value="Изменить"/> 
           </td>
        </tr>
       </form>
        <?php 
        $slide++;
       }
 
           }
       }else{  
           
     foreach ($presentation_array as $key => $value) {
         
    ?>
       <form action="index.php?act=add" method="post">
        <tr>
            <td>
                       
                               
            </td>
        </tr>
        

        <tr>
            <td>
                <p>Слайд <?php echo $slide;?></p>
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="id" value="<?php echo $presentation_array[$key][id];?>"/>
               <input type="text" size="64" name="url" value="<?php echo $presentation_array[$key][p_url];?>"/>                          
            </td>
            <td>
               <input type="text" size="4" name="times" value="<?php echo $presentation_array[$key][time];?>"/> min.                         
            </td>
        </tr>
        <tr> 
            <td align="right">
                <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
               <input type="submit" name="action" value="Изменить"/> 
           </td>
        </tr>
       </form>
        <?php 
        $slide++;
       }
       
       ?>
    <form action="index.php?act=add" method="post">
            <input type="hidden" name="user_id" value="<?php echo $_SESSION[id];?>"/>
            <input type="hidden" name="name" value="<?php echo $presentation_array[0][name];?>"/>
       
        <tr>
            <td>
                       
                               
            </td>
        </tr>
        

        <tr>
            <td>
                <p>Слайд <?php echo $slide;?></p>
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="name_id" value="<?php echo $attributes[name_id];?>"/>
               <input type="text" size="64" name="url" value=""/>                          
            </td>
            <td>
               <input type="text" size="4" name="times" value=""/> min.                         
            </td>
        </tr>
       <tr> 
            <td align="right">
               <input type="submit" name="action" value="Сохранить"/> 
           </td>
           <?php 

           ?>

           <?php }?>
        </tr>
        </form> 
       <tr>
           <td>
               &nbsp;
           </td>
       </tr>
        <tr>
        <form action="index.php?act=add" method="post">
            <?php
               unset ($attributes[act]);
               unset ($attributes[PHPSESSID]);
               
                       foreach ($attributes as $key => $value) {
                          ?>
            <input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>"/>
            <?php
                             
                  }
            
            ?>
<!--            <input type="hidden" name="otkel" value=""/>-->
           <td align="right">
               <input type="submit" name="action" value="Добавить слайд"/>
           </td>
           
           <td colspan="2" align="left">
               <input type="submit" name="action" value="Вернутся"/>
           </td>
        </form>
        </tr>
        
    </table>
  <?php }?>  
</div>