@extends('student.master')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- Profile
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
                            <form class="achievementsForm right-alert" id="adminProfileForm" method="post" action="{{route('post.change.stud.pass')}}" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="oldPassword">Old password*</label>
                                        <input id="oldPassword" name="oldPassword" type="password" data-error=".error" value="">
                                        <div class="error">{{$errors->first('oldPassword')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="password">New password*</label>
                                        <input id="password" name="password" type="password" data-error=".error"  value="">
                                        <div class="error">{{$errors->first('password')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="dob">Confirm new password*</label>
                                        <input type="password" name="password_confirmation" data-error=".error" value="">
                                        <div class="error">{{$errors->first('password_confirmation')}}</div>
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
            selectYears: 40 // Creates a dropdown of 15 years to control year
        });
    </script>
    <script src="{{url('resources/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('resources/assets/js/formValidation.js')}}"></script>

@endsection

