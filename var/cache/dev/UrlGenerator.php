<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'gesCos_Name' => [[], ['_controller' => 'App\\Controller\\GesCosController::index'], [], [['text', '/gesCos']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\GesCosController::home'], [], [['text', '/']], [], []],
    'Categorie_new' => [[], ['_controller' => 'App\\Controller\\GesCosController::create'], [], [['text', '/Categorie/new']], [], []],
    'Fournisseur_new' => [[], ['_controller' => 'App\\Controller\\GesCosController::createFournisseur'], [], [['text', '/Fournisseur/new']], [], []],
    'Client_new' => [[], ['_controller' => 'App\\Controller\\GesCosController::createClient'], [], [['text', '/Client/new']], [], []],
    'Type_new' => [[], ['_controller' => 'App\\Controller\\GesCosController::createType'], [], [['text', '/Type/new']], [], []],
    'Detail_new' => [[], ['_controller' => 'App\\Controller\\GesCosController::createDetail'], [], [['text', '/Detail/new']], [], []],
    'Produit_new' => [[], ['_controller' => 'App\\Controller\\GesCosController::createProduit'], [], [['text', '/Produit/new']], [], []],
];