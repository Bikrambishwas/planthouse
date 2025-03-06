<?php

use App\Http\Controllers\Backend\AccountController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SitesettingController;
use Illuminate\Support\Facades\File;
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
Route::fallback(function () {
    return view('errors.404');
  });

Route::get('/', function () {
    return view('frontend.pages.home');
});

Route::get('/collection', function () {
    return view('frontend.pages.collection');
});

Route::get('/singleproduct', function () {
    return view('frontend.pages.singleproduct');
});




  //ADMIN
  Route::get('/backoffice', [LoginController::class, 'login'])->name('adminlogin');
  Route::post('/backoffice/login', [LoginController::class, 'backoffice'])->name('adminbackoffice');
  Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
  // View after login
  Route::get('home', [DashboardController::class, 'index'])->name('home');
  Route::get('logout', [LoginController::class, 'logout'])->name('logout');
  // Change profile settings or details
  Route::get('change-profile', [AccountController::class, 'change_profile'])->name('change-profile');
  Route::post('update-profile', [AccountController::class, 'update_profile'])->name('update-profile');
  // Change Admin Password
  Route::get('change-password', [AccountController::class, 'change_password'])->name('change-password');
  Route::post('update-password', [AccountController::class, 'update_password'])->name('update_password');
  //SITE SETTINGS============================================================================================
  Route::get('sitesetting', [SitesettingController::class, 'index'])->name('sitesetting');
  Route::post('sitesetting/get_row_data', [SitesettingController::class, 'get_row_data'])->name('get_row_data');
  Route::post('sitesetting/create', [SitesettingController::class, 'store'])->name('sitesetting.create');
  Route::post('sitesetting/edit/{id}', [SitesettingController::class, 'update'])->name('sitesetting.update');

  // category
  Route::get('category',[CategoryController::class, 'index'])->name('category');
  Route::post('category/get_category_row',[CategoryController::class, 'get_category_row'])->name('get_category_row');
  Route::post('category/create',[CategoryController::class, 'store'])->name('category.store');
  Route::post('category/update/{id}',[CategoryController::class, 'update'])->name('category.update');
  Route::post('category/ajax_position',[CategoryController::class , 'ajax_position'])->name('category.ajax_position');
  Route::get('category/delete/{id}',[CategoryController::class, 'destroy'])->name('category.delete');


  // pages
  Route::get('page',[PageController::class, 'index'])->name('page');
  Route::get('page/add',[PageController::class, 'add'])->name('page.add');
  Route::post('page/create',[PageController::class, 'store'])->name('page.store');
  Route::get('page/edit/{id}',[PageController::class, 'edit'])->name('page.edit');
  Route::post('page/update/{id}',[PageController::class, 'update'])->name('page.update');
  Route::get('page/delete/{id}',[PageController::class, 'destroy'])->name('page.delete');


  // Menu
  Route::get('menu/edit/menu={id}',[MenuController::class, 'index'])->name('menu');
  Route::post('menu/create',[MenuController::class, 'store'])->name('menu.store');
  Route::post('menu/update/{id}',[MenuController::class, 'update'])->name('menu.update');
  Route::get('menu/delete/{id}',[MenuController::class, 'destroy'])->name('menu.delete');

    // pages
  Route::get('product',[ProductController::class, 'index'])->name('product');
  Route::get('product/add',[ProductController::class, 'add'])->name('product.add');
  Route::post('product/create',[ProductController::class, 'store'])->name('product.store');
  Route::get('product/edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
  Route::post('product/update/{id}',[ProductController::class, 'update'])->name('product.update');
  Route::get('product/delete/{id}',[ProductController::class, 'destroy'])->name('product.delete');


  // pages
    Route::get('blog',[BlogController::class, 'index'])->name('blog');
    Route::get('blog/add',[BlogController::class, 'add'])->name('blog.add');
    Route::post('blog/create',[BlogController::class, 'store'])->name('blog.store');
    Route::get('blog/edit/{id}',[BlogController::class, 'edit'])->name('blog.edit');
    Route::post('blog/update/{id}',[BlogController::class, 'update'])->name('blog.update');
    Route::get('blog/delete/{id}',[BlogController::class, 'destroy'])->name('blog.delete');

  });


  Route::get('/images/{folder}/{size}/{filename}', function($folder, $size, $filename) {
    $path = public_path('uploads/' . $folder . '/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $fileExtension = strtolower(File::extension($filename));
    // Validate and set the desired format
    $format = in_array($fileExtension, ['png', 'jpg', 'jpeg', 'avif']) ? $fileExtension : 'png';

    // Parse the size parameter to get width and height
    list($width, $height) = explode('x', $size);

    $image = Image::make($path)
        ->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

    return $image->response($format);
  });


