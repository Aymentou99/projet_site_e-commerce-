@extends('layouts.admin')


@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h1>Ratings</h1>
            </div>
            <div class="col-md-6">

                <form type="get" action="{{url('/Searchrat')}}" enctype="multipart/form-data">
                    <div class="row">

                        <input type="text" value="" name="query" class="form-control" placeholder="Search in Ratings" style="border-radius:15px;width:70%">

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
                        Ratings
                    </th>

                    <th>
                        image
                    </th>





                </tr>
            </thead>


            <tbody>
                @foreach($rate as $item)
                <tr>
                    <td>{{ $item->name_en }}</td>
                    <td>{{ $item->number_of_rating }}</td>



                    <td>
                        <img src="{{asset('Admin/images/Products/'.$item->image)}}" class="create-image" height="70px" width="70px" alt="">
                    </td>






                </tr>



                @endforeach

            </tbody>
        </table>
        <div class="pagination-block">

            {{ $rate->appends(request()->input())->links('adminf.paginationlinks') }}
        </div>
    </div>
</div>
@endsection
