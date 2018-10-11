<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NW Warriors</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light navbar-shadow bg-light">
    <a class="navbar-brand" href="{{ route('web.warriors.index') }}">
      NW Warriors
    </a>

    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('web.types.index') }}">
            Tipos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('web.specialities.index') }}">
            Especialidades
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('web.warriors.index') }}">
            Guerreiros
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <main class="py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          @yield('content')
        </div>
      </div>
    </div>
  </main>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
