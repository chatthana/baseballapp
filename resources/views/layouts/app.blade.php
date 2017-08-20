<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Baseball Store - Tum Siwakorn</title>
  <link rel="stylesheet" type="text/css" href="{{mix('/css/app.css')}}" />
</head>
<body>
  <header>
    <div class="wrapper">
      <a href="{{ action('SiteController@index') }}"><h1>Baseball App</h1></a>
    </div>
  </header>
  @yield('content')
</body>
</html>