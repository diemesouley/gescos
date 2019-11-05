<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/gesCos' => [[['_route' => 'gesCos_Name', '_controller' => 'App\\Controller\\GesCosController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\GesCosController::home'], null, null, null, false, false, null]],
        '/Categorie/new' => [[['_route' => 'Categorie_new', '_controller' => 'App\\Controller\\GesCosController::create'], null, null, null, false, false, null]],
        '/Fournisseur/new' => [[['_route' => 'Fournisseur_new', '_controller' => 'App\\Controller\\GesCosController::createFournisseur'], null, null, null, false, false, null]],
        '/Client/new' => [[['_route' => 'Client_new', '_controller' => 'App\\Controller\\GesCosController::createClient'], null, null, null, false, false, null]],
        '/Type/new' => [[['_route' => 'Type_new', '_controller' => 'App\\Controller\\GesCosController::createType'], null, null, null, false, false, null]],
        '/Detail/new' => [[['_route' => 'Detail_new', '_controller' => 'App\\Controller\\GesCosController::createDetail'], null, null, null, false, false, null]],
        '/Produit/new' => [[['_route' => 'Produit_new', '_controller' => 'App\\Controller\\GesCosController::createProduit'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
