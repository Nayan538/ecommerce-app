<?php

include('app/Http/Core/View.php');

$view = new View;

$view->loadLayouts('ecommerce.top');
$view->loadLayouts('ecommerce.header');
$view->loadContent('ecommerce.category-list');
$view->loadLayouts('ecommerce.tail');
