<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

/*
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 */
/** @var \Cake\Routing\RouteBuilder $routes */
$routes->setRouteClass(DashedRoute::class);

$routes->scope('/', function (RouteBuilder $builder) {
    // Register scoped middleware for in scopes.
    
    $builder->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true,
    ]));

    /*
     * Apply a middleware to the current route scope.
     * Requires middleware to be registered through `Application::routes()` with `registerMiddleware()`
     */
    $builder->applyMiddleware('csrf');

    /*
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, templates/Pages/home.php)...
     */
    $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

    /*
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $builder->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
    
    

    /*
     * Connect catchall routes for all controllers.
     *
     * The `fallbacks` method is a shortcut for
     *
     * ```
     * $builder->connect('/:controller', ['action' => 'index']);
     * $builder->connect('/:controller/:action/*', []);
     * ```
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $builder->fallbacks();
});
Router::scope('/admin/users', function (RouteBuilder $routes) {
	//route to switch locale
	//$routes->connect('/lang/*', array('controller' => 'p28n', 'action' => 'change'));
    $routes->connect('/', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'index']);
    $routes->connect('/add', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'add']);
    $routes->connect('/view/*', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'view']);
    $routes->connect('/edit/*', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'edit']);
    $routes->connect('/delete/*', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'delete']);
    $routes->connect('/login', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'login']);
    $routes->connect('/register', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'register']);
    $routes->connect('/logout/*', ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'logout']);

	//$routes->fallbacks();
});

Router::scope('/admin/providers', function (RouteBuilder $routes) {
    $routes->connect('/', ['prefix' => 'Admin', 'controller' => 'Providers', 'action' => 'index']);
    $routes->connect('/add', ['prefix' => 'Admin', 'controller' => 'Providers', 'action' => 'add']);
    $routes->connect('/view/*', ['prefix' => 'Admin', 'controller' => 'Providers', 'action' => 'view']);
    $routes->connect('/edit/*', ['prefix' => 'Admin', 'controller' => 'Providers', 'action' => 'edit']);
    $routes->connect('/delete/*', ['prefix' => 'Admin', 'controller' => 'Providers', 'action' => 'delete']);
});

Router::scope('/admin/products', function (RouteBuilder $routes) {
    $routes->connect('/', ['prefix' => 'Admin', 'controller' => 'Products', 'action' => 'index']);
    $routes->connect('/add', ['prefix' => 'Admin', 'controller' => 'Products', 'action' => 'add']);
    $routes->connect('/view/*', ['prefix' => 'Admin', 'controller' => 'Products', 'action' => 'view']);
    $routes->connect('/edit/*', ['prefix' => 'Admin', 'controller' => 'Products', 'action' => 'edit']);
    $routes->connect('/delete/*', ['prefix' => 'Admin', 'controller' => 'Products', 'action' => 'delete']);
});

Router::scope('/admin/categories', function (RouteBuilder $routes) {
    $routes->connect('/', ['prefix' => 'Admin', 'controller' => 'Categories', 'action' => 'index']);
    $routes->connect('/add', ['prefix' => 'Admin', 'controller' => 'Categories', 'action' => 'add']);
    $routes->connect('/view/*', ['prefix' => 'Admin', 'controller' => 'Categories', 'action' => 'view']);
    $routes->connect('/edit/*', ['prefix' => 'Admin', 'controller' => 'Categories', 'action' => 'edit']);
    $routes->connect('/delete/*', ['prefix' => 'Admin', 'controller' => 'Categories', 'action' => 'delete']);
});

//Nuevas rutas

Router::scope('/admin/departments', function (RouteBuilder $routes) {
    $routes->connect('/', ['prefix' => 'Admin', 'controller' => 'Departments', 'action' => 'index']);
    $routes->connect('/add', ['prefix' => 'Admin', 'controller' => 'Departments', 'action' => 'add']);
    $routes->connect('/view/*', ['prefix' => 'Admin', 'controller' => 'Departments', 'action' => 'view']);
    $routes->connect('/edit/*', ['prefix' => 'Admin', 'controller' => 'Departments', 'action' => 'edit']);
    $routes->connect('/delete/*', ['prefix' => 'Admin', 'controller' => 'Departments', 'action' => 'delete']);
});

Router::scope('/admin/districts', function (RouteBuilder $routes) {
    $routes->connect('/', ['prefix' => 'Admin', 'controller' => 'Districts', 'action' => 'index']);
    $routes->connect('/add', ['prefix' => 'Admin', 'controller' => 'Districts', 'action' => 'add']);
    $routes->connect('/view/*', ['prefix' => 'Admin', 'controller' => 'Districts', 'action' => 'view']);
    $routes->connect('/edit/*', ['prefix' => 'Admin', 'controller' => 'Districts', 'action' => 'edit']);
    $routes->connect('/delete/*', ['prefix' => 'Admin', 'controller' => 'Districts', 'action' => 'delete']);
});

Router::scope('/admin/provinces', function (RouteBuilder $routes) {
    $routes->connect('/', ['prefix' => 'Admin', 'controller' => 'Provinces', 'action' => 'index']);
    $routes->connect('/add', ['prefix' => 'Admin', 'controller' => 'Provinces', 'action' => 'add']);
    $routes->connect('/view/*', ['prefix' => 'Admin', 'controller' => 'Provinces', 'action' => 'view']);
    $routes->connect('/edit/*', ['prefix' => 'Admin', 'controller' => 'Provinces', 'action' => 'edit']);
    $routes->connect('/delete/*', ['prefix' => 'Admin', 'controller' => 'Provinces', 'action' => 'delete']);
});

Router::scope('/admin/measurements', function (RouteBuilder $routes) {
    $routes->connect('/', ['prefix' => 'Admin', 'controller' => 'Measurements', 'action' => 'index']);
    $routes->connect('/add', ['prefix' => 'Admin', 'controller' => 'Measurements', 'action' => 'add']);
    $routes->connect('/view/*', ['prefix' => 'Admin', 'controller' => 'Measurements', 'action' => 'view']);
    $routes->connect('/edit/*', ['prefix' => 'Admin', 'controller' => 'Measurements', 'action' => 'edit']);
    $routes->connect('/delete/*', ['prefix' => 'Admin', 'controller' => 'Measurements', 'action' => 'delete']);
});

Router::scope('/admin/phones', function (RouteBuilder $routes) {
    $routes->connect('/', ['prefix' => 'Admin', 'controller' => 'Phones', 'action' => 'index']);
    $routes->connect('/add', ['prefix' => 'Admin', 'controller' => 'Phones', 'action' => 'add']);
    $routes->connect('/view/*', ['prefix' => 'Admin', 'controller' => 'Phones', 'action' => 'view']);
    $routes->connect('/edit/*', ['prefix' => 'Admin', 'controller' => 'Phones', 'action' => 'edit']);
    $routes->connect('/delete/*', ['prefix' => 'Admin', 'controller' => 'Phones', 'action' => 'delete']);
});

Router::scope('/admin/products_purchases', function (RouteBuilder $routes) {
    $routes->connect('/', ['prefix' => 'Admin', 'controller' => 'ProductsPurchases', 'action' => 'index']);
    $routes->connect('/add', ['prefix' => 'Admin', 'controller' => 'ProductsPurchases', 'action' => 'add']);
    $routes->connect('/view/*', ['prefix' => 'Admin', 'controller' => 'ProductsPurchases', 'action' => 'view']);
    $routes->connect('/edit/*', ['prefix' => 'Admin', 'controller' => 'ProductsPurchases', 'action' => 'edit']);
    $routes->connect('/delete/*', ['prefix' => 'Admin', 'controller' => 'ProductsPurchases', 'action' => 'delete']);
});

Router::scope('/admin/purchases', function (RouteBuilder $routes) {
    $routes->connect('/', ['prefix' => 'Admin', 'controller' => 'Purchases', 'action' => 'index']);
    $routes->connect('/add', ['prefix' => 'Admin', 'controller' => 'Purchases', 'action' => 'add']);
    $routes->connect('/view/*', ['prefix' => 'Admin', 'controller' => 'Purchases', 'action' => 'view']);
    $routes->connect('/edit/*', ['prefix' => 'Admin', 'controller' => 'Purchases', 'action' => 'edit']);
    $routes->connect('/delete/*', ['prefix' => 'Admin', 'controller' => 'Purchases', 'action' => 'delete']);
});

Router::scope('/admin/roles', function (RouteBuilder $routes) {
    $routes->connect('/', ['prefix' => 'Admin', 'controller' => 'Roles', 'action' => 'index']);
    $routes->connect('/add', ['prefix' => 'Admin', 'controller' => 'Roles', 'action' => 'add']);
    $routes->connect('/view/*', ['prefix' => 'Admin', 'controller' => 'Roles', 'action' => 'view']);
    $routes->connect('/edit/*', ['prefix' => 'Admin', 'controller' => 'Roles', 'action' => 'edit']);
    $routes->connect('/delete/*', ['prefix' => 'Admin', 'controller' => 'Roles', 'action' => 'delete']);
});

Router::prefix('Admin', function (RouteBuilder $routes) {
	// Because you are in the admin scope,
	// you do not need to include the /admin prefix
	// or the admin route element.
	$routes->fallbacks();
});
/*
 * If you need a different set of middleware or none at all,
 * open new scope and define routes there.
 *
 * ```
 * $routes->scope('/api', function (RouteBuilder $builder) {
 *     // No $builder->applyMiddleware() here.
 *     // Connect API actions here.
 * });
 * ```
 */
