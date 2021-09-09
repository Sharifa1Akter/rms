<?php

use App\Http\Controllers\Backend\CategoryController;

use App\Http\Controllers\Backend\DeliverymanController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\ItemController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\UserController as BackendUser;

use App\Http\Controllers\Frontend\IndexController ;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Support\Facades\Route;





/*
|--------------------------------------------------------------------------
| Web Routesph
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/item',[ItemController::class,'items'])->name('item');


//login here
Route::get('/login',[UserController::class,'login'])->name('customer.login');
Route::post('/login/post',[UserController::class,'doLogin'])->name('customer.do.login');


Route::get('/signup',[UserController::class,'signupForm'])->name('user.signup');
Route::post('/signup/store',[UserController::class,'signupFormPost'])->name('user.signup.store');

Route::group(['prefix'=>'customer','middleware'=>'auth'],function (){
    Route::get('/logout',[UserController::class,'logout'])->name('customer.logout');
});

//admin panel routes

Route::get('/admin/login',[BackendUser::class,'login'])->name('admin.login');
Route::post('/admin/login/post',[BackendUser::class,'loginPost'])->name('admin.login.post');

Route::group(['prefix'=>'admin','middleware'=>['auth','role']],function(){
//localhost/projectname/public/category\
Route::get('/',[HomeController::class,'home'])->name('dashboard');
Route::get('/logout',[BackendUser::class,'logout'])->name('logout');


Route::get('/contact',[HomeController::class,'contact']);


Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
Route::get('/categories/create',[CategoryController::class,'create'])->name('category.create');
Route::get('/categories/detele/{id}',[CategoryController::class,'delete'])->name('category.delete');
Route::get('/categories/edit/{id}',[CategoryControllerr::class,'edit'])->name('category.edit');
Route::put('/categories/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::post('/categories/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/{id}/items',[CategoryController::class,'allItem'])->name('category.items');

Route::get('/items',[ItemController::class,'list'])->name('items.list');
Route::get('/items/create',[ItemController::class,'create'])->name('items.create');
Route::get('/items/delete/{id}',[ItemController::class,'delete'])->name('items.delete');
Route::get('/items/edit/{id}',[ItemController::class,'edit'])->name('items.edit');
Route::put('/items/update/{id}',[ItemController::class,'update'])->name('items.update');
Route::post('/items/store',[ItemController::class,'store'])->name('items.store');





Route::get('/employees',[EmployeeController::class,'list'])->name('employee.list');
Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->name('employee.delete');
Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::get('/employee/update/{id}',[EmployeeController::class,'update'])->name('employee.update');
Route::get('/employee/view/{id}',[EmployeeController::class,'view'])->name('employee.view');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');



Route::get('/deliveries',[DeliverymanController::class,'list'])->name('delivery.list');
Route::get('/delivery/create',[DeliverymanController::class,'create'])->name('delivery.create');
Route::post('/delivery/store',[DeliverymanController::class,'store'])->name('delivery.store');




Route::get('/orders',[OrderController::class,'list'])->name('order.list');
Route::post('/order/store',[OrderController::class,'store'])->name('order.store');
Route::get('/order/view/{id}',[OrderController::class,'view'])->name('order.view');
Route::get('/order/edit/{id}',[OrderController::class,'edit'])->name('order.edit');
Route::post('/update/{id}',[OrderController::class,'update'])->name('backend.update');
Route::get('/order/invoive/{id}',[OrderController::class,'invoice'])->name('backend.order.invoice');



Route::get('/customers',[BackendUser::class,'customerlist'])->name('customer.list');
Route::get('/users',[BackendUser::class,'userlist'])->name('user.list');

});
