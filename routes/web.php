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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('index');
    });

    //Rutas Hoteles
    Route::get('hotels', 'HotelController@index')->name('hotels.index');
    Route::get('hotels/create', 'HotelController@create')->name('hotels.create');
    Route::get('hotels/{id}', 'HotelController@show')->name('hotels.show');
    Route::get('hotels/{id}/edit', 'HotelController@edit')->name('hotels.edit');
    Route::post('hotels', 'HotelController@store')->name('hotels.store');
    Route::put('hotels/{id}', 'HotelController@update')->name('hotels.update');
    Route::delete('hotels/{id}', 'HotelController@destroy')->name('hotels.destroy');

    //Rutas Usuarios
    Route::get('users', 'UserController@index')->name('users.index');
    Route::get('users/create/{id}', 'UserController@create')->name('users.create');
    Route::get('users/{id}', 'UserController@show')->name('users.show');
    Route::get('users/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::post('users', 'UserController@store')->name('users.store');
    Route::put('users/{id}', 'UserController@update')->name('users.update');
    Route::delete('users/{id}', 'UserController@destroy')->name('users.destroy');

    //Rutas Inventarios
    Route::get('inventories', 'InventoryController@index')->name('inventories.index');
    Route::get('inventories/create/{id}', 'InventoryController@create')->name('inventories.create');
    Route::get('inventories/{id}', 'InventoryController@show')->name('inventories.show');
    Route::get('inventories/{id}/edit', 'InventoryController@edit')->name('inventories.edit');
    Route::post('inventories', 'InventoryController@store')->name('inventories.store');
    Route::put('inventories/{id}', 'InventoryController@update')->name('inventories.update');
    Route::delete('inventories/{id}', 'InventoryController@destroy')->name('inventories.destroy');

    //Rutas Sub-Inventarios
    Route::get('sub-inventories', 'SubInventoryController@index')->name('sub-inventories.index');
    Route::get('sub-inventories/create/{id}', 'SubInventoryController@create')->name('sub-inventories.create');
    Route::get('sub-inventories/{id}', 'SubInventoryController@show')->name('sub-inventories.show');
    Route::get('sub-inventories/{id}/edit', 'SubInventoryController@edit')->name('sub-inventories.edit');
    Route::post('sub-inventories', 'SubInventoryController@store')->name('sub-inventories.store');
    Route::put('sub-inventories/{id}', 'SubInventoryController@update')->name('sub-inventories.update');
    Route::delete('sub-inventories/{id}', 'SubInventoryController@destroy')->name('sub-inventories.destroy');
        Route::post('sub-inventories/save', 'SubInventoryController@save');
        Route::put('sub-inventories/edit/amount/{id}', 'SubInventoryController@editAmount');

    //Rutas Pisos
    Route::get('floors', 'FloorController@index')->name('floors.index');
    Route::get('floors/create/{id}', 'FloorController@create')->name('floors.create');
    Route::get('floors/{id}', 'FloorController@show')->name('floors.show');
    Route::get('floors/{id}/edit', 'FloorController@edit')->name('floors.edit');
    Route::post('floors', 'FloorController@store')->name('floors.store');
    Route::put('floors/{id}', 'FloorController@update')->name('floors.update');
    Route::delete('floors/{id}', 'FloorController@destroy')->name('floors.destroy');

    //Rutas Habitaciones
    Route::get('rooms', 'RoomController@index')->name('rooms.index');
    Route::get('rooms/create/{id}', 'RoomController@create')->name('rooms.create');
    Route::get('rooms/{id}', 'RoomController@show')->name('rooms.show');
    Route::get('rooms/{id}/edit', 'RoomController@edit')->name('rooms.edit');
    Route::post('rooms', 'RoomController@store')->name('rooms.store');
    Route::put('rooms/{id}', 'RoomController@update')->name('rooms.update');
    Route::delete('rooms/{id}', 'RoomController@destroy')->name('rooms.destroy');

    //Rutas Control
    Route::get('control/rooms', 'ControlController@rooms_control')->name('control.rooms_control');
    Route::get('control/assign-rooms', 'ControlController@assign_rooms_control')->name('control.assign_rooms_control');
        //Obtener pisos
        Route::get('control/get-floors', 'ControlController@get_floors');
        //Actualizar status de las habitaciones
        Route::put('control/rooms/update-status/{id}', 'ControlController@rooms_update_status');
        //Obtener empleados
        Route::get('control/get-employees', 'ControlController@get_employees');
        //Asignar habitaciones a empleados
        Route::post('control/assign-rooms/assign', 'ControlController@assign_rooms_employees_control');
        //Ver habitaciones asignadas
        Route::get('control/employees/rooms/{id}', 'ControlController@show_rooms')->name('users.show_rooms');
});


