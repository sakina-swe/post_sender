<?php

declare(strict_types=1);

$router = new Router();

if ($router->isTelegramRequest()) {
    require "routes/telegram.php";
    return;
}

require "routes/web.php";

