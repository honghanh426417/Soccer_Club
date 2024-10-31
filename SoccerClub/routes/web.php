<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditingController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!

 */


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */
    Route::get('/', function () {
        return view('client.home');
    })->name('client.home');

    Route::get('/about us', function () {
        return view('client.aboutus');
    })->name('client.aboutus');

    Route::get('/contact us', function () {
        return view('client.contactus');
    })->name('client.contactus');

    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });
    Route::get('/checkout', 'OrderController@index')->name('checkout.index');
    Route::get('checkout/createOrder', 'OrderController@createOrder')->name('checkout.createOrder');
    Route::get('/checkout/viewcartdone', 'OrderController@showOrderDetails')->name('order.show');
    Route::get('/orderhistory', 'OrderController@history')->name('order.history');
    Route::get('/feedback', [FeedbackController::class, 'show'])->name('feedback.show');
    Route::post('/feedback', [FeedbackController::class, 'create'])->name('feedback.create');
    Route::post('/reviews', 'OrderController@store')->name('reviews.store');

    Route::group(['middleware' => ['auth',]], function () {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'Logoutcontroller@perform')->name('logout.perform');
    });

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('admin/login', function () {
    return view('admin.login');
});

Route::get('client/matches', function () {
    return view('client.matches');
})->name('client.matches');

Route::get('client/news/FIFA CLUB WORLD CUP JAPAN 2008™', function () {
    return view('client.news');
})->name('client.news');
Route::get('client/news/PREMIER LEAGUE CUP', function () {
    return view('client.news2');
})->name('client.news2');
Route::get('client/news/FA CUP', function () {
    return view('client.news3');
})->name('client.news3');
Route::get('client/news/FA COMMUNITY SHIELD CUP 2016', function () {
    return view('client.news4');
})->name('client.news4');
Route::get('client/news/FOOTBALL LEAGUE CUP 2010', function () {
    return view('client.news5');
})->name('client.news5');
Route::get('client/news/UEFA EUROPA LEAGUE CUP 2017', function () {
    return view('client.news6');
})->name('client.news6');
Route::get('client/news/PREMIER LEAGUE CUP 12-13', function () {
    return view('client.news7');
})->name('client.news7');
Route::get('client/news/EUROPEAN SUPER CUP', function () {
    return view('client.news8');
})->name('client.news8');

Route::post('/admin/login', [AdminController::class, 'loginPost'])->name('admin.loginPost');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/players', function () {
    $players = DB::table('players')->get();

    return view('players', [
        'players' => $players
    ]);
})->name('players.index');


Route::get('/player-detail/{id}', [PlayerController::class, 'display'])->name('player-detail');
Route::get('/product-detail/{id}', [ProductController::class, 'display'])->name('product-detail');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/AddCart/{id}', [ProductController::class, 'AddCart'])->name('products.AddCart');
Route::get('/Delete-Item-Cart/{id}', [ProductController::class, 'DeleteItemCart'])->name('products.DeleteItemCart');
Route::get('/List-Carts', [ProductController::class, 'ViewListCart'])->name('products.ViewListCart');
Route::get('/Delete-List-Item-Cart/{id}', [ProductController::class, 'DeleteListItemCart'])->name('products.DeleteListItemCart');
Route::get('/Save-List-Item-Cart/{id}/{quanty}', [ProductController::class, 'SaveListItemCart'])->name('product.SaveListItemCart');


Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/statistics', [AdminController::class, 'statistics'])->name('admin.statistics');
    Route::get('/admin/orderdetail/{id}', [OrderController::class, 'edit'])->name('admin.orderdetail');
    Route::get('/admin/listing/{model}', [ListingController::class, 'index'])->name('listing.index');
    Route::post('/admin/listing/{model}', [ListingController::class, 'index'])->name('listing.index');
    Route::get('/admin/editing/{model}', [EditingController::class, 'create'])->name('editing.create');
    Route::post('/admin/editing/{model}', [EditingController::class, 'store'])->name('editing.store');
    Route::get('/admin/listing/{model}/{id}', [ListingController::class, 'delete'])->name('listing.delete');
    Route::get('/admin/{model}/{id}', [ListingController::class, 'deleteplayer'])->name('listing.deleteplayer');
    Route::get('listing/{model}/edit/{id}', [ListingController::class, 'edit'])->name('listing.edit');
    Route::PUT('listing/{model}/update/{id}', [ListingController::class, 'update'])->name('listing.update');
    Route::delete('/delete-product/{id}', 'ProductController@delete')->name('products.delete');
    Route::put('/admin/orderdetail/{id}', [OrderController::class, 'updateStatus'])->name('listing.updateStatus');
});
