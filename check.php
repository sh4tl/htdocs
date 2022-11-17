<?php
	
	
	
	//print_r($_POST);
	$email = $_POST['email'];
	$message = $_POST['message'];

	$error = '';
	if(trim($email)=='')
		{
			$error = 'Введите email';
		}
	elseif (trim($message) == '')
		{
			$error = 'Введите сообщение';
		}
	elseif(strlen($message) < 10)
		$error = 'Сообщение должно быть больше 10 символов';

	if($error != '')
	{
		echo $error;
		exit();
	}

	$subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
	$headers = "From: $email\r\n Reply-to: $email\r\n Context-type: text/html;charset=utf-8\r\n";

	mail('sveatogor07@yandex.ru', $subject, $message, $headers);
	print 'Отправлено';
	
	
		

  
	
  ?>

 <?php  header('Location: /about.php');?>