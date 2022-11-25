<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php $_SEPVER['PHP_SELF']?>" enctype="multipart/form-data">
        <p>Выберите изображение для выгрузки на сервер:</p>
        <input type="file" name="image">
        <input type="submit" value="Отправить файл">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_FILES['image']['name'];
        $temp = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];

        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $ext = strtolower($ext);
        if($ext!='png' && $ext != 'jpg' && $ext != 'gif')
        {echo 'Изображение должно быть формата PNG, JPG ИЛИ GIF'; exit();}

        if($size > 512000)
        {echo 'Файл не должен превышать 500 Кб'; exit();}

        if(file_exists($name))
        {echo 'Файл' .$name. 'уже был выгружен'; exit();}

        try {
            move_uploaded_file($temp, $name);
            echo 'Файл выгружен: ' .$name;
            echo '<br><img src ="'.$name.'">';
        }
        catch(Exception $e)
        {   
            echo 'Сбой выгрузки файла!';
        }
    }
    ?>
</body>
</html>
