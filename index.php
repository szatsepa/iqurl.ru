 <?php
 // created by arcady.1254@gmail.com 2/2/2012
 if(!isset($attributes) || !is_array($attributes)) {
        $attributes = array();
        $attributes = array_merge($_GET,$_POST,$_COOKIE); 
}
if(!isset($_SESSION)){

    session_start();  
}
if(isset($attributes[di]) && !isset ($_SESSION[auth])){
         
   $_SESSION[id] = $attributes[di];
   
   $_SESSION[auth] = 1;
         
}
//print_r($_SESSION);
//echo "<br/>";
//print_r($attributes);
//echo "<br/>POST => ";
//print_r($_SERVER); 

include 'main/connect.php';
include 'action/quotesmart.php';
include 'classes/classes.php';
if(isset ($_SESSION[id])) include 'query/checkauth.php';

switch ($attributes[act]) {
    
    case "look":
        $title = "Презентация";
        
        include 'main/header.php';
        include 'main/selector.php';
        break;
    
    case "new":
        $title = "Новая презентация";
        
        include 'query/presentations.php';
        include 'query/presentation.php';
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/new_presentation.php';
        break;
    
    case 'pres':
        $title = "Мои презентации";
        include 'query/presentations.php';
        include 'query/presentation.php';
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/my_presentation.php';
        break;
    
    case 'red':
        $title = "Редактор";
        include 'query/name.php';
        include 'query/presentation.php';
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/edit_p.php'; 
             
        break;
    
    case 'arch':
        $title = "Мой архив";
        include 'query/my_images.php';
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/my_images.php'; 
        break;
    
    case 'ired':
        $title = "Редактор изображений";
        include 'query/my_image.php'; 
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/images_red.php';
        break;
    
    case 'chgi': 
        include 'main/header.php';
        include 'action/change_image.php';
        break;
    
    case 'idel':
        include 'main/header.php';
        include 'main/i_question.php';
        break;
    
    case 'ddeli':
        include 'action/del_image.php';
        break;
    
    case 'uimg':
        include 'main/header.php';
        include 'action/upload_image.php';
        break;
    
    case 'edit':
        include 'action/edit_presentation.php'; 
        break;
    
    case 'ename':
        include 'action/edit_name.php';
        break;
    
    case 'dels':
        include 'main/header.php';
        include 'main/question_s.php';
        break;
    
    case 'ddels':
        include 'action/del_slide_with_img.php';
        break;
    
    case 'str':
        include 'action/add_string.php';
        break;
    
    case 'ddel':
        include 'action/del_pres_with_img.php';
        break;
    
    case 'del':
        include 'main/header.php';
        include 'main/question.php';
        break;
    
    case 'view':
        $title = "Моя презентация";
        include 'query/presentation.php';
        include 'main/header.php';
        include 'main/view.php';
        break;
    
    case 'name':
        include 'action/add_name.php';
        break;
    
    case "add":
        include 'action/add_presentation.php';
        break;
    
    case 'auth':
        include 'action/authentication.php';
       break;
    
    case "logout":
        include ("action/logout.php");
     break;
 
     case 'statistics':
         include 'action/statistics.php';
         break;
     
    default :
        include 'action/redirect.php';
        break;
}
include 'main/footer.php';
include 'main/disconnect.php';
?>
