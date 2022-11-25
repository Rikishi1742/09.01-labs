<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php $_SEPVER['PHP_SELF']?>">
        <p>Имя: <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name'];?>"></p>
        <p> Email:
            <input type="text" name="email" value="<?php if (isset($_POST['email']))
            echo $_POST['email'];?>">
        </p>
        <p><input type="submit"></p>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $errosr = array();
        if (empty($_POST['name'])) {$errosr[] = 'name';}
        else {$name = trim($_POST['name']);}

        if (empty($_POST['email'])) {$errosr[] = 'email';}
        else {$name = trim($_POST['email']);}

        if(!empty($errosr))
        {
            echo 'Ошибка! Пожалйста, укажите';
            foreach ($errosr as $msg) {echo " - $msg ";}
        }
        else {echo "Форма отправлена! Спасибо, $name";}
    }
    ?>
</body>
</html>
