@extends('layouts.inc.front')

@section('title')
Welcome to E-Shop

@endsection

@section('content')
@include ('layouts.inc.slider')
<div class="py-5">
<div class="container">
<div class="row">
    <h2> Featured Products </h2>
<div class="owl-carousel featured-carousel owl-theme">


    @foreach ( $featured_products as $item)


<div class="item">

    <div class="card">
        <img src="{{asset('Admin/images/Products/'.$item->image)}}" alt="product-image">
<div class="card-body">
<h3>{{$item->{'name_'.app()->getLocale()}}}</h3>
<small class="float-start">qty : {{$item->qty}}</small>

</div>
    </div>
</div>
    @endforeach

</div>

</div>
</div>
</div>








<div class="py-5 ">
    <div class="container">
<div class="row">
    <div class="col-md-12">
        <h2>Trending  categories</h2>
        <div class="owl-carousel featured-carousel owl-theme">


    @foreach ( $trending_Category as $item)
<div class="item">
      <a href="{{url('Viewcategory/'.$item->{'slug_'.app()->getLocale()})}}" ></a>
    <div class="card">
        <img src="{{asset('Admin/images/Category/'.$item->image)}}" alt="product-image" >
<div class="card-body">
<h5>{{$item->name_en}}</h5>

</div>
    </div>
</div>
    @endforeach
</div>
</div>
</div>
</div>
</div>



@endsection
@section('scripts')
<script>
$('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})

</script>

@endsection
