<?php

include './../app/Http/Core/View.php';

$view = new View;

$view->loadLayout('session');
$view->loadLayout('admin.top');
$view->loadLayout('admin.header');
$view->loadLayout('admin.sidebar');
// $view->loadContent('admin.');
echo 'Add image slider';
$view->loadLayout('admin.tail');
