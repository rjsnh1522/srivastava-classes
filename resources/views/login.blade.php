@extends('loginRegisterMaster')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- Login
@endsection


@section('css')





@endsection



@section('content')
    @if(Session::has('success'))
        <div class="col s12 m12 l12">
            <div id="card-alert" class="card green lighten-5">
                <div class="card-content green-text">
                    <p>SUCCESS : {{Session::get('success')}}</p>
                </div>
                <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    @endif
    @if(Session::has('fail'))
        <div class="col s12 m12 l12">
            <div id="card-alert" class="card red lighten-5">
                <div class="card-content red-text">
                    <p>ERROR : {{Session::get('fail')}}</p>
                </div>
                <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    @endif

    @if(Session::has('wait'))
        <div class="col s12 m12 l12">
            <div id="card-alert" class="card orange lighten-5">
                <div class="card-content orange-text">
                    <p>WAIT : {{Session::get('wait')}}</p>
                </div>
                <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    @endif

    <div id="login-page" class="row">
        <div class="col s12 z-depth-4 card-panel">
            <form class="login-form" action="{{route('post.login.page')}}" method="post">
                <div class="row">
                    <div class="input-field col s12 center">
                        <img src="{{url('resources/assets/images/logo.jpg')}}" alt="" class="circle responsive-img valign profile-image-login">
                        <p class="center login-form-text">your Credentials Here</p>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-social-person-outline prefix"></i>
                        <input id="username" type="text" name="email">
                        <label for="username" class="center-align">Email</label>
                        <div class="error">{{ $errors->first('email') }}</div>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="password" type="password" name="password">
                        <label for="password">Password</label>
                        <div class="error">{{ $errors->first('password') }}</div>
                    </div>
                </div>
                {{--<div class="row">--}}
                    {{--<div class="input-field col s12 m12 l12  login-text">--}}
                        {{--<input type="checkbox" id="remember-me" />--}}
                        {{--<label for="remember-me">Remember me</label>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="row">
                    <div class="input-field col s12">
                        <input type="hidden" name="_token" value="{{Session('_token')}}">
                        <button class="btn btn-blue waves-effect waves-light col s12" type="submit">Login</button>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 m6 l6">
                        <p class="margin medium-small"><a href="{{route('get.register.page')}}">Register Now!</a></p>
                    </div>
                    <div class="input-field col s6 m6 l6">
                        <p class="margin right-align medium-small"><a href="{{route('get.forgotPassword.form')}}">Forgot password ?</a></p>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection




@section('script')
@endsection
