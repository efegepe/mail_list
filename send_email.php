<?php  

require_once 'swift/lib/swift_required.php';

// api key de sendgrid
// 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 
	
	$first_name="";
	$last_name="";
	$email="";
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	

if(!empty($subject)){

	if(!empty($message)){

			$titulo = "Nueva newsletter!!";
			$postear = 'Thanks for submitting the form. <br />';


	
			$dbc = mysqli_connect('localhost','root','','elvis_store')or die("Error al conectar a la base de datos");

			$query = "SELECT * FROM email_list";

			$data = mysqli_query($dbc,$query)or die("Error escribiendo en la base de datos");
			while($row = mysqli_fetch_array($data)){
				echo $row['first_name'].' '.$row['last_name'].' '.$row['email'].'<br />';
			}
			mysqli_close($dbc);



	}else{

		echo 'No hay mensaje. <br />';
		mostrar_formulario();
	}
}else{

		echo 'No hay asunto. <br />';
		mostrar_formulario();
}

	

function mostrar_formulario(){

	echo '<form action="send_email.php" method="post">';

	echo '<label for="subject">Subject:</label>';
	echo '<input type="text" id="subject" name="subject"/> <br />';
	echo '<label for="message">Message:</label>';
	echo '<input type="text" id="message" name="message" sixe="32"/> <br />';
	echo '<input type="submit" value="Report abduction" name="submit">';

	echo '</form>';
}





// smtp.sendgrid.net
//
//



/*

$transport = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 465,'ssl')
->setUsername('efegp')
->setPassword('fuck.mandril1')
;
$mailer = Swift_Mailer::newInstance($transport); 

$message = Swift_Message::newInstance($titulo)
  ->setFrom(array('cuenta_inventada@hostinventado.com' => 'John Doe'))
  ->setTo(array('fgp.trabajo@gmx.es' => 'A name'))
  ->setBody($postear, 'text/html', 'iso-8859-1');

//Finalmente enviamos el mensaje 
$result = $mailer->send($message); 

*/








?>