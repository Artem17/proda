<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
   if(!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['mail'])){
      $name = trim(strip_tags($_POST['name']));
      $mail = trim(strip_tags($_POST['mail']));
      $phone = trim(strip_tags($_POST['phone']));
      
      



      mail('Naymka99@yandex.ru', 'Письмо с сайта', 
      'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail.
      "Content-type:text/html;charset=windows-1251");
 
      echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";
 
      exit;
   } 
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>