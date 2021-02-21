@extends('layouts.user')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Study resources</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Study resources</li>
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
              <h3 class="card-title">Study Resources</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <div>
                <div class="float-left">
                  
                  <form action="{{route('study.search')}}" id="examForm">
                    @csrf 
                    <div class="form-group">
                      <label for="" class="text-muted">Select individual test for study materials</label>
                      <select name="exam_id" class="form-control" id="examSelect">
                        {{-- @if(request()->has('exam_id')) --}}
                        @foreach($exams as $exam)
                          <option {{ request()->query('exam_id') == $exam->id ? 'selected' : '' }} value="{{$exam->id}}">{{$exam->name}}</option>
                        @endforeach
                        {{-- @endif --}}
                      </select>
                    </div>
                  </form>

                </div>
              </div>
              <br>

              <hr>
              <br>
              <br>

              <ul class="nav nav-pills mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#listening" role="tab" aria-controls="home" aria-selected="true">LISTENING</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="reading-tab" data-toggle="tab" href="#reading" role="tab" aria-controls="profile" aria-selected="false">READING</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#writing" role="tab" aria-controls="contact" aria-selected="false">WRITING</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#speaking" role="tab" aria-controls="contact" aria-selected="false">SPEAKING</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#general" role="tab" aria-controls="contact" aria-selected="false">GENERAL</a>
                </li>
              </ul>

              @if($materials->count() < 1)
                <p>No materials found</p>
              @endif


              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="listening" role="tabpanel" aria-labelledby="home-tab">
                  @foreach($materials as $material)
                    @if($material->type == 'LISTENING')
                    <div class="card card-outline card-primary card-shadow">
                      <div class="card-header">{{$material->title}}</div>
                      <div class="card-body">
                        <p>
                          {!!$material->description!!}
                        </p>

                        @if($material->url)
                        <a href="{{route('material-download.index',$material)}}" class="btn btn-success btn-sm">Download material</a>
                        @endif
                      </div>
                    </div>
                    @endif
                  @endforeach
                </div>

                <div class="tab-pane fade" id="reading" role="tabpanel" aria-labelledby="reading-tab">
                  @foreach($materials as $material)
                  @if($material->type == 'READING')
                  <div class="card card-outline card-primary card-shadow">
                    <div class="card-header">{{$material->title}}</div>
                    <div class="card-body">
                      <p>
                        {!!$material->description!!}
                      </p>

                      @if($material->url)
                      <a href="{{route('material-download.index',$material)}}" class="btn btn-success btn-sm">Download material</a>
                      @endif
                    </div>
                  </div>
                  @endif
                @endforeach
                </div>

                <div class="tab-pane fade" id="writing" role="tabpanel" aria-labelledby="contact-tab">
                  @foreach($materials as $material)
                    @if($material->type == 'WRITING')
                    <div class="card card-outline card-primary card-shadow">
                      <div class="card-header">{{$material->title}}</div>
                      <div class="card-body">
                        <p>
                          {!!$material->description!!}
                        </p>

                        @if($material->url)
                        <a href="{{route('material-download.index',$material)}}" class="btn btn-success btn-sm">Download material</a>
                        @endif
                      </div>
                    </div>
                    @endif
                  @endforeach
                </div>

                <div class="tab-pane fade" id="speaking" role="tabpanel" aria-labelledby="contact-tab">
                  @foreach($materials as $material)
                    @if($material->type == 'SPEAKING')
                    <div class="card card-outline card-primary card-shadow">
                      <div class="card-header">{{$material->title}}</div>
                      <div class="card-body">
                        <p>
                          {!!$material->description!!}
                        </p>

                        @if($material->url)
                        <a href="{{route('material-download.index',$material)}}" class="btn btn-success btn-sm">Download material</a>
                        @endif
                      </div>
                    </div>
                    @endif
                  @endforeach
                </div>

                <div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="contact-tab">
                  @foreach($materials as $material)
                    @if($material->type == 'GENERAL')
                    <div class="card card-outline card-primary card-shadow">
                      <div class="card-header">{{$material->title}}</div>
                      <div class="card-body">
                        <p>
                          {!!$material->description!!}
                        </p>

                        @if($material->url)
                        <a href="{{route('material-download.index',$material)}}" class="btn btn-success btn-sm">Download material</a>
                        @endif
                      </div>
                    </div>
                    @endif
                  @endforeach
                </div>

              </div>

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

@push('js')
<script>
 $(function () {
   const select = document.querySelector('#examSelect');
   select.addEventListener('change',function(){
     this.form.submit();
   })
  })
</script>
@endpush