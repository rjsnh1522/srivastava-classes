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
                            <form class="achievementsForm right-alert" id="addNewsForm" method="post" action="{{route('post.edited.result',$data['forResultEdit']->result_id)}}"enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="studentName">Student Name*</label>
                                        <input id="studentName" value="{{$data['forResultEdit']->student_name}}" name="studentName" type="text" data-error=".error">
                                        <div class="error">{{$errors->first('studentName')}}</div>

                                    </div>
                                    <div class="input-field col s12">
                                        <label for="examName">Exam Name*</label>
                                        <input id="examName" name="examName" type="text" data-error=".error" value="{{$data['forResultEdit']->exam_name}}">
                                        <div class="error">{{$errors->first('examName')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="rank">Rank</label>
                                        <input id="rank" value="{{$data['forResultEdit']->rank}}" name="rank" type="text" data-error=".error">
                                        <div class="error">{{$errors->first('rank')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label></label>
                                        <select name="stream">
                                            <option value="" disabled selected>{{$data['forResultEdit']->stream}}</option>
                                            <option value="Engineering">Engineering</option>
                                            <option value="Medical">Medical</option>
                                        </select>
                                        <div class="error">{{ $errors->first('stream') }}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label></label>
                                        <select name="year">
                                            <option value="" disabled selected>{{$data['forResultEdit']->year}}</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="Before 2014">Before 2014</option>
                                        </select>
                                        <div class="error">{{ $errors->first('year') }}</div>
                                    </div>


                                    <div class="input-field col s12">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>Image</span>
                                                <input type="file" value="{{$data['forResultEdit']->img_name}}" name="studentImage" id="fileUpload" data-error=".error">

                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" value="{{$data['forResultEdit']->img_name}}" type="text" name="studentImage" data-error=".error">
                                            </div>

                                        </div>
                                        <div class="error">{{$errors->first('newsImage')}}</div>

                                    </div>

                                    {{--<div class="input-field col s12">--}}
                                    {{--<textarea id="content" name="content" class="materialize-textarea validate" data-error=".error"></textarea>--}}
                                    {{--<label for="content">Content *</label>--}}
                                    {{--<div class="error">{{$errors->first('content')}}</div>--}}
                                    {{--</div>--}}
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
                        <img src="{{url('resources/assets/images/results/'.$data['forResultEdit']->img_name)}}" alt="" class="thumb-image">

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
            selectYears: 20 // Creates a dropdown of 15 years to control year
        });
    </script>
    <script src="{{url('resources/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('resources/assets/js/formValidation.js')}}"></script>

@endsection

