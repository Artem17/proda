<?php
   $back = "<p><a href=\"javascript: history.back()\">��������� �����</a></p>";
 
   if(!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['mail'])){
      $name = trim(strip_tags($_POST['name']));
      $mail = trim(strip_tags($_POST['mail']));
      $phone = trim(strip_tags($_POST['phone']));
      
      



      mail('Naymka99@yandex.ru', '������ � �����', 
      '��� �������: '.$name.'<br />��� �����: '.$phone.'<br />��� �����: '.$mail.
      "Content-type:text/html;charset=windows-1251");
 
      echo "���� ��������� ������� ����������!<Br> �� �������� ����� � 
      ��������� �����<Br> $back";
 
      exit;
   } 
   else {
      echo "��� �������� ��������� ��������� ��� ����! $back";
      exit;
   }
?>