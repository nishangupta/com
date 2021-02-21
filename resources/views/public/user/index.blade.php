@extends('layouts.user')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">User Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User profile</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

     @include('inc.public.profile-tabs')
    
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-primary shadow">
            <div class="card-header">
              <h5 class="card-title">Personal</h5>
            </div>
    
            <div class="card-body">
              <x-input-error/>
              <x-alert-msg/>

              <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Full name</label>
                      <input type="text" placeholder="full name" name="name" value="{{$user->name}}" class="form-control" required autofocus>
                    </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" placeholder="Email" value="{{$user->email}}" name="email" class="form-control" required>
                    </div>    
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Phone number</label>
                      <input type="text" placeholder="Mobile" name="phone" value="{{$user->phone}}" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Country selected</label>
                      <select name="country_id" class="form-control" required>
                        @foreach($countries as $country)
                        <option {{$user->country_id == $country->id?'selected':''}} value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-12 col-md-12">
                    <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" placeholder="Address" value="{{$user->address}}" name="address" class="form-control" required>
                    </div>   
                  </div>
                  
                  <br>

                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">User avatar</label>
                      <br>
                      <img src="{{asset($user->avatar??'img/default_user.jpg')}}" width="150" alt="">

                      <p class="text-info">Upload your image</p>
                      <div class="btn btn-default btn-file">
                        <i class="fas fa-paperclip"></i> Choose
                        <input type="file" name="image">
                      </div>
                    </div>    
                  </div>

                </div>
                
                <button class="btn btn-primary" type="submit">Update</button>
              </form>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
