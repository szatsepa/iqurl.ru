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

//print_r($_REQUEST);
//echo "<br/>";

//print_r($_SESSION);
//echo "<br/>";
//print_r($attributes);  

  
include 'main/connect.php';
include 'action/quotesmart.php';

if($attributes[act] != 'registration'){
include 'classes/classes.php';
if(isset ($_SESSION[id])) include 'query/checkauth.php';

}

switch ($attributes[act]) {
    
    case "look": 
        $title = "Презентация";
        include 'query/presentations_list.php';
        include 'main/header.php';
        include 'main/selector.php';
//        include 'main/presentations_list.php';
        break;
    
    case 'registration':
        $title = "Регистрация";
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/registration.php';
        break;
    
    case 'reg':
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
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/my_presentation.php';
        break;
    
    case 'red':
        $title = "Редактор";
        include 'query/presentation.php';
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/edit_p.php'; 
             
        break;
    
    case 'arch':
        $title = "Архив изображений";
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
    
    case 'sred':
        $title = "Редактор звуковых файлов";
        include 'query/my_sound.php'; 
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/sound_red.php';
        break;
    
    case 'lred':
        $title = "Редактор ссылок";
        include 'query/my_link.php'; 
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/link_red.php';
        break;
    
    case 'alink':
        $title = "Архив ссылок";
        include 'query/my_links.php';
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/my_links.php'; 
        break;
    
    case 'snd':
        $title = "Архив звуков.";
        include 'query/my_sounds.php'; 
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/my_sounds.php';
        break;
    
    case 'atsnd':
        $title = "Выбор звуковых файлов.";
        include 'query/my_sounds.php'; 
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/attach_sounds.php';
        break; 
    
    case 'selimg':
        $title = "Выбор слайдов.";
        include 'query/my_images_for_select.php'; 
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/select_images.php';
        break;
    
    case 'attachsound':
        include 'main/header.php';
        include 'action/attach_sound.php';
        break;
    
    case 'changeimg':
        include 'main/header.php';
        include 'action/change_image_in_slide.php'; 
        break;
    
    case 'changepriority':
        include 'main/header.php';
        include 'action/change_priority.php';
        break; 
    
    case 'addimg':
        include 'main/header.php';
        include 'action/add_image_in_slide.php'; 
        break;
    
    case 'setime':
        include 'main/header.php';
        include 'action/set_time_slide.php'; 
        break;
    
    case 'select':
        $title = "Добавить элемент.";
        include 'query/presentations.php'; 
        include 'main/header.php';
        include 'main/selector.php';
        include 'main/add_element.php';
        break;
    
    case 'addel':
        include 'main/header.php';
        include 'action/add_element.php';
        break;
    
    case 'chgi': 
        include 'main/header.php';
        include 'action/change_image.php';
        break;
    
    case 'chcomi':
        include 'action/change_comment_img.php';
        break;
    
    case 'chcoml':
        include 'action/change_comment_link.php';
        break;
    
    case 'chcoms': 
        include 'action/change_comment_sound.php';
        break;
    
     case 'chgsnd': 
        include 'main/header.php';
        include 'action/change_sound.php';
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
    
    case 'usnd':
        include 'main/header.php';
        include 'action/upload_sound.php';
        break;
    
    case 'edit':
        include 'action/edit_presentation.php'; 
        break;
    
    case 'sedit':
        include 'action/edit_sound.php';
        break;
    
    case 'ename':
        include 'action/edit_name.php';
        break;

    case 'dels':
        include 'action/del_slide_with_img.php';
        break;
    
    case 'str':
        include 'action/add_string.php';
        break;
    
    case 'wstr':
        include 'action/add_link_to_presentation.php';
        break;
    
    case 'alnk':
        include 'action/add_link.php'; 
        break;
    
    case 'asnd':
        include 'action/add_sound.php';
        break;
    
    case 'ddel':
        include 'action/del_pres_with_img.php';
        break;
    
    case 'del':
        include 'main/header.php';
        include 'main/question.php';
        break;
    
    case 'view':
        include 'query/presentation.php';
        $title = "$name";
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
        include 'main/header.php';
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
