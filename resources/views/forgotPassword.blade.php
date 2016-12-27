@extends('loginRegisterMaster')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- Login
@endsection


@section('css')





@endsection



@section('content')

    <div id="login-page" class="row">
        <div class="col s12 z-depth-4 card-panel">
            <form class="login-form">
                <div class="row">
                    <div class="input-field col s12 center">
                        <h4>Forgot Password</h4>
                        <p class="center">You can reset your password</p>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-social-person-outline prefix"></i>
                        <input id="username" type="text">
                        <label for="username" class="center-align">Username</label>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-lock-outline prefix"></i>
                        <input id="password" type="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <a href="index.html" class="btn waves-effect waves-light col s12">Reset Password</a>
                    </div>
                    <div class="input-field col s12">
                        <p class="margin sign-up"><a href="{{route('get.login.page')}}">Login</a>
                            <a href="{{route('get.register.page')}}" class="right">Register</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection




@section('script')
@endsection
