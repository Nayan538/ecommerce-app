

<?php

include('app/Http/Core/View.php');

$view = new View;

$view->loadLayout('ecommerce.top');
$view->loadLayout('ecommerce.header');
$view->loadContent('ecommerce.category-banner-boxed-image');
$view->loadLayout('ecommerce.tail');
