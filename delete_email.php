<?php  

require_once 'swift/lib/swift_required.php';

	
	$email=$_POST['email'];;
	

	

	
$dbc = mysqli_connect('localhost','root','','elvis_store')or die("Error al conectar a la base de datos");

$query = "DELETE FROM email_list WHERE email = '$email'";

$data = mysqli_query($dbc,$query)or die("Error borrando en la base de datos");

echo $email.' ha sido borrado de la lista de distribución' .'<br />';

mysqli_close($dbc);




?>