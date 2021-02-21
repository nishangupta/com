@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  <x-alert-msg />

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- Main content -->
  <section class="content">
    {{-- <div class="container-fluid">
      
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box shadow-hover">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-book-open"></i></span>
              <div class="info-box-content">
                <a href="{{route('course.index')}}">
                  <span class="info-box-text text-dark">Courses</span>
                  <span class="info-box-number text-dark">
                    {{$courseCount}}
                    <small>+</small>
                  </span>
                </a>
            </div>
          </div>
        </div>
        
        
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box shadow-hover">
            <span class="info-box-icon bg-green elevation-1"><i class="fas fa-chalkboard-teacher"></i></span>

            <div class="info-box-content">
              <a href="{{route('exam.index')}}">
                <span class="info-box-text text-dark">Languages/Test</span>
                <span class="info-box-number text-dark">
                  {{$examCount}}
                </span>
              </a>
            </div>
          </div>
        </div>
    

        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3 shadow-hover">
            <span class="info-box-icon bg-olive elevation-1"><i class="fas fa-globe-americas"></i></span>

            <div class="info-box-content">
              <a href="{{route('country.index')}}">
                <span class="info-box-text text-dark">Countries</span>
                <span class="info-box-number text-dark">{{$countryCount}}</span>
              </a>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3 shadow-hover">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-envelope-open-text"></i></span>

            <div class="info-box-content">
              <a href="{{route('appointment.index')}}">
                <span class="info-box-text text-dark">Appointments</span>
                <span class="info-box-number text-dark">{{$appointmentCount}}</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3 shadow-hover">
            <span class="info-box-icon bg-navy elevation-1"><i class="fas fa-user-graduate"></i></span>

            <div class="info-box-content">
              <a href="{{route('student.index')}}">
                <span class="info-box-text text-dark">Students</span>
                <span class="info-box-number text-dark">{{$studentCount}}</span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3 shadow-hover">
            <span class="info-box-icon bg-lime elevation-1"><i class="fas fa-rss"></i></span>
            
            <div class="info-box-content">
              <a href="{{route('news.index')}}">
                <span class="info-box-text text-dark">News</span>
                <span class="info-box-number text-dark">{{$newsCount}}</span>
              </a>
            </div>
          </div>
        </div>
        
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3 shadow-hover">
            <span class="info-box-icon bg-gray-dark elevation-1"><i class="fas fa-project-diagram"></i></span>

            <div class="info-box-content">
              <a href="{{route('testimonial.index')}}">
                <span class="info-box-text text-dark">Testimonials</span>
                <span class="info-box-number text-dark">{{$testimonialCount}}</span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3 shadow-hover">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-bell"></i></span>

            <div class="info-box-content">
              <a href="{{route('notification.index')}}">
                <span class="info-box-text text-dark">Notifications</span>
                <span class="info-box-number text-dark">{{$notiCount}}</span>
              </a>
            </div>
          </div>
        </div>

      </div>

    </div> --}}
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection

@push('css')
<style>
  .shadow-hover:hover{
    transition: .35s ease;
    box-shadow: 0px 0px 15px 3px rgba(0,0,0,0.25);
  }
</style>
@endpush
