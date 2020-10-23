<?php

if(isset($_POST[email])&& !empty($_POST[email])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$message = addslashes($_POST['message']);
$phone = addslashes($_POST['phone']);

$to = "simone@simonebramanteadvogados.com";
$subject = "Formulario do Site";
$body = "Nome: ".$nome. "\r\n". 
        "Email: ".$email."\r\n".
        "Telefone: ".$phone."\r\n". 
        "Mensagem: ".$message;

$header = "From:simone@simonebramanteadvogados.com"."\r\n".
            "Reply-To:".$email."\r\n"
            ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("E-mail enviado com sucesso");
}else{
    echo("O e-mail não poder ser enviado");
}
            
}

?>