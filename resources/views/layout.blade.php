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

        .ui.label.white{
            background-color: white;
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
          

         <div class="right menu">
            @if(Auth::user()->role_id == 1)

            <a href="/admin" class="item">
              <span class="text-white">จัดการข้อมูล</span>
            </a>
            @endif

            <div class="ui dropdown item text-white">
              {{Auth::user()->name}} <i class="dropdown icon"></i>
              <div class="menu">
                <a href="/logout" class="item text-white">Logout</a>
                
              </div>
            </div>
        </div>



        </div>
        <div class="flex">
            <div>
               
            </div>
          <div id="app" class="ui  px-8 container">
            @section('content')

            @show
        </div>
       
        </div>
    <script src="/js/app.js"></script>
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>    

    <script src="/semantic/components/modal.js"></script>
    <script src="/semantic/components/transition.js"></script>
    <script src="/semantic/components/dimmer.js"></script>
    <script src="/semantic/components/dropdown.js"></script>
    <script>
      $('.ui.dropdown').dropdown();
    </script>

</body>
</html>