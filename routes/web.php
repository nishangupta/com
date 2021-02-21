<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SubscriptionController;

Route::get('/',[HomeController::class,'index'])->name('home.index');

Route::group(['middleware'=>['auth'],'prefix'=>'/user'],function(){
  Route::get('/',[UserController::class,'index'])->name('user.index');
  Route::get('/account',[AccountController::class,'index'])->name('account.index'); //this route redirect user based on role
  Route::get('/logout',[AccountController::class,'logout'])->name('account.logout');
  
  Route::get('/plans', [PlanController::class,'index'])->name('plans.index');
  Route::get('/plan/{plan}', [PlanController::class,'show'])->name('plans.show');
  
  Route::post('/subscription', [SubscriptionController::class,'create'])->name('subscription.create');

  //Routes for create Plan
  Route::get('create/plan', [SubscriptionController::class,'createPlan'])->name('create.plan');
  Route::post('store/plan', [SubscriptionController::class,'storePlan'])->name('store.plan');
  
});