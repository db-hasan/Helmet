<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ChildCategoryController;
use App\Http\Controllers\InnerChildController;
use App\Http\Controllers\AttributesController;
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

    Route::get('category-index',[CategoryController::class, 'indexcategory'])->name('category.index');
    Route::get('category-insert',[CategoryController::class,'createcategory'])->name('category.create');
    Route::post('category-insert',[CategoryController::class,'storecategory'])->name('category.store');
    Route::get('category-update/{id}',[CategoryController::class,'editcategory'])->name('category.edit');
    Route::put('category-update/{id}',[CategoryController::class,'updatecategory'])->name('category.update');

    Route::get('subcategory-index',[SubCategoryController::class, 'indexsubcategory'])->name('subcategory.index');
    Route::get('subcategory-insert',[SubCategoryController::class,'createsubcategory'])->name('subcategory.create');
    Route::post('subcategory-insert',[SubCategoryController::class,'storesubcategory'])->name('subcategory.store');
    Route::get('subcategory-update/{id}',[SubCategoryController::class,'editsubcategory'])->name('subcategory.edit');
    Route::put('subcategory-update/{id}',[SubCategoryController::class,'updatesubcategory'])->name('subcategory.update');

    Route::get('childcategory-index',[ChildCategoryController::class, 'indexchildcategory'])->name('childcategory.index');
    Route::get('childcategory-insert',[ChildCategoryController::class,'createchildcategory'])->name('childcategory.create');
    Route::post('childcategory-insert',[ChildCategoryController::class,'storechildcategory'])->name('childcategory.store');
    Route::get('childcategory-update/{id}',[ChildCategoryController::class,'editchildcategory'])->name('childcategory.edit');
    Route::put('childcategory-update/{id}',[ChildCategoryController::class,'updatechildcategory'])->name('childcategory.update');

    Route::get('innerchild-index',[InnerChildController::class, 'indexinnerchild'])->name('innerchild.index');
    Route::get('innerchild-insert',[InnerChildController::class,'createinnerchild'])->name('innerchild.create');
    Route::post('innerchild-insert',[InnerChildController::class,'storeinnerchild'])->name('innerchild.store');
    Route::get('innerchild-update/{id}',[InnerChildController::class,'editinnerchild'])->name('innerchild.edit');
    Route::put('innerchild-update/{id}',[InnerChildController::class,'updateinnerchild'])->name('innerchild.update');

    Route::get('brand-index',[AttributesController::class, 'indexbrand'])->name('brand.index');
    Route::get('brand-insert',[AttributesController::class,'createbrand'])->name('brand.create');
    Route::post('brand-insert',[AttributesController::class,'storebrand'])->name('brand.store');
    Route::get('brand-update/{id}',[AttributesController::class,'editbrand'])->name('brand.edit');
    Route::put('brand-update/{id}',[AttributesController::class,'updatebrand'])->name('brand.update');

    Route::get('size-index',[AttributesController::class, 'indexsize'])->name('size.index');
    Route::get('size-insert',[AttributesController::class,'createsize'])->name('size.create');
    Route::post('size-insert',[AttributesController::class,'storesize'])->name('size.store');
    Route::get('size-update/{id}',[AttributesController::class,'editsize'])->name('size.edit');
    Route::put('size-update/{id}',[AttributesController::class,'updatesize'])->name('size.update');

    Route::get('color-index',[AttributesController::class, 'indexcolor'])->name('color.index');
    Route::get('color-insert',[AttributesController::class,'createcolor'])->name('color.create');
    Route::post('color-insert',[AttributesController::class,'storecolor'])->name('color.store');
    Route::get('color-update/{id}',[AttributesController::class,'editcolor'])->name('color.edit');
    Route::put('color-update/{id}',[AttributesController::class,'updatecolor'])->name('color.update');

    Route::get('certification-index',[AttributesController::class, 'indexcertification'])->name('certification.index');
    Route::get('certification-insert',[AttributesController::class,'createcertification'])->name('certification.create');
    Route::post('certification-insert',[AttributesController::class,'storecertification'])->name('certification.store');
    Route::get('certification-update/{id}',[AttributesController::class,'editcertification'])->name('certification.edit');
    Route::put('certification-update/{id}',[AttributesController::class,'updatecertification'])->name('certification.update');


    Route::get('warehouse-index',[WarehouseController::class, 'indexwarehouse'])->name('warehouse.index');
    Route::get('warehouse-insert',[WarehouseController::class,'createwarehouse'])->name('warehouse.create');
    Route::post('warehouse-insert',[WarehouseController::class,'storewarehouse'])->name('warehouse.store');
    Route::get('warehouse-update/{id}',[WarehouseController::class,'editwarehouse'])->name('warehouse.edit');
    Route::put('warehouse-update/{id}',[WarehouseController::class,'updatewarehouse'])->name('warehouse.update');

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

});