<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title')</title>
      @yield('css')

      <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/clients/css/style.css') }}">
</head>

<body>
      @include('clients.blocks.heade')

      <main class="py-5">
            <div class="container">

                  <div class="row">

                        <div class="col-4">

                              <aside>
                                    @section('sidebar')
                                    @include('clients.blocks.sidebar')
                                    @show
                                    <h1> main sidebar </h1>
                              </aside>
                        </div>
                        <div class="col-8">
                              <div class="content">
                                    @yield('content')
                              </div>

                        </div>
                  </div>

            </div>

      </main>

      @include('clients.blocks.footer')
      <footer>

      </footer>
      <script type="text/javascript" src="{{ asset('assets/clients/js/bootstrap.min.js') }}">
      </script>
      <script type="text/javascript" src="{{ asset('assets/clients/js/custom.js') }}">
      </script>
      @yield('js')

</body>

</html>