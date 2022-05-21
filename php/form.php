<?php
    //variables 
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $mensaje =$_POST['textarea'];

    //destinario temporal

    $para = 'ignaciojo.zamora@gmail.com';
    $asunto = 'Solicitud de contacto Silverymoon Swim';
    
    mail ($para, $asunto, utf8_decode($nombre, $email, $phone, $mensaje));

    header('Location:pages/exito.html');









?>