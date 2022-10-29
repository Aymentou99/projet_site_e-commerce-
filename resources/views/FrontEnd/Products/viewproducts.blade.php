
@extends('layouts.inc.front')
@section('title')
{{$products->name_en}}

@endsection

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{url('add-rating')}}" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" name="product_id" value="{{$products->id}}">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rate{{$products->name_en}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <div class="rating-css">
    <div class="star-icon">
        @if($user_ratings)
@for($i=1;$i<= $user_ratings->stars_rated;$i++)
        <input type="radio" value="{{$i}}" name="product_rating" checked id="rating{{$i}}">
        <label for="rating{{$i}}" class="fa fa-star"></label>
        @endfor
    @for($j=$user_ratings->stars_rated+1;$j<=5;$j++)
        <input type="radio" value="{{$j}}" name="product_rating"  id="rating{{$j}}">
        <label for="rating{{$j}}" class="fa fa-star"></label>
        @endfor

        @else

<div class="rating-css">
    <div class="star-icon">
        <input type="radio" value="1" name="product_rating" checked id="rating1">
        <label for="rating1" class="fa fa-star"></label>
        <input type="radio" value="2" name="product_rating" id="rating2">
        <label for="rating2" class="fa fa-star"></label>
        <input type="radio" value="3" name="product_rating" id="rating3">
        <label for="rating3" class="fa fa-star"></label>
        <input type="radio" value="4" name="product_rating" id="rating4">
        <label for="rating4" class="fa fa-star"></label>
        <input type="radio" value="5" name="product_rating" id="rating5">
        <label for="rating5" class="fa fa-star"></label>
    </div>
</div>


        @endif
    </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-secondary" value="submit">
      </div>
        </form>
    </div>
  </div>
</div>
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
<div class="container">
<h6 class="mb-0">
<a href="{{url('category')}}">Collections</a>/
<a href="{{ url('category/'.$products->category->{'slug_'.app()->getLocale() }  )}} ">{{$products->category->{'name_'.app()->getLocale()}  }}</a>/
<a href="{{url('category/'.$products->category->{'slug_'.app()->getLocale() } .'/'. $products->{'slug_'.app()->getLocale()})}}">{{ $products->{'name_'. app()->getLocale()} }}</a>

</h6>
</div>

</div>

<div class="container">
    <div class="card shadow product_data">
            <div class="card-body">
<div class="row">
<div class="col-md-4 border-right">
<img src="{{asset('Admin/images/Products/'.$products->image)}}"  class="w-100" alt="">



</div>
<div class="col-md-8">
<h2 class="mb-0">
{{$products->name_en}}
@if($products->Trending == '1')
<label style="font-size : 16px " class="float-end badge bg-danger trending_tag">Trending</label>
@endif
</h2>

<hr>
 @php  $ratenum =number_format($ratevalue) @endphp
<div class="ratings">

@for($i=1;$i<= $ratenum;$i++)
<i class="fa fa-star checked"></i>
@endfor
@for($j=$ratenum+1;$j<=5 ;$j++)
<i class="fa fa-star"></i>
@endfor
<span>
@if($rate->count() ==0 )
No Ratings
@else
{{$rate->count()}}Ratings
@endif
</span>
</div>
<p class="mt-3">{{ $products->{'small_description_'. app()->getLocale() } }}</p>
<hr>
@if($products->qty > 0)
<label class="badge bg-success">In stock</label>
@else
<label class="badge bg-danger">out of stock</label>

@endif
<div class="row mt-2">
<div class="col-md-3">


    <input type="hidden" class="prod_id" value="{{$products->id}}">
<label for="qty">qty :</label>
<div class="input-group text-center mb-3">
<button class="input-group-text decrement-btn">-</button>
<input type="text" name="qty qty-input text-center"  value="1" class="form-control text-center qty-input" />
<button class="input-group-text increment-btn">+</button>
</div>
</div>

<div class="col-md-10 ">
    <br>   <br> <br>
@if($products->qty > 0)
      <button type="button"  class="btn btn-primary addToCart me-3 float-start " >Add To Cart<i class="fa fa-shopping-cart"></i></button>
        @endif


</div>
</div>
</div>
<div class="col-md-2">
<hr>

<h3>Description</h3>
<p class="mt-3">{{ $products->{'description_'.app()->getLocale()} }}</p>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Rating this product
</button>




</div>
</div>









</div>
</div>
</div>
@endsection

