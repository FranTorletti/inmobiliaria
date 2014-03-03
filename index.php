<?php
/*
   to install dependencies php composer.phar install
   if add a new controller or model then run $ php composer.phar dump-autoload
   if add or modified model then run $ php vendor/bin/doctrine orm:schema-tool:update --force
*/

require 'vendor/autoload.php';
require 'app/config/config.php';

Controller::$router = new Router();

Session::init();


Controller::$router->get('/', 'HomeController', 'index');
Controller::$router->get('/login', 'HomeController', 'login');
Controller::$router->get('/privacy', 'HomeController', 'privacy');
Controller::$router->get('/housingForSale', 'HomeController', 'showHousingForSale');
Controller::$router->get('/housingForRental', 'HomeController', 'showHousingForRental');
Controller::$router->get('/departamentForSale', 'HomeController', 'showDepartamentsForSale');
Controller::$router->get('/departamentForRental', 'HomeController', 'showDepartamentsForRental');
Controller::$router->get('/fieldForSale', 'HomeController', 'showFieldsForSale');
Controller::$router->get('/fieldForRental', 'HomeController', 'showFieldsForRental');
Controller::$router->get('/search', 'HomeController', 'searchTo');


Controller::$router->get('/terms', 'HomeController', 'terms');

//run server
Controller::$router->run();