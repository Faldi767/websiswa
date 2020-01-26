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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/tambah', 'SiswaController@tambah');
Route::post('/siswa/store', 'SiswaController@store');
Route::get('/siswa/edit/{id}', 'SiswaController@edit');
Route::put('/siswa/update/{id}', 'SiswaController@update');
Route::get('/siswa/hapus/{id}', 'SiswaController@delete');
Route::get('/siswa/trash', 'SiswaController@trash');
Route::get('/siswa/kembalikan/{id}', 'SiswaController@kembalikan');
Route::get('/siswa/kembalikan_semua', 'SiswaController@kembalikan_semua');
Route::get('/siswa/hapuspermanen/{id}', 'SiswaController@hapuspermanen');
Route::get('/siswa/hapuspermanen_semua', 'SiswaController@hapuspermanen_semua');
Route::get('/role', 'RoleController@index');
Route::get('/rolesiswa', 'RoleSiswaController@index');