@extends('layouts.admin')


@section('content')
 <div class="card">

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
     <h1> edit Products</h1>
   </div>
<div class="card-body">
<form action="{{url('update-Products/'.$Product->id)}}" method="POST"  enctype="multipart/form-data" >
    @csrf
    @method('PUT')
<div class="row">
<div class="col-md-6 mb-3">
<label for=""> english Name</label>

<input type="text" class="form-control" name="name_en" value="{{$Product->name_en}}" >

<label for="form-control">Japanese Name</label>
<input type="text" class="form-control" name="name_jp"  value="{{$Product->name_ja}}">

</div>

<div class="col-md-12 mb-3">
<textarea  placeholder="UsageMethod_en" name="UsageMethod_en" cols="30" rows="3" class="form-control"  >{{$Product->UsageMethod_en}}</textarea>

</div>

<div class="col-md-12 mb-3">

<textarea name="UsageMethod_ja" placeholder="UsageMethod_ja" cols="30" rows="3" class="form-control"  >{{$Product->UsageMethod_ja}}</textarea>

</div>












</div>
<div class="col-md-12 mb-3">
<label for="">qty</label>

<input type="text" class="form-control" name="qty" value="{{$Product->qty}}">


</div>


<div class="col-md-12 ">

<label>Details english</label>
<textarea  name="Details_en" placeholder="Details_en" cols="30" rows="3" class="form-control">{{$Product->Details_en}}</textarea>


</div>




<div class="col-md-12 ">

<label>Details japonais</label>

<textarea name="Details_ja" placeholder="Details_ja" cols="30" rows="3" class="form-control">{{$Product->Details_ja}}</textarea>


</div>




<div class="col-md-12 ">

<label>Composition english</label>

<textarea name="Composition_en" placeholder="Composition_en" cols="30" rows="3" class="form-control">{{$Product->Composition_en}}</textarea>


</div>


<div class="col-md-12 ">

<label>Composition japonais</label>

<textarea name="Composition_ja" placeholder="Composition_ja" cols="30" rows="3" class="form-control">{{$Product->Composition_ja}}</textarea>


</div>



<div class="col-md-12 ">

<label>Stock_number</label>

<textarea name="Stock_number" placeholder="Stock_number" cols="30" rows="3" class="form-control">{{$Product->Stock_number}}</textarea>


</div>



<div class="col-md-12 ">

<label>Volume english</label>

<textarea name="Volume_en" placeholder="Volume_en" cols="30" rows="3" class="form-control">{{$Product->Volume_en}}</textarea>


</div>



<div class="col-md-12 ">

<label>Volume japonais</label>

<textarea name="Volume_ja" placeholder="Volume_ja" cols="30" rows="3" class="form-control">{{$Product->Volume_ja}}</textarea>


</div>











<div class="col-md-12 ">
<select class="form-select" name="cate_id">
<option value="">select Category</option>

@foreach($Products as $item)

<option value="{{$item->id}}">{{$item->name_en}}</option>



@endforeach


</option>


</select>

</div>

<div class="col-md-12 ">
<select class="form-select" name="Availability">
<option value="">select Availability </option>


@if($Product->Availability == 1)
<option value="1">in Stock</option>
@endif
@if($Product->Availability == 2)
<option value="2">Back Order</option>
@endif
@if($Product->Availability == 3)
<option value="3">Out of Stock</option>
@endif
@if($Product->Availability == 4)
<option value="4">Discontinued</option>
@endif

@if($Product->Availability != 1)
<option value="1">in Stock</option>
@endif
@if($Product->Availability != 2)
<option value="2">Back Order</option>
@endif
@if($Product->Availability != 3)
<option value="3">Out of Stock</option>
@endif
@if($Product->Availability != 4)
<option value="4">Discontinued</option>
@endif

</select>

</div>





@if($Product->image)
<div class="col-md-12 ">
<label for="">image</label>

<img src="{{asset('Admin/images/Products/'.$Product->image)}}" class="create-image" class="form-control">
</div>
@endif
<div class="col-md-12 ">
<label for="">price</label>
<input type="text"  class="form-control" name="price" value="{{$Product->price}}">
</div>
<div class="col-md-12 ">
<label for="">image</label>
<input type="file" class="image" class="form-control" value="" name="image">

<button type="submit" class="btn btn-primary">submit</button>
</div>


</form>



 </div>
</div>
@endsection
