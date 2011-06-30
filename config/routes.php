<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2010, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

//use lithium\net\http\Router;
use li3_rest\net\http\Router;
use lithium\core\Environment;

// Static Pages
Router::connect('/', array('Pages::view', 'args' => array('index')));
Router::connect('/keys', array('Pages::view', 'args' => array('keys')));
Router::connect('/resume', array('Pages::view', 'args' => array('resume')));
Router::connect('/social',array('Pages::view','args' => array('feeds')));
Router::connect('/family',array('Pages::view','args' => array('family')));

// User Management
Router::connect('/login', array('Users::login'));
Router::connect('/logout', array('Users::logout'));
Router::connect('/register', array('Users::register'));

Router::connect('/pages/{:args}', 'Pages::view');
if (!Environment::is('production')) {
	Router::connect('/test/{:args}', array('controller' => 'lithium\test\Controller'));
	Router::connect('/test', array('controller' => 'lithium\test\Controller'));
}
// Blog
Router::resource('Posts');
Router::connect('/posts/{:id:[0-9a-f]{24}}.{:type}', array('action' => 'view', 'id' => null));
Router::connect('/posts/{:slug:[a-z0-9-]+}.{:type}', array('Posts::view'));
Router::connect('/posts/tags/{:slug:[a-z0-9]+}', array('Posts::tags'));
Router::connect('/posts/{:action}/{:id:[0-9a-f]{24}}.{:type}', array('id' => null));


/**
 * Finally, connect the default routes.
*/
Router::connect('/{:controller}/{:action}/{:id:[0-9a-f]{24}}.{:type}', array('id' => null));
Router::connect('/{:controller}/{:action}/{:id:[0-9a-f]{24}}');
Router::connect('/{:controller}/{:action}/{:slug:[a-z0-9-]+}.{:type}');
Router::connect('/{:controller}/{:action}/{:args}');
?>
