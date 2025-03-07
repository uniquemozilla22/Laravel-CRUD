<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name'),'CRUD-Laravel'}}</title>
   
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://kit.fontawesome.com/b58bb6ea64.js" crossorigin="anonymous"></script>
</head>
<body>
    @extends('Layout.navbar')
   
    
    <div class="container" style="margin-top:100px;">
    
        @yield('content')

    </div>
</body>
</html>