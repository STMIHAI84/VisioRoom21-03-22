<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'home' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
    'admin_dash' => [[], ['_controller' => 'App\\Controller\\MainController::dash'], [], [['text', '/dash']], [], []],
    'user_update' => [[], ['_controller' => 'App\\Controller\\MainController::forme'], [], [['text', '/update']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], []],
    'schedule_meeting' => [[], ['_controller' => 'App\\Controller\\Room\\RoomController::add'], [], [['text', '/admin/schedule']], [], []],
    'room_index' => [[], ['_controller' => 'App\\Controller\\Room\\RoomController::index'], [], [['text', '/admin/room']], [], []],
    'room_new' => [[], ['_controller' => 'App\\Controller\\Room\\RoomController::new'], [], [['text', '/admin/room/new']], [], []],
    'room_show' => [['id'], ['_controller' => 'App\\Controller\\Room\\RoomController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/room']], [], []],
    'room_edit' => [['id'], ['_controller' => 'App\\Controller\\Room\\RoomController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/room']], [], []],
    'room_delete' => [['id'], ['_controller' => 'App\\Controller\\Room\\RoomController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/room']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logoutEvent'], [], [['text', '/logout']], [], []],
    'admin_index' => [[], ['_controller' => 'App\\Controller\\User\\UserController::index'], [], [['text', '/admin/user']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\User\\UserController::form'], [], [['text', '/admin/user/new']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\User\\UserController::forme'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\User\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\User\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], []],
    'join' => [['randomSymbols'], ['_controller' => 'App\\Controller\\MainController::join'], [], [['variable', '/', '[^/]++', 'randomSymbols', true], ['text', '/visio']], [], []],
];