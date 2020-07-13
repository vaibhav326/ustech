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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', 'Admin\AdminController@index');
Route::get('admin/player-history/player/{id}','Admin\\PlayerHistoryController@playerWithPlayerId');
Route::get('admin/start-match/{id}','Admin\\TeamController@startMatch');
Route::get('admin/pick-team/{id}','Admin\\TeamController@pickTeam');



Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/pages', 'Admin\PagesController');
Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
    'index', 'show', 'destroy'
]);
Route::resource('admin/settings', 'Admin\SettingsController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

Route::resource('admin/team', 'Admin\\TeamController');
Route::resource('admin/player', 'Admin\\PlayerController');
Route::resource('admin/player-history', 'Admin\\PlayerHistoryController');
Route::resource('admin/match', 'Admin\\MatchController');
Route::resource('admin/points', 'Admin\\PointsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
