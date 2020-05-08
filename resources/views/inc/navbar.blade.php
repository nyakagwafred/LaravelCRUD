<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">LSAPP</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">Our Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/services">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/posts">Blog</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/posts/create">Create Post</a>
      </li>
    </ul>
  </div>
</nav>



<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>{{config('app.name', 'LSAPP')}}</title>
    </head>
   <body>
       @include('inc.navbar')
       <div style="padding-top: 10px" class="container">
           @include('inc.messages')
           @yield('content')
       </div>

       <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
       <script>
        CKEDITOR.replace( 'article-ckeditor' );
        </script>
       
    </body>
</html>
