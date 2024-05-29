<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ColorController;
use App\Http\Controllers\backend\CouponController;
use App\Http\Controllers\backend\CustomerController as CustomerData;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\SizeController;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\backend\SubsubcategoryController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckOutController;
use App\Http\Controllers\frontend\CustomerController;
use App\Http\Controllers\frontend\MenupageController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\Artisan;
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

// SSLCOMMERZ Start
Route::get( '/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout'] )->name( 'ssl.page' );
Route::get( '/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout'] );

Route::post( '/pay', [SslCommerzPaymentController::class, 'index'] );
Route::post( '/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax'] );

Route::post( '/success', [SslCommerzPaymentController::class, 'success'] );
Route::post( '/fail', [SslCommerzPaymentController::class, 'fail'] );
Route::post( '/cancel', [SslCommerzPaymentController::class, 'cancel'] );

Route::post( '/ipn', [SslCommerzPaymentController::class, 'ipn'] );
//SSLCOMMERZ END

Route::get( '/clear-cache', function () {
    $exitCode = Artisan::call( 'cache:clear' );
    return '<h1>Cache facade value cleared</h1>';
} );

//Reoptimized class loader:
Route::get( '/optimize', function () {
    $exitCode = Artisan::call( 'optimize' );
    return '<h1>Reoptimized class loader</h1>';
} );

//Route cache:
Route::get( '/route-cache', function () {
    $exitCode = Artisan::call( 'route:cache' );
    return '<h1>Routes cached</h1>';
} );

//Clear Route cache:
Route::get( '/route-clear', function () {
    $exitCode = Artisan::call( 'route:clear' );
    return '<h1>Route cache cleared</h1>';
} );

//Clear View cache:
Route::get( '/view-clear', function () {
    $exitCode = Artisan::call( 'view:clear' );
    return '<h1>View cache cleared</h1>';
} );




Route::get( '/', function () {
    return view( 'frontend.pages.home' );
} )->name( 'home' );

Route::view('/about','frontend.pages.about')->name('about.page');
Route::view('/contact','frontend.pages.contact')->name('contact.page');
Route::view('/login','frontend.pages.login')->name('login.page');

Route::fallback( function () {
    return view( 'frontend.pages.404' );
} );

// menu page controller
Route::get( '/all-product', [MenupageController::class, 'allProduct'] )->name( 'allproduct.page' );
Route::get( '/mensproduct-product/{slug}', [MenupageController::class, 'mensProduct'] )->name( 'mensproduct.page' );
Route::get( '/subproduct-product/{slug}', [MenupageController::class, 'subsubProduct'] )->name( 'subsubProduct.page' );
Route::get( '/cateproduct-product/{slug}', [MenupageController::class, 'categoryProduct'] )->name( 'categoryProduct.page' );

// user register
Route::get( '/login', [CustomerController::class, 'login_page'] )->name( 'login.page' );
Route::post( '/register', [CustomerController::class, 'customer_register'] )->name( 'customer_signup' );
Route::post( '/customerlogin', [CustomerController::class, 'customer_login'] )->name( 'customer.login' );

//ajax call
Route::get( '/upazila/ajax/{district_id}', [CheckOutController::class, 'loadAjax'] )->name( 'load.ajax' );

Route::prefix( 'customer/' )->middleware( 'auth', 'is_customer' )->group( function () {

    Route::get( '/profile', [CustomerController::class, 'customer_profile'] )->name( 'customer.profile' );
    Route::put( '/update-customer/{id}', [CustomerController::class, 'update'] )->name( 'update.customer' );
    Route::get( '/logout', [CustomerController::class, 'customer_logout'] )->name( 'customer.logout' );

    //customer checkout
    Route::get( 'checkout', [CheckOutController::class, 'checkoutPage'] )->name( 'cutomer.checkout' );
    Route::post( 'directorder/{product_slug}', [CartController::class, 'addTodirect'] )->name( 'direct.order' );
    Route::post( 'placeOrder', [CheckOutController::class, 'placeOrder'] )->name( 'place.order' );

    Route::get( '/invoice-pdf/{id}', [InvoiceController::class, 'generate_pdf'] )->name( 'customer.invoice' );
    Route::get( '/invoice-download/{id}', [InvoiceController::class, 'download'] )->name( 'download.invoice' );

} );

// auth for admin
Route::prefix( 'admin/' )->group( function () {

    Route::get( '/login', [LoginController::class, 'loginPage'] )->name( 'admin.loginpage' );
    Route::post( '/loginuser', [LoginController::class, 'loginUser'] )->name( 'admin.loginuser' );
    Route::get( '/logout', [LoginController::class, 'logout'] )->name( 'admin.logout' );

    Route::middleware( ['auth', 'is_admin'] )->group( function () {

        Route::get( '/dashbord', [DashbordController::class, 'dashbord'] )->name( 'admin.dashbord' );
        // Route::get('/category',[DashbordController::class,'dashbord'])->name('admin.dashbord');

        //order and customer index
        Route::get( 'order', [OrderController::class, 'index'] )->name( 'order.data' );
        Route::get( 'customer', [CustomerData::class, 'index'] )->name( 'customer.data' );
        Route::get( 'customer-edit/{id}', [CustomerData::class, 'edit'] )->name( 'customer.edit' );
        Route::post( 'customer-update/{id}', [CustomerData::class, 'update'] )->name( 'customer.update' );
        Route::delete( 'customer-delete/{id}', [CustomerData::class, 'delete'] )->name( 'customer.delete' );

        // for invoice
        Route::get( '/invoice-pdf/{id}', [InvoiceController::class, 'generate_pdf'] )->name( 'admin.invoice' );
        Route::get( '/invoice-download/{id}', [InvoiceController::class, 'download'] )->name( 'admin.download.invoice' );

        //Resource controller
        Route::resource( 'category', CategoryController::class );
        Route::resource( 'subcategory', SubcategoryController::class );
        Route::resource( 'subsubcategory', SubsubcategoryController::class );
        Route::resource( 'size', SizeController::class );
        Route::resource( 'color', ColorController::class );
        Route::resource( 'testimonial', TestimonialController::class );
        Route::resource( 'products', ProductController::class );
        Route::resource( 'coupon', CouponController::class );

        // get subcategory & subsubcategory
        Route::get( 'subcategories/{category}', [SubcategoryController::class, 'get_subcategory'] )->name( 'subcategory.get' );
        Route::get( 'subsubcategories/{subcategory}', [SubsubcategoryController::class, 'get_subsubcategory'] )->name( 'subsubcategory.get' );

    } );

} );
