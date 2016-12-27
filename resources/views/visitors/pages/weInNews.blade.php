@extends('visitors.master')

@section('meta')
@endsection

@section('title')
@endsection

@section('css')
    <link rel="stylesheet" href="{{url('resources/assets/visitors/css/jquery.fancybox.css')}}">

    <style>


    </style>
@endsection

@section('content')
    <section id="about_parallax_01" class="section-white page-title-wrapper" data-stellar-background-ratio="1"
             data-stellar-offset-parent="true">
        <div class="container">
            <div class="relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <p>We In News</p>
                        </div><!-- end title -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end relative -->
        </div><!-- end container -->
    </section><!-- end section-white -->


    <section class="section-white">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="theSmallWrapper">
                    @foreach($data['allNews']->chunk(3) as $newsAll)
                        <div class="row">
                            <div class="theFlexBox">


                                @foreach($newsAll as $news)
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 width30">
                                        <div class="thumbnailAndText">
                                        <div class="imageWrap">
                                            <a class="fancybox"
                                               href="{{url($news->news_image_url.$news->news_image_name)}}"
                                               data-fancybox-group="gallery" title="{{$news->news_title}}">
                                                <img src="{{url($news->news_image_url.$news->news_image_name)}}" alt="{{$news->news_title}}"
                                                     class="img-responsive"/>
                                            </a>
                                        </div>
                                            <p class="news title pad0">{{$news->news_title}}</p>
                                            <p class="onDate pad0">{{date('j F , Y',$news->news_date)}}</p>
                                        </div>

                                    </div>

                                @endforeach
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 red">
                <div class="paginationBtn">
                    {{$data['allNews']->links()}}
                </div>

                </div>
        </div><!-- end container -->
    </section>

@endsection




@section('script')
    <script src="{{url('resources/assets/visitors/js/jquery.fancybox.js')}}"></script>

    <script>
        $(document).ready(function () {

            var fancyboxConfig = {
                'padding': 0,
                'margin': 20,
                'titleShow': false,
            };
            $('.fancybox').fancybox(fancyboxConfig);

        });
    </script>
@endsection