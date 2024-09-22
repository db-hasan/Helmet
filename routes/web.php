<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CostTypeController;
use App\Http\Controllers\CostingController;
use App\Http\Controllers\OthersProfitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\StockController;


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



Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'adminlogin'])->name('admin.login');

Route::group(['middleware'=>'isAdmin'],function(){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    Route::get('role-index',[RoleController::class, 'indexrole'])->name('role.index');
    Route::get('role-insert',[RoleController::class,'createrole'])->name('role.create');
    Route::post('role-insert',[RoleController::class,'storerole'])->name('role.store');
    Route::get('role-update/{id}',[RoleController::class,'editrole'])->name('role.edit');
    Route::put('role-update/{id}',[RoleController::class,'updaterole'])->name('role.update');

    Route::get('user-index',[AuthController::class, 'indexuser'])->name('user.index');
    Route::get('user-insert',[AuthController::class,'createuser'])->name('user.create');
    Route::post('user-insert',[AuthController::class,'storeuser'])->name('user.store');
    Route::get('user-update/{id}',[AuthController::class,'edituser'])->name('user.edit');
    Route::put('user-update/{id}',[AuthController::class,'updateuser'])->name('user.update');
    
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('profle-update',[AuthController::class,'profileupdate'])->name('profle.update');
    Route::post('profle-update',[AuthController::class,'passwordupdate'])->name('password.update');

    Route::get('warehouse-index',[WarehouseController::class, 'indexwarehouse'])->name('warehouse.index');
    Route::get('warehouse-insert',[WarehouseController::class,'createwarehouse'])->name('warehouse.create');
    Route::post('warehouse-insert',[WarehouseController::class,'storewarehouse'])->name('warehouse.store');
    Route::get('warehouse-update/{id}',[WarehouseController::class,'editwarehouse'])->name('warehouse.edit');
    Route::put('warehouse-update/{id}',[WarehouseController::class,'updatewarehouse'])->name('warehouse.update');

    Route::get('type-index',[CategoryController::class, 'indextype'])->name('type.index');
    Route::get('type-insert',[CategoryController::class,'createtype'])->name('type.create');
    Route::post('type-insert',[CategoryController::class,'storetype'])->name('type.store');
    Route::get('type-update/{id}',[CategoryController::class,'edittype'])->name('type.edit');
    Route::put('type-update/{id}',[CategoryController::class,'updatetype'])->name('type.update');

    Route::get('brand-index',[CategoryController::class, 'indexbrand'])->name('brand.index');
    Route::get('brand-insert',[CategoryController::class,'createbrand'])->name('brand.create');
    Route::post('brand-insert',[CategoryController::class,'storebrand'])->name('brand.store');
    Route::get('brand-update/{id}',[CategoryController::class,'editbrand'])->name('brand.edit');
    Route::put('brand-update/{id}',[CategoryController::class,'updatebrand'])->name('brand.update');

    Route::get('model-index',[CategoryController::class, 'indexmodel'])->name('model.index');
    Route::get('model-insert',[CategoryController::class,'createmodel'])->name('model.create');
    Route::post('model-insert',[CategoryController::class,'storemodel'])->name('model.store');
    Route::get('model-update/{id}',[CategoryController::class,'editmodel'])->name('model.edit');
    Route::put('model-update/{id}',[CategoryController::class,'updatemodel'])->name('model.update');

    Route::get('size-index',[CategoryController::class, 'indexsize'])->name('size.index');
    Route::get('size-insert',[CategoryController::class,'createsize'])->name('size.create');
    Route::post('size-insert',[CategoryController::class,'storesize'])->name('size.store');
    Route::get('size-update/{id}',[CategoryController::class,'editsize'])->name('size.edit');
    Route::put('size-update/{id}',[CategoryController::class,'updatesize'])->name('size.update');

    Route::get('color-index',[CategoryController::class, 'indexcolor'])->name('color.index');
    Route::get('color-insert',[CategoryController::class,'createcolor'])->name('color.create');
    Route::post('color-insert',[CategoryController::class,'storecolor'])->name('color.store');
    Route::get('color-update/{id}',[CategoryController::class,'editcolor'])->name('color.edit');
    Route::put('color-update/{id}',[CategoryController::class,'updatecolor'])->name('color.update');

    Route::get('certification-index',[CategoryController::class, 'indexcertification'])->name('certification.index');
    Route::get('certification-insert',[CategoryController::class,'createcertification'])->name('certification.create');
    Route::post('certification-insert',[CategoryController::class,'storecertification'])->name('certification.store');
    Route::get('certification-update/{id}',[CategoryController::class,'editcertification'])->name('certification.edit');
    Route::put('certification-update/{id}',[CategoryController::class,'updatecertification'])->name('certification.update');

    Route::get('costtype-index',[CostTypeController::class, 'indexcosttype'])->name('costtype.index');
    Route::get('costtype-insert',[CostTypeController::class,'createcosttype'])->name('costtype.create');
    Route::post('costtype-insert',[CostTypeController::class,'storecosttype'])->name('costtype.store');
    Route::get('costtype-update/{id}',[CostTypeController::class,'editcosttype'])->name('costtype.edit');
    Route::put('costtype-update/{id}',[CostTypeController::class,'updatecosttype'])->name('costtype.update');

    Route::get('costing-index',[CostingController::class, 'indexcosting'])->name('costing.index');
    Route::get('costing-insert',[CostingController::class,'createcosting'])->name('costing.create');
    Route::post('costing-insert',[CostingController::class,'storecosting'])->name('costing.store');
    Route::get('costing-update/{id}',[CostingController::class,'editcosting'])->name('costing.edit');
    Route::put('costing-update/{id}',[CostingController::class,'updatecosting'])->name('costing.update');

    Route::get('othersprofit-index',[OthersProfitController::class, 'indexothersprofit'])->name('othersprofit.index');
    Route::get('othersprofit-insert',[OthersProfitController::class,'createothersprofit'])->name('othersprofit.create');
    Route::post('othersprofit-insert',[OthersProfitController::class,'storeothersprofit'])->name('othersprofit.store');
    Route::get('othersprofit-update/{id}',[OthersProfitController::class,'editothersprofit'])->name('othersprofit.edit');
    Route::put('othersprofit-update/{id}',[OthersProfitController::class,'updateothersprofit'])->name('othersprofit.update');

    Route::get('product-index',[ProductController::class, 'indexproduct'])->name('product.index');
    Route::get('product-insert',[ProductController::class,'createproduct'])->name('product.create');
    Route::post('product-insert',[ProductController::class,'storeproduct'])->name('product.store');
    Route::get('product-update/{id}',[ProductController::class,'editproduct'])->name('product.edit');
    Route::put('product-update/{id}',[ProductController::class,'updateproduct'])->name('product.update');

    Route::get('product-inactive',[ProductController::class, 'inactiveproduct'])->name('product.inactive');


    Route::get('stock-index',[StockController::class, 'indexstock'])->name('stock.index');
    Route::get('stock-insert',[StockController::class,'createstock'])->name('stock.create');
    Route::post('stock-insert',[StockController::class,'storestock'])->name('stock.store');
    Route::get('stock-update/{id}',[StockController::class,'editstock'])->name('stock.edit');
    Route::put('stock-update/{id}',[StockController::class,'updatestock'])->name('stock.update');

    Route::get('lowstock-index',[StockController::class, 'indexlowstock'])->name('lowstock.index');

});