<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});
// تعديل ملف web.php

Route::resource('products', ProductsController::class);
Route::post('products/{product}/restore', [ProductsController::class, 'restore'])->name('products.restore');
