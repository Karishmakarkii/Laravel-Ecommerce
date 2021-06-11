@extends('product-layout')
@section('menu')
    @include('includes/menu')
@endsection
@section('contents')
<div class="container text-center">
<div class="row">
    <div class="col-6">
        <img src="" alt="image"/>
    </div>
    <div class="col-6">
        <div class="text1">
        <h3 >{{ $product->product_name}} </h3>
        <p>{{ $product->product_desc}}</p>
      </div>
      <div class="div1">
       Rs. {{$product->price}}
      </div>
      <div class="div2" >
        ADD TO SHOPPING BAG
      </div>
      <div class="div3">
        ADD TO WISH LIST
      </div>
      <div ><i class="fas fa-map-marker-alt"></i> Find the store
        <hr style=" width:100%; margin-left: 40px;"></div>
      <div><i class="fas fa-phone-alt"></i>Contact us +977 9823760981</div>


</div>
</div>
</div>

@endsection