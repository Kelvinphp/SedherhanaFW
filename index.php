    <?php

    require_once __DIR__ . "/AutoLoader.php";

    use app\Router;
    use app\Controller;

    $kernel = new Router($_GET);
    $controller = $kernel->getController();
    $controller->ExecuteAction();
