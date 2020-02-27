@extends('layout.main')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		@if(session()->get('message') !== null)
		<div class='col-md-12'>
			<h5>{{ session()->get('message') }}</h5>
		</div>
		@endif
		<div class="col-md-8 text-center">
			<img style="height: 10vh;" src="https://fabelio.com/static/version1582730189/frontend/Fabelio/aurela/id_ID/images/fabelio-logo-2.svg">
			<h1 dusk="title" class="text-center">Product Price Monitor</h1>
			<form method="post" action="{{ route('Search Product')}}">
				@csrf
                    <div class="form-group">
                        <input dusk="url-input" type="text" name="url" placeholder="e.g. https://fabelio.com/ip/verde-book-shelf.html" class="form-control">
                    </div>
                    <button dusk="search-button"type="submit" class="btn btn-warning" style="width: 100%">Search</button>
                </form>
		</div>
	</div>
</div>
@endsection