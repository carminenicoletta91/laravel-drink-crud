<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DrinkLaravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Css-->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">

    </head>
    <body>
      <header>
        <div class="headersx">
          <p>{{$type}}</p>
        </div>
        <div class="headerdx">
          <a href="#">Nav-bar</a>
        </div>
      </header>

      <div class="container-boxs">
        @yield('section-cube')
      </div>

      <footer>
        <div class="footersx">
          <p>{{$type}}</p>
        </div>
        <div class="footerdx">
          <p>Contact:xxxxxxxx</p>
        </div>
      </footer>
    </body>
</html>
