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
    return redirect('/login');
});

// Route::get('/login', function () {
//     return view('Pengguna.login');
// });

Route::get('/login', function () {
    return view('Pengguna.login');
})->name('login'); 

Route::post('/postlogin','LoginController@postlogin')->name('postlogin');
Route::get('/logout','LoginController@logout')->name('logout');


// Route::group(['middleware' => ['auth:user','ceklevel:admin']], function(){

    Route::get('/beranda','BerandaController@index')->middleware('auth');

// });


//Route jabatan
Route::get('/jabatan', 'JabatanController@index')->name('jabatan');
Route::get('/jabatan/tambah', 'JabatanController@tambah');
Route::post('/jabatan/store', 'JabatanController@store');
Route::put('/jabatan/update/{id_jabatan}', 'JabatanController@update');
Route::get('/jabatan/edit/{id_jabatan}', 'JabatanController@edit');
Route::get('/jabatan/delete/{id_jabatan}', 'JabatanController@delete');
Route::get('/jabatan/detail/{id_jabatan}', 'JabatanController@detail');



//Route Jabatan Detail
Route::get('/jabatan_detail', 'Jabatan_detailController@index')->name('jabatan_detail');
Route::get('/jabatan_detail/jabatan/{id}', 'Jabatan_detailController@index');
// Route::get('/jabatan_detail/tambah', 'Jabatan_detailController@tambah');
Route::post('/jabatan_detail/store', 'Jabatan_detailController@store');
Route::put('/jabatan_detail/update/{id}', 'Jabatan_detailController@update');
Route::get('/jabatan_detail/edit/{id}','jabatan_detailController@edit');
Route::get('/jabatan_detail/delete/{id}/{id_jabatan}', 'jabatan_detailController@delete');
Route::get('/jabatan_detail/detail/{id}', 'jabatan_detailController@detail');

//Route Karyawan
Route::get('/karyawan', 'KaryawanController@index')->name('karyawan');
Route::get('/karyawan/tambah', 'KaryawanController@tambah');
Route::post('/karyawan/store', 'KaryawanController@store');
Route::put('/karyawan/update/{nip}', 'KaryawanController@update');
Route::get('/karyawan/edit/{nip}', 'KaryawanController@edit');
Route::get('/karyawan/delete/{nip}', 'KaryawanController@delete');
Route::get('/karyawan/detail/{nip}', 'KaryawanController@detail');

//Route Jenis Gaji
Route::get('/jenis_gaji', 'Jenis_gajiController@index')->name('jenis_gaji');
Route::get('/jenis_gaji/tambah', 'Jenis_gajiController@tambah');
Route::post('/jenis_gaji/store', 'Jenis_gajiController@store');
Route::get('/jenis_gaji/edit/{id_jenis_gaji}', 'Jenis_gajiController@edit');
Route::put('/jenis_gaji/update/{id_jenis_gaji}', 'Jenis_gajiController@update');
Route::get('/jenis_gaji/detail/{id_jenis_gaji}', 'Jenis_gajiController@detail');
Route::get('/jenis_gaji/delete/{id_jenis_gaji}', 'Jenis_gajiController@delete');

//Route Penggajian
Route::get('/penggajian', 'PenggajianController@index')->name('penggajian');
Route::get('/penggajian/tambah', 'PenggajianController@tambah');
Route::get('/penggajian/tambah/{id_karyawan}', 'PenggajianController@tambah');
Route::post('/penggajian/store', 'PenggajianController@store');
Route::get('/penggajian/detail/{id_penggajian}', 'PenggajianController@detail');
Route::get('/penggajian/edit/{id_penggajian}', 'PenggajianController@edit');
Route::put('/penggajian/update/{id_penggajian}', 'PenggajianController@update');
Route::get('/penggajian/delete/{id_penggajian}', 'PenggajianController@delete');

//Route Penggajian_detail
Route::get('/penggajian_detail', 'Penggajian_detailController@index')->name('penggajian_detail');
Route::get('/penggajian_detail/penggajian/{id_detail}', 'Penggajian_detailController@index');
// Route::get('/penggajian_detail/tambah', 'Penggajian_detailController@tambah');
Route::post('/penggajian_detail/store', 'Penggajian_detailController@store');
Route::get('/penggajian_detail/detail/{id_detail}', 'Penggajian_detailController@detail');
Route::get('/penggajian_detail/edit/{id_detail}', 'Penggajian_detailController@edit');
Route::put('/penggajian_detail/update/{id_detail}', 'Penggajian_detailController@update');
Route::get('/penggajian_detail/delete/{id_detail}/{id_penggajian}', 'Penggajian_detailController@delete');
// Route::get('/penggajian_detail/delete/{id_detail}', 'Penggajian_detailController@delete');
Route::get('/penggajian_detail/cetak/{id_penggajian}', 'Penggajian_detailController@cetakPegawai');
Route::get('/penggajian_detail/cetak/penggajian{id_detail}', 'Penggajian_detailController@cetakPegawai');







