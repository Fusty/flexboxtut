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

Route::get('/', function () {
    return Redirect::to('step/1');
});

Route::get('step/{stepNum}', function($stepNum = 1){
    return view('presentation.step'.$stepNum, ['stepNum' => $stepNum, 'maxSteps' => 40]);
});
