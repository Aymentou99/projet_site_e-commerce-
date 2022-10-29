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
     <h1>edit Category</h1>
   </div>
<div class="card-body">
<form   action="{{ url('categoryup') }}" method="POST" enctype="multipart/form-data">
    @csrf
@method('PUT')
<input type="hidden" value="{{$category->id}}" name="id">
<div class="row">
<div class="col-md-6 mb-3">
<label for=""> english Name</label>

<input type="text" class="form-control" name="name_en"  value=" {{$category->name_en}}">
@error('name_en')
<small class="form-text text-danger" >{{$message}}</small>
@enderror
<label for="form-control">Japanese Name</label>
<input type="text" class="form-control" name="name_jp"  value=" {{$category->name_ja}}">
@error('name_jp')
<small class="form-text text-danger" >{{$message}}</small>
@enderror
</div>
<div class="col-md-6 mb-3">
<label>english slug </label>
<input type="text" class="form-control" name="slug_en"  value=" {{$category->slug_en}}" >
@error('slug_en')
<small class="form-text text-danger" >{{$message}}</small>
@enderror
<label>Japanese slug </label>
<input type="text" class="form-control" name="slug_jp"   value=" {{$category->slug_ja}}">
@error('slug_jp')
<small class="form-text text-danger" >{{$message}}</small>
@enderror
</div>
<div class="col-md-12 mb-3">
<textarea  placeholder="description_en" name="description_en" cols="30" rows="3" class="form-control"  >  {{$category->description_en}}</textarea>
@error('description_en')
<small class="form-text text-danger" >{{$message}}</small>
@enderror
</div>

<div class="col-md-12 mb-3">

<textarea name="description_jp" placeholder="description_jp" cols="30" rows="3" class="form-control"  > {{$category->description_ja}}</textarea>
@error('description_jp')
<small class="form-text text-danger" >{{$message}}</small>
@enderror
</div>
</div>


<div class="col-md-12 mb-3">
<label for="">meta title english</label>
<input type="text" class="form-control" name="meta_title_en" value="{{$category->meta_title_en}}">
@error('meta_title_en')
<small class="form-text text-danger" >{{$message}}</small>
@enderror


</div>

<div class="col-md-12 mb-3">
<label for="">small description english</label>

<input type="text" class="form-control" name="small_description_en" value="{{$category->small_description_en}}">


</div>
<div class="col-md-12 mb-3">
<label for="">small description Japanese</label>

<input type="text" class="form-control" name="small_description_jp" value="{{$category->small_description_ja}}">

</div>


<div class="col-md-12 mb-3">
<label for="">meta title Japanese</label>

<input type="text" class="form-control" name="meta_title_jp" value="{{$category->meta_title_jap}}">
@error('meta_title_jp')
<small class="form-text text-danger" >{{$message}}</small>
@enderror

</div>
<div class="col-md-12 mb-3">
<label for="">meta keyword english</label>

<input type="text" class="form-control" name="meta_keyword_en"  value="{{$category->meta_keyword_en}}">

@error('meta_keyword_en')
<small class="form-text text-danger" >{{$message}}</small>
@enderror
</div>
<div class="col-md-12 mb-3">
<label for="">meta keyword Japanese</label>

<input type="text" class="form-control" name="meta_keyword_jp" value="{{$category->meta_keyword_ja}}" >

@error('meta_keyword_jp')
<small class="form-text text-danger" >{{$message}}</small>
@enderror

</div>
<div class="col-md-12 mb-3">
<label for="">meta keyword description japonese</label>

<input type="text" class="form-control" name="meta_description_jp" value="{{$category->meta_description_ja}}" >
@error('meta_description_jp')
<small class="form-text text-danger" >{{$message}}</small>
@enderror

</div>

<div class="col-md-12 mb-3">
<label for="">meta  description english </label>

<input type="text" class="form-control" name="meta_description_en" value="{{$category->meta_description_en}}">
@error('meta_description_en')
<small class="form-text text-danger" >{{$message}}</small>
@enderror

</div>






<div class="col-md-12 ">
<label for="">image</label>

<img src="{{asset('Admin/images/Category/'.$category->image)}}" class="create-image" class="form-control">

</div>


<div class="col-md-12 ">
<label for="">image</label>

<input type="file" class="image" class="form-control"  name="image"  />

@error('image')
<small class="form-text text-danger" >{{$message}}</small>
@enderror




<button type="submit" class="btn btn-primary">submit</button>

</div>







</form>



 </div>
</div>
@endsection
