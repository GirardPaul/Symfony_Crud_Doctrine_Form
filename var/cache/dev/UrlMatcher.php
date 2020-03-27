<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/aliment' => [[['_route' => 'admin_aliment', '_controller' => 'App\\Controller\\Admin\\AdminAlimentController::index'], null, null, null, false, false, null]],
        '/admin/aliment/creation' => [[['_route' => 'admin_aliment_creation', '_controller' => 'App\\Controller\\Admin\\AdminAlimentController::ajoutEtModif'], null, null, null, false, false, null]],
        '/admin/type' => [[['_route' => 'admin_types', '_controller' => 'App\\Controller\\Admin\\AdminTypeController::index'], null, null, null, false, false, null]],
        '/admin/type/create' => [[['_route' => 'ajoutType', '_controller' => 'App\\Controller\\Admin\\AdminTypeController::ajoutEtModif'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\AdminSecuController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\AdminSecuController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\AdminSecuController::deconnexion'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'aliments', '_controller' => 'App\\Controller\\AlimentController::index'], null, null, null, false, false, null]],
        '/types' => [[['_route' => 'types', '_controller' => 'App\\Controller\\TypeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|aliment/([^/]++)(?'
                            .'|(*:201)'
                        .')'
                        .'|type/([^/]++)(?'
                            .'|(*:226)'
                        .')'
                    .')'
                    .'|liments/(?'
                        .'|calorie/([^/]++)(*:263)'
                        .'|glucide/([^/]++)(*:287)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [
            [['_route' => 'admin_aliment_modification', '_controller' => 'App\\Controller\\Admin\\AdminAlimentController::ajoutEtModif'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin_aliment_suppression', '_controller' => 'App\\Controller\\Admin\\AdminAlimentController::suppression'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        226 => [
            [['_route' => 'modifType', '_controller' => 'App\\Controller\\Admin\\AdminTypeController::ajoutEtModif'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null],
            [['_route' => 'deleteType', '_controller' => 'App\\Controller\\Admin\\AdminTypeController::deleteType'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        263 => [[['_route' => 'alimentsParCalorie', '_controller' => 'App\\Controller\\AlimentController::alimentsMoinsCaloriques'], ['calorie'], null, null, false, true, null]],
        287 => [
            [['_route' => 'alimentsParGlucide', '_controller' => 'App\\Controller\\AlimentController::alimentsAvecMoinsGlucides'], ['glucide'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
