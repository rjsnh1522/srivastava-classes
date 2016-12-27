@extends('visitors.master')

@section('meta')
@endsection

@section('title')
@endsection

@section('css')
@endsection

@section('content')
    <section id="about_parallax_01" class="section-white page-title-wrapper" data-stellar-background-ratio="1"
             data-stellar-offset-parent="true">
        <div class="container">
            <div class="relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <p>Results So far</p>
                        </div><!-- end title -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end relative -->
        </div><!-- end container -->
    </section><!-- end section-white -->


    {{--results tab start--}}
    {{--<section class="section-white resultsTabSection">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                    {{--<div class="tagcloud alignRightTabs">--}}
                        {{--<a href="#" class="active">Engineering</a>--}}
                        {{--<a href="#">Medical</a>--}}
                        {{--<a href="#">Some More</a>--}}
                    {{--</div>--}}
                {{--</div><!-- end col -->--}}

            {{--</div><!-- end row -->--}}
        {{--</div><!-- end container -->--}}
    {{--</section>--}}
    {{--results tab end--}}


    <section class="section-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="pull-right">
                        {{$data['allresults']->links()}}
                    </div>
                </div>
                <div id="sidebar" class="col-md-2 col-lg-2 col-sm-12">

                    <div class="widget">
                        <div class="widget-title">
                            <h4>Categories</h4>
                            <hr>
                        </div><!-- end widget-title -->
                        <div class="cat-widget resultsYear">
                            <ul>
                                <li><a href="{{route('show.result.by.year','all')}}" class="active">All</a>

                                <li><a href="{{route('show.result.by.year',2017)}}" class="active">2017</a>
                                </li>
                                <li><a href="{{route('show.result.by.year',2016)}}">2016</a>
                                </li>
                                <li><a href="{{route('show.result.by.year',2015)}}">2015</a>
                                </li>
                                <li><a href="{{route('show.result.by.year',2014)}}">2014</a>
                                </li>
                                <li><a href="{{route('show.result.by.year','old')}}">before 2014</a>
                                </li>
                            </ul>
                        </div><!-- end latest-course -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div id="content" class="col-md-10 col-lg-10 col-sm-12">

                    @foreach($data['allresults']->chunk(4) as $results)
                    <div class="row resultImageRow">
                        @foreach($results as $result)
                        <div class="col-md-3 col-lg3 col-sm-6 col-xs-12">
                            <div class="course-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;">
                                <div class="owl-image">
                                    <a href="#" title="">
                                        <img src="{{url('resources/assets/images/results',$result->img_name)}}" alt="" class="img-responsive img-circle">
                                    </a>
                                </div><!-- end image -->
                                <div class="course-desc textInCenter">
                                    <h5><a href="#" title="">{{$result->student_name}}</a> </h5>
                                    <p>{{$result->rank}}</p>
                                    <p><span class="new removeNew badge">{{$result->exam_name}}</span>  {{$result->year}}</p>
                                </div><!-- end desc -->
                            </div><!-- end item -->
                        </div>
                            @endforeach

                    </div>
                        @endforeach

                </div><!-- end col -->


            </div><!-- end row -->
        </div><!-- end container -->
    </section>




@endsection




@section('script')
@endsection