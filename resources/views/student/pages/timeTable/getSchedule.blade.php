@extends('student.master')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- Student Dashboard
@endsection


@section('css')


    <link rel="stylesheet" href="{{url('resources/assets/css/jquery.dataTables.min.css')}}">



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
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <div class="row">
                            <form class="achievementsForm right-alert col s12" id="achievementsForm" method="post" action="{{route('get.schedule.table')}}"enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s4">
                                        <select name="selectedClass">
                                            <option value="" disabled selected>@if(old('selectedClass')){{old('selectedClass')}} @else Select Class @endif</option>
                                            <option value="Eleven">Eleven</option>
                                            <option value="Twelve">Twelve</option>
                                            <option value="Target">Target</option>
                                        </select>
                                        <label>Select Class</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <select name="selectedSubject">
                                            <option value="" disabled selected>@if(old('selectedSubject')){{old('selectedSubject')}} @else Select Subject @endif</option>
                                            <option value="Physics">Physics</option>
                                            <option value="Chemistry">Chemistry</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="Biology">Biology</option>
                                        </select>
                                        <label>Select Subject</label>
                                    </div>
                                    <div class="input-field col s3">
                                        <input type="hidden" name="_token" value="{{Session('_token')}}">

                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if(Session::has('dataForTable'))
            <div class="col s12 m12 l12">
                    <div id="table-datatables">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Facuty</th>
                                        <th>Batch Name</th>
                                        <th>Subject</th>
                                        <th>Class</th>
                                        <th>Day 1</th>
                                        <th>Day 1 Time</th>
                                        <th>Day 2</th>
                                        <th>Day 2 Time</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=0;?>
                                    @foreach(Session::get('dataTimeTable') as $timeTable)
                                        <?php $i++;?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$timeTable->faculty}}</td>
                                            <td>{{$timeTable->batch_name}}</td>
                                            <td>{{$timeTable->subject}}</td>
                                            <td>{{$timeTable->class}}</td>
                                            <td>{{$timeTable->day_one}}</td>
                                            <td>{{$timeTable->day_one_time}}</td>
                                            <td>{{$timeTable->day_two}}</td>
                                            <td>{{$timeTable->day_two_time}}</td>
                                            <td>
                                                <p>
                                                <form action="{{route('save.batch.response',[$timeTable->schedule_id,$timeTable->subject])}}" method="post">
                                                    <input type="checkbox" id="test{{$i}}" name="selectMe" onChange="this.form.submit()"/>
                                                    <label for="test{{$i}}"></label>
                                                    <input type="hidden" name="_token" value="{{Session('_token')}}">
                                                </form>
                                                </p>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>
            @endif

        </div>
    </div>


@endsection




@section('script')

    <script src="{{url('resources/assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('resources/assets/js/data-tables-script.js')}}"></script>


    <script type="text/javascript">
        /*Show entries on click hide*/
        $(document).ready(function(){
            $(".dropdown-content.select-dropdown li").on( "click", function() {
                var that = this;
                setTimeout(function(){
                    if($(that).parent().hasClass('active')){
                        $(that).parent().removeClass('active');
                        $(that).parent().hide();
                    }
                },100);
            });
        });

    </script>

@endsection
