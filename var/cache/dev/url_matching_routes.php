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
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/dash' => [[['_route' => 'admin_dash', '_controller' => 'App\\Controller\\MainController::dash'], null, null, null, false, false, null]],
        '/update' => [[['_route' => 'user_update', '_controller' => 'App\\Controller\\MainController::forme'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/admin/schedule' => [[['_route' => 'schedule_meeting', '_controller' => 'App\\Controller\\Room\\RoomController::add'], null, null, null, false, false, null]],
        '/admin/room' => [[['_route' => 'room_index', '_controller' => 'App\\Controller\\Room\\RoomController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/room/new' => [[['_route' => 'room_new', '_controller' => 'App\\Controller\\Room\\RoomController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logoutEvent'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\User\\UserController::index'], null, null, null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\User\\UserController::form'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:204)'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|room/([^/]++)(?'
                            .'|(*:241)'
                            .'|/edit(*:254)'
                            .'|(*:262)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|/edit(*:292)'
                            .'|(*:300)'
                        .')'
                    .')'
                    .'|pi/([^/]++)(*:321)'
                .')'
                .'|/visio/([^/]++)(*:345)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        204 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        241 => [[['_route' => 'room_show', '_controller' => 'App\\Controller\\Room\\RoomController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        254 => [[['_route' => 'room_edit', '_controller' => 'App\\Controller\\Room\\RoomController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        262 => [[['_route' => 'room_delete', '_controller' => 'App\\Controller\\Room\\RoomController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        292 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\User\\UserController::forme'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        300 => [
            [['_route' => 'user_show', '_controller' => 'App\\Controller\\User\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\User\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        321 => [[['_route' => 'url', '_controller' => 'App\\Controller\\MainController::postData'], ['randomSymbols'], null, null, false, true, null]],
        345 => [
            [['_route' => 'post', '_controller' => 'App\\Controller\\MainController::post'], ['randomSymbols'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
