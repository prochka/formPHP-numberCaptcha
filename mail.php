<?php
session_start();

if(isset($_POST['spam'])){$spam = $_POST['spam'];}
if(empty($spam)){
	if($_POST['submit']){
		if($_POST['res'] == $_SESSION['res']){
			$to = 'mail@mail.ru';
			$subject = 'Письмо с сайта';
			$body = $_POST['text'];
			$headers = 'Content-type:text/plain; Charset=windows-1251';

			if(mail($to, $subject, $body, $headers)){
				$_SESSION['mes'] = 'Письмо отправлено!';
				header("Location: http://localhost:3000");
				exit();
			}else{
				$_SESSION['mes'] = '<p>Ошибка!</p>';
				header("Location: http://localhost:3000");
				exit();
			}
		}else{
			$_SESSION['mes'] = 'Дан неверный ответ!';
			header("Location: http://localhost:3000");
			exit();
		}
	}
}
else exit();

$a = rand(1,10);
$b = rand(1,10);
$_SESSION['res'] = $a + $b;
?>

