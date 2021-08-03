<?php

use Slim\Factory\AppFactory;

chdir(dirname(__DIR__));

require './vendor/autoload.php';

$app = AppFactory::create();

require './config/routes/routes.php';

$app->run();
