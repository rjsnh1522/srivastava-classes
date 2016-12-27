<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

    <title>
        @yield('title')
    </title>
    {{--@include('admin.includes.head')--}}
            <!-- CORE CSS-->

    <link href="{{url('resources/assets/css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{url('resources/assets/css/style.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="{{url('resources/assets/css/custom.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{url('resources/assets/css/page-center.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{url('resources/assets/css/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{url('resources/assets/css/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{url('resources/assets/css/mystyles.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

    <style>
        html,
        body {
            height: 100%;
            width: initial;
        }
        html {
            display: table;
            margin: auto;
        }
        body {
            display: table-cell;
            vertical-align: middle;
        }
    </style>
    @yield('css')
</head>
<body>


                <!-- START CONTENT -->

        @yield('content')

                <!-- END CONTENT -->

<!-- jQuery Library -->
<script type="text/javascript" src="{{url('resources/assets/js/jquery-1.11.2.min.js')}}"></script>
<!--materialize js-->
<script type="text/javascript" src="{{url('resources/assets/js/materialize.min.js')}}"></script>
<!--prism-->
<script type="text/javascript" src="{{url('resources/assets/js/prism.js')}}"></script>
<!--scrollbar-->
<script type="text/javascript" src="{{url('resources/assets/js/perfect-scrollbar.min.js')}}"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="{{url('resources/assets/js/plugins.min.js')}}"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="{{url('resources/assets/js/custom-script.js')}}"></script>

<script type="text/javascript" src="{{url('resources/assets/js/myscript.js')}}"></script>

@yield('script')
</body>
</html>