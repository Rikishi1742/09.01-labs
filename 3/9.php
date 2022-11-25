<?php
    $page_title = 'PHP-включения';
    include ('includes/1.html');
    echo '<form action="include.php" method="POST">
    <p>Имя: <input type="text" name="name"</p>
    <p>Email: <input type="text" name="email"></p>
    <p><input type="submit"></p></form>';
    include ('includes/2.html');
?>
