@extends('layouts.admin')
@section('title')

History Orders
@endsection


@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">History Orders</h4>
                    <a href="{{url('orders')}}" class="btn btn-warning float-right">New Orders</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th>Order Date</th>
                                <th>Tracking Number</th>
                                <th>Total price</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>


                        </thead>

                        <tbody>
                            @foreach($orders as $item)
                            <tr>
                                <td>{{date('d-m-Y' ,strtotime($item->created_at))}}</td>
                                <td>{{$item->tracking_no}}</td>
                                <td>{{$item->totalprice}}$</td>
                                <td>{{$item->status =='0' ? 'pending' : 'completed'}}</td>
                                <td><a href="{{url('all-orders/'.$item->id)}}" class="btn btn-primary">view</a>


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