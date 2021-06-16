@extends('admin.layout')

@section('content')
@include('admin.navbar')
<div class="container">
    <a href="{{route('products.create')}}">Create Products</a>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>Action</th>

    </tr>
    <tr>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->product_name}}</td>
            <td>{{substr($product->product_desc, 0,50)}}</td>
            <td>{{$product->Price}}</td>
            <td><img src="/storage/{{ $product->image }}" height="200" width="200" alt="image"/></td>
            <td>
                <a class="btn btn-primary" href="{{ route('products.edit', $product->slug)}}"> Edit </a> |  <form action="{{ route('products.destroy', $product->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit"> Delete </button>
                  </form>
            </td>

        </tr>
        @endforeach
    </tr>
    
</table>

</div>
    
@endsection