
@extends('layouts.inc.front')
@section('title')

{{$category->name_en}}
@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
<div class="container">
<h6 class="mb-0">
Collections / {{$category->name_en}}

</h6>
</div>

</div>



<div class="py-5">
<div class="container">
<div class="row">
    <h2> {{$category->{'name_'.app()->getLocale()} }} </h2>



    @foreach ( $products as $item)


<div class="col-md-3 mb-3">

    <div class="card">
             <a href="{{url('category-v/'.$category->{'slug_'.app()->getLocale()} .'/'.$item->{'slug_'.app()->getLocale()} )}}" >
        <img src="{{asset('Admin/images/Products/'.$item->image)}}" alt="product-image"  class="w-100">
<div class="card-body">
<h5>{{$item->{'name_'. app()->getLocale() } }}</h5>
<span class="float-start">{{$item->qty}}</span>
</div>
</a>
    </div>
</div>
    @endforeach

</div>

</div>

</div>








@endsection
