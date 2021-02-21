@extends('layouts.user')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Email</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('email.index')}}">Email</a></li>
            <li class="breadcrumb-item active">Create</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-outline card-primary shadow">
            <div class="card-header">
              <h3 class="card-title">Create email</h3>
              <a href="{{route('email.index')}}" class="float-right btn btn-primary btn-sm">Go back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <x-input-error/>

              <form action="{{route('email.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="name" placeholder="Name" value="{{old('name')}}" class="form-control" required autofocus>
                </div>

                <div class="form-group">
                  <label for="">Subject</label>
                  <input type="text" name="subject" placeholder="Subject" value="{{old('subject')}}" class="form-control" required>
                </div>
                
                <div class="form-group">
                  <label for="">CC</label>
                  <input type="email" name="cc" placeholder="CC" value="{{old('cc')}}" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="">Message</label>
                  <textarea name="message" placeholder="Message" class="form-control" rows="4" required>{{old('message')}}</textarea>
                </div>

                <div class="btn btn-secondary btn-file btn-sm">
                  <i class="fas fa-paperclip"></i> Attachment
                  <input type="file" name="file">
                </div>
                <br><br>

                <button type="submit" class="btn btn-primary">Send</button>
                
              </form>

            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
