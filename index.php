<?php
    #require_once "models/DataBase.php";
    if (!isset($_REQUEST['c'])) {
        require_once "Controller/Landing.php";
        $controller = new Landing;
        $controller->main();
    } else {
        $controller = $_REQUEST['c'];
        require_once "Controller/" . $controller . ".php";
        $controller = new $controller;
        $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';
        call_user_func(array($controller, $action));
    }

#se verifica el ruteo y esta bien, se verifica consola en navegador y todo ok

?>