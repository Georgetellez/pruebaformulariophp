
<?php

//if(isset($_POST['Enviar'])){
  //  if(!empty($_POST['nombre']) && !empty($_POST['contrasena']) && !empty($_POST['email'])){
   //     $name = $_POST['nombre'];
    //    $contrasena = $_POST['contrasena'];
    //    $email = $_POST['email']

    //}
//}
//$nombre = $_POST['nombre'];


//echo $nombre;

//llamando los campos
 $nombre = $_POST['nombre'];
 $contrasena = $_POST['contrasena'];
 $email = $_POST['email'];

//Datos para el correo
$destinatario ="benjamincruz01061995@gmail.com";
$asunto = "registro";

$carta = "De: $nombre \n";
$carta .= "correo: $contrasena\n";
$carta .= "email: $email \n";

//$headers = "From: ejemplo@gmail.com" . "\r\n";
//$headers .= "Reply-To: ejemplo@gmail.com" . "\r\n";
//$headers .= "X-Mail: PHP/" . phpversion();

//Enviando
//$mail = @mail($destinatario,$asunto,$carta,$headers);
//if ($mail){
//    echo "Mail enviado";
//}
mail($destinatario,$asunto,$carta,"FROM: ben@gmail.com");


?>


