<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
      <link href="images/favicon.png" rel="icon" />
      <title>:: Olimpia Sport ::</title>
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>
      <link rel="stylesheet" type="text/css" href="{{ asset('front/bootstrap.min.css') }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('front/all.min.css') }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('front/owl.carousel.min.css') }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('front/stylesheet.css') }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset('front/daterangepicker.css') }}" />
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
      <style>
        .img-2{
            height: 100px;
            justify-content: center;
        }

        @media only screen and (max-width: 600px) {
            .img-2{
                height: 80px;
                justify-content: center;
            }
        }
      </style>
      @stack('stylesheets')
   </head>
   <body style="background-color: #f1f1f1">
      <div id="preloader">
         <div data-loader="dual-ring"></div>
      </div>
      <div id="main-wrapper">
          <div id="content">
            @if(env('APP_ENV') == 'production')
                @include('layouts.header_front')
                @yield('content')
            @else
                <h1 style="justify-content:center; text-align:center; flex: row">Sito in manutenzione</h1>
            @endif
          </div>
      </div>
      @include('layouts.footer_front')
      <!-- Script -->
      <script src="{{ asset('front/jquery.min.js') }}"></script>
      <script src="{{ asset('front/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('front/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('front/theme.js') }}"></script>
      <script src="{{ asset('/bundles/toastr.min.js') }}"></script>
      @stack('scripts')
      @if(Session::has('success'))
      <script>
          toastr.success("{{__('Success') }}", "{!! session('success') !!}", 'success');
      </script>
    @endif
    @if(Session::has('error'))
      <script>
          toastr.error("{{__('Error') }}", "{!! session('error') !!}", 'error');
      </script>
    @endif
   </body>
</html>
