<?php

/*
 * created by arcady.1254@gmail.com 13/2/2012
 */

include('kcaptcha/kcaptcha.php');
session_start();
require_once("config.php");


if ($_POST['action']== "y")
{
if(isset($_SESSION['keystring']) && $_SESSION['keystring'] ==  $_POST['keystring'])
{

if (isset($_POST['name']) && $_POST['name'] == "")
{
$statusError = "$errors_name";
}
elseif (isset($_POST['email']) && $_POST['email'] == "")
{
$statusError = "$errors_mailfrom";
}
elseif(isset($_POST['email']) && !preg_match("/^([a-z,._,0-9])+@([a-z,._,0-9])+(.([a-z])+)+$/", $_POST['email']))
{
$statusError = "$errors_incorrect";

foreach ($_POST as $key => $value) {
    unset ($_POST[$key]);
}
}
elseif (isset($_POST['phone']) && $_POST['phone'] == "")
{
$statusError = "$errors_subject";
}
elseif (isset($_POST['surname']) && $_POST['surname'] == "")
{
$statusError = "$errors_message";
}

elseif (!empty($_POST)) 
{
 $message ="Здравствуйте $attributes[surname] $attributes[name]! Вы зарегистрировались на сайте $_SERVER[SERVER_NAME]. Ваш индивидуальный ключ - $_POST[keystring].\r\nC уважением. Администрация.\r\n Date:". date("Y-m-d (H:i:s)",time());              
             
             $headers = 'From: administrator@'. $_SERVER[SERVER_NAME]. "\r\n";
            
            $headers  .= 'MIME-Version: 1.0' . "\r\n";
            
            $headers .= 'Content-type: text/plain; charset=utf-8' . "\r\n";
        
             if (mail("$attributes[email],7905415@mail.ru,crazylag@mail.ru", 'Регистрация на '. $_SERVER[SERVER_NAME], $message, $headers)){
                
                 $name = quote_smart($attributes[name]);
                 
                 $surname = quote_smart($attributes[surname]);
                 
                 $patronymic = quote_smart($attributes[patronymic]);
                 
                 $email = quote_smart($attributes[email]);
                 
                 $phone = quote_smart($attributes[phone]);
                 
                 $pwd = quote_smart($attributes[keystring]);
                 
                 $query = "INSERT INTO users (name, patronymic, surname, email, phone, pwd) VALUES ($name, $patronymic, $surname, $email, $phone, $pwd)";
                 
                 $result = mysql_query($query) or die($query);
                 
                 $id = mysql_insert_id();
 
                 if($id){
                    
                     $_SESSION[id] = $id;
                     
                     $_SESSION[auth] = 1;
                     header("location:index.php?act=auth&code=$attributes[keystring]");                    

                 }
             }

$statusSuccess = "$send";

}

}else{
$statusError = "$captcha_error";
unset($_SESSION['keystring']);
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
<form action="#" method="post" id="cForm">
<input type="hidden" name="action" value="y" />
<fieldset>
<label for="posName"><b>Ваше имя*:</b></label>
<input required class="text" type="text" size="25" name="name" value="<?php echo $attributes[name];?>" id="posName" />
<label for="posName"><b>Ваше отчество:</b></label>
<input class="text" type="text" size="25" name="patronymic" value="<?php echo $attributes[patronymic];?>" id="posName" />
<label required for="posName"><b>Ваше фамилия*:</b></label>
<input class="text" type="text" size="25" name="surname" value="<?php echo $attributes[surname];?>" id="posName" />
<label required for="email"><b>Ваш E-mail адрес*:</b></label>
<input class="text" type="text" size="25" name="email" value="<?php echo $attributes[email];?>" id="email" />
<label for="posRegard"><b>Ваш телефон:</b></label>
<input class="text" type="text" size="25" name="phone" value="<?php echo $attributes[phone];?>" id="posRegard" />
<label for="posCaptcha"><center><b>Текст на изображении (цифры)</b>:</label>
<img src="kcaptcha?<?php echo session_name()?>=<?php echo session_id()?>" border=0></center>
 <input class="text" type="text" size="25" name="keystring" id="keystring" />
 <br><br><label><center>
    <input class="submit" type="submit" name="selfCC" id="selfCC" value=" Отправить " />
     </center>
</label>
</fieldset>

</form>
</div>
</div>
