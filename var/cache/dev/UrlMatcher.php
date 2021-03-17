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
        '/newClient' => [[['_route' => 'newClient', '_controller' => 'App\\Controller\\ClientController::client'], null, null, null, false, false, null]],
        '/materiellist' => [[['_route' => 'materiellist', '_controller' => 'App\\Controller\\MaterielController::show'], null, null, null, false, false, null]],
        '/materiel' => [[['_route' => 'materiel', '_controller' => 'App\\Controller\\MaterielController::new'], null, null, null, false, false, null]],
        '/contactlist' => [[['_route' => 'contactlist', '_controller' => 'App\\Controller\\MonController::show'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\MonController::new'], null, null, null, false, false, null]],
        '/navbar' => [[['_route' => 'app_mon_navbar', '_controller' => 'App\\Controller\\MonController::navbar'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MonController::home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'a_propos', '_controller' => 'App\\Controller\\MonController::about'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'product', '_controller' => 'App\\Controller\\MonController::produit'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'services', '_controller' => 'App\\Controller\\MonController::services'], null, null, null, false, false, null]],
        '/newProduct' => [[['_route' => 'newProduct', '_controller' => 'App\\Controller\\ProductController::product'], null, null, null, false, false, null]],
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
                .'|/materiel/(?'
                    .'|edit/(\\d+)(*:192)'
                    .'|delete/(\\d+)(*:212)'
                .')'
                .'|/contact/(?'
                    .'|edit/(\\d+)(*:243)'
                    .'|delete/(\\d+)(*:263)'
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
        192 => [[['_route' => 'app_materiel_edit', '_controller' => 'App\\Controller\\MaterielController::edit'], ['id'], null, null, false, true, null]],
        212 => [[['_route' => 'app_materiel_delete', '_controller' => 'App\\Controller\\MaterielController::delete'], ['id'], null, null, false, true, null]],
        243 => [[['_route' => 'app_mon_edit', '_controller' => 'App\\Controller\\MonController::edit'], ['id'], null, null, false, true, null]],
        263 => [
            [['_route' => 'app_mon_delete', '_controller' => 'App\\Controller\\MonController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
