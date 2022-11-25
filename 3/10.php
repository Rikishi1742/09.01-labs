<?php
if (isset ($_GET['id']))
{
    $id = $_GET['id'];
    switch ($id)
    {
        case 1: echo 'Выбрана корова<hr>'; break;
        case 2: echo 'Выбрана лошадь<hr>'; break;
        case 3: echo 'Выбрана коза<hr>'; break;
    }
   
}
echo '<h1>Выбирите животное</h1>';
echo '<p><a href="link.php?id=1">корова</a> |';
echo '<p><a href="link.php?id=1">Лошадь</a> |';
echo '<p><a href="link.php?id=1">Коза</a> |';
?>
