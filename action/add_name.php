<?php

/*
 * created by arcady.1254@gmail.com 3/2/2012
 */

$user_id = intval($_SESSION[id]);

if(isset ($attributes[action]) && $attributes[action] == "Создать"){

$name = quote_smart($attributes[name]);

$query = "INSERT INTO names (user, name) VALUES ($user_id, $name)";

mysql_query($query) or die($query);

$name_id = mysql_insert_id();

header("location:index.php?act=red&name_id=$name_id");

}

if(isset ($attributes[action]) && $attributes[action] == "Выбрать"){
    ?>
<form action="index.php?act=new" method="post">
    <script language="javascript">
    document.write ('<input name="select" type="hidden" value="1"><input name="name_id" type="hidden" value="<?php echo $attributes[select];?>"></form>');
    document.forms[0].submit();
    </script>
<?php
}
?>
