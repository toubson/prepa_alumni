<?php
// Routes
$app->get ( '/', App\Action\HomeAction::class )->setName ( 'homepage' );

// Routes for contrats
$app->get ( '/api/contrats', 'App\Action\ContratAction:fetch' );
$app->get ( '/api/contrats/{criterias}', 'App\Action\ContratAction:fetchOne' );

// Routes for users
$app->get ( '/api/users', 'App\Action\UserAction:fetch' );
$app->get ( '/api/users{criterias}', 'App\Action\UserAction:fetchOne' );