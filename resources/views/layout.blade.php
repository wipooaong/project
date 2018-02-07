<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/semantic/semantic.css">
   

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">


    <title>Document</title>
</head>
<body style="padding-top:20px">

    <div id="app" class="ui container">
        @section('content')

        @show
    </div>
    <script src="/js/app.js"></script>
</body>
</html>