<?php
function checkVar($name) {
	if(!array_key_exists($name,$_POST) || empty($_POST[$name])) {
		return false;
	}
	return true;
}
function truncateWord($str, $len = 20) {
	return substr ($str, 0, $len);
}

if(checkVar("name") && checkVar("lastname") && checkVar("phone")) {
	$name = truncateWord($_POST["name"]);
	$lastname = truncateWord($_POST["lastname"]);
	$phone = truncateWord($_POST['phone'], 13);
	$email_from = "webmaster@mcconsultaauditiva.com";
	$to = "formulario@mcconsultaauditiva.com";
//	$to = "redrudeboy@gmail.com";
	$subject = "Cliente nuevo: ".$name;
	$message = "Nombre: ".$name."\r\n"."Apellidos: ".$lastname."\r\n"."Teléfono de contacto: ".$phone."\r\n\r\n\r\n";
	if(checkVar("answers")) {
		$message .= "Se encuentra en las siguientes situaciones:\r\n";
		if(isset($_POST["answers"][1])) {
			$message .= "A veces oye sin entender las palabras\r\n";
		}
		if(isset($_POST["answers"][2])) {
			$message .= "Se hace repetir las palabras\r\n";
		}
		if(isset($_POST["answers"][3])) {
			$message .= "Le cuesta seguir una conversación\r\n";
		}
		if(isset($_POST["answers"][4])) {
			$message .= "Le resulta dificultoso hablar por teléfono\r\n";
		}
		if(isset($_POST["answers"][5])) {
			$message .= "Pone el volumen de la TV/Radio más alto que el resto de su familia\r\n";
		}
		if(isset($_POST["answers"][6])) {
			$message .= "Padece de zumbidos en el oído (acúfenos)\r\n";
		}
		if(isset($_POST["answers"][7])) {
			$message .= "Se siente aislado/a en las reuniones familiares o con amigos porque no entiende bien lo que dicen\r\n";
		}
		if(isset($_POST["answers"][8])) {
			$message .= "Las personas que conviven con usted le comentan que no oye algunos sonidos\r\n";
		}
	}

	// Send mail
	$message = wordwrap($message, 70, "\r\n");
	$headers = "From: $email_from \r\n";
	mail($to, $subject, $message, $headers);
}
if(checkVar('lang')) {
	header('Location: home.php?page=Contact&lang='.$_POST['lang']);die('Redirect a home');
} else {
	header('Location: home.php?page=Contact');die('Redirect a home');
}
