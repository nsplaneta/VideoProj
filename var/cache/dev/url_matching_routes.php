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
        '/profile' => [[['_route' => 'admin_profile', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, ['POST' => 0, 'GET' => 1], null, true, false, null]],
        '/profile/cancel-plan' => [[['_route' => 'cancel_plan', '_controller' => 'App\\Controller\\Admin\\AdminController::cancelPlan'], null, null, null, false, false, null]],
        '/profile/videos' => [[['_route' => 'videos', '_controller' => 'App\\Controller\\Admin\\AdminController::videos'], null, null, null, false, false, null]],
        '/profile/delete-account' => [[['_route' => 'delete_account', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteAccount'], null, null, null, false, false, null]],
        '/profile/admin/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoryController::categories'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/admin/upload-video' => [[['_route' => 'upload_video', '_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::videosUpload'], null, null, null, false, false, null]],
        '/profile/admin/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::users'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/paypal-verify' => [[['_route' => 'paypal_verify', '_controller' => 'App\\Controller\\PaypalController::PaypalVerify'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/pricing' => [[['_route' => 'pricing', '_controller' => 'App\\Controller\\SubscriptionController::pricing'], null, null, null, false, false, null]],
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
                .'|/p(?'
                    .'|rofile/admin/(?'
                        .'|edit\\-category/([^/]++)(*:213)'
                        .'|delete\\-(?'
                            .'|category/([^/]++)(*:249)'
                            .'|video/([^/]++)/(.+)(*:276)'
                            .'|user/([^/]++)(*:297)'
                        .')'
                        .'|update\\-video\\-category/([^/]++)(*:338)'
                    .')'
                    .'|ayment(?:/([^/]++))?(*:367)'
                .')'
                .'|/search/results/([^/]++)(*:400)'
                .'|/video\\-(?'
                    .'|list/(?'
                        .'|category/([^/]++)/([^/]++)(?:/([^/]++))?(*:467)'
                        .'|([^/]++)/(?'
                            .'|rate(*:491)'
                            .'|undo\\-rate(*:509)'
                        .')'
                    .')'
                    .'|details/([^/]++)(?:/([^/]++))?(*:549)'
                .')'
                .'|/create\\-comment/([^/]++)(*:583)'
                .'|/delete\\-comment/([^/]++)(*:616)'
                .'|/register/([^/]++)(*:642)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        213 => [[['_route' => 'edit_cat', '_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoryController::editCategory'], ['id'], null, null, false, true, null]],
        249 => [[['_route' => 'delete_cat', '_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoryController::deleteCategory'], ['id'], null, null, false, true, null]],
        276 => [[['_route' => 'delete_video', '_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::deleteVideo'], ['video', 'path'], null, null, false, true, null]],
        297 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::deleteUser'], ['user'], null, null, false, true, null]],
        338 => [[['_route' => 'update_video_category', '_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::updateVideoCategory'], ['video'], ['POST' => 0], null, false, true, null]],
        367 => [[['_route' => 'payment', 'paypal' => false, '_controller' => 'App\\Controller\\SubscriptionController::payment'], ['paypal'], null, null, false, true, null]],
        400 => [[['_route' => 'search', 'page' => '1', '_controller' => 'App\\Controller\\FrontController::searchResults'], ['page'], ['GET' => 0], null, true, true, null]],
        467 => [[['_route' => 'video_list', 'page' => '1', '_controller' => 'App\\Controller\\FrontController::videoList'], ['id', 'category', 'page'], null, null, false, true, null]],
        491 => [[['_route' => 'rate_video', '_controller' => 'App\\Controller\\FrontController::rateUndoRate'], ['video'], ['GET' => 0], null, false, false, null]],
        509 => [[['_route' => 'undo_rate_video', '_controller' => 'App\\Controller\\FrontController::rateUndoRate'], ['video'], ['GET' => 0], null, false, false, null]],
        549 => [[['_route' => 'video_details', 'page' => '1', '_controller' => 'App\\Controller\\FrontController::video_details'], ['video', 'page'], null, null, false, true, null]],
        583 => [[['_route' => 'create_comment', '_controller' => 'App\\Controller\\FrontController::createComment'], ['video'], ['POST' => 0], null, false, true, null]],
        616 => [[['_route' => 'delete_comment', '_controller' => 'App\\Controller\\FrontController::deleteComment'], ['comment'], null, null, false, true, null]],
        642 => [
            [['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::register'], ['plan'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
