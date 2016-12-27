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
    <div id="login-page" class="row">
        <div class="col s12 z-depth-4 card-panel">
            <form class="login-form" action="{{route('post.register.form')}}" method="post">
                <div class="row">
                    <div class="input-field col s12 center">
                        <h4>Register</h4>
                        <p class="center">Join to our community now !</p>
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-communication-email prefix"></i>
                        <input id="email" type="email" name="email">
                        <label for="email" class="center-align">Email</label>
                        <div class="error">{{ $errors->first('email') }}</div>

                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-communication-call prefix"></i>
                        <input id="mobile" type="text" name="mobile">
                        <label for="mobile" class="center-align">Mobile</label>
                        <div class="error">{{ $errors->first('mobile') }}</div>

                    </div>
                </div>

                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-lock prefix"></i>
                        <input id="password" type="password" name="password">
                        <label for="password">Password</label>
                        <div class="error">{{ $errors->first('password') }}</div>

                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="mdi-action-lock prefix"></i>
                        <input id="password-again" type="password" name="password_confirmation">
                        <label for="password-again">Password again</label>
                        <div class="error">{{ $errors->first('password_confirmation') }}</div>

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="hidden" name="_token" value="{{Session('_token')}}">
                        <button class="btn waves-effect waves-light col s12" type="submit" name="action">Register Now</button>
                    </div>
                    <div class="input-field col s12">
                        <p class="margin center medium-small sign-up">Already have an account?
                            <a href="{{route('get.login.page')}}">Login</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection




@section('script')
@endsection
