<?php

use function src\slimConfiguration;
use App\Controllers\ArchiveController;
use App\Controllers\AuthController;

// Create and configure Slim app
$app = new \Slim\App(slimConfiguration());
// Define app routes

$app->post('/thales/login', AuthController::class . ':PostLogin');

$app->get('/thales/archive', ArchiveController::class . ':getIccid');

// Run app


$app->run();