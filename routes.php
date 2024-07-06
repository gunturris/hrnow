<?php  
/**
 * This file contains all the routes for the project
 */

use App\Router;

Router::csrfVerifier(new \App\Middlewares\CsrfVerifier());

Router::setDefaultNamespace('\App\Controllers');

Router::group(['exceptionHandler' => \App\Handlers\CustomExceptionHandler::class], function () {

Router::get('/', 'Sandbox\MainController@home')->setName('home');

//Router::get('/contact', 'DefaultController@contact')->setName('contact');

//Router::basic('/companies/{id?}', 'DefaultController@companies')->setName('companies');

// API
Router::group(['prefix' => '/api', 'middleware' => \App\Middlewares\ApiVerification::class], function () {
	Router::resource( '/demo', 'ApiController' );
});

// API
Router::group(['prefix' => '/time'], function () {
    Router::group(['prefix' => '/reference'], function () {
	    //Router::get('/form', '\App\Controllers\Time\ShiftController@mainform')->setName('form-shift'); 
        Router::get('/form', '\App\Controllers\Time\ShiftController@check_form')->setName('form-shift'); 
	    Router::get('/datas', '\App\Controllers\Time\ShiftController@index')->setName('home-shift'); 
    });
});

    // CALLBACK EXAMPLES

    Router::get('/foo', function() {
        return 'foo';
    });

    Router::get('/foo-bar', function() {
        return 'foo-bar';
    });

});
