<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: calibri;
        }
        .auth-labels {
            display:inline-block;
            width: 8em;
        }
        .auth-textbox {
            /* display: inline-block; */
            margin-bottom: .5em;
        }
    </style>
</head>
<body>
    @if(!Auth::check())
    @yield('auth-content')
    @else
    @yield('page-content')
    @endif
</body>
</html>