@extends('admin.master')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- Results
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
                                <p>DANGER : {{Session::get('fail')}}</p>
                            </div>
                            <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                @endif


                <div class="col s12 m12 l12">
                    <a href="{{route('get.add.results')}}" class="waves-effect waves-light btn right">Add New
                        Result</a>
                </div>
                <div class="col s12 m12 l12">
                    <div class="somePaddingTopBttom">
                        <div id="table-datatables">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th data-field="no">#</th>
                                            <th data-field="name">Name</th>
                                            <th data-field="examName">Exam Name</th>
                                            <th data-field="stream">Stream</th>
                                            <th data-field="year">Year</th>
                                            <th data-field="rank">Rank</th>
                                            <th data-field="image">Image</th>
                                            <th data-field="action">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0;?>
                                        @foreach($data['allResults'] as $result)

                                            <tr>
                                                <?php $i++;?>
                                                <td>{{$i}}</td>
                                                <td>{{$result->student_name}}</td>
                                                <td>{{$result->exam_name}}</td>
                                                <td>{{$result->stream}}</td>
                                                <td>{{$result->year}}</td>
                                                <td>{{$result->rank}}</td>
                                                <td>
                                                    <img src="{{url('resources/assets/images/results/'.$result->img_name)}}"
                                                         alt=""
                                                         class="studentsImg"></td>
                                                <td><a href="{{route('get.delete.student.result',$result->result_id)}}"
                                                       class="somePadding"><i class="fa fa-trash"></i></a>
                                                    <a href="{{route('get.edit.student.result',$result->result_id)}}"
                                                       class="somePadding"><i class="fa fa-edit"></i></a>
                                                </td>

                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center-align">

                </div>

            </div>
        </div>
    </div>
    <div class="divider"></div>

    {{--@include('admin.middleContent')--}}
@endsection




@section('script')

    <script src="{{url('resources/assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('resources/assets/js/data-tables-script.js')}}"></script>


    <script type="text/javascript">
        /*Show entries on click hide*/
        $(document).ready(function () {
            $(".dropdown-content.select-dropdown li").on("click", function () {
                var that = this;
                setTimeout(function () {
                    if ($(that).parent().hasClass('active')) {
                        $(that).parent().removeClass('active');
                        $(that).parent().hide();
                    }
                }, 100);
            });
        });

    </script>


@endsection
