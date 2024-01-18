@extends('admin/layout')
@section('page_title','Banner')
@section('banner','active')
@section('container')
<h2>Banner</h2>
<a href="{{'banner/addBanner'}}">
    <button class="btn btn-primary mt-3">Add Banner</button>
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
                        <th>Button Text</th>
                        <th>Button Link</th>
                        <th>Image</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->btnText}}</td>
                        <td>{{$d->btnLink}}</td>
                        <td><img src="{{asset('assets/images/'.$d->image)}}" alt="image"></td>
                        <td>
                            <a href="{{url('admin/banner/delete/')}}/{{$d->id}}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                        <td>
                            <a href="{{url('admin/banner/addBanner/')}}/{{$d->id}}"><button class="btn btn-success">Update</button></a>
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