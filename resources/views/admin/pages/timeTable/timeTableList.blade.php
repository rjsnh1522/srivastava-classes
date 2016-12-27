@extends('admin.master')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- News
@endsection


@section('css')





@endsection



@section('content')
    <div id="jqueryvalidation" class="section">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="col s12 m12 l12">
                    <div class="pageNameDiv">
                        <h3>{{$data['pageTitle']}}</h3>
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




                <div class="col s12 m12 l12">
                    <a href="#modal1" class="waves-effect waves-light modal-trigger btn right">Add New Year</a>
                </div>
                {{--{{route('add.timeTable')}}--}}
                <form class="achievementsForm right-alert" id="achievementsForm" method="post" action="{{route('save.year.batch')}}">
                    <div id="modal1" class="modal">

                        <div class="modal-content">
                            <div class="row">
                                <div class="input-field col s12">
                                    <label></label>
                                    <select name="forYear">
                                        <option value="" disabled selected>For Year</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                    <div class="error">{{ $errors->first('forYear') }}</div>
                                </div>
                                <div class="input-field col s12">
                                    <label for="title">Year Group Name*</label>
                                    <input id="title" name="yearGroupName" type="text" data-error=".error">
                                    <div class="error">{{ $errors->first('yearGroupName') }}</div>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="_token" value="{{Session('_token')}}">
                            <button class="btn waves-effect waves-light right submit" type="submit" name="action">Submit
                                <i class="mdi-content-send right"></i>
                            </button>
                            <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Close</a>

                        </div>
                    </div>
                </form>



                <div class="col s12 m12 l12">
                    <div id="basic-card" class="section">

                        @foreach($data['scheduleData']->chunk(2) as $scheduleAll)
                            <div class="row">

                                @foreach($scheduleAll as $schedule)
                                    <div class="col s12 m6 l6">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <div class="card  light-blue">
                                                    <div class="card-content white-text">
                                                        <span class="card-title">{{$schedule->batch_year}}</span>
                                                        <p>{{$schedule->batch_year_name}}</p>
                                                    </div>
                                                    <div class="card-action">
                                                        <a href="{{route('view.schedule.table',$schedule->batch_year)}}" class="lime-text text-accent-1">View All</a>
                                                        <a href="{{route('add.timeTable',$schedule->batch_year)}}" class="lime-text text-accent-1">Add New Batch</a>
                                                        <a href="#" class="red-text text-accent-1">Delete Batch</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="divider"></div>

    {{--@include('admin.middleContent')--}}
@endsection




@section('script')

@endsection
