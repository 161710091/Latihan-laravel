<?php

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about',function() {
// 	return '<h1>Halo</h1>'
// 	.'Selamat datang di webapp saya <br>'
// 	.'Laravel, emang keren.';
// });

// Route::get('/about/1',function() {
// 	return '<h1>Halo</h1>'
// 	.'Halaman 1';
// });

// Route::get('/about/2',function() {
// 	return '<h1>Halo</h1>'
// 	.'Halaman 2';
// });

// Route::get('/about/3',function() {
// 	return '<h1>Halo</h1>'
// 	.'Halaman 3';
// });

// Route::get('/about/4',function() {
// 	return '<h1>Halo</h1>'
// 	.'Halaman 4';
// });

// Route::get('/kontak', function() {
// 	return view('kontak');
// });

// Route::get('/about/{page}',function($a){
// 	return 'Ini Halaman about <b>'.$a.'</b>';
// });

// Route::get('/kantin/{makanan}/{minuman}/{cemilan}', function($a, $b, $c){
// 	return 'Saya pesan <b> '.$a.'</b><br>'
// 	.'Minumya <b>'.$b.'</b><br>'
// 	.'Tambah cemilan <b>'.$c.'</b>';
// });

Route::get('user/{name?}', function ($name = 'Jhon'){
	return 'Nama saya '.$name;
});