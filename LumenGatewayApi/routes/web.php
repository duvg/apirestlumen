<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

/**
 * Authors routes
 */


$router->get('/authors', 'Author\GetAllAuthorController@getAll');
$router->post('/authors', 'Author\StoreAuthorController@store');
$router->get('/authors/{author}', 'Author\GetAuthorController@get');
$router->put('/authors/{author}', 'Author\UpdateAuthorController@update');
$router->patch('/authors/{author}', 'Author\UpdateuthorController@update');
$router->delete('/authors/{author}', 'Author\DeleteAuthorController@delete');


/**
 * Books routes
 */

$router->get('/books', 'GetAllBookController@getAll');
$router->post('/books', 'StoreBookController@store');
$router->get('/books/{book}', 'GetBookController@getBook');
$router->put('/books/{book}', 'UpdateBookController@update');
$router->patch('/books/{book}', 'UpdateBookController@update');
$router->delete('/books/{book}', 'DeleteBookController@delete');