@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 offset-2">
			<form method="post" class="" action="{{ route('update',$data->id) }}" >
	@csrf
	@method('PATCH')
	<fieldset>
		<legend>Update product</legend>
	<label>Item name</label><br>
	<input type="text" value="{{$data['name']}}" class="form-control" name="name">
		@error('name')
		<div class="alert alert-danger" >
		 <strong>{{ $message }}</strong>
		</div>
		@enderror
	
	<label>Item price</label><br>
	<input type="text" value="{{$data['price']}}" class="form-control" name="price">	<br>
	@error('price')
		<div class="alert alert-danger" >
		 <strong>{{ $message }}</strong>
		</div>
		@enderror
	<input type="submit" name="submit" class="btn btn-primary  float-right" value="Create Product">

</fieldset>
</form>
		</div>
</div>
@endsection