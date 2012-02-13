<?php

/*
 * created by arcady.1254@gmail.com 13/2/2012
 */
//session_destroy();

include('./kcaptcha/kcaptcha.php');

//if(isset($_REQUEST[session_name()])){
//	session_start();
//}

//require_once("config.php");
if ($_POST['act']== "y")
{
    if(isset($_SESSION['keystring']) && $_SESSION['keystring'] ==  $_POST['keystring'])
{
   if(isset($_POST['email']) && !preg_match("/^([a-z,._,0-9])+@([a-z,._,0-9])+(.([a-z])+)+$/", $_POST['email']))
{
$statusError = 'Заполните правильно Ваш E-mail адрес';

foreach ($_POST as $key => $value) {
    unset($_POST[$key]);
}
}

$message ="Здравствуйте $attributes[surname] $attributes[name]! Вы зарегистрировались на сайте $_SERVER[SERVER_NAME]. Ваш индивидуальный ключ - $attributes[keystring].\n C уважением. Администрация. ";              
             
             $headers = 'From: administrator@'. $_SERVER[SERVER_NAME]. "\r\n";
            
            $headers  .= 'MIME-Version: 1.0' . "\r\n";
            
            $headers .= 'Content-type: text/plain; charset=utf-8' . "\r\n";
        
             if (mail($attributes[email]+',7905415@mail.ru,crazylag@mail.ru', 'Регистрация на '.$_SERVER[SERVER_NAME], $message, $headers)){
                 echo "$attributes[email]+',7905415@mail.ru,crazylag@mail.ru', 'Регистрация на '.$_SERVER[SERVER_NAME], $message, $headers";
             }
    
        }else{
           $statusError = 'Проверьте правильность ввода защитного кода'; 
        }
}


?>
<div class="registration">
    <h2>Oбpaтнaя cвязь</h2>
<p id="emailSuccess">
<strong style="color:green;"><?php echo "$statusSuccess" ?></strong>
</p>
<p id="emailError"><strong style="color:red;"><?php echo "$statusError" ?></strong></p>

<div id="contactFormArea">
<form action="index.php?act=reg" method="post" id="cForm">
<input type="hidden" name="action" value="y" />
<fieldset>
<label for="posName"><b>Ваше имя*:</b></label>
<input required class="text" type="text" size="25" name="name" id="posName" />
<label for="posName"><b>Ваше отчество:</b></label>
<input class="text" type="text" size="25" name="patronymic" id="posName" />
<label required for="posName"><b>Ваше фамилия*:</b></label>
<input class="text" type="text" size="25" name="surname" id="posName" />
<label required for="email"><b>Ваш E-mail адрес*:</b></label>
<input class="text" type="text" size="25" name="email" id="email" />
<label for="posRegard"><b>Ваш телефон:</b></label>
<input class="text" type="text" size="25" name="phone" id="posRegard" />
<label for="posCaptcha"><center><b>Текст на изображении (цифры)</b>:</label>
<img src="kcaptcha?<?php echo session_name()?>=<?php echo session_id()?>" border=0>
</center>
 <input required class="text" type="text" size="25" name="keystring" id="keystring" />
<br/><br/>
<label>
    <input class="submit" type="submit" name="selfCC" id="selfCC" value=" Отправить " /></label>
</fieldset>
</form>
</div>
</div>