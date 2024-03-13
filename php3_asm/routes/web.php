<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/danh_muc_san_pham', function () {
    $query = DB::table('category')
        ->select('category_id', 'category_name','category_thumbnail');
    $data = $query->get();
    return view('category', ['data'=>$data]);
});

Route::get('/danh_muc_san_pham/{category_id}', function ($id){
    $query = DB::table('product')
        ->select('product_id','product_name','product_price', 'product_image')
        ->where('category_id', '=', $id);
    $data = $query->get();
   return view('productByCategory', ['data'=>$data]);
});

Route::get('/san_pham/{product_id}', function ($product_id){
    $query = DB::table('product')
        ->select('product_id','product_name','product_price', 'product_image')
        ->where('product_id','=', $product_id);
    $data = $query->first();
    return view('detailProduct', compact('data'));
});

Route::get('/san_pham', function () {
    $query = DB::table('product')
        ->select('product_id','product_name','product_price', 'product_image');
    $data = $query->get();
    return view('product',['data'=>$data]);
});

Route::get('/lien_he', function () {
    return view('contact');
});

Route::get('/dang_nhap', function () {
    return view('login');
});

Route::get('/dang_ky', function () {
    return view('signup');
});
