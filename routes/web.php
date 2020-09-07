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

Auth::routes();

Route::get('/app', 'AppController@index')->name('app');

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
Route::get('/test-permission', function() {
    $role = Role::create(['name' => 'normal_user']);
    $permission = Permission::create(['name' => 'add products']);
    $permission->assignRole($role);

});