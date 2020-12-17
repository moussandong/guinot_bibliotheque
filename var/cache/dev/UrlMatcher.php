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
        '/c/d/rom' => [[['_route' => 'CD_index', '_controller' => 'App\\Controller\\CDRomController::index'], null, ['GET' => 0], null, true, false, null]],
        '/c/d/rom/new' => [[['_route' => 'c_d_rom_new', '_controller' => 'App\\Controller\\CDRomController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/livre' => [[['_route' => 'livre_index', '_controller' => 'App\\Controller\\LivreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/livre/new' => [[['_route' => 'livre_new', '_controller' => 'App\\Controller\\LivreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/loan' => [[['_route' => 'loan_index', '_controller' => 'App\\Controller\\LoanController::index'], null, ['GET' => 0], null, true, false, null]],
        '/loan/renew' => [[['_route' => 'loan_renew', '_controller' => 'App\\Controller\\LoanController::renew'], null, null, null, false, false, null]],
        '/loan/new' => [[['_route' => 'loan_new', '_controller' => 'App\\Controller\\LoanController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/micro/film' => [[['_route' => 'micro_film_index', '_controller' => 'App\\Controller\\MicroFilmController::index'], null, ['GET' => 0], null, true, false, null]],
        '/micro/film/new' => [[['_route' => 'micro_film_new', '_controller' => 'App\\Controller\\MicroFilmController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/news/paper' => [[['_route' => 'news_paper_index', '_controller' => 'App\\Controller\\NewsPaperController::index'], null, ['GET' => 0], null, true, false, null]],
        '/news/paper/new' => [[['_route' => 'news_paper_new', '_controller' => 'App\\Controller\\NewsPaperController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/c/d/rom/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/l(?'
                    .'|ivre/([^/]++)(?'
                        .'|(*:240)'
                        .'|/edit(*:253)'
                        .'|(*:261)'
                    .')'
                    .'|oan/([^/]++)(?'
                        .'|(*:285)'
                        .'|/edit(*:298)'
                        .'|(*:306)'
                    .')'
                .')'
                .'|/micro/film/([^/]++)(?'
                    .'|(*:339)'
                    .'|/edit(*:352)'
                    .'|(*:360)'
                .')'
                .'|/news/paper/([^/]++)(?'
                    .'|(*:392)'
                    .'|/edit(*:405)'
                    .'|(*:413)'
                .')'
                .'|/user/(?'
                    .'|account/([^/]++)(*:447)'
                    .'|([^/]++)(?'
                        .'|(*:466)'
                        .'|/edit(*:479)'
                    .')'
                    .'|account/([^/]++)/edit(*:509)'
                    .'|([^/]++)(*:525)'
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
        189 => [[['_route' => 'c_d_rom_show', '_controller' => 'App\\Controller\\CDRomController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'c_d_rom_edit', '_controller' => 'App\\Controller\\CDRomController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'c_d_rom_delete', '_controller' => 'App\\Controller\\CDRomController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        240 => [[['_route' => 'livre_show', '_controller' => 'App\\Controller\\LivreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'livre_edit', '_controller' => 'App\\Controller\\LivreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        261 => [[['_route' => 'livre_delete', '_controller' => 'App\\Controller\\LivreController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        285 => [[['_route' => 'loan_show', '_controller' => 'App\\Controller\\LoanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        298 => [[['_route' => 'loan_edit', '_controller' => 'App\\Controller\\LoanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        306 => [[['_route' => 'loan_delete', '_controller' => 'App\\Controller\\LoanController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        339 => [[['_route' => 'micro_film_show', '_controller' => 'App\\Controller\\MicroFilmController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        352 => [[['_route' => 'micro_film_edit', '_controller' => 'App\\Controller\\MicroFilmController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        360 => [[['_route' => 'micro_film_delete', '_controller' => 'App\\Controller\\MicroFilmController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        392 => [[['_route' => 'news_paper_show', '_controller' => 'App\\Controller\\NewsPaperController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        405 => [[['_route' => 'news_paper_edit', '_controller' => 'App\\Controller\\NewsPaperController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        413 => [[['_route' => 'news_paper_delete', '_controller' => 'App\\Controller\\NewsPaperController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        447 => [[['_route' => 'account_show', '_controller' => 'App\\Controller\\UserController::userShow'], ['id'], ['GET' => 0], null, false, true, null]],
        466 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        479 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        509 => [[['_route' => 'account_edit', '_controller' => 'App\\Controller\\UserController::userEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        525 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
