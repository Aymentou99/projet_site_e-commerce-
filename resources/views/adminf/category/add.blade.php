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
     <h1>add Category</h1>
   </div>
<div class="card-body">
<form action="{{url('insert-category')}}" method="POST"  >
@csrf
<div class="col-md-6 mb-3">
<label for=""> english Name</label>
<input type="text" class="form-control" name="name_en" >

<label for="form-control">Japanese Name</label>
<input type="text" class="form-control" name="name_jp">

</div>
<div class="col-md-6 mb-3">
<label>english slug </label>
<input type="text" class="form-control" name="slug_en">

<label>Japanese slug </label>
<input type="text" class="form-control" name="slug_jp">

</div>
<div class="col-md-12 mb-3">
<textarea  placeholder="description_en" name="description_en" cols="30" rows="3" class="form-control"></textarea>

</div>

<div class="col-md-12 mb-3">

<textarea name="description_jp" placeholder="description_jp" cols="30" rows="3" class="form-control"></textarea>

</div>



<div class="col-md-12 mb-3">
<label for="">meta title english</label>
<input type="text" class="form-control" name="meta_title_en">


</div>


<div class="col-md-12 mb-3">
<label for="">meta description english</label>
<input type="text" class="form-control" name="meta_description_en">


</div>
<div class="col-md-12 mb-3">
<label for="">meta description japanese</label>
<input type="text" class="form-control" name="meta_description_jp">


</div>



<div class="col-md-12 mb-3">
<label for="">meta title Japanese</label>

<input type="text" class="form-control" name="meta_title_jp">


</div>
<div class="col-md-12 mb-3">
<label for="">meta keyword english</label>

<input type="text" class="form-control" name="meta_keyword_en">


</div>
<div class="col-md-12 mb-3">
<label for="">meta keyword Japanese</label>

<input type="text" class="form-control" name="meta_keyword_jp">

</div>


<div class="col-md-12 mb-3">
<label for="">small description english</label>

<input type="text" class="form-control" name="small_description_en">



</div>

<div class="col-md-12 mb-3">
<label for="">small description japanese</label>

<input type="text" class="form-control" name="small_description_jp">


</div>






<div class="col-md-12 ">
<label for="">image</label>

<input type="file" class="image" class="form-control" name="image">


<input type="submit" class="btn btn-primary" value="submit">

</div>



</form>



 </div>
</div>
@endsection
