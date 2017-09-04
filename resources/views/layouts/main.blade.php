
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Asset Mangement System</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    @include('header')

    <div class="container-fluid">
      <div class="row">
        @include('sidebar')

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          @yield('content')
        </main>
      </div>
    </div>

  </body>
</html>
