@extends('layout.main')

@section('content')
<div class="container">
<h3 class="text-center mt-5 mb-5">Semua Produk</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Judul</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Harga Terakhir</th>
      <th scope="col">Tanggal Harga</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($products as $product)
  <tr>
      <td><a href="{{ route('Get Single Product', ['id' => $product->product_id ])}}">{{ $product->title }}</a></td>
      <td>{{ $product->description }}</td>
      <td>{{ number_format($product->price) ?? '-'}}</td>
      <td>{{ $product->created_at ?? '-'}}</td>
      <td>
        <a class="btn btn-warning mb-3" href="{{ route('Update Price Form', ['id' => $product->product_id ])}}">Update Harga</a>
        <a class="btn btn-warning" href="{{ route('Add Image Form', ['id' => $product->product_id])}}">Add Image</a>
    </td>
  </tr>
  @endforeach
</table>
</div>
@endsection