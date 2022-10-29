@extends('layouts.admin')


@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h1>Categories Page</h1>
            </div>
            <div class="col-md-6">

                <form type="get" action="{{url('/Search')}}">
                    <div class="row">

                        <input type="text" value="" name="query" class="form-control" placeholder="Search in Categories" style="border-radius:15px;width:70%">

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
                        Name
                    </th>

                    <th>
                        Image
                    </th>

                    <th>
                        number of products
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>


            <tbody>
                @foreach($category as $item)
                <tr>
                    <td>{{ $item->name_en }}</td>



                    <td>
                        <img src="{{asset('Admin/images/Category/'.$item->image)}}" class="create-image" height="70px" width="70px" alt="">
                    </td>

                    @if($item->number_of_product !== NULL)
                    <td>
                        {{ $item->number_of_product }}
                    </td>

@else
  <td>
                        0
                    </td>


@endif



                    <td>

                        <button class="btn btn-primary"><a href=" {{url('edit-prod/'. $item->id )}}" style="text-decoration:none;"><i class="fas fa-edit"></i>Edit</a></button>
                    </td>

                    <td>
                        <button class="btn btn-danger"><a href=" {{url('delete/'. $item->id )}}" style="text-decoration:none;"><i class="fas fa-times"></i>

                                Delete</a></button>
                    </td>



                </tr>



                @endforeach

            </tbody>
        </table>
        <div class="pagination-block">

            {{ $category->appends(request()->input())->links('adminf.category.paginationlinks') }}
        </div>
    </div>
</div>
@endsection
