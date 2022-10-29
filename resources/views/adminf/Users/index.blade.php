@extends('layouts.admin')


@section('content')
 <div class="card">
        <div class="card-header">
            <div class="row">
            <div class="col-md-6">
     <h1>Users page</h1>
        </div>
                    <div class="col-md-6">
                        <form  type="get" action="{{url('/Search-Users')}}" enctype="multipart/form-data">
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
full Name
</th>
<th>
email
</th>

</tr>
</thead>


<tbody>
@foreach($users as $item)

<tr>
<td>{{ $item->name }}</td>
<td>{{ $item->email}}</td>

</tr>



@endforeach

</tbody>
    </table>
       <div class="pagination-block">

                   {{  $users->appends(request()->input())->links('adminf.Users.paginationlinks') }}
               </div>
 </div>
 </div>
@endsection
