
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

       
    <div id="app" class="ui container">
        
            <form class="ui form flex flex-col items-center mt-8" action="/login" method="post">
                <img src="https://www.img.in.th/images/bb0909cc70ca0f39e902b3d98c513647.jpg" style="height:400px;" alt="logo" class="mt-8 mb-8">
                {{csrf_field()}}
                
                    <div class="field w-2/5">
                      <label>อีเมลล์</label>
                      <input type="email" name="email" placeholder="อีเมลล์">
                    </div>
                    <div class="field w-2/5">
                      <label>รหัสผ่าน</label>
                      <input type="password" name="password" placeholder="รหัสผ่าน">
                    </div>
                    
                    <button class="ui button w-2/5" type="submit">เข้าสู่ระบบ</button>
                
                  </form>
        
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