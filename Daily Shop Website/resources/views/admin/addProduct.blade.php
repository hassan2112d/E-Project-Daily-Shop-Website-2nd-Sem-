@extends('admin/layout')
@section('page_title','Add Product')
@section('Add_Product','active')
@section('container')
<h2>Add Product</h2>
<a href="{{url('admin/product')}}">
    <button class="btn btn-success mt-3">Back To Product</button>
</a>
<div class="container-fluid">
    <div class="row m-t-30">
            <div class="col-md-10">
                <form action="{{route('product.addproductprocess')}}" method="post" encytpe="multipart/form-data" class="bg-light p-5">
                    @csrf
                    <label for="">Product Name</label>
                    <input type="text" name="name" value="{{$name}}" placeholder="Enter The Product" class="form-control"> 
                    @error('name')
                    {{$message}}
                    @enderror
                    <br>

                    <label for="">Product Code</label>
                    <input type="number" name="code" value="{{$code}}" placeholder="Enter The Code of Product" class="form-control"> 
                    @error('code')
                    {{$message}}
                    @enderror
                    <br>
                    
                    <label for="">Product Image</label>
                    <input type="file" name="image" id="image" class="form-control" required placeholder="Choose File" class="form-control"> 
                    @error('image')
                    {{$message}}
                    @enderror 
                    <br>
                    <label for="">Category</label>
                    <select name="categoryId" id="categoryId" type="text" class="form-control" required>
                        <option value="">Select Categories</option>
                        @foreach($category as $cat)
                            @if($categoryId==$cat->id)
                                <option selected value="{{$cat->id}}">
                            @else
                                <option value="{{$cat->id}}">
                            @endif
                                    {{$cat->categoryName}}</option>
                        @endforeach
                    </select>
                    @error('category')
                    {{$message}}
                    @enderror
                    <br>
                    <label for="">Product Description</label>
                    <textarea class="form-control" id="decript" name="decript" rows="3" required>
                        {{$decript}}
                    </textarea>
                    <br>
                    <label for="">Price</label>
                    <input type="text" name="price" value="{{$price}}" placeholder="Enter Price" class="form-control"> 
                    @error('price')
                    {{$message}}
                    @enderror
                    <br>
                    <input type="submit" value="Add Product" class="form-control btn btn-info btn-blocked">

                    <input type="hidden" value="{{$id}}" name="id">
                </form>
            </div>
    </div>
</div>
@endsection