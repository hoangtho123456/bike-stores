<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/products', function(Request $request){
//     return Product::all();
// });

// Route::post('/products', function(Request $request){
//     return Product::create([
//         'product_name' => 'Test product one',
//         'slug' => 'test-product-one',
//         'brand_id' => 1,
//         'category_id' => 2,
//         'model_year' => 2020,
//         'list_price' => 899.99
//     ]);
// });

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
