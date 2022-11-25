<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action_handler.php" method="POST">
        <dl>
            <dt>Имя:</dt>
            <dd><input type="text" name="name"></dd>
            <dt>Адрес email:</dt>
            <dd><input type="text" name="mail"></dd>
            <dt>Примечание:</dt>
            <dd><textarea name="comment" id="" cols="20" rows="5">
            </textarea></dd>
        </dl>
        <p><input type="submit"></p>
    </form>
</body>
</html>
