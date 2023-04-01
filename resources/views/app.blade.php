<html>
  <head>
    {{-- META --}}
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- END META --}}
    {{-- CSS --}}
    @vite('resources/css/app.css')
    {{-- END CSS --}}
    {{-- JS --}}
    @vite('resources/js/app.js')
    {{-- END JS --}}
    @inertiaHead
  </head>
  <body>
    {{-- APP --}}
    @inertia
    {{-- END APP --}}
  
  </body>
</html>