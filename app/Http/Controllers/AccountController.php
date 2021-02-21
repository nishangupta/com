<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index(){
        $user = auth()->user();
        if($user->hasRole('admin')){
            return redirect(route('admin.index'));
        }else{
            return redirect(route('user.index'));
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }
}
