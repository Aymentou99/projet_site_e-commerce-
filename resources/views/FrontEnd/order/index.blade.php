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
                <h4 class="text-white">My Orders</h4>
            </div>
            <div class="card-body">
<table class="table table-bordered">

<thead>
<tr>
    <th>Order Date</th>
<th>Tracking Number</th>
<th>status</th>
<th>Action</th>

</tr>


</thead>

<tbody>
@foreach($orders as $item)
<tr>
<td>{{date('d-m-Y' ,strtotime($item->created_at))}}</td>
<td>{{$item->tracking_no}}</td>
<td>{{$item->status =='0' ? 'pending' : 'completed'}}</td>
<td><a href="{{url('view-orders/'.$item->id)}}" class="btn btn-primary">view</a>


</td>


</tr>

</tr>








@endforeach
</tbody>





</table>



</div>




</div>




</div>


</div>













</div>










@endsection
