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

});

// Route::get('/chart-c3', function () {
//     return view('chart-c3');
// });
// Route::get('/chart-chartistjs', function () {
//     return view('chart-chartistjs');
// });
// Route::get('/chart-chartjs', function () {
//     return view('chart-chartjs');
// });
// Route::get('/chart-flot', function () {
//     return view('chart-flot');
// });
// Route::get('/chart-knob', function () {
//     return view('chart-knob');
// });
// Route::get('/chart-morris', function () {
//     return view('chart-morris');
// });
// Route::get('/chart-piety', function () {
//     return view('chart-piety');
// });
// Route::get('/chart-sparkline', function () {
//     return view('chart-sparkline');
// });
// Route::get('/components-nestable', function () {
//     return view('components-nestable');
// });
// Route::get('/components-range-slider', function () {
//     return view('components-range-slider');
// });
// Route::get('/components-ratings', function () {
//     return view('components-ratings');
// });
// Route::get('/components-switchery', function () {
//     return view('components-switchery');
// });
// Route::get('/components-treeview', function () {
//     return view('components-treeview');
// });
// Route::get('/components-widgets', function () {
//     return view('components-widgets');
// });
// Route::get('/email-compose', function () {
//     return view('email-compose');
// });
// Route::get('/email-inbox', function () {
//     return view('email-inbox');
// });
// Route::get('/email-open', function () {
//     return view('email-open');
// });
// Route::get('/events', function () {
//     return view('events');
// });
// Route::get('/form-colorpickers', function () {
//     return view('form-colorpickers');
// });
// Route::get('/form-datepickers', function () {
//     return view('form-datepickers');
// });
// Route::get('/form-editors', function () {
//     return view('form-editors');
// });
// Route::get('/form-file-uploads', function () {
//     return view('form-file-uploads');
// });
// Route::get('/form-groups', function () {
//     return view('form-groups');
// });
// Route::get('/form-input-mask', function () {
//     return view('form-input-mask');
// });
// Route::get('/form-inputs', function () {
//     return view('form-inputs');
// });
// Route::get('/form-layouts', function () {
//     return view('form-layouts');
// });
// Route::get('/form-maxlength', function () {
//     return view('form-maxlength');
// });
// Route::get('/form-selects', function () {
//     return view('form-selects');
// });
// Route::get('/form-touchspin', function () {
//     return view('form-touchspin');
// });
// Route::get('/form-validations', function () {
//     return view('form-validations');
// });
// Route::get('/form-wizards', function () {
//     return view('form-wizards');
// });
// Route::get('/form-xeditable', function () {
//     return view('form-xeditable');
// });
Route::get('/icon-dripicons', function () {
    return view('icon-dripicons');
});
Route::get('/icon-font-awesome', function () {
    return view('icon-font-awesome');
});
Route::get('/icon-ionicons', function () {
    return view('icon-ionicons');
});
Route::get('/icon-material-design', function () {
    return view('icon-material-design');
});
Route::get('/icon-simple-line', function () {
    return view('icon-simple-line');
});
Route::get('/icon-themify', function () {
    return view('icon-themify');
});
Route::get('/icon-typicons', function () {
    return view('icon-typicons');
});
// Route::get('/map-google', function () {
//     return view('map-google');
// });
// Route::get('/map-vector', function () {
//     return view('map-vector');
// });
// Route::get('/page-403', function () {
//     return view('page-403');
// });
// Route::get('/page-404', function () {
//     return view('page-404');
// });
// Route::get('/page-500', function () {
//     return view('page-500');
// });
// Route::get('/page-503', function () {
//     return view('page-503');
// });
// Route::get('/page-comingsoon', function () {
//     return view('page-comingsoon');
// });
// Route::get('/page-faq', function () {
//     return view('page-faq');
// });
// Route::get('/page-forgotpsw', function () {
//     return view('page-forgotpsw');
// });
// Route::get('/page-invoice', function () {
//     return view('page-invoice');
// });
// Route::get('/page-lock-screen', function () {
//     return view('page-lock-screen');
// });
// Route::get('/page-login', function () {
//     return view('page-login');
// });
// Route::get('/page-maintenance', function () {
//     return view('page-maintenance');
// });
// Route::get('/page-pricing', function () {
//     return view('page-pricing');
// });
// Route::get('/page-register', function () {
//     return view('page-register');
// });
// Route::get('/page-starter', function () {
//     return view('page-starter');
// });
// Route::get('/page-timeline', function () {
//     return view('page-timeline');
// });
// Route::get('/table-bootstrap', function () {
//     return view('table-bootstrap');
// });
// Route::get('/table-datatable', function () {
//     return view('table-datatable');
// });
// Route::get('/table-editable', function () {
//     return view('table-editable');
// });
// Route::get('/table-rwdtable', function () {
//     return view('table-rwdtable');
// });
// Route::get('/ui-kits-alerts', function () {
//     return view('ui-kits-alerts');
// });
// Route::get('/ui-kits-badges', function () {
//     return view('ui-kits-badges');
// });
// Route::get('/ui-kits-buttons', function () {
//     return view('ui-kits-buttons');
// });
// Route::get('/ui-kits-cards', function () {
//     return view('ui-kits-cards');
// });
// Route::get('/ui-kits-carousel', function () {
//     return view('ui-kits-carousel');
// });
// Route::get('/ui-kits-collapse', function () {
//     return view('ui-kits-collapse');
// });
// Route::get('/ui-kits-dropdowns', function () {
//     return view('ui-kits-dropdowns');
// });
// Route::get('/ui-kits-grids', function () {
//     return view('ui-kits-grids');
// });
// Route::get('/ui-kits-images', function () {
//     return view('ui-kits-images');
// });
// Route::get('/ui-kits-media', function () {
//     return view('ui-kits-media');
// });
// Route::get('/ui-kits-modals', function () {
//     return view('ui-kits-modals');
// });
// Route::get('/ui-kits-paginations', function () {
//     return view('ui-kits-paginations');
// });
// Route::get('/ui-kits-popovers', function () {
//     return view('ui-kits-popovers');
// });
// Route::get('/ui-kits-progressbars', function () {
//     return view('ui-kits-progressbars');
// });
// Route::get('/ui-kits-tabs', function () {
//     return view('ui-kits-tabs');
// });
// Route::get('/ui-kits-tooltips', function () {
//     return view('ui-kits-tooltips');
// });
// Route::get('/ui-kits-typography', function () {
//     return view('ui-kits-typography');
// });
