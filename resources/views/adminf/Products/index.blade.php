@extends('layouts.admin')


@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h1>Products</h1>
            </div>
            <div class="col-md-6">
                      <div class="row">

                        <input type="text" value="" name="query" class="form-control" placeholder="Search in Products" style="border-radius:15px;width:70%">

                        <button type="submit" class="btn btn-primary" style="width:auto;"><i class="fas fa-search"></i></button>

                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table ">
            <thead>
                <tr>
                    <th>
                        Name english
                    </th>
                    <th>
                        Name japonais
                    </th>

                    <th>
                        category name english
                    </th>

    <th>
         	Availability
                    </th>


    <th>
                        qty
                    </th>


                    <th>
                        image
                    </th>

                    <th>
                        price
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>


            <tbody>
                @foreach($products as $item)
                <tr>
                    <td>{{ $item->name_en }}</td>
                    <td>{{ $item->name_jap}}</td>



                    @if($item->cate_id)
                    <td>{{ $item->category->name_en}}</td>
                    @endif


                    <td>@if($item->Availability === 1)
in Stock
@elseif($item->Availability === 2)
Back Order
@elseif($item->Availability === 3)
Out of Stock
@elseif($item->Availability === 4)
Discontinued
@elseif($item->Availability !== 1)
in Stock
@elseif($item->Availability !== 2)
Back Order
@elseif($item->Availability !== 3)
Out of Stock
@elseif($item->Availability !== 4)
Discontinued
@endif</td>




                    <td>{{ $item->qty}}</td>

                    <td>
                        <img src="{{asset('Admin/images/Products/'.$item->image)}}" class="create-image" height="70px" width="70px" alt="">
                    </td>
                    <td>{{ $item->price}}$</td>

          <td>

                        <button class="btn btn-primary"><a  href="{{url('edit-products/'.$item->id )}}" style="text-decoration:none;"><i class="fas fa-edit"></i>Edit</a></button>
                    </td>

                    <td>
                        <button class="btn btn-danger"><a href="{{url('delete_products/'.$item->id )}}" style="text-decoration:none;"><i class="fas fa-times"></i>

                                Delete</a></button>
                    </td>



                </tr>



                @endforeach

            </tbody>
        </table>
        <div class="pagination-block">

            {{ $products->appends(request()->input())->links('adminf.Products.paginationlinks') }}
        </div>
    </div>
</div>
@endsection
