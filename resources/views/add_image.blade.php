@extends('layout.main')

@section('content')
<div class="container">
	@if(session()->get('message') !== null)
		<div class='col-md-12'>
			<h5>{{ session()->get('message') }}</h5>
		</div>
	@endif
	<div class="row justify-content-center mt-5">
		<div class="col-md-8">
			<h3 class="text-center">Add Image For {{ $product->title }}</h3>
			<form method="post" action="{{ route('Add Image', ['id' => $product->id ])}}">
				@csrf
                    <div class="form-group">
                    	<p>Enter Image URL</p>
                        <input type="text" name="imageUrl" placeholder="e.g. https://fabelio.com/ip/verde-book-shelf.html" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-warning" style="width: 100%">Add Image</button>
                </form>
		</div>
	</div>
</div>
@endsection