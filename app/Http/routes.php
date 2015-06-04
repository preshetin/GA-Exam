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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::get('users', ['middleware' => 'manager', function() {
    return App\User::all();
}]);

/* Authentication routes start */
Route::get('login', ['middleware'=>'guest', function() {
    return view('login');
}]);

Route::get('logout', function() {
    Auth::logout();
    return redirect('login');
});

Route::get('oauth/{provider}', 'AuthController@login')->where([
    'provider'=>'(facebook|google)'
]);
/* Authentication routes end */

Route::resource('questions', 'QuestionsController');
Route::resource('topics', 'TopicsController');

Route::get('train', 'QuizController@train');
Route::get('train/{topicName}/{questionNumber}', 'QuizController@show');
Route::post('train/{topicName}/{questionNumber}', 'QuizController@reply');
