<?php
 require __DIR__ .'/models/news.php';
$listnews=News_GetAll();
include __DIR__ .'/views/index.php';