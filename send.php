<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['text'];
    
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    $name = urldecode($name);
    $email = urldecode($email);
    $message = urldecode($message);

    $name = trim($name);
    $email = trim($email);
    $message = trim($message);

    if (mail("mikhailbalandin10a@gmail.com",
    "Письмо с сайта",
    "От: ".$name."\n".
    "Email: ".$email."\n".
    "Сообщение: ".$message."\n",
    "From: no-reply@mydomain.ru \r\n")
    ){
        echo ('Письмо отправлено');
    }
    else{
        echo('Ошибка!');
    }
?>