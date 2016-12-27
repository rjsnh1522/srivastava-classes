@extends('admin.master')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- Time Table
@endsection


@section('css')
    <link rel="stylesheet" href="https://cdn.rawgit.com/chingyawhao/materialize-clockpicker/master/dist/css/materialize.clockpicker.css">




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
                            <form class="achievementsForm right-alert" id="editTimeTableForm" method="post" action="{{route('save.edited.schedule',$data['editSchedule']->schedule_id)}}"enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label></label>
                                        <select name="">
                                            <option value="" disabled selected>{{$data['editSchedule']->batch_year}}</option>
                                            <input id="title"  name="forYear" type="hidden" data-error=".error" value="{{$data['editSchedule']->batch_year}}">

                                        </select>
                                        <div class="error">
                                            {{--{{ $errors->first('forYear') }}--}}
                                        </div>
                                    </div>

                                    {{--<div class="input-field col s12">--}}
                                        {{--<label for="title">Year Group Name*</label>--}}
                                        {{--<input id="" disabled name="" type="text" data-error=".error" value="{{$data['yearBatch']->batch_year_name}}">--}}
                                        {{--<input id="title"  name="yearGroupName" type="hidden" data-error=".error" value="{{$data['yearBatch']->batch_year_name}}">--}}

                                        {{--<div class="error">{{ $errors->first('yearGroupName') }}</div>--}}
                                    {{--</div>--}}

                                    <div class="input-field col s12">
                                        <label for="title">Batch Name*</label>
                                        <input id="title" name="batchName" type="text" data-error=".error" value="{{$data['editSchedule']->batch_name}}">
                                        <div class="error">{{ $errors->first('batchName') }}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label></label>
                                        <select name="forClass">
                                            <option value="{{$data['editSchedule']->class}}" selected>{{$data['editSchedule']->class}}</option>
                                            <option value="Eleven">Eleven</option>
                                            <option value="Twelve">Twelve</option>
                                            <option value="Target">Target</option>
                                        </select>
                                        <div class="error">{{ $errors->first('forClass') }}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label></label>
                                        <select name="forSubject">
                                            <option value="{{$data['editSchedule']->subject}}"  selected>{{$data['editSchedule']->subject}}</option>
                                            <option value="Physics">Physics</option>
                                            <option value="Chemistry">Chemistry</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="Biology">Biology</option>
                                        </select>
                                        <div class="error">{{ $errors->first('forSubject') }}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label></label>
                                        <select name="faculty">
                                            <option value="{{$data['editSchedule']->faculty}}"  selected>{{$data['editSchedule']->faculty}}</option>
                                            <option value="Rakesh Sir">Rakesh Sir</option>
                                            <option value="Jitesh Sir">Jitesh Sir</option>
                                            <option value="One More">One More</option>
                                            <option value="One More Sir">One More Sir</option>
                                        </select>
                                        <div class="error">{{ $errors->first('faculty') }}</div>
                                    </div>
                                    <div class="input-field col s12">
                                        <label></label>
                                        <select name="dayOne">
                                            <option value="{{$data['editSchedule']->day_one}}"  selected>@if($data['editSchedule']->day_one){{$data['editSchedule']->day_one}}@else Day One @endif</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Wednesday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>
                                        <div class="error">{{ $errors->first('dayOne') }}</div>
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="dayOneTime">Day One time</label>
                                        <input id="dayOneTime" name="dayOneTime" class="timepicker" type="time" value="{{$data['editSchedule']->day_one_time}}">
                                    </div>

                                    <div class="input-field col s12">
                                        <label></label>
                                        <select name="daytwo">
                                            <option value="{{$data['editSchedule']->day_two}}" selected>@if($data['editSchedule']->day_two){{$data['editSchedule']->day_two}}@else Day Two @endif</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Wednesday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>
                                        <div class="error">{{ $errors->first('dayOne') }}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="dayTwoTime">Day Two time</label>
                                        <input id="dayTwoTime" name="dayTwoTime" class="timepicker" type="time" value="{{$data['editSchedule']->day_two_time}}">
                                    </div>


                                    <div class="input-field col s12">
                                        <input type="hidden" name="_token" value="{{Session('_token')}}">
                                        <input type="hidden" name="scheduleId" value="{{$data['editSchedule']->schedule_id}}">

                                        <button class="btn waves-effect waves-light right submit" type="submit" name="action">Submit
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--<div class="col s12 m12 l6">--}}
                    {{--<div id="responsive-table">--}}
                        {{--<h5>Batch Schedule for {{$data['yearBatch']->batch_year}}--}}
                            {{--<span class="new removeNew badge">--}}
                                 {{--<a href="{{route('view.schedule.table',$data['yearBatch']->batch_year)}}">View All</a></span>--}}
                        {{--</h5>--}}
                        {{--<div class="col s12 m12 l12">--}}
                            {{--<table class="responsive-table highlight">--}}
                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<th data-field="id">Faculty</th>--}}
                                    {{--<th data-field="name">Day One</th>--}}
                                    {{--<th data-field="price">Time Day One</th>--}}
                                    {{--<th data-field="total">Day Two</th>--}}
                                    {{--<th data-field="status">Time Day Two</th>--}}
                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody>--}}
                                {{--@foreach($data['forTable'] as $tableData)--}}
                                    {{--<tr>--}}
                                        {{--<td>{{$tableData->faculty}}</td>--}}
                                        {{--<td>{{$tableData->day_one}}</td>--}}
                                        {{--<td>{{$tableData->day_one_time}}</td>--}}
                                        {{--<td>{{$tableData->day_two}}</td>--}}
                                        {{--<td>{{$tableData->day_two_time}}</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}

                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<div class="center-align">--}}
                        {{--{{$tableData->links}}--}}
                    {{--</div>--}}
                {{--</div>--}}
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
    <script src="{{url('https://cdn.rawgit.com/chingyawhao/materialize-clockpicker/master/dist/js/materialize.clockpicker.js')}}"></script>

    <script>
        //Time Picker:
        $('.timepicker').pickatime({
            default: 'now',
            twelvehour: true, // change to 12 hour AM/PM clock from 24 hour
            donetext: 'OK',
            autoclose: false,
            vibrate: true, // vibrate the device when dragging clock hand
            clear: 'Clear selection',
            close: 'Cancel'
        });

    </script>
@endsection

