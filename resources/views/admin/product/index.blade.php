@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product list</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Product</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <x-alert-msg/>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Product</h3>
              <a href="{{route('product.create')}}" class="btn btn-primary btn-sm float-right">Create</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="table1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Code</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                  <tr>
                    <td>{{$product->id}}</td>
                    <td><a href="route('product.show')" >{{$product->title}}</a></td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount}}</td>
                    <td>{{$product->product_code}}</td>
                    <td> <span class="badge p-2 {{$product->status ?'badge-primary':'badge-secondary'}}">{{$product->status}}</span> </td>
                    <td>{{$product->updated_at->format('Y m d')}}</td>
                    <td>
                      <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-sm float-left mr-1" title="edit"><i class="fas fa-edit"></i></a>
                      <form method="POST" action="{{route('product.destroy',[$product->id])}}">
                        @csrf 
                        @method('delete')
                        <button class="btn btn-danger btn-sm dltBtn" data-id={{$product->id}}  title="Delete"><i class="fas fa-trash-alt"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{$products->links()}}
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
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<style>
  div.dataTables_wrapper div.dataTables_paginate{
      display: none;
  }
</style>
@endpush

@push('js')
 <!-- DataTables -->
 <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
 <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
 <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

 <script>
   $(document).ready(function () {
     $("#table1").DataTable({
       "responsive": true,
       "autoWidth": false,
       "searching": true,
       "paging":false,
     });

    //  $('.dltBtn').click(function(e){
      //  e.preventDefault()
      //  if(confirm('Are you sure to delete')){
      //    this.form.submit();
      //  }
    //  })
   });
 </script>
 @endpush