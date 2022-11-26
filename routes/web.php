<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','\App\Http\Controllers\Frontend\HomeController@index');
Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});
Route::get('/category','\App\Http\Controllers\Frontend\HomeController@listCategory')->name('category');
Route::get('/category/{slug}','\App\Http\Controllers\Frontend\HomeController@detailCategory')->name('detail-category');
Route::get('/blogs','\App\Http\Controllers\Frontend\BlogController@listBlog')->name('list-blogs');
Route::get('/blog/{slug}','\App\Http\Controllers\Frontend\BlogController@detailBlog')->name('detail-blog');
Auth::routes();
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Backend',
    'middleware' => 'auth',
    'as' => 'admin.'
], function () {
    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard');
    })->name('dashboard');
    Route::group([
        'prefix' => 'user',
        'namespace' => 'Backend',
        'middleware' => 'auth',
        'as' => 'user.'
    ], function () {
        Route::get('/', '\App\Http\Controllers\Admin\UserController@index')->name('index');
        Route::post('/store', '\App\Http\Controllers\Admin\UserController@store')->name('store');
        Route::get('/delete/{id}', '\App\Http\Controllers\Admin\UserController@delete')->name('delete');
    });
    Route::group([
        'prefix' => 'role',
        'namespace' => 'Backend',
        'middleware' => 'auth',
        'as' => 'role.'
    ], function () {
        Route::get('/', '\App\Http\Controllers\Admin\RoleController@index')->name('index');
        Route::post('/store', '\App\Http\Controllers\Admin\RoleController@store')->name('store');
        Route::get('/delete/{id}', '\App\Http\Controllers\Admin\RoleController@delete')->name('delete');
    });
    Route::group([
        'prefix' => 'permission',
        'namespace' => 'Backend',
        'middleware' => 'auth',
        'as' => 'permission.'
    ], function () {
        Route::get('/', '\App\Http\Controllers\Admin\PermissionController@index')->name('index');
        Route::post('/store', '\App\Http\Controllers\Admin\PermissionController@store')->name('store');
        Route::get('/delete/{id}', '\App\Http\Controllers\Admin\PermissionController@delete')->name('delete');
    });
    //route blog
    Route::group([
        'prefix' => 'blog',
        'namespace' => 'Backend',
        'middleware' => 'auth',
        'as' => 'blog.'
    ], function () {
        Route::get('/', '\App\Http\Controllers\Admin\BlogController@index')->name('index');
        Route::get('/create', '\App\Http\Controllers\Admin\BlogController@create')->name('create');
        Route::post('/store', '\App\Http\Controllers\Admin\BlogController@store')->name('store');
        Route::get('/delete/{id}', '\App\Http\Controllers\Admin\BlogController@delete')->name('delete');
    });

    Route::group([
        'prefix' => 'category',
        'namespace' => 'Backend',
        'middleware' => 'auth',
        'as' => 'category.'
    ], function () {
        Route::get('/', '\App\Http\Controllers\Admin\CategoryController@index')->name('index');
        Route::get('/create', '\App\Http\Controllers\Admin\CategoryController@create')->name('create');
        Route::post('/store', '\App\Http\Controllers\Admin\CategoryController@store')->name('store');
        Route::get('/delete/{id}', '\App\Http\Controllers\Admin\CategoryController@delete')->name('delete');
    });

    Route::group([
        'prefix' => 'configuration',
        'namespace' => 'Backend',
        'middleware' => 'auth',
        'as' => 'configuration.'
    ], function () {
        Route::get('/', '\App\Http\Controllers\Admin\ConfigurationController@index')->name('index');
        Route::post('/store', '\App\Http\Controllers\Admin\ConfigurationController@store')->name('store');
        Route::get('/delete/{id}', '\App\Http\Controllers\Admin\ConfigurationController@delete')->name('delete');
    });

    Route::group([
        'prefix' => 'customer',
        'namespace' => 'Backend',
        'middleware' => 'auth',
        'as' => 'customer.'
    ], function () {
        Route::get('/', '\App\Http\Controllers\Admin\ContactCustomerController@index')->name('index');
        Route::get('/reviews', '\App\Http\Controllers\Admin\ContactCustomerController@listReview')->name('review');
    });
    Route::group([
        'prefix' => 'review',
        'namespace' => 'Backend',
        'middleware' => 'auth',
        'as' => 'review.'
    ], function () {
        Route::get('/', '\App\Http\Controllers\Admin\ReviewController@index')->name('index');
        Route::post('/store', '\App\Http\Controllers\Admin\ReviewController@store')->name('store');
    });

    Route::group([
        'prefix' => 'slide',
        'namespace' => 'Backend',
        'middleware' => 'auth',
        'as' => 'slide.'
    ], function () {
        Route::get('/', '\App\Http\Controllers\Admin\SlideController@index')->name('index');
        Route::post('/store', '\App\Http\Controllers\Admin\SlideController@store')->name('store');
    });
//    Route::get('manage-menus/{id?}',[menuController::class,'index'])->name('menu');
//    Route::post('create-menu',[menuController::class,'store']);
//    Route::get('add-categories-to-menu',[menuController::class,'addCatToMenu']);
//    Route::get('add-post-to-menu',[menuController::class,'addPostToMenu']);
//    Route::get('add-custom-link',[menuController::class,'addCustomLink']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
