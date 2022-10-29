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
     <h1>add products</h1>
   </div>
<div class="card-body">
<form action="{{url('insert-products')}}" method="POST">
    @csrf
<div class="row">
<div class="col-md-6 mb-3">
<label for=""> english Name</label>
<input type="text" class="form-control" name="name_en" >

<label for="form-control">Japanese Name</label>
<input type="text" class="form-control" name="name_jp">

</div>


<div class="col-md-12 mb-3">
<label for="">qty</label>
<input type="number" name="qty">


</div>

<div class="col-md-12 mb-3">
<label for="">Usage  Method  english</label>


<textarea  placeholder="UsageMethod_en" name="UsageMethod_en" cols="30" rows="3" class="form-control"></textarea>
</div>



<div class="col-md-12 mb-3">
<label for="">Usage  Method  Japanese</label>



<textarea  placeholder="UsageMethod_ja" name="UsageMethod_ja" cols="30" rows="3" class="form-control"></textarea>

</div>





<div class="col-md-12 mb-3">
<label for="">Details english</label>




<textarea  placeholder="Details_en" name="Details_en" cols="30" rows="3" class="form-control"></textarea>

</div>



<div class="col-md-12 mb-3">
<label for="">Details  Japanese</label>




<textarea  placeholder="Details_ja" name="Details_ja" cols="30" rows="3" class="form-control"></textarea>
</div>

<div class="col-md-12 mb-3">
<label for="">Stock_number</label>

<input type="text" class="form-control" name="Stock_number">


</div>
<div class="col-md-12 mb-3">
<label for="">Composition english</label>


<textarea  placeholder="Composition_en" name="Composition_en" cols="30" rows="3" class="form-control"></textarea>

</div>
<div class="col-md-12 mb-3">
<label for="">Composition Japanese</label>



<textarea  placeholder="Composition_ja" name="Composition_ja" cols="30" rows="3" class="form-control"></textarea>

</div>


<div class="col-md-12 mb-3">
<label for="">Volume english</label>

<input type="text" class="form-control" name="Volume_en">



</div>

<div class="col-md-12 mb-3">
<label for="">Volume Japanese</label>

<input type="text" class="form-control" name="Volume_ja">


</div>



<div class="col-md-12 ">
<select class="form-select" name="Availability">
<option value="">select Availability </option>



<option value="1">in Stock</option>


<option value="2">Back Order</option>

<option value="3">Out of Stock</option>
<option value="4">Discontinued</option>




</select>

</div>



<div class="col-md-12 ">

<label>price</label>

<input type="text" placeholder="prices"  name="price" class="form-control">


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
<label for="">image</label>

<input type="file" class="image" class="form-control" name="image">


<button type="submit" class="btn btn-primary">submit</button>
</div>












</form>


</div>
</div>

@endsection
