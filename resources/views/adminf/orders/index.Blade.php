@extends('layouts.admin')
@section('title')

orders

@endsection


@section('content')
<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">News Orders</h4>
                    <a href="{{url('order-history')}}" class="btn btn-warning float-right"><i class="fa fa-history" aria-hidden="true"></i>Order History</a>
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
                                <td>{{$item->totalprice}}$

                                </td>
                                <td>{{$item->status =='0' ? 'pending' : 'completed'}}</td>
                                <td><a href="{{url('all-orders/'.$item->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i>

                                        view</a>


                                </td>


                            </tr>

                            </tr>








                            @endforeach
                        </tbody>





                    </table>



                </div>




            </div>





        </div>





        <div class="pagination-block">

            {{ $orders->appends(request()->input())->links('adminf.paginationlinks') }}
        </div>


    </div>



</div>
@endsection