<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Blog</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  @include('shared.navbar')

    <div class="col-sm-12">
        @if(session()->get('success'))
          <div class="alert alert-success alert-dismissible fade show">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
    </div>

    <div class="container">
      @yield('main')
    </div>

  <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
