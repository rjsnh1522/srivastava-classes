@extends('admin.master')


@section('meta')
@endsection

@section('title')
    Srivastava Classes- Edit  News
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
                            <form class="achievementsForm right-alert" id="addNewsForm" method="post" action="{{route('post.edited.news',$data['allNews']['news_slug'])}}" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="title">Title*</label>
                                        <input id="title" name="title" type="text" data-error=".error" value="{{$data['allNews']['news_title']}}">
                                        <div class="error"></div>

                                    </div>

                                    <div class="input-field col s12">
                                        <label for="title">Paper Name*</label>
                                        <input id="paperName" name="paperName" type="text" data-error=".error" value="{{$data['allNews']['which_paper']}}">
                                        <div class="error"></div>

                                    </div>

                                    <div class="input-field col s12">
                                        <label for="dateFeatured">Date *</label>
                                        <input type="date" class="datepicker" name="dateFeatured" data-error=".error" value="{{date('j F , Y',($data['allNews']['news_date']))}}">
                                        <div class="error"></div>
                                    </div>

                                    <div class="input-field col s12">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>Image</span>
                                                <input type="file" name="newsImage" value="{{$data['allNews']['news_image_name']}}" id="fileUpload" data-error=".error">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" value="{{$data['allNews']['news_image_name']}}" name="newsImage">
                                            </div>

                                        </div>
                                        <div class="error">{{$errors->first('newsImage')}}</div>
                                    </div>

                                    <div class="input-field col s12">
                                        <textarea id="content" name="content" class="materialize-textarea validate" data-error=".error">{{$data['allNews']['news_content']}}</textarea>
                                        <label for="content">Content *</label>
                                        <div class="error">{{$errors->first('content')}}</div>
                                    </div>
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
                        {{--<img src="{{($data['allNews']->ach_date)}}" alt="">--}}
                        <img src="{{url('resources/assets/images/news/'.$data['allNews']['news_image_name'])}}" alt="" class="thumb-image">

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
            format:'dd mmmm,yyyy',// Creates a dropdown of 15 years to control year
        });
    </script>
    <script src="{{url('resources/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('resources/assets/js/formValidation.js')}}"></script>
@endsection

