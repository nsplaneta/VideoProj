<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_profile' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::index'], [], [['text', '/profile/']], [], []],
    'cancel_plan' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::cancelPlan'], [], [['text', '/profile/cancel-plan']], [], []],
    'videos' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::videos'], [], [['text', '/profile/videos']], [], []],
    'delete_account' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::deleteAccount'], [], [['text', '/profile/delete-account']], [], []],
    'categories' => [[], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoryController::categories'], [], [['text', '/profile/admin/categories']], [], []],
    'edit_cat' => [['id'], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoryController::editCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profile/admin/edit-category']], [], []],
    'delete_cat' => [['id'], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoryController::deleteCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profile/admin/delete-category']], [], []],
    'upload_video' => [[], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::videosUpload'], [], [['text', '/profile/admin/upload-video']], [], []],
    'delete_video' => [['video', 'path'], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::deleteVideo'], ['path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[^/]++', 'video', true], ['text', '/profile/admin/delete-video']], [], []],
    'update_video_category' => [['video'], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::updateVideoCategory'], [], [['variable', '/', '[^/]++', 'video', true], ['text', '/profile/admin/update-video-category']], [], []],
    'users' => [[], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::users'], [], [['text', '/profile/admin/users']], [], []],
    'delete_user' => [['user'], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::deleteUser'], [], [['variable', '/', '[^/]++', 'user', true], ['text', '/profile/admin/delete-user']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/']], [], []],
    'search' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\FrontController::searchResults'], [], [['text', '/'], ['variable', '/', '[^/]++', 'page', true], ['text', '/search/results']], [], []],
    'video_list' => [['id', 'category', 'page'], ['page' => '1', '_controller' => 'App\\Controller\\FrontController::videoList'], [], [['variable', '/', '[^/]++', 'page', true], ['variable', '/', '[^/]++', 'category', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/video-list/category']], [], []],
    'video_details' => [['video', 'page'], ['page' => '1', '_controller' => 'App\\Controller\\FrontController::video_details'], [], [['variable', '/', '[^/]++', 'page', true], ['variable', '/', '[^/]++', 'video', true], ['text', '/video-details']], [], []],
    'create_comment' => [['video'], ['_controller' => 'App\\Controller\\FrontController::createComment'], [], [['variable', '/', '[^/]++', 'video', true], ['text', '/create-comment']], [], []],
    'delete_comment' => [['comment'], ['_controller' => 'App\\Controller\\FrontController::deleteComment'], [], [['variable', '/', '[^/]++', 'comment', true], ['text', '/delete-comment']], [], []],
    'rate_video' => [['video'], ['_controller' => 'App\\Controller\\FrontController::rateUndoRate'], [], [['text', '/rate'], ['variable', '/', '[^/]++', 'video', true], ['text', '/video-list']], [], []],
    'undo_rate_video' => [['video'], ['_controller' => 'App\\Controller\\FrontController::rateUndoRate'], [], [['text', '/undo-rate'], ['variable', '/', '[^/]++', 'video', true], ['text', '/video-list']], [], []],
    'paypal_verify' => [[], ['_controller' => 'App\\Controller\\PaypalController::PaypalVerify'], [], [['text', '/paypal-verify']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'register' => [['plan'], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['variable', '/', '[^/]++', 'plan', true], ['text', '/register']], [], []],
    'pricing' => [[], ['_controller' => 'App\\Controller\\SubscriptionController::pricing'], [], [['text', '/pricing']], [], []],
    'payment' => [['paypal'], ['paypal' => false, '_controller' => 'App\\Controller\\SubscriptionController::payment'], [], [['variable', '/', '[^/]++', 'paypal', true], ['text', '/payment']], [], []],
];
