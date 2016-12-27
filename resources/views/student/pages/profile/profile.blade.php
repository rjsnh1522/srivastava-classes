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
                            <form class="achievementsForm right-alert" id="adminProfileForm" method="post" action="{{route('post.student.complete.profile',$data['student']->email)}}" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="name">Name*</label>
                                        <input id="name" name="name" type="text" data-error=".error" value="{{$data['student']->name}}">
                                        <div class="error">{{$errors->first('name')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="email">Email*</label>
                                        <input id="email" name="email" type="text" data-error=".error" disabled value="{{$data['student']->email}}">
                                        <div class="error">{{$errors->first('email')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="datepicker" name="dob" data-error=".error" value="{{$data['studentInfo']->dob}}">
                                        <div class="error">{{$errors->first('dob')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="mobile">Mobile</label>
                                        <input id="mobile" name="mobile" type="text" data-error=".error" value="{{$data['student']->mobile}}">
                                        <div class="error">{{$errors->first('mobile')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="fname">Father's Name*</label>
                                        <input id="fname" name="FatherName" type="text" data-error=".error" value="{{$data['studentInfo']->f_name}}">
                                        <div class="error">{{$errors->first('FatherName')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="mname">Mother's Name*</label>
                                        <input id="mname" name="MotherName" type="text" data-error=".error" value="{{$data['studentInfo']->m_name}}">
                                        <div class="error">{{$errors->first('MotherName')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="gPhone">Gaurdian's Phone*</label>
                                        <input id="gPhone" name="GaurdianPhone" type="text" data-error=".error" value="{{$data['studentInfo']->g_contact}}">
                                        <div class="error">{{$errors->first('GaurdianPhone')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="scCol">School / College*</label>
                                        <input id="scCol" name="schoolOrCollege" type="text" data-error=".error" value="{{$data['studentInfo']->school_college}}">
                                        <div class="error">{{$errors->first('schoolOrCollege')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <textarea id="address" name="address" class="materialize-textarea validate" data-error=".error">{{$data['studentInfo']->address}}</textarea>
                                        <label for="address">Address</label>
                                        <div class="error">{{$errors->first('address')}}</div>
                                    </div>


                                    <div class="input-field col s12">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>Image</span>
                                                <input type="file" name="profiePic" id="fileUpload" data-error=".error">

                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" name="profiePic" data-error=".error" value="{{$data['student']->image}}">
                                            </div>

                                        </div>
                                        <div class="error">{{$errors->first('newsImage')}}</div>

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
                        @if($data['student']->image!='')
                            <img src="{{url('resources/assets/images/student/'.$data['student']->image)}}" alt="" class="thumb-image">
                        @endif

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
            selectYears: 40 // Creates a dropdown of 15 years to control year
        });
    </script>
    <script src="{{url('resources/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('resources/assets/js/formValidation.js')}}"></script>

@endsection

