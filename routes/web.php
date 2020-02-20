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

Route::get('/', 'PagesController@index' )->name('inicio');

//Notas CRUD
Route::get('/detalle/{id?}', 'PagesController@detalles' )->name('nota.detalles');
Route::get('/actualizar/{id?}', 'PagesController@Actualizar' )->name('nota.actualizar');
Route::post('/', 'PagesController@agregar')->name('notas.crear');
Route::put('/actualizar/{id?}', 'PagesController@update')->name('notas.update');

Route::delete('/eliminar/{id?}', 'PagesController@eliminar')->name('nota.eliminar');

Route::view('galeria', 'fotos', ['numero'=> 125]);

Route::get('foto', 'PagesController@foto')->name('gallery');

Route::get('blog', 'PagesController@blog')->name('blog');

Route::get('about/{nombre?}','PagesController@about')->name('nosotros');


Route::get('fotos/{id?}', function ($id = '0' ) {
    return 'Esta enc la galeria de fotos: '. $id;

})->where('id','[0-9]+');


