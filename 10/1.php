<?php
    header("Content-type: text/html; charset=utf-8");
    error_reporting(-1);
    require_once 'funcs.php';

if(!empty($_POST)){
        save_mess();
        header("Location: {$_SERVER['PHP_SELF']}");
        exit; 
}
$messages = get_mess();
$messages = array_mess($messages);
// print_arr($messages);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .messages{
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form action="1.php" method="post">
        <p>
            <label for="name">Имя:</label><br>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="text">Текст:</label><br>
            <textarea  name="text" id="text"></textarea>
        </p>
        <button type="submit">Написать</button>
    </form>

    <hr>
    <?php if(!empty($messages)): ?>
        <?php foreach($messages as $message): ?>
            <?php $message = get_format_message($message); ?>
            <div class="messages">
                <p>Автор: <?=$message[0]?> | Дата: <?=$message[2]?> </p>
                <div><?=htmlspecialchars(nl2br($message[1]))?></div>
            </div>
        <?php endforeach; ?>    
    <?php endif; ?>
</body>
</html>