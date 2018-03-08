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

    <style>
        .ui.secondary.menu {
          background-color: #24a940;
        }
    </style>
</head>
<body style="">

        @section('modal')

        @show
        <div class="ui secondary  menu px-8 bg-green">
          <a href="/information/create" class="active item">
            <span class="text-white">หน้าหลัก</span>
          </a>
          <a href="/knowledges" class="item">
            <span class="text-white">คำถามที่พบบ่อย</span>
          </a>
        </div>
    <div id="app" class="ui container">
    
        @section('content')

        @show
    </div>
    <script src="/js/app.js"></script>
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>    
    <script src="/semantic/components/modal.js"></script>
    <script src="/semantic/components/transition.js"></script>
    <script src="/semantic/components/dimmer.js"></script>


</body>
</html>