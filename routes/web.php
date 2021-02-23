<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SubscriptionController;

Route::redirect('/home','/')->name('home.index');
Route::get('/',[ShopController::class,'index'])->name('shop.index');
Route::get('/shop/{id}-{slug}', [ShopController::class, 'show'])->name('shop.show');
Route::get('/shop/{id}', [ShopController::class, 'showById'])->name('shop.showById');
Route::get('/catalog', [ShopController::class, 'catalog'])->name('shop.catalog');
Route::get('/about-us', [ShopController::class, 'about'])->name('shop.about');
Route::get('/contact', [ShopController::class, 'contact'])->name('shop.contact');
Route::get('/terms', [ShopController::class, 'terms'])->name('shop.terms');

Route::group(['middleware'=>['auth'],'prefix'=>'/user'],function(){
  Route::get('/',[UserController::class,'index'])->name('user.index');
  Route::get('/account',[AccountController::class,'index'])->name('account.index'); //this route redirect user based on role
  Route::get('/logout',[AccountController::class,'logout'])->name('account.logout');

  
  
  // Route::get('/plans', [PlanController::class,'index'])->name('plans.index');
  // Route::get('/plan/{plan}', [PlanController::class,'show'])->name('plans.show');
  
  // Route::post('/subscription', [SubscriptionController::class,'create'])->name('subscription.create');

  // //Routes for create Plan
  // Route::get('create/plan', [SubscriptionController::class,'createPlan'])->name('create.plan');
  // Route::post('store/plan', [SubscriptionController::class,'storePlan'])->name('store.plan');
  
});