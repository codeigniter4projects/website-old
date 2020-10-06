<?php namespace Config;
// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/user_guide/','/userguide3/');

// non-localized routes
$routes->get('home','Home::index');
$routes->get('download','Download::index');
$routes->get('docs','Docs::index');
$routes->get('community','Community::index');
$routes->get('contribute','Contribute::index');
$routes->get('contribute/responsible','Contribute::responsible');
$routes->get('help','Help::index');
$routes->get('help/legal','Help::legal');
$routes->get('help/about','Help::about');

// localized routes
$routes->get('{locale}/home','Home::index');
$routes->get('{locale}/download','Download::index');
$routes->get('{locale}/docs','Docs::index');
$routes->get('{locale}/community','Community::index');
$routes->get('{locale}/contribute','Contribute::index');
$routes->get('{locale}/contribute/responsible','Contribute::responsible');
$routes->get('{locale}/help','Help::index');
$routes->get('{locale}/help/legal','Help::legal');
$routes->get('{locale}/help/about','Help::about');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
