@extends('layouts.shop')

@section('content')

<main id="main" class="main-site left-sidebar">

  <div class="container">

    <div class="wrap-breadcrumb">
      <ul>
        <li class="item-link"><a href="#" class="link">home</a></li>
        <li class="item-link"><span>login</span></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
        <x-input-error/>
        <x-alert-msg/>
        
        <div class="main-content-area">
          <div class="wrap-login-item ">						
            <div class="login-form form-item form-stl">
              <form name="frm-login" action="{{route('password.email')}}" method="POST">
                @csrf

                <fieldset class="wrap-title">
                    <h3 class="form-title">You forgot your password? Here you can easily retrieve a new password</h3>							
                    <x-input-error />
                    @if (session('status'))
                        <div class="mb-4 text-info text-center">
                            {{ session('status') }}
                        </div>
                    @endif
                </fieldset>

                <fieldset class="wrap-input mb-3">
                  <label for="frm-login-uname">Email Address:</label>
                  <input type="email" class="form-control" placeholder="Email" name="email" style="width: 100%">
                </fieldset>
                
                <br> &nbsp;

                
                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                  </div>
                </div>

              </form>
              <br>
              <a class="link-function" href="{{route('register')}}" title="Forgotten password?">Don't have account, Register?</a>
            </div>												
          </div>
        </div><!--end main products area-->		
      </div>
    </div><!--end row-->

  </div><!--end container-->

</main>
@endsection