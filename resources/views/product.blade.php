@extends('product-layout')
@section('menu')
    @include('includes/menu')
@endsection
@section('contents')
<div class="container text-center" style="margin-top:30px;">
<div class="row">
    <div class="col-6">
        <img src="/storage/{{ $products->image }}" height="300" width="500" alt="image" alt="image"/>
    </div>
    <div class="col-6">
        <div class="text1" style="margin-top: 40px;">
        <h3 >{{ $products->product_name}} </h3>
        <p>{{ $products->product_desc}}</p>
      </div>
      <div class="div1">
       Rs. {{$products->price}}
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