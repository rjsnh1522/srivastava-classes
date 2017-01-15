@extends('admin.master')


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
                            <div class="achievementsForm right-alert singleStudentDetails" id="singleStudentDetails" >
                                <div class="row">
                                    <div class="row">
                                        <div class="input-field col s6 l6 m6">
                                            <img src="{{url('resources/assets/images/student',$data['student']->image)}}" alt="">
                                        </div>
                                        <div class="switch text-center">
                                            <form action="{{route('post.disable.student',$data['student']->email)}}" method="post">
                                                <label>
                                                    <input type="hidden" name="_token" value="{{Session('_token')}}">
                                                    <input type="checkbox" name="status" @if($data['student']->status==1) checked='checked' @else  @endif onChange="this.form.submit()">
                                                    <span class="lever"></span>

                                                </label>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="name">Name*</label>
                                        <input id="name" name="name" type="text" data-error=".error" disabled value="{{$data['student']->name}}">
                                        <div class="error">{{$errors->first('name')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="email">Email*</label>
                                        <input id="email" name="email" type="text" data-error=".error" disabled value="{{$data['student']->email}}">
                                        <div class="error">{{$errors->first('email')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="datepicker" name="dob" data-error=".error" disabled value="{{$data['student']->dob}}">
                                        <div class="error">{{$errors->first('dob')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="mobile">Mobile</label>
                                        <input id="mobile" name="mobile" type="text" data-error=".error" disabled value="{{$data['student']->mobile}}">
                                        <div class="error">{{$errors->first('mobile')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="fname">Father's Name*</label>
                                        <input id="fname" name="FatherName" type="text" data-error=".error" disabled  value="{{$data['student']->f_name}}">
                                        <div class="error">{{$errors->first('FatherName')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="mname">Mother's Name*</label>
                                        <input id="mname" name="MotherName" type="text" data-error=".error" disabled  value="{{$data['student']->m_name}}">
                                        <div class="error">{{$errors->first('MotherName')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="gPhone">Gaurdian's Phone*</label>
                                        <input id="gPhone" name="GaurdianPhone" type="text" data-error=".error" disabled  value="{{$data['student']->g_contact}}">
                                        <div class="error">{{$errors->first('GaurdianPhone')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="scCol">School / College*</label>
                                        <input id="scCol" name="schoolOrCollege" type="text" data-error=".error" disabled  value="{{$data['student']->school_college}}">
                                        <div class="error">{{$errors->first('schoolOrCollege')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <select name="selectedClass">
                                            <option value="" disabled selected>{{$data['student']->class}}</option>
                                        </select>
                                        <label>Class</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <textarea id="address" name="address" class="materialize-textarea validate" disabled  data-error=".error">{{$data['student']->address}}</textarea>
                                        <label for="address">Address</label>
                                        <div class="error">{{$errors->first('address')}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div id="card-widgets">
                        <div id="work-collections">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <ul id="projects-collection" class="collection">
                                        <li class="collection-item avatar">
                                            <i class="circle light-blue darken-2 mdi-editor-insert-invitation"></i>
                                            <span class="collection-header">Time Table</span>
                                            <p>Batches of {{$data['student']->name}}</p>
                                            <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                        </li>

                                        @if(!empty(array_filter($data['timetable'])))
                                            @foreach($data['timetable'] as $tt)
                                                <li class="collection-item">
                                                    <div class="row">
                                                        <div class="col s4">
                                                            <p class="collections-title">{{$tt->subject}}</p>
                                                            <p class="collections-content">{{$tt->faculty}}</p>
                                                        </div>
                                                        <div class="col s4">
                                                            <span class="task-cat @if($tt->subject=="Physics")pink @elseif($tt->subject=="Chemistry")  teal @elseif($tt->subject=="Mathematics") cyan @elseif($tt->subject=="Biology") green @endif ">{{$tt->day_one}}</span>
                                                            <p class="collections-content">{{$tt->day_one_time}}</p>

                                                        </div>
                                                        <div class="col s4">
                                                            <span class="task-cat @if($tt->subject=="Physics")pink @elseif($tt->subject=="Chemistry")  teal @elseif($tt->subject=="Mathematics") cyan @elseif($tt->subject=="Biology") green @endif ">{{$tt->day_two}}</span>
                                                            <p class="collections-content">{{$tt->day_two_time}}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @else
                                            <li class="collection-item">
                                                <div class="row">
                                                    <div class="col s12">
                                                        <p class="collections-title">No Batch Selected yet</p>
                                                        <p class="collections-content"><a href="" class="pink-text">Click here to select your Batches</a></p>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                        </div>


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

