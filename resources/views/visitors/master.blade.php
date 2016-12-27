<!doctype html>
<html lang="en">
<head>
    @yield('meta')
    @yield('title')
    @include('visitors.includes.head')

    @yield('css')

</head>
<body>

{{--@if( $data['popup']->status==1)--}}
{{--<div style="display:none" id="popup">--}}
    {{--<i class="fa fa-times colw"></i>--}}
    {{--<div class="imgPopWrap">--}}

        {{--<img src="{{url('resources/assets/images/popup/',$data['popup']->img_name)}}" alt="" class="img-responsive img100">--}}

    {{--</div>--}}
{{--</div>--}}
{{--@endif--}}
<div id="wrapper">

    @include('visitors.includes.menu')



@yield('content')


    @include('visitors.includes.footer')
</div>



@include('visitors.includes.foot')
@yield('script')
</body>
</html>