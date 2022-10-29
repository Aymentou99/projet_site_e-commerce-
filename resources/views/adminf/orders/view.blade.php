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
                                        @foreach ($orders->orderitems as $item)
                                            <tr>

                                                <td>{{ $item->products->name_en }}</td>
                                                <td>{{ $item->qty }}</td>


                                                <td><img src="{{ asset('Admin/images/Products/' . $item->products->image) }}"
                                                        height="70px" width="70px" alt="Products Image">
                                                </td>


                                            </tr>
                                        @endforeach
                                    </tbody>





                                </table>
                                <h4 class="px-2">Grand Total : <span
                                        class="float-end">{{ $orders->totalprice }}$</h4>
                                <div class="mt-5 px-2">
                                    <label for="">Orders Status</label>
                                    <form action="{{ url('update-order/' . $orders->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select class="form-select" name="order_status">
                                            <option selected>Open this select Menu</option>
                                            <option {{ $orders->status == '0' ? 'selected' : '' }} value="0">Pending
                                            </option>
                                            <option {{ $orders->status == '1' ? 'selected' : '' }}value="1">Completed
                                            </option>
                                        </select>
                                        <button type="submit" class="btn btn-primary float-end mt-3">Update</button>
                                    </form>
                                </div>
                            </div>

                        </div>




                    </div>




                </div>


            </div>













        </div>
    @endsection
