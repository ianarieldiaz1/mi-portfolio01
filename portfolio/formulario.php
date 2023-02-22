<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre']; 
    $apellido = $_POST['apellido']; 
    $email = $_POST['email']; 
    $mensaje = $_POST['mensaje'];  
    
    $para = 'iandiaz343@gmail.com'; 
    $asunto = 'Mensaje desde el sitio web'; 
    $mensaje_correo = "Nombre: $nombre $apellido\nEmail: $email\nMensaje:\n$mensaje";   
    
    mail($para, $asunto, $mensaje_correo);  
    header('Location: formulario_enviado.html'); exit(); 
}
?>

