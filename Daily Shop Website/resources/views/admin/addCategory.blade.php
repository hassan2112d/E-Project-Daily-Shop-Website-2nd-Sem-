@extends('admin/layout')
@section('page_title','Add Category')
@section('Add_category','active')
@section('container')
<h2>Add Category</h2>
<a href="{{url('admin/category')}}">
    <button class="btn btn-success mt-3">Back To Category</button>
</a>
<div class="container-fluid">
    <div class="row m-t-30">
            <div class="col-md-10">
                <form action="{{route('category.addCategoryProcess')}}" method="post" class="bg-light p-5"  encytpe="multipart/form-data">
                    @csrf
                    <label for="">Category Name</label>
                    <input type="text" name="categoryName" value="{{$categoryName}}" placeholder="Enter The Category" class="form-control"> 
                    @error('categoryName')
                    {{$message}}
                    @enderror
                    <br>
                    <label for="">Category Image</label>
                    <input type="file" name="image"  id="image" class="form-control" required placeholder="Choose File" class="form-control"> 
                    @error('image')
                    {{$message}}
                    @enderror 
                    <br>
                    <label for="">Status</label>
                    <input type="text" name="status" value="{{$status}}" placeholder="Enter The Status" class="form-control"> 
                    @error('status')
                    {{$message}}
                    @enderror
                    <br><br>
                    <input type="submit" value="Add Category" class="form-control btn btn-info btn-blocked">

                    <input type="hidden" value="{{$id}}" name="id">
                </form>
            </div>
    </div>
</div>
@endsection