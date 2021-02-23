@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Products</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('product.index')}}">Products</a></li>
            <li class="breadcrumb-item active">Create</li>
          </ol>
        </div>
      </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Create product</h3>
              <a href="{{route('product.index')}}" class="btn btn-sm btn-primary float-right">Go back</a>
            </div>

            <div class="card-body text-muted">
              <x-input-error />

              <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="" >Title</label>
                  <input type="text" name="title" placeholder="Title" value="{{old('title')}}" class="form-control" required autofocus>
                </div>

                {{-- category selector vue component --}}
                <category-selector :categories="{{$categories}}" ></category-selector>

                <div class="form-group">
                  <label for="">Product Price </label>
                  <small class="text-primary d-block mb-3">Actual product price!</small>
                  <input type="text" name="price" value="{{old('price')}}" placeholder="Product price" class="form-control" required> 
                </div>
                <div class="form-group">
                  <label for="">Price after discount</label>
                  <small class="text-primary d-block mb-3">Discount will be automatically shown. leave empty for no disount!</small>
                  <input type="text" name="discount" value="{{old('discount')}}" placeholder="Discounted amount" class="form-control"> 
                </div>
              

                <div class="form-group">
                  <label for="">Description</label>
                  <textarea class="textarea form-control" name="description" >{{old('description')}}</textarea>
                </div>

                <br>
                
                <div class="card">
                  <div class="card-body">

                    {{-- attribute selector vue compoent --}}
                    <attribute-selector :attributes='[{"uid":9922,"type":"asda","attribute":"sdas","stock":"123","live":1}]'></attribute-selector>

                  </div>
                </div>

                <br>
              
                <div class="card">
                  <div class="card-body">

                    <div class="form-group mt-4">
                      <label class="small" for="">Brand</label>
                      <input type="text" placeholder="-" list="brandsScheme" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{old('brand')}}">
                      <datalist id="brandsScheme">
                        <option value="No Brand">
                        <option value="Apple">
                        <option value="Samsung">
                        <option value="Hp">
                        <option value="Dell">
                        <option value="Lenovo">
                      </datalist>
                    </div>

                    <div class="form-group mt-4">
                      <label class="small" for="">Warranty</label>
                      <input type="text" placeholder="-" list="warrantyScheme" class="form-control @error('warranty') is-invalid @enderror" name="warranty" value="{{ old('warranty') }}">
                      <datalist id="warrantyScheme">
                        <option value="No warranty">
                        <option value="3 months">
                        <option value="6 months">
                        <option value="1 year">
                        <option value="2 years">
                        <option value="3 years">
                        <option value="5 years">
                      </datalist>
                    </div>
                    
                    <div class="form-group mt-4">
                      <label for="status" class="col-form-label">Status </label>
                      <select name="status" class="form-control">
                          <option value="1" selected >Active</option>
                          <option value="0">Inactive</option>
                      </select>
                      @error('status')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>

                    <div class="text-info">
                      Product Images can be added after you submit the button
                    </div>

                <button type="submit" class="btn btn-primary mt-4">Submit</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
<style>
  .note-group-select-from-files {
    display: none;
  }
</style>
@endpush

@push('js')
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
 $(function () {
    // Summernote
    $('.textarea').summernote({
      placeholder: "Write short description.....",
      height:200,
    })
  })
</script>
@endpush