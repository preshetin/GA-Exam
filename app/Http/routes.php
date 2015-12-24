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

Route::get('about', 'PagesController@about');
Route::get('about-gaiq-exam', 'PagesController@aboutGaiqExam');
Route::get('contact', 'PagesController@contact');

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

Route::group(['prefix' => 'admin', 'middleware' => 'manager'], function()
{
    Route::resource('questions', 'QuestionsController');
    Route::resource('topics', 'TopicsController');
    Route::resource('base-topics', 'BaseTopicsController');

    Route::resource('users', 'UsersController');
    Route::controller('datatables', 'UsersController', [ 'anyData'  => 'datatables.data' ]);

    Route::get('email-list', 'EmailListController@index');
});

// Temporary, waiting for YD questions
Route::get('train', function() {
    return redirect('train/google-analytics');
});
//Route::get('train', 'QuizController@index');

Route::get('train/{baseTopicName}', 'QuizController@train');
Route::get('train/{baseTopicName}/{topicName}/{questionNumber}', 'QuizController@show');
Route::post('train/{baseTopicName}/{topicName}/{questionNumber}', 'QuizController@proposeSolution');
