<?php

use App\Http\Controllers\MtkController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    $x = 'Halaman About';
    return $x;
});

Route::get('/mtk/tambahv1', function(){
    $a = 40;
    $b = 50;
    $hasil = $a + $b;
    return $hasil;
});

Route::get('/mtk/tambahv2/{a}/{b}', function($a, $b){
    $hasil = $a + $b;
    return $hasil;
});

Route::get('/mtk/tambahv3/{a}/{b}', [MtkController::class, 'tambahv3']);

Route::get('/tesdb', function () {
    //phpinfo();
    //$db = new mysqli("localhost", "admin", "Admin123*", "nwind2211");
    $p = DB::select("select * from products");
    var_dump($p);
});

Route::get('/nwind/allproduct',[ProductController::class, 'allproduct']);
Route::get('/nwind/semuaproduk',[ProductController::class, 'semuaproduk']);
Route::get('/nwind/produkdetil/{id}',[ProductController::class, 'produkdetil']);
Route::get('/nwind/tambahproduk',[ProductController::class, 'tambahproduk']);
