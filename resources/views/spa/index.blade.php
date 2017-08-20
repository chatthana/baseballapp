<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Frontend Router - Baseball Application</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}" />
</head>
<body>
    <div id="app">
        <router-view></router-view>
    </div>
    <script src="{{mix('/js/app.js')}}"></script>
</body>
</html>