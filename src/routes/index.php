<?php

use function src\slimConfiguration;
use App\Controllers\ArchiveController;

// Create and configure Slim app
$app = new \Slim\App(slimConfiguration());
// Define app routes
$app->get('/thales', ArchiveController::class . ':getIccid');

// Run app


$app->run();