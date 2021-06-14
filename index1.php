
<?php
include ('Route.php');
include ('view/Teacher_view.php');
$route = new Route();
$route->add("/");
$route->add('t/create');
$route->add('t/update');
$route->add('t/delete');


$route->submit();