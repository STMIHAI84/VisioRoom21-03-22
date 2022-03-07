<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/reset\\-password/reset(?:/([^/]++))?(*:43)'
                .'|/admin/(?'
                    .'|room/([^/]++)(?'
                        .'|(*:76)'
                        .'|/edit(*:88)'
                        .'|(*:95)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|/edit(*:124)'
                        .'|(*:132)'
                    .')'
                .')'
                .'|/visio/([^/]++)(*:157)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        76 => [[['_route' => 'room_show', '_controller' => 'App\\Controller\\Room\\RoomController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        88 => [[['_route' => 'room_edit', '_controller' => 'App\\Controller\\Room\\RoomController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        95 => [[['_route' => 'room_delete', '_controller' => 'App\\Controller\\Room\\RoomController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        124 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\User\\UserController::forme'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        132 => [
            [['_route' => 'user_show', '_controller' => 'App\\Controller\\User\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\User\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        157 => [
            [['_route' => 'join', '_controller' => 'App\\Controller\\MainController::join'], ['randomSymbols'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
