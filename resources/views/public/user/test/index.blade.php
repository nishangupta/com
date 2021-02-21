@extends('layouts.user')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Language</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Language</li>
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
              <h5 class="card-title">Language</h5>
            </div>
    
            <div class="card-body">
              <x-input-error/>
              <x-alert-msg/>

              <form action="{{route('test.store')}}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-12 col-md-12">
                    <div class="form-group">
                      <label for="">Test</label>
                      <select name="exam_id" class="form-control">
                        @foreach ($exams as $exam)
                          @if($test)
                           <option {{$test->exam_id == $exam->id?'selected':''}} value="{{$exam->id}}">{{$exam->name}}</option>
                          @else
                          <option value="{{$exam->id}}">{{$exam->name}}</option>
                         @endif
                        @endforeach
                      </select>
                      
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Listening</label>
                      <input type="text" placeholder="" name="listening" value="{{$test->listening??''}}" class="form-control">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Reading</label>
                      <input type="text" placeholder="" name="reading" value="{{$test->reading??''}}" class="form-control">
                    </div>
                  </div>  
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Writing</label>
                      <input type="text" placeholder="" name="writing" value="{{$test->writing??''}}" class="form-control">
                    </div>
                  </div>  
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Speaking</label>
                      <input type="text" placeholder="" name="speaking" value="{{$test->speaking??''}}" class="form-control">
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
