<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="icon" href="/favicon.ico">

        <meta name="description" content="{{{ isset($description) ? $description : 'Star Wars Wiki' }}}">
        <meta name="author" content="{{{ isset($author) ? $author : 'Star Wars Wiki' }}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Star Wars Wiki | {{{ isset($title) ? $title : '' }}}</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
        <link href="{{ mix('css/costum.css') }}" rel="stylesheet">
        <style type="text/css">
        </style>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        {{-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> --}}

        <!-- Custom styles for this template -->
        @yield("content-css")

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
    <div id="vueapp">
        <header>
        </header>

        <div class="main-content-wrapper">
            @yield('content')
        </div>

        <footer> 
        </footer>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        @yield('modal')
    </div>
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="{{ mix('js/costum.js') }}"></script>

        @yield('content-js')
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        {{-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> --}}
    </body>
</html>
