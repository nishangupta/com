@extends('layouts.user')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>SOP builder</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Sop</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="jumbotron">
        <h1 class="h4">Start working on the portfolio</h1>
          <p class="lead">
            What you need to do:
            <p>1.Simply answer the questions in the boxes below.</p>
            <p>2.Review and refine your answers to make them really succinct and improve the flow.</p>
            <p>3.When you've finished, click the Submit button.</p>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card card-outline card-primary shadow">
            <div class="card-header">
              <h3 class="card-title">Personal statement</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <x-input-error/>
              <x-alert-msg/>

              @if(!$sop)
                <p class="alert alert-primary">You haven't created yet .Please fill up the form</p>
              @else
              <div>
                <p class="text-primary">Sop details saved</p>
                <a href="{{route('sop.show',$sop)}}" class="btn btn-info">View your details</a>
                <a href="{{route('sop.download',$sop)}}" class="btn btn-success">Download as pdf</a>
              </div>
              @endif
  
              <br>
              <br>

              <div class="text-muted">
                <form action="{{route('sop.store')}}" method="POST">
                  @csrf
                  <p class="course-header">
                    Writing about the course
                  </p>
                  <br>
                  <br>

                  <div class="form-group">
                    <label for="">Why are you applying for your chosen course(s)?</label>
                    <textarea name="about1" class="form-control @error('about1') is-invalid @enderror" rows="5">{{$sop->about1??old('about1')}}</textarea>
                  </div>
                  <br>

                  <div class="form-group">
                    <label for="">Why does this subject interest you? Include evidence that you understand what’s required to study the course, e.g. if applying
                      for psychology courses, show that you know how scientific the subject is.</label>
                    <textarea name="about2" class="form-control @error('about2') is-invalid @enderror" rows="5">{{$sop->about2??old('about2')}}</textarea>
                  </div>
                  <br>

                  <div class="form-group">
                    <label for="">Why do you think you’re suitable for the course(s)? Do you have any particular skills and experience that will help you to succeed
                      on the course(s)?</label>
                    <textarea name="about3" class="form-control @error('about3') is-invalid @enderror" rows="5">{{$sop->about3??old('about3')}}</textarea>
                  </div>
                  <br>

                  <div class="form-group">
                    <label for="">Do your current or previous studies relate to the course(s) that you have chosen? If so, how?</label>
                    <textarea name="about4" class="form-control @error('about4') is-invalid @enderror" rows="5">{{$sop->about4??old('about4')}}</textarea>
                  </div>
                  <br>

                  <div class="form-group">
                    <label for="">Have you taken part in any other activities that demonstrate your interest in the course(s)?</label>
                    <textarea name="about5" class="form-control @error('about5') is-invalid @enderror" rows="5">{{$sop->about5??old('about5')}}</textarea>
                  </div>
                  <br>

                  <br><br>
                  <p class="course-header">
                    Skills and achievements
                  </p>
                  <br>
                  <br>

                  <div class="form-group">
                    <label for="">Universities like to know the skills you have that will help you on the course, or generally with life at university,
                      such as any accredited or non-accredited achievements.</label>
                    <textarea name="skill1" class="form-control @error('skill1') is-invalid @enderror" rows="5">{{$sop->skill1??old('skill1')}}</textarea>
                  </div>
                  <br>

                  <div class="form-group">
                    <label for="">Also think about any other achievements you’re proud of, positions of responsibility that you hold or have held both in and out
                      of school, and attributes that make you interesting, special or unique.</label>
                    <textarea name="skill2" class="form-control @error('skill2') is-invalid @enderror" rows="5">{{$sop->skill2??old('skill2')}}</textarea>
                  </div>

                
                  
                  
                  <br>
                  <br>
                  <p class="course-header">
                    Hobbies & Interest
                  </p>
                  <br>
                  <br>

                  <div class="form-group">
                    <label for="">Make a list of your hobbies, interests and social activities. Then think about how they demonstrate your personality,
                      skills and abilities. Try to link them to the skills and experience required for your course(s).</label>
                    <textarea name="interest" class="form-control @error('interest') is-invalid @enderror" rows="5">{{$sop->interest??old('interest')}}</textarea>
                  </div>
                  
                  <br>
                  <br>
                  <p class="course-header">
                    Work experience 
                  </p>
                  <br>
                  <br>

                  <div class="form-group">
                    <label for="">Include details of jobs, placements, work experience or voluntary work, particularly if it’s relevant to your chosen course(s).
                      Try to link any experience to skills or qualities related to the course.</label>
                    <textarea name="experience" class="form-control @error('experience') is-invalid @enderror" rows="5">{{$sop->experience??old('experience')}}</textarea>
                  </div>
                  
                  <br>
                  <br>
                  <p class="course-header">
                    Mature students
                  </p>
                  <br>
                  <br>

                  <div class="form-group">
                    <label for="">Explain what you’ve been doing since leaving education, and provide additional evidence to support your application. If you’re
                      not in full-time education, you should give details of any relevant work experience, paid or unpaid, and information about your
                      current or previous employment.</label>
                    <textarea name="mature" class="form-control @error('mature') is-invalid @enderror" rows="5">{{$sop->mature??old('mature')}}</textarea>
                  </div>


                  <br>
                  <br>
                  <p class="course-header">
                    International students
                  </p>
                  <br>
                  <br>

                  <div class="form-group">
                    <label for="">Tell universities why you want to study and why you think you can successfully complete a course that is taught in
                    English. Say if some of your studies have been taught or examined in English and if you have taken part in any activities where
                    you have used English outside of your studies.</label>
                    <textarea name="international" class="form-control @error('international') is-invalid @enderror" rows="5">{{$sop->international??old('experience')}}</textarea>
                  </div>

                  <br>
                  <br>
                  <p class="course-header">
                    Future plans
                  </p>
                  <br>
                  <br>

                  <div class="form-group">
                    <label for="" class="">If you know what you’d like to achieve after completing the course, explain how you want to use the knowledge and experience
                      that you gain. How does the course relate to what you want to do in the future?</label>
                    <textarea name="plan" class="form-control @error('plan') is-invalid @enderror" rows="5">{{$sop->plan??old('plan')}}</textarea>
                  </div>

                  
                  <br>

                  <button type="submit" class="btn btn-info">Submit</button>
                </form>
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

@push('css')
<style>
  .course-header{
    padding:.25rem 1rem;
    background-color:#D90429;
    color:white;
    font-weight: bold;
    width:auto;
    float: left;
  }
  .form-group{
    background-color: #DAE1FC;
    padding:.5rem .5rem;
    border-radius: 12px;
  }
  .form-group label{
    color:#444;
    padding-left:.5rem;
  }

  .form-group textarea{
    color:#333;
    padding:.5rem;
  }
  .form-group textarea:hover,.form-group textarea:focus{
    border:1px solid #444;
  }
</style>
@endpush
