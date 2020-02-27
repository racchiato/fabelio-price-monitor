@extends('layout.main')

@section('content')
<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-md-8">
			<h3 class="text-center">Add New Product</h3>
			<form method="post">
				@csrf
                    <div class="form-group">
                    	<p>Fabelio.com Product URL</p>
                        <input type="text" name="url" placeholder="e.g. https://fabelio.com/ip/verde-book-shelf.html" class="form-control">
                    </div>
                    <div class="form-group">
                    	<p>Title</p>
                        <input type="text" name="title" placeholder="Enter Product Title Here" class="form-control">
                    </div>
                    <div class="form-group">
                    	<p>Description</p>
                        <textarea type="text" name="description" rows=4 placeholder="Product Description Goes Here" class="form-control"></textarea>
                    </div>
                     <div class="form-group">
                        <p>Enter Current Price</p>
                        <input type="text" name="price" placeholder="e.g. 250000" class="form-control">
                    </div>
                     <div class="form-group">
                        <p>Image URL</p>
                        <input type="text" name="imageUrl" placeholder="https://m2fabelio.imgix.net/catalog/product/cache/image/e9c3970ab036de70892d86c6d221abfe/t/-/t-08_1__1_1.jpg" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-warning" style="width: 100%">Add Product</button>
                </form>
		</div>
	</div>
</div>
@endsection
