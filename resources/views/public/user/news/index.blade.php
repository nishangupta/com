@extends('layouts.user')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>News</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
            <li class="breadcrumb-item active">News</li>
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
              <h3 class="card-title">Latest news</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              @foreach($allNews as $news)
              <div>
                <div class="h4 mb-2">{{$news->title}}</div>
                <p>Category: <span class="text-primary">{{$news->category}}</span></p>
                <p>Date posted: <span href="#" class="text-muted">{{$news->created_at->diffForHumans()}}</span></p>

                <p class="my-2">
                  {!!$news->description!!}
                </p>

                @if($news->image)
                <p>Post Image:</p>
                <img src="{{asset($news->image)}}" width="200px" alt="">
                @endif
                
 
                <hr>
                <br> <br>
              </div>
              @endforeach
              {{$allNews->links()}}

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
