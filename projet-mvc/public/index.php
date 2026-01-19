<?php




switch ($_SERVER['REQUEST_URI']) {
    case '/home':
        echo 'this is home';
        break;

    case '/ ':
       
        break;

    case '/livre':
        echo 'this is livre';
        break;

    default:
        echo 'this is home';
        break;
}