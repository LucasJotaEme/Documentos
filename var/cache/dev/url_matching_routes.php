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
        '/lector' => [[['_route' => 'documentos', '_controller' => 'App\\Controller\\DocumentoController::index'], null, null, null, false, false, null]],
        '/lector/documentosObsoletos' => [[['_route' => 'documentosObsoletos', '_controller' => 'App\\Controller\\DocumentoController::documentosObsoletos'], null, null, null, false, false, null]],
        '/editor/nuevoDocumento' => [[['_route' => 'nuevoDocumento', '_controller' => 'App\\Controller\\DocumentoController::nuevoDocumento'], null, null, null, false, false, null]],
        '/admin/tipoDocumentos' => [[['_route' => 'documentosTipo', '_controller' => 'App\\Controller\\DocumentoTipoController::index'], null, null, null, false, false, null]],
        '/admin/nuevoDocumentoTipo' => [[['_route' => 'nuevoDocumentoTipo', '_controller' => 'App\\Controller\\DocumentoTipoController::nuevoDocumentoTipo'], null, null, null, false, false, null]],
        '/back' => [[['_route' => 'backIntranet', '_controller' => 'App\\Controller\\FuncionesController::backIntranet'], null, null, null, false, false, null]],
        '/admin/usuarios' => [[['_route' => 'usuarios', '_controller' => 'App\\Controller\\UsuarioController::usuarios'], null, null, null, false, false, null]],
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
                .'|/l(?'
                    .'|ector/(?'
                        .'|verPDF/([^/]++)(*:198)'
                        .'|masDocumento/([^/]++)(*:227)'
                    .')'
                    .'|ogin/([^/]++)(?'
                        .'|(*:252)'
                        .'|/([^/]++)/([^/]++)(*:278)'
                    .')'
                .')'
                .'|/editor/(?'
                    .'|modificarDocumento/([^/]++)(*:326)'
                    .'|eliminarD(?'
                        .'|ocumento/([^/]++)/([^/]++)(*:372)'
                        .'|efinitivo/([^/]++)(*:398)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|modificar(?'
                        .'|DocumentoTipo/([^/]++)(*:452)'
                        .'|User/([^/]++)(*:473)'
                    .')'
                    .'|eliminarDocumentoTipo/([^/]++)(*:512)'
                .')'
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
        198 => [[['_route' => 'verPDF', '_controller' => 'App\\Controller\\DocumentoController::verPDF'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'verMas', '_controller' => 'App\\Controller\\DocumentoController::masDocumento'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'app_loginBasico', '_controller' => 'App\\Controller\\FuncionesController::loginBasico'], ['email'], null, null, false, true, null]],
        278 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\FuncionesController::login'], ['email', 'rolForm', 'estado'], null, null, false, true, null]],
        326 => [[['_route' => 'modificarDocumento', '_controller' => 'App\\Controller\\DocumentoController::modificarDocumento'], ['id'], null, null, false, true, null]],
        372 => [[['_route' => 'eliminarDocumento', '_controller' => 'App\\Controller\\DocumentoController::eliminarDocumento'], ['id', 'motivo'], null, null, false, true, null]],
        398 => [[['_route' => 'eliminarDefinitivo', '_controller' => 'App\\Controller\\DocumentoController::eliminarDefinitivo'], ['id'], null, null, false, true, null]],
        452 => [[['_route' => 'modificarDocumentoTipo', '_controller' => 'App\\Controller\\DocumentoTipoController::modificarDocumento'], ['id'], null, null, false, true, null]],
        473 => [[['_route' => 'modificarUser', '_controller' => 'App\\Controller\\UsuarioController::modificarUser'], ['id'], null, null, true, true, null]],
        512 => [
            [['_route' => 'eliminarDocumentoTipo', '_controller' => 'App\\Controller\\DocumentoTipoController::eliminarDocumento'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
