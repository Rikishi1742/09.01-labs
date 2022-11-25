<?php
if (!empty($_POST['quantity']))
{
    $quantity = $_POST['quantity'];

    if (!is_numeric($quantity))
    {
        $quantity = null;
        echo 'Количество нужно указать в иде числа<br>';
    }
}
else
{
    $quantity = null;
    echo "необходимо указать количество <br>";
}

if (!empty($_POST['email']))
{
    $email = $_POST['email'];
    $pattern = '/\b[\w. -]+@[\w. -]+\.[A-Za-z]{2,6}\b/';
    if (!preg_match($pattern, $email))
    {
        $email = null;
        echo 'Адрес электронной почты указан в недопустимом формате!';
    }
}
else
{
    $email = null;
    echo 'Необходимо указать адрес электронной почты!';
}

if(($squantity!=null) && ($email!=null))
{
    echo "Адрес email: $email<br>Количество: $quantity ";
}
?>