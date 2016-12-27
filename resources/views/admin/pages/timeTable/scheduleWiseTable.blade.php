@extends('admin.master')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- Time Table
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
                                        <th>Day One</th>
                                        <th>Day One Time</th>
                                        <th>Day Two</th>
                                        <th>Day Two Time</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php $i=0;?>
                                    @foreach($data['dataSortedTable'] as $dataToSort)
                                        <?php $i++;?>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$dataToSort->faculty}}</td>
                                        <td>{{$dataToSort->batch_name}}</td>
                                        <td>{{$dataToSort->subject}}</td>
                                        <td>{{$dataToSort->class}}</td>
                                        <td>{{$dataToSort->day_one}}</td>
                                        <td>{{$dataToSort->day_one_time}}</td>
                                        <td>{{$dataToSort->day_two}}</td>
                                        <td>{{$dataToSort->day_two_time}}</td>
                                        <td><a href="{{route('delete.schedule.one',$dataToSort->time_table_slug)}}" class="somePadding"><i class="fa fa-trash"></i></a>
                                            <a href="{{route('edit.schedule.one',$dataToSort->time_table_slug)}}"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="center-align">
                        {{--{{$tableData->links}}--}}
                    </div>

            </div>
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