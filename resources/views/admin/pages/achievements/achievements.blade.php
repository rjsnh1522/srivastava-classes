@extends('admin.master')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- Achievements
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
                                <p>DANGER : {{Session::get('fail')}}</p>
                            </div>
                            <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                    @endif



                <div class="col s12 m12 l12">
                        <a href="{{route('get.add.achievement')}}" class="waves-effect waves-light btn right">Add Achievements</a>
                </div>
                <div class="col s12 m12 l12">
                    <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
                        @foreach($achievements as $achievement)
                            <li>
                                <div class="collapsible-header active forSmallIcon">
                                    <i class="fa fa-trophy"></i>{{substr($achievement->title,0,30)}}{{strlen($achievement->title)>30 ? "...":""}}
                                    <a href="{{route('post.delete.achievements',$achievement->achie_slug)}}"
                                       class="right">
                                        <i class="fa fa-trash fa-fw"></i>
                                    </a>
                                    <a href="{{route('get.edit.achievements',$achievement->achie_slug)}}" class="right">
                                        <i class="fa fa-pencil-square-o fa-fw"></i>
                                    </a>
                                </div>
                                <div class="collapsible-body allPara" style="">
                                    <p class="">{{date('j F , Y',$achievement->ach_date)}}</p>
                                    <p>{{$achievement->content}}</p>
                                    <p class="text-right">

                                    <span class="editSymbol">

                                    </span>
                                    </p>

                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
                <div class="center-align">
                    {{$achievements->links()}}
                </div>

            </div>
        </div>
    </div>
    <div class="divider"></div>

    {{--@include('admin.middleContent')--}}
@endsection




@section('script')

@endsection
