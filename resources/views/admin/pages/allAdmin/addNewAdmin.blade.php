@extends('admin.master')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- Dashboard
@endsection


@section('css')





@endsection



@section('content')

    <div id="jqueryvalidation" class="section">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="col s12 m12 l12">
                    <div class="pageNameDiv">
                        <h3>{{$data['pageTitle']}}
                        </h3>
                    </div>
                </div>

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
                <div class="col s12 m12 l6">
                    <div class="card-panel">
                        <h4 class="header2">{{$data['formName']}}</h4>
                        <div class="row">
                            <form class="achievementsForm right-alert" id="achievementsForm" method="post" action="{{route('post.add.new.admin')}}"enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="title">Full Name*</label>
                                        <input id="title" name="fullname" type="text" data-error=".error">
                                        <div class="error">{{ $errors->first('fullname') }}</div>

                                    </div>

                                    <div class="input-field col s12">
                                        <label for="title">Email*</label>
                                        <input id="email" name="email" type="text" data-error=".error">
                                        <div class="error">{{ $errors->first('email') }}</div>

                                    </div>

                                    <div class="input-field col s12">
                                        <label for="title">Password*</label>
                                        <input id="email" name="password" type="password" data-error=".error">
                                        <div class="error">{{ $errors->first('password') }}</div>
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="title">Password Again*</label>
                                        <input id="email" name="password_confirmation" type="password" data-error=".error">
                                        <div class="error">{{ $errors->first('password_confirmation') }}</div>
                                    </div>
                                    <div class="switch">
                                        <label>
                                            Disabled
                                            <input type="checkbox" name="status">
                                            <span class="lever"></span>
                                            Enable
                                        </label>
                                    </div>



                                    <div class="input-field col s12">
                                        <input type="hidden" name="_token" value="{{Session('_token')}}">
                                        <button class="btn waves-effect waves-light right submit" type="submit" name="action">Submit
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div id="image-holder">
                        {{--image preview here--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




@section('script')
    <script>
        $('.datepicker').pickadate({
            selectMonths: true,
            selectYears: true,// Creates a dropdown to control month
            selectYears: 50 // Creates a dropdown of 15 years to control year
        });
    </script>
    <script src="{{url('resources/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('resources/assets/js/formValidation.js')}}"></script>
@endsection