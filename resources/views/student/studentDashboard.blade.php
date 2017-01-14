@extends('student.master')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- Student Dashboard
@endsection


@section('css')





@endsection



@section('content')

    <section id="content">

        <!--start container-->
        <div class="container">

            <!--card stats start-->
            <div id="card-stats">
                <div class="row">
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content  green white-text">
                                <p class="card-stats-title"><i class="mdi-social-group-add"></i></p>
                                <h4 class="card-stats-number"></h4>
                                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i><span
                                            class="green-text text-lighten-5"></span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content pink lighten-1 white-text">
                                <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i></p>
                                <h4 class="card-stats-number"></h4>
                                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i><span
                                            class="deep-purple-text text-lighten-5"></span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content blue-grey white-text">
                                <p class="card-stats-title"><i class="mdi-action-trending-up"></i></p>
                                <h4 class="card-stats-number"></h4>
                                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i><span
                                            class="blue-grey-text text-lighten-5"></span>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content purple white-text">
                                <p class="card-stats-title"><i class="mdi-editor-attach-money"></i></p>
                                <h4 class="card-stats-number"></h4>
                                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i><span
                                            class="purple-text text-lighten-5"></span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--card stats end-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!--card widgets start-->
            <div id="card-widgets">
                <div id="work-collections">
                    <div class="row">
                        <div class="col s12 m12 l6">
                            <ul id="projects-collection" class="collection">
                                <li class="collection-item avatar">
                                    <i class="circle light-blue darken-2 mdi-editor-insert-invitation"></i>
                                    <span class="collection-header">Time Table</span>
                                    <p>Your selected batches for class {{ $data['studentInfo']->class}}</p>
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
                                                <p class="collections-content"><a href="{{route('get.time.table')}}" class="pink-text">Click here to select your Batches</a></p>
                                            </div>
                                        </div>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>


            </div>
            <!--end container-->
        </div>
    </section>



@endsection




@section('script')
@endsection























