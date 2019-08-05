<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TFcis URL Shorten - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>

</head>

<body>

  <!-- Navigation -->
    @include('common.nav')

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
  <!-- Page Content -->
    <div class="container">
    @yield('content')
    </div>

</body>

</html>

