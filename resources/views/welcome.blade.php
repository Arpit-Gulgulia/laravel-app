<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--    <title>{{env("APP_NAME", "Laravel App")}}</title>--}}
    <title>{{config("app.name", "Laravel App")}}</title>

</head>
<body>
<h3>This is welcome page</h3>
<p>Jai jinnedra! This is my home page</p>
</body>
</html>
