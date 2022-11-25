<?php
if (isset($_POST['definition']))
{
    $definition = $_POST['definition'];
}
else
{
    $definition = NULL;
}

if ($definition!=NULL)
{
    if ($definition!= 'Объектно ореинтированный')
    {
        echo "$definition - Неправильно!";
    }
    else
    {
        echo "$definition - Правильно!";
    }
}
else
{
    echo 'Вы длжны выбрать один из вариантов ответа!';
}
?>