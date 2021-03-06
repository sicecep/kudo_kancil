<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', "HomeController@welcome");

$app->get('/ping', "PingController@ping");

$app->get('/primeFactors', "PrimeFactorsController@getPrimeFactors");

$app->get('/about-us', "AboutUsController@aboutus");

$app->get('/readme', "AboutUsController@readme");

$app->get('/astroport', "AboutUsController@readme");

$app->get('/minesweeper', "AboutUsController@minesweeper");
