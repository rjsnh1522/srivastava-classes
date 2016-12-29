<div class="topbar clearfix">
    <div class="container">
        <div class="clearfix">
            <div class="pull-left">
                <div class="contactwrap text-left">
                    <ul class="list-inline">
                        {{--<li><i class="fa fa-phone"></i> Call Us : 002 0106 5370701</li>--}}
                        {{--<li><i class="fa fa-envelope"></i> Email Us : 002 0106 5370701</li>--}}
                        {{--<li class="dropdown">--}}
                            {{--<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-lock"></i> Login / Register</a>--}}
                            {{--<div class="dropdown-menu">--}}
                                {{--<form method="post">--}}
                                    {{--<div class="form-title">--}}
                                        {{--<h4>Login Area</h4>--}}
                                        {{--<hr>--}}
                                    {{--</div>--}}
                                    {{--<input class="form-control" type="text" name="username" placeholder="USER NAME">--}}
                                    {{--<div class="formpassword">--}}
                                        {{--<input class="form-control" type="password" name="password" placeholder="******">--}}
                                        {{--<span class="badge">Forget</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="clearfix"></div>--}}
                                    {{--<button type="submit" class="btn btn-block btn-primary">LOGIN</button>--}}
                                    {{--<hr>--}}
                                    {{--<h4><a href="#">Create an Account</a></h4>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    </ul>
                </div><!-- end contactwrap -->
            </div><!-- end col -->

            <div class="pull-right">
                <ul class="social">
                    <li class="facebook" ><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end topbar -->

<header class="header clearfix">
    <div class="container">
        <nav class="yamm navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('get.visitors.homePage')}}"><img class="img-responsive logoHome" src="{{url('resources/assets/images/logo.png')}}" alt=""></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="@if($data['meta']->page_name=='homePage') active @endif">
                        <a href="{{route('get.visitors.homePage')}}">Home</a>
                    </li>
                    <li class="@if($data['meta']->page_name=='aboutPage') active @endif">
                        <a href="{{route('get.visitors.aboutPage')}}">About</a>
                    </li>
                    {{--<li class=""><a href="#">Courses</a>--}}
                    {{--</li>--}}
                    <li class="@if($data['meta']->page_name=='resultsPage') active @endif"><a href="{{route('visitors.pages.results')}}">Results</a></li>
                    <li class="@if($data['meta']->page_name=='achievementsPage') active @endif"><a href="{{route('visitors.pages.achievements')}}">Achievements</a></li>
                    <li class="@if($data['meta']->page_name=='weInNewsPage') active @endif"><a href="{{route('visitors.pages.weInNews')}}">We In News</a>
                    </li>
                    <li  class="@if($data['meta']->page_name=='contactUs') active @endif"><a href="{{route('visitors.pages.contact')}}">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </nav><!-- end nav -->
    </div><!-- end container -->
</header><!-- end header -->