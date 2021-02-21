@extends('layouts.user')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Financial Calculator</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Financial calculator</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-md-6">
          <div class="card card-outline card-primary shadow">
            <div class="card-header">
              <h5 class="card-title">Financial Calculator</h5>
            </div>
    
            <div class="card-body">
              <x-input-error/>
              <x-alert-msg/>

              <form action="{{route('calculate.store')}}" method="POST"> 
                @csrf
                  
                <div class="form-group">
                  <label for="">Country of intrest</label>
                  <select name="country_id" class="form-control" required>
                    @foreach($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Financial option</label>
                  <div class="d-flex">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio1" name="financial" value="loan" checked>
                      <label for="customRadio1" class="custom-control-label">Loan</label>
                    </div>
                    <div class="custom-control custom-radio" style="margin-left: 10px">
                      <input class="custom-control-input" type="radio" id="customRadio2" name="financial"  value="bank">
                      <label for="customRadio2" class="custom-control-label">Bank</label>
                    </div>
                  </div>
                </div>
              
                <div class="form-group">
                  <label for="">Expected uni fee / annum</label>
                  <p class="text-info">Minimum 1000</p>
                  <input class="form-control" type="number" name="annual" min="1000" required>
                </div>

                <div class="form-group">
                  <label for="">Duration of the course (Year)</label>
                  <input class="form-control" type="number" name="duration" value="1" min="1" max="4" required>
                </div>

                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="">Dependent</label>
                      <div class="d-flex">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio3" name="dependent" value="yes" checked>
                          <label for="customRadio3" class="custom-control-label">Yes</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 10px">
                          <input class="custom-control-input" type="radio" id="customRadio4" name="dependent"  value="no">
                          <label for="customRadio4" class="custom-control-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group" id="child">
                      <label for="">Children</label>
                      <div class="d-flex">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio10" name="child" value="yes" checked>
                          <label for="customRadio10" class="custom-control-label">Yes</label>
                        </div>
                        <div class="custom-control custom-radio" style="margin-left: 10px">
                          <input class="custom-control-input" type="radio" id="customRadio11" name="child"  value="no">
                          <label for="customRadio11" class="custom-control-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="">University location</label>
                  {{-- <select name="location" class="form-control" required>
                    <option value="outside">Outside</option>
                    <option value="inside">Inside</option>
                  </select> --}}
                  <div class="d-flex">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio6" name="location" value="inside" checked>
                      <label for="customRadio6" class="custom-control-label">Inside</label>
                    </div>
                    <div class="custom-control custom-radio" style="margin-left: 10px">
                      <input class="custom-control-input" type="radio" id="customRadio7" name="location"  value="outside">
                      <label for="customRadio7" class="custom-control-label">Outside</label>
                    </div>
                  </div>
                </div>
              
                <button class="btn btn-primary float-right" id="submitBtn" type="submit">Submit</button>
                
              </form>

            </div> 
          </div>
          <!-- /.card -->
        </div>

    
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
    handleChange()
    
    function handleChange(){
      $('input[type=radio][name=dependent]').change(function() {
        if (this.value == 'yes') {
          $('#child').show()
          console.log('shown')
        }
        else if (this.value == 'no') {
          $('#child').hide()
          console.log('hidden')
        }
      });
    }
  })
</script>
@endpush