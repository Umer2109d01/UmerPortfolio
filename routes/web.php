<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\signupcontroller;
use App\http\controllers\productcontroller;
use App\http\controllers\categorycontroller;
use App\http\controllers\CartController;
use App\http\controllers\HomeController;
use App\http\controllers\contactcontroller;
use App\http\controllers\LoginController;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/laptop', function () {
    return view('laptop');
});
Route::get('/all', function () {
    return view('all');
});
Route::get('/computer', function () {
    return view('computer');
});
Route::get('/tablet', function () {
    return view('index');
});
Route::get('/accessories', function () {
    return view('accessories');
});
Route::get('/contact', function () {
    return view('contactus');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/admin', function () {
    return view('admin');
});


Route::get('/viewproduct', function () {
    return view('viewproduct');
});

Route::get('/user', function () {
    return view('user');
});
Route::get('/stock', function () {
    return view('stock');
});
Route::get('/userorder', function () {
    return view('userorder');
});
Route::get('/order', function () {
    return view('order');
});
Route::get('/address', function () {
    return view('address');
});

Route::post('/signup',[signupcontroller::class,('insert')]);
Route::get('/signup',[signupcontroller::class,('show')]);
Route::get('/user',[signupcontroller::class,('showuser')]);
Route::get('delete_user/{id}',[signupcontroller::class,'user_delete']);

Route::post('/add_product',[productcontroller::class,'pinsert']);
Route::get('/addproduct',[productcontroller::class,('plocate')]);
Route::get('/viewproduct',[productcontroller::class,('showproduct')]);
Route::get('/all',[productcontroller::class,('allshowproduct')]);
Route::get('/laptop',[productcontroller::class,('laptopshowproduct')]);
Route::get('/computer',[productcontroller::class,('computershowproduct')]);
Route::get('/tablet',[productcontroller::class,('tabletshowproduct')]);


Route::get('/accessories',[productcontroller::class,('accesshowproduct')]);


Route::get('delete_product/{id}',[productcontroller::class,'product_delete']);

Route::get('update_product/{id}',[productcontroller::class,'product_update']);
Route::get('edit_product/{id}',[productcontroller::class,'product_edit']);
Route::get('/update',[productcontroller::class,('product')]);
Route::get('/addproduct',[categorycontroller::class,('catshow1')]);
Route::post('/addcategory',[categorycontroller::class,('catinsert')]);
Route::get('/addcategory',[categorycontroller::class,('catlocate')]);
Route::get('/addproduct',[categorycontroller::class,('catshow')]);
Route::get('/update',[categorycontroller::class,('catshow1')]);
Route::post('/contact',[contactcontroller::class,('coninsert')]);
Route::get('/message',[contactcontroller::class,('conshow')]);
Route::get('/contact',[contactcontroller::class,('conlocate')]);
Route::get('delete_contact/{id}',[contactcontroller::class,'contact_delete']);

Route::get('cart', [productcontroller::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [productcontroller::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [productcontroller::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [productcontroller::class, 'remove'])->name('remove.from.cart');
Route::get('/checkout',[productcontroller::class,'checkout']);

Route::get('/order',[productcontroller::class,('showorder')]);
Route::get('/userorder',[productcontroller::class,('showorder1')]);
Route::get('delete_order/{id}',[productcontroller::class,'order_delete']);
Route::get('/dashboard/{id}',[signupcontroller::class,('totaluser')]);



Route::post('/addproduct', [ProductController::class, 'store']);

Auth::routes();


Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'admin'])->name('dashboard');

Route::post('/continuecart',[productcontroller::class,('continuecart')]);
