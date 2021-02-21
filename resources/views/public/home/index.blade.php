@extends('layouts.home')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
      @if(session()->get('success'))
          <div class="alert alert-success">
              {{ session()->get('success') }}
          </div>
      @endif

      <x-input-error/>
      <x-alert-msg/>

      <div class="card">
          <div class="card-header">Dashboard</div>

          <div class="card-body">
              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif

              Welcome to the Dashboard

              <a href="{{route('plans.index')}}" class="btn btn-primary">All Plans</a>
              <a href="{{route('create.plan')}}" class="btn btn-primary">Create Plans</a>
          </div>
      </div>
  </div>
</div>
@endsection