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

                <div class="col s12 m12 l6">
                    <div class="card-panel">
                        <h4 class="header2">Achievements Form</h4>
                        <div class="row">
                            <form class="achievementsForm right-alert" id="achievementsForm" method="post"
                                  action="{{route('post.edited.achievement',$data['achievements']->ach_id)}}" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="title">Title*</label>
                                        <input id="title" name="title" type="text" data-error=".error"
                                               value="{{$data['achievements']->title}}">
                                        <div class="error">{{ $errors->first('title') }}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label for="dateOfachievement">Date*</label>
                                        <input type="date" class="datepicker" name="dateOfachievement" data-error=".error"
                                               value="{{date('j F , Y',($data['achievements']->ach_date))}}">
                                        <div class="error">{{ $errors->first('dateOfachievement') }}</div>
                                    </div>

                                    {{--<div class="input-field col s12">--}}
                                    {{--<div class="file-field input-field">--}}
                                    {{--<div class="btn">--}}
                                    {{--<span>Image</span>--}}
                                    {{--<input type="file">--}}
                                    {{--</div>--}}
                                    {{--<div class="file-path-wrapper">--}}
                                    {{--<input class="file-path validate" type="text" name="achievementsImage">--}}
                                    {{--</div>--}}

                                    {{--</div>--}}
                                    {{--<div class="errorTxt5"></div>--}}
                                    {{--</div>--}}

                                    <div class="input-field col s12">
                                        <textarea id="content" name="content" class="materialize-textarea validate" data-error=".error">{{$data['achievements']->content}}</textarea>
                                        <label for="content">Content *</label>
                                        <div class="error">{{ $errors->first('content') }}</div>
                                    </div>
                                    <div class="input-field col s12">
                                        <input type="hidden" name="_token" value="{{Session('_token')}}">
                                        <input type="hidden" name="ach_id" value="{{$data['achievements']->ach_id}}">

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
                    <div class="center-align">
                        {{$achievements->links()}}
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
            selectYears: 20,
            format: 'dd mmmm,yyyy',// Creates a dropdown of 15 years to control year
        });
    </script>
    <script src="{{url('resources/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('resources/assets/js/formValidation.js')}}"></script>
@endsection

