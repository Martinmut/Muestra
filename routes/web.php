    
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

    
    
	
Route::get('/b', function () {
    return view('login');
});

Route::get('/ver', 'TareaController@ver');


Route::group(['middleware' => 'readwrite'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    Route::get('/', 'TareaController@mostrar')
	->name("home");
Route::get('/tarea/form', 'TareaController@form')
    ->name("tarea.formulario");
    
Route::post('/tareas/nuevo', 'TareaController@guardar')
    ->name("tarea.guardar");
    #adminlte_routes
});
Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.

    Route::get('/', 'TareaController@mostrar')
	->name("home");
    #adminlte_routes
});
Route::resource('tareas', 'TareasController');
Route::resource('Utils/todos', 'Utils\TodosController');
Route::resource('grupo', 'GrupoController');
Route::resource('alumno', 'AlumnoController');
Route::resource('usuario', 'usuarioController');
Route::resource('vehiculo', 'vehiculoController');
Route::resource('cita', 'citaController');
Route::resource('cita', 'citaController');