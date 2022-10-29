@extends('layouts.inc.front')

@section('titles')
My Orders
@endsection

@section('content')
<div class="container py-5">

<div class="row">
<div class="col-md-12">
    <div class="card">
            <div class="card-header bg-primary">
                <h4>Order view </h4>
            </div>
            <div class="card-body">
                <div class="row">
                <div class="col-md-6 order-details">

                    <label for="">First Name</label>
<div class="border p-2">{{ $orders->fname }}</div>
                    <label for="">last Name</label>
<div class="border p-2">{{ $orders->lname }}</div>

                    <label for="">email</label>
<div class="border p-2">{{ $orders->email }}</div>

                    <label for="">phone</label>
<div class="border p-2">{{ $orders->phone }}</div>

                    <label for="">Country</label>
<div class="border p-2">{{ $orders->country }}</div>
            </div>
            <div class="col-md-6">
<table class="table table-bordered">

<thead>
<tr>
<th>Name</th>
<th>Quantity</th>

<th>Image</th>
</tr>


</thead>

<tbody>
@foreach($orders->orderItems as $item)
<tr>

<td>{{$item->products->{'name_'.app()->getLocale()}}}</td>
<td>{{$item->qty}}</td>


<td><img src="{{asset('Admin/images/Products/'.$item->products->image)}}"  alt="Products Image"  height="70px"  width="70px">
</td>


</tr>









@endforeach
</tbody>





</table>

</div>

</div>




</div>




</div>


</div>













</div>


</div>







@endsection
