<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

    <title>
        @yield('title')
    </title>
@include('admin.includes.head')


    @yield('css')
</head>
<body>
@include('admin.includes.topHeader')

<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
@include('admin.includes.leftMenuBar')

        <!-- START CONTENT -->

        @yield('content')

        <!-- END CONTENT -->



    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->
@include('admin.includes.footerScript')
@yield('script')
</body>
</html>