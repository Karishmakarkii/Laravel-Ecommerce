@extends('layout')

@section('content')
 <h1> Products </h1>
   @foreach($products as $product)
     <article>
        <h2><a href="/products/{{ $product->id}}">{{ $product['product_name']}}</a></h2>
            <p>{{ $product['product_desc'] }}</p>
     </article>
   @endforeach
@endsection