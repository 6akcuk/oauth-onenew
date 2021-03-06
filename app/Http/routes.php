<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use LucaDegasperi\OAuth2Server\Facades\Authorizer;

Route::get('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});

Route::get('whoami', ['middleware' => 'oauth', function() {
    return Authorizer::getResourceOwnerId();
}]);