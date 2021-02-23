@extends('layouts.shop')

@section('content')
<main id="main" class="main-site left-sidebar">
  <div class="container">

    <div class="wrap-breadcrumb">
      <ul>
        <li class="item-link"><a href="#" class="link">home</a></li>
        <li class="item-link"><span>Reset Password</span></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
        <x-input-error/>
        <x-alert-msg/>

        <div class="main-content-area">
          <div class="wrap-login-item ">						
            <div class="login-form form-item form-stl">
              <form name="frm-login" action="{{route('password.update')}}" method="POST">
                @csrf

                <input type="hidden" name="token" value="{{request()->segment(2)}}">

                <fieldset class="wrap-title">
                    <h3 class="form-title">You are only one step a way from your new password, recover your password now.</h3>							
                </fieldset>
                
                <fieldset class="wrap-input">
                  <label for="frm-login-uname">Email Address:</label>
                  <input type="text" id="frm-login-uname" name="email" placeholder="Type your email address" value="{{ request()->query('email')??old('email') }}" required autofocus>
                </fieldset>
               
                <fieldset class="wrap-input">
                  <label for="frm-login-uname">New password:</label>
                  <input type="password" id="frm-login-uname" name="password" placeholder="Type your email address" required>
                </fieldset>

                <fieldset class="wrap-input">
                  <label for="frm-login-uname">Confirm password:</label>
                  <input type="password" id="frm-login-uname" name="password_confirmation" placeholder="Type your email address" required>
                </fieldset>

                <input type="submit" class="btn btn-submit" value="Change password" name="submit">
              </form>

              <a class="link-function" href="{{route('register')}}" title="Forgotten password?">Don't have account, Register?</a>
            </div>												
          </div>
        </div><!--end main products area-->		
      </div>
    </div><!--end row-->

  </div><!--end container-->

</main>
@endsection