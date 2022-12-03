<?php
    $hdr = '<h1 style="color: green">PHP для начинающих</h1>';
    echo $hdr;

    $hdr = filter_var($hdr, FILTER_SANITIZE_STRING);
    echo "Отфильтрованный заголовок: $hdr";

    function validate($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            echo "<hr>$email - Допустимый почтовый адрес";
        }
        else
        {
            echo "<hr>$email - Недопустимый почтовый адрес";
        }
    }

    $email = 'aboba @example.com'; 
    validate($email);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    validate($email);
?>