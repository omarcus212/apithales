<?php

use function src\slimConfiguration;
use App\Controllers\testeController;

// Create and configure Slim app
$app = new \Slim\App(slimConfiguration());
// Define app routes
$app->get('/thales', testeController::class . ':getIccid');

// Run app


$app->run();