<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>
    <h1><a href="index">The Story</a></h1>
    <div id="grid">

        <!-- Lists -->
        <ol>
            <li><a href="1">The Girl And The Habit</a></li>
            <li><a href="2">임재우</a></li>
            <li><a href="3">별이</a></li>
        </ol>

        <!-- Contents -->
        <div>
            @yield('content')
        </div>
        <p>
            @yield('content1')
        </p>
    </div>
</body>

</html>