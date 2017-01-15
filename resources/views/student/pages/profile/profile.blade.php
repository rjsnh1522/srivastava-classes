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
                                        <input id="name" name="name" type="text" data-error=".error" value="@if(old('name')){{old('name')}}@else{{$data['student']->name}}@endif">
                                        <div class="error">{{$errors->first('name')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="email">Email*</label>
                                        <input id="email" name="email" type="text" data-error=".error" disabled value="{{$data['student']->email}}">
                                        <div class="error">{{$errors->first('email')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="datepicker" name="dob" data-error=".error" value="@if(old('dob')){{old('dob')}}@else{{$data['studentInfo']->dob}}@endif ">
                                        <div class="error">{{$errors->first('dob')}}</div>
                                    </div>
                                    <div class="input-field col s12 margin20">
                                        <div class="smallSpaceBelow">
                                        <input name="gender" class="with-gap" type="radio" id="r1" value="Male" @if($data['studentInfo']->gender=='Male')checked @else @endif>
                                        <label for="r1">Male</label>
                                        <input name="gender" class="with-gap" type="radio" id="r2" value="Female" @if($data['studentInfo']->gender=='Female')checked @else @endif>
                                        <label for="r2">Female</label>
                                        </div>
                                        <div class="error">{{$errors->first('gender')}}</div>

                                    </div>

                                    <div class="input-field col s12">
                                        <label for="mobile">Mobile</label>
                                        <input id="mobile" name="mobile" type="text" data-error=".error" value="@if(old('mobile')){{old('mobile')}}@else{{$data['student']->mobile}}@endif">
                                        <div class="error">{{$errors->first('mobile')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="fname">Father's Name*</label>
                                        <input id="fname" name="FatherName" type="text" data-error=".error" value="@if(old('FatherName')){{old('FatherName')}}@else{{$data['studentInfo']->f_name}}@endif">
                                        <div class="error">{{$errors->first('FatherName')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="mname">Mother's Name*</label>
                                        <input id="mname" name="MotherName" type="text" data-error=".error" value="@if(old('MotherName')){{old('MotherName')}}@else{{$data['studentInfo']->m_name}}@endif">
                                        <div class="error">{{$errors->first('MotherName')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="gPhone">Gaurdian's Phone*</label>
                                        <input id="gPhone" name="GaurdianPhone" type="text" data-error=".error" value="@if(old('GaurdianPhone')){{old('GaurdianPhone')}}@else{{$data['studentInfo']->g_contact}}@endif">
                                        <div class="error">{{$errors->first('GaurdianPhone')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="scCol">School / College*</label>
                                        <input id="scCol" name="schoolOrCollege" type="text" data-error=".error" value="@if(old('schoolOrCollege')){{old('schoolOrCollege')}}@else{{$data['studentInfo']->school_college}}@endif">
                                        <div class="error">{{$errors->first('schoolOrCollege')}}</div>
                                    </div>

                                    <div class="input-field col s12 margin20">

                                        <div class="smallSpaceBelow">
                                            <input name="selectedClass" class="with-gap" type="radio" id="r11" value="Eleven" @if($data['studentInfo']->class=='Eleven')checked @else @endif>
                                            <label for="r11">Eleven</label>
                                            <input name="selectedClass" class="with-gap" type="radio" id="r21" value="Twelve" @if($data['studentInfo']->class=='Twelve')checked @else @endif>
                                            <label for="r21">Twelve</label>
                                            <input name="selectedClass" class="with-gap" type="radio" id="r31" value="Target" @if($data['studentInfo']->gender=='Target')checked @else @endif>
                                            <label for="r31">Target</label>

                                        </div>
                                        <div class="error">{{$errors->first('gender')}}</div>

                                        {{--<select name="selectedClass">--}}
                                            {{--@if(old('selectedClass'))--}}
                                            {{--<option value="{{$data['studentInfo']->class}}">{{$data['studentInfo']->class}}</option>--}}
                                            {{--@endif--}}
                                            {{--<option value="Eleven" @if($data['studentInfo']->class=='Eleven')selected@else @endif>Eleven</option>--}}
                                            {{--<option value="Twelve" @if($data['studentInfo']->class=='Twelve')selected@else @endif>Twelve</option>--}}
                                            {{--<option value="Target" @if($data['studentInfo']->class=='Target')selected@else @endif>Target</option>--}}
                                        {{--</select>--}}
                                        {{--<label>Select Class</label>--}}
                                    </div>

                                    <div class="input-field col s12">
                                        <textarea id="address" name="address" class="materialize-textarea validate" data-error=".error">@if(old('address')) {{old('address')}} @else {{$data['studentInfo']->address}} @endif</textarea>
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

