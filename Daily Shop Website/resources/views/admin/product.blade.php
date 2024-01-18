@extends('admin/layout')
@section('page_title','Product')
@section('product','active')
@section('container')
<h2>Products</h2>
<a href="product/addProduct">
    <button class="btn btn-primary mt-3">Add Product</button>
</a>
<div class="container-fluid">
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
        @if(session()->has('messege'))
        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            {{session('messege')}}  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> 
    @endif
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Product Code</th>
                        <th>Product Description</th>
                        <th>Product Price</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->name}}</td>
                        <td><img width="200px" src="{{asset('frontAssets/img/'.$d->image)}}" alt="image"></td>
                        <td>{{$d->code}}</td>
                        <td>{{$d->decript}}</td>
                        <td>{{$d->price}}</td>
                        <td>
                            <a href="{{url('admin/product/delete/')}}/{{$d->id}}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                        <td>
                            <a href="{{url('admin/product/addProduct/')}}/{{$d->id}}"><button class="btn btn-success">Update</button></a>
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
@endsection