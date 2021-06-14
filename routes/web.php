<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Post;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Models\Category;

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

// Route::get('/', function () { 
//     $products = Product::all();
//     return view('products' ,['products' => $products]);
// });

Route::get('/home', [ProductsController::class ,'index']);
Route::get('/home/{slug}', function (Product $slug) {
    // $product = Product::find($id);
return view('product', ['product' => $slug]);
});
  
// Route::get('categories/{category}', function(Category $category) {
//     $products = Product::whereCategoryID($category->id);
//     return $products;
// });
Route::get('/login' , [LoginController::class,'login']);
Route::post('/login' , [LoginController::class,'authenticate']);

// Route::get('/categories',[CategoryController::class, 'index' ]);
Route::get('/categories/{category}',[CategoryController::class, 'show' ]);





    //Route Model Binding function(Product . $product) =           // $product = Product::find($id);

// [
//     [
//         'product_name' => 'Product 1',
//         'product_description' => 'r web routes for your application. These
//         |routes are loaded by the RouteServiceProvider within a g'
//     ],
//     [
//         'product_name' => 'Product 2',
//         'product_description' => 'r web routes for your application. These
//         |routes are loaded by the RouteServiceProvider within a g'
//     ],
//     [
//         'product_name' => 'Product 3',
//         'product_description' => 'r web routes for your application. These
//         |routes are loaded by the RouteServiceProvider within a g'
//     ],
// ]

// Route::get('/create_product' , function(){
//      Product::create([
//              'product_name' => 'Laptop',
//              'product_desc' =>  'This is very nice lappye phone',
//              'price' => '190000',
//      ]);
// });

// Route::get('/get_product' , function(){
//        $products = Product::get();
//        return $products;
//    });

//    Route::get('/create_post' , function(){
//            Post::create([
//                    'title'=> 'Chia seed',
//                    'post_desc' => 'This is post tha determined= the ripe mangoes',
//                    'author' => 'Prashant Sharma Dhungana',
//            ]);
//    });

//    Route::get('/post' , function(){
//            $posts = Post::get();
//            return view('post' ,['posts' => $posts]);
//    });











//    array(
        
//         'product_name' => 'Product 1',
//         'product_description' => 'r web routes for your application. These
//         |routes are loaded by the RouteServiceProvider within a g'
    
// );
// $product2 = array(
    
//         'product_name' => 'Product 2',
//         'product_description' => 'r web routes for your application. These
//         |routes are loaded by the RouteServiceProvider within a gLaravel needs almost no other configuration out of the box. You are free to get started developing! However, you may wish to review the config/app.php file and its documentation. It contains several options such as timezone and locale that you may wish to change according to your application.'
    
// );
// $product3 = array(
    
//         'product_name' => 'Product 3',
//         'product_description' => 'r web routes for your application. These
//         |routes are loaded by the RouteServiceProvider within a g hello bujklsdh humkljdskarkshma huiagj orashja bjsk llab dsptravnbcnjguieoemgg nsdkalhfi'
    
// );

//html parsing inside the database
//{ !! !!}print with html parsing


//Admin routing
Route::get('/admin/products' , [App\Http\Controllers\Admin\ProductsController::class , 'index']);
Route::get('/admin/products/create' , [App\Http\Controllers\Admin\ProductsController::class , 'create']);
