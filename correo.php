<?php 
    $destinatario = 'parachichon75@gmail.com';//correo a envia el formulario
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $numero = $_POST['number'];
    $asunto = $_POST['asunto'];
    $sistema = $_POST['sistema'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la pagina de Grupo Contsulta";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Correo Enviado Exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",500)</script>";
?>