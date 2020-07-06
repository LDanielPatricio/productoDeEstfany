<?php
date_default_timezone_set('America/Lima');
					 $fecha_actual=date("d-m-Y H:i:s");
$nombre = $_POST['name'];
$tel = $_POST['phone'];

				 
if (isset($_POST['enviar'])){
if($nombre &&  $tel){

if(preg_match('/^(?=.{3,36}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $nombre)){

	if(strlen($tel)>7){
    date_default_timezone_set('America/Lima');
					 $fecha_actual=date("d-m-Y H:i:s");
$nombre = $_POST['name'];
$tel = $_POST['phone'];


$to = 'danielupla_1@hotmail.com,estefanycc29@hotmail.com';
$subject='NUEVO PEDIDO DESDE LANDING ;-)';

	
		

	$message = "CONSULTA\n";
    $message.= "Momento de la CONSULTA: " . $fecha_actual . "\n";
    $message.= "Nombre: " . $nombre . "\n";
    $message.= "Teléfono: " . $tel . "\n";
    //$message.= "foto: " . $ruta . "\n";
   mail ($to,$subject,$message);
	echo "<script> alert ('Consulta ingresada correctamente.')</script>"."<a href='index.php'>Enviar otra consulta</a>";
	
	/*'<div style="width:70%; height:100px; margin:0 auto; text-align:center; background-color:#90EE90; border:1px solid #063;"><div style="color:red; margin-top:25px; font-size:30px; font-family:arial black;">Su mensaje ha sido enviado.</div></div>'*/
		
	}else{
	
		echo "Tu telefono es demasiado pequeño!";
	
	}
	
	}else{
	
		echo "Por favor escribe un nombre válido!";
	
	}
	
}
}
// else{

// 		echo "por favor completa la cartlla";
// }
// mysqli_close($link);

?>