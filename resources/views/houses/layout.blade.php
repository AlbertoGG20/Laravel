<html>
  <head>
    <title>In - mobiliaria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/layout.css">
  </head>
  <body>
    <nav class="nav-bar">
      <div class="nav-bar__container">
        <a class="nav-bar__brand" href="{{ route('home') }}">House </a>
        <ul class="nav-bar__list">
          <li><a href="{{ route('houses.index') }}">Listado de casas</a></li>
          <li><a href="{{ route('houses.create') }}">Crear casa</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>