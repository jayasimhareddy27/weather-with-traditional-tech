<?php 
$urlrequest=$_SERVER['REQUEST_URI'];
switch ($urlrequest) {

    case '':
    case '/weather/':
    case '/weather/home.php':
        require __DIR__ . '/views/home.php';
        break;

    case '/weather/aboutus.php':
        require __DIR__ . '/views/aboutus.php';
        break;




    case '/weather/login.php':
        require __DIR__ . '/app/login.php';
        break;

    case '/weather/app.php':
        require __DIR__ . '/app/app.php';
        break;
    case '/weather/logout.php':
            require __DIR__ . '/app/logout.php';
            break;
    
            
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>
