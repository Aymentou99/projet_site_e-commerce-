@extends('layouts.inc.front')

@section('title')
Profil

@endsection

@section('content')
<div class="card" style="width:61%;">
        @if(!empty($errors))
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endif
  <div class="card-body">
    <h1> edit profil</h1>
  </div>
  <div class="card-body">
    <form action="{{url('update-profil/'.Auth::id())}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-6 mb-3" style="width:100%;">
          <label for=""> email</label>
          <input type="email" class="form-control" name="email" value="{{$user->email}}">
          <label for="form-control">password</label>
          <input type="password" class="form-control" name="password" value="">
        </div>









        <div class="col-md-12 ">


          <button type="submit" class="btn btn-primary">update</button>


        </div>


    </form>



  </div>
</div>
</div>
@endsection
