<?php

use Illuminate\Http\Request;

Route::prefix('v1')->namespace('Api')->name('api.v1.')->group(function () {
    // 短信验证码
    Route::post('verificationCodes', 'VerificationCodesController@store')
        ->name('verificationCodes.store');

    Route::post('users', 'UsersController@store')
        ->name('users.store');
});