<?php 
// var_dump($_SERVER['REQUEST_URI']);

$url = $_SERVER['REQUEST_URI'];

switch ($url) {
    case 'login':
        include 'auth_page/login.php';  
        break;
    case 'register':
        include 'auth.page/register.php';  
        break;
    default:
        echo'<h1>Homepage<h1>';
}
var_dump(parse_url($_SERVER['REQUEST_URI']));
?>