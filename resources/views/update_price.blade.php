@extends('layout.main')

@section('content')
<div class="container">
	<div class="row justify-content-center mt-5">
		@if(session()->get('message') !== null)
		<div dusk="message" class='col-md-12 mb-3'>
			<h5>{{ session()->get('message') }}</h5>
		</div>
		@endif
		<div class="col-md-8">
			<h3 class="text-center">Update Price For {{ $product->title }}</h3>
            <h4>Current Price: {{ $currentPrice->price ?? 'Belum Ada Data'}}</h4>
			<form class="mt-5"method="post" action="{{ route('Update Price', ['id' => $product->id ])}}">
				@csrf
                    <div class="form-group">
                    	<p>Enter New Price</p>
                        <input type="text" name="price" placeholder="e.g. 250000" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-warning" style="width: 100%">Update Price</button>
                </form>
		</div>
	</div>
</div>
@endsection