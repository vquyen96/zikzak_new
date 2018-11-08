<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'Pub'], function() {
    Route::get('language/{locale}', 'LanguageController@getLocale');
    Route::get('/','IndexController@getHome');
    Route::get('about','IndexController@getAboutUs');
    Route::get('news','IndexController@getNews');
    Route::get('news-detail/{slug}','IndexController@getNewsDetail');
    Route::get('meeting-room','IndexController@getMeetingRoom');
    Route::get('pack','IndexController@getPack');
    Route::get('service','IndexController@getService');
    Route::get('virtual','IndexController@getVirtualRoom');
    Route::get('community','IndexController@getCommunity');
    Route::get('experience','IndexController@getExperience');
    Route::post('register','IndexController@postRegister');
});

Route::group(['namespace' => 'Admin'], function() {
    Route::group(['prefix' => 'login','middleware'=>'CheckLoggedIn'], function() {
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
    });

    Route::group(['prefix' => 'admin','middleware'=>'CheckLoggedOut'], function() {
        Route::get('logout','AdminController@getLogout');
        Route::get('/','AdminController@getHome');

        Route::group(['prefix' => 'user','middleware'=>'CheckAdmin'], function() {
            Route::get('/','UserController@getUser');
            Route::post('/','UserController@postAddUser');
            Route::get('delete/{id}','UserController@getDeleteUser');
        });

        Route::group(['prefix' => 'about'], function() {
            Route::get('/','AboutController@getAbout');
            Route::post('story','AboutController@postStory');
            Route::post('view','AboutController@postView');
            Route::post('value','AboutController@postValue');
        });

        Route::group(['prefix' => 'pack'], function() {
            Route::get('/','PackController@getPack');
            Route::post('pack1','PackController@postEditPack1');
            Route::post('pack2','PackController@postEditPack2');
            Route::post('pack3','PackController@postEditPack3');
            Route::post('pack4','PackController@postEditPack4');
        });

        Route::group(['prefix' => 'news'], function() {
            Route::get('/','NewsController@getNews');
            Route::post('add-news','NewsController@postAddNews');
            Route::get('add','NewsController@getAddNews');
            Route::post('add','NewsController@postAddNews');
            Route::get('edit/{id}','NewsController@getEditNews');
            Route::post('edit/{id}','NewsController@postEditNews');
            Route::get('delete/{id}','NewsController@getDeleteNews');
        });

        Route::group(['prefix' => 'banner'], function() {
            Route::get('/','BannerController@getBanner');
            Route::post('add','BannerController@postAddBanner');
            Route::post('edit/{id}','BannerController@postEditBanner');
            Route::get('delete/{id}','BannerController@getDelete');
        });

        Route::group(['prefix' => 'virtual'], function() {
            Route::get('/','VirtualController@getVirtual');
            Route::post('standard','VirtualController@postEditStandard');
            Route::post('premium','VirtualController@postEditPremium');
        });

        Route::group(['prefix' => 'service'], function() {
            Route::get('/','ServiceController@getService');
            Route::post('service-content','ServiceController@postServiceContent');
            Route::post('advice-content','ServiceController@postAdviceContent');
            Route::post('editservice/{id}','ServiceController@postEditService');
            Route::post('editadvice/{id}','ServiceController@postEditAdvice');
        });

        Route::group(['prefix' => 'space'], function() {
            Route::get('/','SpaceController@getSpace');
            Route::post('/','SpaceController@postUpSpace');
            Route::get('delete/{id}','SpaceController@getDeleteSpace');
        });

        Route::group(['prefix' => 'location'], function() {
            Route::get('/','LocationController@getList');
            Route::post('edit/{id}','LocationController@postEdit');
            Route::get('add','LocationController@getAdd');
            Route::get('delete/{id}','LocationController@getDelete');
        });

        Route::group(['prefix' => 'content'], function() {
            Route::get('/','ContentController@getList');
            Route::post('edit/{id}','ContentController@postEdit');
            Route::get('add','ContentController@getAdd');
            Route::get('delete/{id}','ContentController@getDelete');
        });

        Route::group(['prefix' => 'member'], function() {
            Route::get('/','MemberController@getList');
            Route::post('edit/{id}','MemberController@postEdit');
            Route::get('add','MemberController@getAdd');
            Route::get('delete/{id}','MemberController@getDelete');
        });

        Route::group(['prefix' => 'meeting'], function() {
            Route::get('/','MeetingController@getList');
            Route::post('edit/{id}','MeetingController@postEdit');
            Route::get('add','MeetingController@getAdd');
            Route::get('delete/{id}','MeetingController@getDelete');
        });

        Route::group(['prefix' => 'register','middleware'=>'CheckAdmin'], function() {
            Route::get('/','RegisterController@getRegister');
        });
    });
});