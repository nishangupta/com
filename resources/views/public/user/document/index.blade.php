@extends('layouts.user')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Documents</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Documents</li>
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

          <p class="text-info">Once you've choosen the file, Click the submit button below to save </p>

          <form action="{{route('document.store')}}" id="documentForm" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card card-outline card-primary shadow">
              <div class="card-header">
                <h5 class="card-title">Your documents</h5>
              </div>
      
              <div class="card-body">


                <div class="border-bottom">
                  <h4 class="text-secondary">Passport</h4>

                  @foreach($documents as $doc)
                  @if($doc->category == 'passport')
                  <div class="d-block">
                    <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                    <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                  </div>
                  @endif
                  @endforeach
                  
                  <div class="form-group">
                    <div class="btn btn-secondary btn-file btn-sm">
                      <i class="fas fa-paperclip"></i> upload
                      <input type="file" name="passport" class="docimg">
                    </div>
                  </div>              
                </div>

                <br>

                <div class="mt-4 border-bottom">
                  <h4 class="text-secondary">Intermediate</h4>
                  <hr class="my-0">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <p for="">Transcript</p>

                        @foreach($documents as $doc)
                        @if($doc->category == 'intermediate_transcript')
                        <div class="d-block">
                          <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                          <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                        @endforeach

                        <div class="btn btn-secondary btn-file btn-sm">
                          <i class="fas fa-paperclip"></i> Upload
                          <input type="file" name="intermediate_transcript">
                        </div>
                      </div>     
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <p for="">Provisional</p>
                        @foreach($documents as $doc)
                        @if($doc->category == 'intermediate_provisional')
                        <div class="d-block">
                          <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                          <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                        @endforeach

                        <div class="btn btn-secondary btn-file btn-sm">
                          <i class="fas fa-paperclip"></i> Upload
                          <input type="file" name="intermediate_provisional">
                        </div>
                      </div>     
                    </div>
                  </div>
                </div>

                <br>

                <div class="mt-4 border-bottom">
                  <h4 class="text-secondary">Bachelor</h4>
                  <hr class="my-0">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <p for="">Transcript</p>
                        @foreach($documents as $doc)
                        @if($doc->category == 'bachelor_transcript')
                        <div class="d-block">
                          <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                          <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                        @endforeach
                        <div class="btn btn-secondary btn-file btn-sm">
                          <i class="fas fa-paperclip"></i> Upload
                          <input type="file" name="bachelor_transcript">
                        </div>
                      </div>     
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <p for="">Provisional</p>
                        @foreach($documents as $doc)
                        @if($doc->category == 'bachelor_provisional')
                        <div class="d-block">
                          <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                          <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                        @endforeach
                        <div class="btn btn-secondary btn-file btn-sm">
                          <i class="fas fa-paperclip"></i> Upload
                          <input type="file" name="bachelor_provisional">
                        </div>
                      </div>     
                    </div>
                  </div>
                </div>

                <br>

                <div class="mt-4 border-bottom">
                  <h4 class="text-secondary">Master</h4>
                  <hr class="my-0">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <p for="">Transcript</p>
                        @foreach($documents as $doc)
                        @if($doc->category == 'master_transcript')
                        <div class="d-block">
                          <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                          <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                        @endforeach
                        <div class="btn btn-secondary btn-file btn-sm">
                          <i class="fas fa-paperclip"></i> Upload
                          <input type="file" name="master_transcript">
                        </div>
                      </div>     
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <p for="">Provisional</p>
                        @foreach($documents as $doc)
                        @if($doc->category == 'master_provisional')
                        <div class="d-block">
                          <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                          <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                        @endforeach
                        <div class="btn btn-secondary btn-file btn-sm">
                          <i class="fas fa-paperclip"></i> Upload
                          <input type="file" name="master_provisional">
                        </div>
                      </div>     
                    </div>
                  </div>
                </div>

                <br>

                <div class="mt-4 border-bottom">
                  <h4 class="text-secondary">Personal statement and references</h4>
                  <hr class="my-0">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <p for="">Personal statement</p>
                        @foreach($documents as $doc)
                        @if($doc->category == 'personal')
                        <div class="d-block">
                          <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                          <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                        @endforeach
                        <div class="btn btn-secondary btn-file btn-sm">
                          <i class="fas fa-paperclip"></i> Upload
                          <input type="file" name="personal">
                        </div>
                      </div>     
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <p for="">Work experience</p>
                        @foreach($documents as $doc)
                        @if($doc->category == 'work')
                        <div class="d-block">
                          <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                          <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                        @endforeach
                        <div class="btn btn-secondary btn-file btn-sm">
                          <i class="fas fa-paperclip"></i> Upload
                          <input type="file" name="work">
                        </div>
                      </div>     
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <p for="">Academic reference</p>
                        @foreach($documents as $doc)
                        @if($doc->category == 'academic')
                        <div class="d-block">
                          <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                          <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                        @endforeach
                        <div class="btn btn-secondary btn-file btn-sm">
                          <i class="fas fa-paperclip"></i> Upload
                          <input type="file" name="academic">
                        </div>
                      </div>     
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <p for="">Cv</p>
                        @foreach($documents as $doc)
                        @if($doc->category == 'cv')
                        <div class="d-block">
                          <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                          <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                        @endforeach
                        <div class="btn btn-secondary btn-file btn-sm">
                          <i class="fas fa-paperclip"></i> Upload
                          <input type="file" name="cv">
                        </div>
                      </div>     
                    </div>
                  </div>
                </div>

                <br>

                <div class="mt-4 border-bottom">
                  <h4 class="text-secondary">Financials</h4>
                  <hr class="my-0">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <p for="">Bank documents</p>
                        @foreach($documents as $doc)
                        @if($doc->category == 'bank')
                        <div class="d-block">
                          <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                          <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                        @endforeach
                        <div class="btn btn-secondary btn-file btn-sm">
                          <i class="fas fa-paperclip"></i> Upload
                          <input type="file" name="bank">
                        </div>
                      </div>     
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <p for="">Property valuation</p>
                        @foreach($documents as $doc)
                        @if($doc->category == 'property')
                        <div class="d-block">
                          <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                          <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                        @endforeach
                        <div class="btn btn-secondary btn-file btn-sm">
                          <i class="fas fa-paperclip"></i> Upload
                          <input type="file" name="property">
                        </div>
                      </div>     
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <p for="">Income Source</p>
                        @foreach($documents as $doc)
                        @if($doc->category == 'income')
                        <div class="d-block">
                          <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                          <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                        @endforeach
                        <div class="btn btn-secondary btn-file btn-sm">
                          <i class="fas fa-paperclip"></i> Upload
                          <input type="file" name="income">
                        </div>
                      </div>     
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <p for="">Sponsorship letter</p>
                        @foreach($documents as $doc)
                        @if($doc->category == 'sponsor')
                        <div class="d-block">
                          <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                          <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                        </div>
                        @endif
                        @endforeach
                        <div class="btn btn-secondary btn-file btn-sm">
                          <i class="fas fa-paperclip"></i> Upload
                          <input type="file" name="sponsor">
                        </div>
                      </div>     
                    </div>
                  </div>
                </div>

                <br>

                <div class="mt-4">
                  <h4 class="text-secondary">Others</h4>
                  <hr class="mt-0">
                  @foreach($documents as $doc)
                  @if($doc->category == 'other')
                  <div class="d-block">
                    <a href="{{route('document.download',['document'=>$doc->id])}}" class="text-success"><i class="fas fa-download"></i> {{$doc->doc}} </a>
                    <a href="{{route('document.destroy',$doc->id)}}" class="text-danger" ><i class="fas fa-trash"></i></a>
                  </div>
                  @endif
                  @endforeach
                  <div class="btn btn-secondary btn-file btn-sm">
                    <i class="fas fa-paperclip"></i> Upload
                    <input type="file" name="other">
                  </div>
                </div>

                <br>
                
              <button class="btn btn-primary mt-4" type="submit">Submit</button>

              </div>

            </div>
          </form>

        </div>
      </div>

    </div>
  </section>
  <!-- /.content -->
</div>
@endsection

@push('css')
<style>

</style>
@endpush
