@extends('admin/layout')
@section('page_title','User')
@section('user','active')
@section('container')

<h2>Registered Users</h2>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->city}}</td>
                        <td>
                            <a href="{{url('admin/customer/show/')}}/{{$d->id}}"><button class="btn btn-info">View</button></a>
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