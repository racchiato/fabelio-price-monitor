<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fabelio Price Monitor</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="{{ asset('css/custom.css')}}" rel="stylesheet">
</head>
<body>
<div class="container">
	<nav class='navbar navbar-expand-lg navbar-warning bg-warning'>
      <a class='navbar-brand' href='/'><img style="height: 30px;"src="https://fabelio.com/static/version1582730189/frontend/Fabelio/aurela/id_ID/images/fabelio-logo-2.svg"></a>
      <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
      </button>

      <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav ml-auto'>
          <li class='nav-item'>
            <a class="nav-link {{ request()->routeIs('Homepage') ? 'active' : ''}}" href="{{ route('Homepage')}}">Home</a>
          </li>
          <li class='nav-item'>
            <a class="nav-link {{ request()->routeIs('All Products') ? 'active' : ''}}" href="{{ route('All Products')}}">Semua Produk</a>
          </li>
          <li class='nav-item'>
            <a class="nav-link {{ request()->routeIs('Add Product Form') ? 'active' : ''}}" href="{{ route('Add Product Form')}}">Tambah Produk</a>
          </li>
        </ul>
      </div>
    </nav>
</div>
@yield('content')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@yield('script')
</body>