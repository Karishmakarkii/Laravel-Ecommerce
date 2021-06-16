@extends('admin.layout')

@section('content')
@include('admin.navbar')
<div class="container">
  <form method="POST" action="{{route('products.update', $products->slug)}}">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product name" name="name"  value="{{$products->product_name}}">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Description</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Enter product description" >{{$products->product_desc}}</textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Price</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="price" value="{{$products->price}}">
    </div>
    Category:
    <select name="category_id" id="">
      <option value="0">Select a Category</option>
      @foreach ($categories as $category)
      <option value="{{$category->id}}" {{$category->id == $products->category->id?'selected':''}}>{{$category->name}}</option>
          
      @endforeach
    </select>
    <div class="form-group">
      <label for="exampleFormControlFile1">Upload Product image</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="product_img">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  
    
@endsection