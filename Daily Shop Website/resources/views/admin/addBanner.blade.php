@extends('admin/layout')
@section('page_title','Add Banner')
@section('Add_banner','active')
@section('container')
<h2>Add Banner</h2>
<a href="{{url('admin/banner')}}">
    <button class="btn btn-success mt-3">Back To Banner</button>
</a>
<div class="container-fluid">
    <div class="row m-t-30">
            <div class="col-md-10">
                <form action="{{route('banner.addBannerProcess')}}" method="post" class="bg-light p-5"  encytpe="multipart/form-data">
                    @csrf
                    <label for="">Button Text</label>
                    <input type="text" name="btnText" value="{{$btnText}}" placeholder="Enter The Button Name" class="form-control"> 
                    
                    <br>
                    <label for="">Button Link</label>
                    <input type="text" name="btnLink" value="{{$btnLink}}" placeholder="Enter The Button Link" class="form-control"> 
                   
                    <br>
                    <label for="">Image</label>
                    <input type="file" name="image" value="{{$image}}" id="image" class="form-control" required placeholder="Choose File" class="form-control"> 
                    
                    <br>
                   <br>
                    <input type="submit" value="Add Banner" class="form-control btn btn-info btn-blocked">

                    <input type="hidden" value="{{$id}}" name="id">
                </form>
            </div>
    </div>
</div>
@endsection