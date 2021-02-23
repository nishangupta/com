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
            <li class="breadcrumb-item active">Update</li>
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
              <h3 class="card-title">Update product</h3>
              <a href="{{route('product.index')}}" class="btn btn-sm btn-primary float-right">Go back</a>
            </div>


            <div class="card-body">
              <h1 class="h5 mb-0 text-gray-800">Product Image Management</h1>
              <p>Drop images to this dropzone. Multiple images supported.</p>
            
              <div class="card-header">
                <p class="h5"><span class="text-primary">{{$product->title}}</span></p>
              </div>
              <div class="card-body">
                <image-upload product-id="{{$product->id}}"></image-upload>
              </div>
            </div>


            <div class="card-body text-muted">
              <x-input-error />

              <form action="{{route('product.update',$product)}}" method="POST">
                @csrf @method('PATCH')
                <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" name="title" placeholder="Title" value="{{$product->title??old('Title')}}" class="form-control" required autofocus>
                </div>

                {{-- category selector vue component --}}
                <category-selector :categories="{{$categories}}" :selected_id="{{$product->subCategory_id}}"></category-selector>

                <div class="form-group">
                  <label for="">Product Price </label>
                  <small class="text-primary d-block mb-3">Actual product price!</small>
                  <input type="text" name="price" value="{{$product->price??old('price')}}" placeholder="Product price" class="form-control" required> 
                </div>
                <div class="form-group">
                  <label for="">Price after discount</label>
                  <small class="text-primary d-block mb-3">Discount will be automatically shown. leave empty for no disount!</small>
                  <input type="text" name="discount" value="{{$product->discount??old('discount')}}" placeholder="Discounted amount" class="form-control"> 
                </div>
              

                <div class="form-group">
                  <label for="">Description</label>
                  <textarea class="textarea form-control" name="description" >{{$product->description??old('description')}}</textarea>
                </div>

                <br>
                
                <div class="card">
                  <div class="card-body">

                    {{-- attribute selector vue compoent --}}
                    <attribute-selector :attributes='{{$product->attributes}}'></attribute-selector>

                  </div>
                </div>

                <br>
              
                <div class="card">
                  <div class="card-body">

                    <div class="form-group mt-4">
                      <label class="small" for="">Brand</label>
                      <input type="text" placeholder="-" list="brandsScheme" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{$product->brand??''}}">
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
                      <input type="text" placeholder="-" list="warrantyScheme" class="form-control @error('warranty') is-invalid @enderror" name="warranty" value="{{$product->warranty??''}}">
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
                      <select name="status" class="form-control" value="{{$product->status}}">
                          <option value="1">Active</option>
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

              <div class="card-footer">
                <form action="{{route('product.destroy',$product)}}" method="POST" class="float-right">
                  @csrf @method('DELETE')
                  <button type="button" class="dltBtn btn btn-danger my-3">Delete product</button>
                </form>

              </div>
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

    $('.dltBtn').click(function(e){
        e.preventDefault();
        if(confirm('Are you sure you want to delete?')){
          this.form.submit()
        }
      })
  })
</script>
@endpush