@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Category list</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <x-alert-msg />
      
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Category</h3>
              <a href="{{route('category.create')}}" class="btn btn-primary btn-sm float-right">Create</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="table1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.N.</th>
                  <th>Title</th>
                  <th>Slug</th>
                  <th>Parent Category</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($categories as $category)
                  <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>
                      {{$category->parent_info->name ?? ''}}
                    </td>
                    <td>
                        @if($category->status==1)
                            <span class="badge badge-success">{{$category->status}}</span>
                        @else
                            <span class="badge badge-warning">{{$category->status}}</span>
                        @endif
                    </td>
                    <td>
                      <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary btn-sm float-left mr-1" title="edit"><i class="fas fa-edit"></i></a>
                      <form method="POST" action="{{route('category.destroy',[$category->id])}}">
                        @csrf 
                        @method('delete')
                            <button class="btn dltBtn btn-danger btn-sm" data-id={{$category->id}}  title="Delete"><i class="fas fa-trash-alt"></i></button>
                      </form>
                    </td>
                  </tr> 
                  @endforeach
                </tbody>
              </table>
              {{$categories->links()}}
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

     $('.dltBtn').click(function(e){
       e.preventDefault()
       if(confirm('Are you sure to delete')){
         this.form.submit();
       }
     })
   });
 </script>
 @endpush