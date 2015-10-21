<?php


Route::get('/', function () {
    return Redirect::to('step/1');
});

Route::get('step/{stepNum}', function($stepNum = 1){
    $faker = Faker\Factory::create();
    return view('presentation.step'.$stepNum, ['stepNum' => $stepNum, 'maxSteps' => 45, 'faker' => $faker]);
});
