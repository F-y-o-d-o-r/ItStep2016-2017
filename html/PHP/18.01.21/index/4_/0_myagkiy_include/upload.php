<?php
if(isset($_FILES['userfile'])) {
$dir='/home/localhost/www/';
 for($i=0; $i<count($_FILES['userfile']['tmp_name']); $i++) {
   if(copy($_FILES['userfile']['tmp_name'][$i], $dir.$_FILES['userfile']['name'][$i])) {
           //echo $_FILES['userfile']['name'][$i].'<br>';
   }
   else {
        echo 'Файл(ы) '.$_FILES['userfile']['name'][$i].' загрузить не удалось!<br>';
   }
 }
}
?>