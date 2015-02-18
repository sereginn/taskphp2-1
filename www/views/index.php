<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Лента Новостей</title>
</head>
<body>
<?php
foreach ($listnews as $new):
    echo $new['title'];
    endforeach; ?>
</body>
</html>