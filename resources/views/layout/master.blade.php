<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font awesome 5 icon -->
  <script src="https://kit.fontawesome.com/d3981548c2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href={{ mix("css/app.css") }} />
  @section('css')
  @show
  <title>@section('title') @show</title>
</head>
<body>
  @include('includes.navbar')
  @section('main')
  @show
  @include('includes.footer')
  <script src={{ mix('js/app.js') }} type="text/javascript"></script>
  @section('js')
  @show
</body>
</html>
