@extends('layouts.user')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Academic</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Academic</li>
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
          <x-input-error/>
          <x-alert-msg/>

          <form action="{{route('academic.store')}}" method="POST">
          @csrf

          <div class="form-group w-50">
            <label for="">Your highest qualification level</label>
            <select name="qualification" id="qualification" value="{{$academic->qualification}}" class="form-control">
              <option {{$academic->qualification == 1?'selected':''}} value="1">Intermediate</option>
              <option {{$academic->qualification == 2?'selected':''}}  value="2">bachelor</option>
              <option {{$academic->qualification == 3?'selected':''}}  value="3">master</option>
            </select>
          </div>

          <div class="card card-outline card-primary shadow" id="intermediateCard">
            <div class="card-header">
              <h5 class="card-title">Intermediate</h5>
            </div>
    
            <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Stream</label>
                      <select name="intermediate_stream" class="form-control">
                        <option disabled selected>Select your stream</option>
                        @foreach($streams as $c)
                        <option {{$academic->intermediate_stream == $c?'selected':''}} value="{{$c}}">{{$c}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Percentage/Grade/GPA:</label>
                      <input type="text" placeholder="gpa" name="intermediate_gpa" value="{{$academic->intermediate_gpa}}" class="form-control">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Year Of Completion:</label>
                      <select name="intermediate_year" class="form-control">
                        <option disabled selected >Select your completion year</option>
                          @for($i= $year;$i <=now()->format('Y'); $i++)
                            <option {{$academic->intermediate_year == $i ?'selected':''}} value="{{$i}}">{{$i}}</option>
                          @endfor
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="card" id="bachelorCard">
              <div class="card-header">
                <h5 class="card-title">Bachelor</h5>
              </div>
      
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Stream:</label>
                      <select name="bachelor_stream" class="form-control">
                        <option disabled selected>Select your stream</option>
                        @foreach($streams as $c)
                        <option {{$academic->bachelor_stream == $c?'selected':''}} value="{{$c}}">{{$c}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Course:</label>
                      <select name="bachelor_course" class="form-control">
                        <option disabled selected>Select your Course</option>
                        @foreach($courses as $c)
                        <option {{$academic->bachelor_course == $c->name?'selected':''}} value="{{$c->name}}">{{$c->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Percentage/Grade/GPA:</label>
                      <input type="text" placeholder="gpa" name="bachelor_gpa" value="{{$academic->bachelor_gpa}}" class="form-control">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Year Of Completion:</label>
                      <select name="bachelor_year" class="form-control">
                        <option disabled selected>Select your completion year</option>
                          @for($i= $year;$i <=now()->format('Y'); $i++)
                            <option {{$academic->bachelor_year == $i ?'selected':''}}  value="{{$i}}">{{$i}}</option>
                          @endfor
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="card" id="masterCard">
              <div class="card-header">
                <h5 class="card-title">Master</h5>
              </div>
      
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Stream</label>

                      <select name="master_stream" class="form-control">
                        <option disabled selected>Select your stream</option>
                        @foreach($streams as $c)
                        <option {{$academic->bachelor_stream == $c?'selected':''}} value="{{$c}}">{{$c}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Course:</label>
                      <select name="master_course" class="form-control">
                        <option disabled selected>Select your Course</option>
                        @foreach($courses as $c)
                        <option {{$academic->master_course == $c->name?'selected':''}} value="{{$c->name}}">{{$c->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Percentage/Grade/GPA:</label>
                      <input type="text" placeholder="gpa" name="master_gpa" value="{{$academic->master_gpa}}" class="form-control">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="form-group">
                      <label for="">Year Of Completion:</label>
                      <select name="master_year" class="form-control">
                        <option disabled selected >Select your completion year</option>
                          @for($i= $year;$i <=now()->format('Y'); $i++)
                            <option {{$academic->master_year == $i ?'selected':''}} value="{{$i}}">{{$i}}</option>
                          @endfor
                      </select>
                    </div>
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

@push('js')
<script>
  $(document).ready(function(){
    const qualification = document.querySelector('#qualification');

    //runs in the begining
    change(qualification.value);

    qualification.addEventListener('change',function(){
      change(this.value);
    })

    function change(value){
      if(value == 1){
        $('#intermediateCard').show();
        $('#bachelorCard').hide();
        $('#masterCard').hide();
      }
     
      if(value == 2){
        $('#intermediateCard').show();
        $('#bachelorCard').show();
        $('#masterCard').hide();
      }
     
      if(value == 3){
        $('#intermediateCard').show();
        $('#bachelorCard').show();
        $('#masterCard').show();
      }
    }
  });
</script>
@endpush