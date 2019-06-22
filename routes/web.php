<?php
//=======All User & Guest =======
Route::get('/', array('as' => '/', 'uses' => 'HomeController@index'));
Route::group(['prefix' => 'api'], function () {
    Route::get('/GetDistrict', 'HomeController@GetDistrict');
    Route::get('/GetThana', 'HomeController@GetThana');
    Route::get('/GetPoliceStation', 'HomeController@GetPoliceStation');
    Route::get('/GetVillage', 'HomeController@GetVillage');
    Route::get('/GetProfessionTypeCbo', 'HomeController@GetProfessionTypeCbo');
    Route::get('/AdvanceSearchUsers', 'HomeController@AdvanceSearchUsers');
    Route::get('/CheckUserExist', 'HomeController@CheckUserExist');
    Route::get('/GetPublicGallary', 'HomeController@GetPublicGallary');
});
//=======Guest=======
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', ['as' => 'login', 'uses' => 'HomeController@login']);
    Route::post('login', ['as' => 'attempt_login', 'uses' => 'HomeController@attemptLogin']);
    Route::get('register', ['as' => 'register', 'uses' => 'HomeController@register']);
    Route::post('register', ['as' => 'attempt_register', 'uses' => 'HomeController@attemptRegister']);
    Route::group(['prefix' => 'api'], function () {
        Route::post('RegisterUser', ['as' => 'attempt_register', 'uses' => 'HomeController@attemptRegister']);
    });
});
//=======All User=======
Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', ['as' => 'logout', 'uses' => 'HomeController@logout']);
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'AdminDashboardHomeController@dashboard']);
    Route::get('profile', ['as' => 'profile', 'uses' => 'AdminDashboardHomeController@viewProfile']);
    Route::get('gallary', ['as' => 'gallary', 'uses' => 'AdminDashboardHomeController@Gallary']);
    Route::group(['prefix' => 'api'], function () {
        Route::get('/GetUserById', 'AdminDashboardHomeController@GetUserById');
        Route::get('/GetUserInstructionList', 'HomeController@GetUserInstructionList');
        Route::post('/UpdateUser', 'AdminDashboardHomeController@UpdateUser');
        Route::post('/UploadProfileImage', 'AdminDashboardHomeController@UploadProfileImage');
        Route::post('/UploadGallary', 'AdminDashboardHomeController@UploadGallary');
        Route::post('/DeleteGallary', 'AdminDashboardHomeController@DeleteGallary');
    });
    //=======Admin=======
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('upload', ['as' => 'upload', 'uses' => 'AdminUploadController@viewUpload']);
    });
    //=======User=======
    Route::group(['middleware' => ['role:user']], function () { });
});
