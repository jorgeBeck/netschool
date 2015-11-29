<html>
    <head>
      <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
        <link href="./css/masterlogin.css" rel="stylesheet">

    </head>
    <body>
      <div class="header">
        <h1>@yield('header')</h1>
      </div>


        <div class="container">
            <h2>@yield('header2')</h2>
            @yield('loginform')
            <div class="messages">
              <h3>@yield('messages')</h3>
            </div>
        </div>
    </body>
</html>
